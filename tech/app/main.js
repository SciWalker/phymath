async function loadModel() {
    const session = await ort.InferenceSession.create('squeezenet1.1-7.onnx');
    return session;
}
// Global variable to hold the mapping
let classMapping = {};

// Function to load and parse the mapping file
async function loadClassMapping() {
    const response = await fetch('mapping.txt');
    const text = await response.text();
    text.split('\n').forEach(line => {
        const parts = line.split(':');
        const index = parts[0].trim();
        const name = parts[1].trim().replace(/(^"|"$)/g, ''); // Remove leading and trailing quotes
        classMapping[index] = name;
    });
}
// Call this function when the page loads
window.onload = () => {
    loadClassMapping();
};
function getImageDataFromCanvas(image, width, height) {
    const canvas = document.createElement('canvas');
    canvas.width = width;
    canvas.height = height;
    const ctx = canvas.getContext('2d');
    ctx.drawImage(image, 0, 0, width, height);
    return ctx.getImageData(0, 0, width, height);
}

function preprocessImage(image) {
    const width = 224; // SqueezeNet expected width
    const height = 224; // SqueezeNet expected height
    const imageData = getImageDataFromCanvas(image, width, height);
    
    // Assuming imageData is in RGBA format, we only take the RGB values.
    const data = new Float32Array(width * height * 3);
    for (let i = 0; i < data.length / 3; i++) {
        data[i * 3] = imageData.data[i * 4] / 255;     // R
        data[i * 3 + 1] = imageData.data[i * 4 + 1] / 255; // G
        data[i * 3 + 2] = imageData.data[i * 4 + 2] / 255; // B
    }
    console.log("here")
    // Normalize the image data
    const mean = [0.485, 0.456, 0.406];
    const std = [0.229, 0.224, 0.225];
    for (let i = 0; i < data.length / 3; i++) {
        for (let channel = 0; channel < 3; channel++) {
            data[i * 3 + channel] = (data[i * 3 + channel] - mean[channel]) / std[channel];
        }
    }

    // Convert to tensor
    return new ort.Tensor('float32', data, [1, 3, height, width]);
}
async function runInference(session, inputTensor) {
    const outputMap = await session.run({ data: inputTensor });
    const outputTensor = outputMap['squeezenet0_flatten0_reshape0'];
    const outputData = outputTensor.data;
    
    let maxIndex = -1;
    let maxScore = -Infinity;
    for (let i = 0; i < outputData.length; i++) {
        if (outputData[i] > maxScore) {
            maxScore = outputData[i];
            maxIndex = i;
        }
    }

    // Use the mapping to get the human-readable name
    const className = classMapping[maxIndex.toString()] || 'Unknown';

    return { index: maxIndex, score: maxScore, name: className };
}

document.getElementById('imageUpload').addEventListener('change', async (event) => {
    const file = event.target.files[0];
    const image = new Image();
    image.src = URL.createObjectURL(file);
    image.onload = async () => {
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');
        ctx.drawImage(image, 0, 0, canvas.width, canvas.height);

        const session = await loadModel();
        const inputTensor = preprocessImage(image);
        const results = await runInference(session, inputTensor);

        // Draw results on the canvas (example: display detected class)
        ctx.font = '20px Arial';
        ctx.fillStyle = 'red';
        ctx.fillText(`Detected: ${results.name} (Score: ${results.score.toFixed(2)})`, 10, 25);
    };
});
