// Set constraints for the video stream

const ua = navigator.userAgent
const device = {
  iPad: /iPad/.test(ua),
  iPhone: /iPhone/.test(ua),
  Android4: /Android 4/.test(ua)
}
if(device.Android4) {console.log('android') } else {console.log('not android')}
var constraints = { video: { 
    width: {
      min: 1280,
      max: 5000
    },    
        height: {
      min: 720,
      max: 6000
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
    cameraOutput.src = cameraSensor.toDataURL("image/jpg");
    cameraOutput.classList.add("taken");
    document.getElementById("info").innerHTML=cameraSensor.width;
    
    console.log('Resolution');
    console.log('Width:'+cameraSensor.width);
    console.log('Height:'+cameraSensor.height);
};// Start the video stream when the window loads
window.addEventListener("load", cameraStart, false);