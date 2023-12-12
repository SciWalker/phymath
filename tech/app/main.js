async function loadModel() {
    const session = await ort.InferenceSession.create('squeezenet1.1-7.onnx');
    // const session = await ort.InferenceSession.create('model.onnx', { executionProviders: ['webgl'], graphOptimizationLevel: 'all' });
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
    imageData.data=data;
    // Normalize the image data
    const mean = [0.485, 0.456, 0.406];
    const std = [0.229, 0.224, 0.225];
    for (let i = 0; i < data.length / 3; i++) {
        for (let channel = 0; channel < 3; channel++) {
            data[i * 3 + channel] = (data[i * 3 + channel] - mean[channel]) / std[channel];
        }
    }

    // Convert to tensor
    return { tensor: new ort.Tensor('float32', data, [1, 3, height, width]), imageData: imageData };
}
function imageDataToTensor(image, dims) {
    // Get the context and the image data from the canvas
    const ctx = canvas.getContext('2d');
    const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);

    // Extract the R, G, and B values
    const data = imageData.data;
    // var imageBufferData = image.bitmap.data;
    console.log("here")
    const [redArray, greenArray, blueArray] = new Array(3).fill([]);
    // 2. Loop through the image buffer and extract the R, G, and B channels
    for (let i = 0; i < data.length; i += 4) {
        redArray.push(data[i]);
        greenArray.push(data[i + 1]);
        blueArray.push(data[i + 2]);
    }

    // Concatenate and normalize the RGB values
    const transposedData = redArray.concat(greenArray).concat(blueArray);
    const float32Data = new Float32Array(dims[1] * dims[2] * dims[3]);
    for (let i = 0; i < transposedData.length; i++) {
        float32Data[i] = transposedData[i] / 255.0;
    }

    // Create the tensor
    const inputTensor = new ort.Tensor('float32', float32Data, dims);
    return { tensor:inputTensor,imageData: imageData };
}
function displayPreprocessedImage(imageData) {
    const canvas = document.getElementById('preprocessedCanvas');
    const ctx = canvas.getContext('2d');

    // Create a temporary canvas to manipulate imageData
    const tempCanvas = document.createElement('canvas');
    tempCanvas.width = imageData.width;
    tempCanvas.height = imageData.height;
    const tempCtx = tempCanvas.getContext('2d');
    tempCtx.putImageData(imageData, 0, 0);

    // Draw the preprocessed image on the preprocessed canvas
    ctx.drawImage(tempCanvas, 0, 0, canvas.width, canvas.height);
}

async function runInference(session, inputTensor,model_type) {
    let outputTensor;
    if (model_type=="efficientnet"){
    const outputMap = await session.run({ x: inputTensor });
    outputTensor = outputMap['1278'];
}
    else{
        const outputMap = await session.run({ data_0: inputTensor });
        console.log(outputMap)
    outputTensor = outputMap['softmaxout_1'];
    }
    
    const outputData = outputTensor.data;
    
    let maxIndex = -1;
    let maxScore = 0;
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
        const model_type ="squeezenet"
        const session = await loadModel();
        const inputTensor = imageDataToTensor(image,[1, 3, 224, 224]);
        // const inputTensor = preprocessImage(image);
        const results = await runInference(session, inputTensor.tensor, model_type);
        displayPreprocessedImage(inputTensor.imageData);
        // Draw results on the canvas (example: display detected class)
        ctx.font = '20px Arial';
        ctx.fillStyle = 'red';
        ctx.fillText(`Detected: ${results.name} (Score: ${results.score.toFixed(2)})`, 10, 25);
    };
});
