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
    
    
    facingMode: {
      exact: 'environment'
    } }, audio: false };// Define constants
const cameraView = document.querySelector("#camerarear--view"),
    cameraOutput = document.querySelector("#camerarear--output"),
    cameraSensor = document.querySelector("#camerarear--sensor"),
    cameraTrigger = document.querySelector("#camerarear--trigger")// Access the device camera and stream to cameraView
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
};// Start the video stream when the window loads
window.addEventListener("load", cameraStart, false);