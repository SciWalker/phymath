// Set constraints for the video stream
var constraints = { video: { 
    width: {
      min: 1280,
      ideal: 1920,
      max: 2560,
    },    
        height: {
      min: 720,
      ideal: 1080,
      max: 1440
    },
    facingMode: "user" }, audio: false };// Define constants
const cameraView = document.querySelector("#camerafront--view"),
    cameraOutput = document.querySelector("#camerafront--output"),
    cameraSensor = document.querySelector("#camerafront--sensor"),
    cameraTrigger = document.querySelector("#camerafront--trigger")// Access the device camera and stream to cameraView
function cameraStart() {
    navigator.mediaDevices
        .getUserMedia(constraints)
        .then(function(stream) {
        track = stream.getTracks()[0];
        cameraView.srcObject = stream;
    })
    .catch(function(error) {
        console.error("Oops. Something is broken.", error);
    });
}// Take a picture when cameraTrigger is tapped
cameraTrigger.onclick = function() {
    cameraSensor.width = cameraView.videoWidth;
    cameraSensor.height = cameraView.videoHeight;
    cameraSensor.getContext("2d").drawImage(cameraView, 0, 0);
    cameraOutput.src = cameraSensor.toDataURL("image/webp");
    cameraOutput.classList.add("taken");
    console.log('Resolution');
    console.log('Width:'+cameraSensor.width);
    console.log('Height:'+cameraSensor.height);
};// Start the video stream when the window loads
window.addEventListener("load", cameraStart, false);