const img_input = document.getElementById('input_image');
const file_input = document.getElementById('file_input');
var confirm_btn = document.getElementById("confirmPost");
var output_url=null
var retrieveImage= document.getElementById("retrieve")
var person_name=document.getElementById("Name")
var person_gender=document.getElementById("Gender")
var face_detected=document.getElementById("Face_detected")
var face_coords=document.getElementById("Face_coordinates")
let utils = new Utils('errorMessage');
let faceCascadeFile = 'haarcascade_frontalface_default.xml';
dict = {  "num_face" : 0,
              "coordinate_list" : []};

document.addEventListener('DOMContentLoaded', function () {
    utils.createFileFromUrl(faceCascadeFile, faceCascadeFile, (e) => {
        console.log("ready");
    });
}, false);

//console.log(file_input)
file_input.addEventListener('change', (e) => {
    img_input.src = URL.createObjectURL(e.target.files[0]);
    getBase64(e.target.files[0]);
    console.log(output_url)
}, false);

img_input.onload = function () {
    retrieveImage.src="";
    person_name.innerText="Name:";
    person_gender.innerText="Gender: ";
    face_detected.innerText="Face_detected: ";
    face_coords.innerText="Face_coordinates: "; //to clear previous output

    let mat = cv.imread(img_input);
    //cv.cvtColor(mat,mat,cv.COLOR_BGR2GRAY, 0)
    console.log(img_input)
    detect_face(mat);
};

confirm_btn.addEventListener('click', (e)=>{
    console.log(dict)
    capture(output_url);
  },false)

  function detect_face(mat){
    let classifier = new cv.CascadeClassifier();
    console.log('detect_face func')
    classifier.load(faceCascadeFile);
    let faces = new cv.RectVector();
    try{
      classifier.detectMultiScale(mat, faces, 1.1, 3, 0);
      console.log('here');
      console.log(faces.size());
      
    }catch(err){
      console.log(err);
    }
  
    // Update the number of detected face
    dict["num_face"] = parseInt(faces.size());
    let temp_coordinate = [];
    for (let i = 0; i < faces.size(); ++i) {
  
      let face = faces.get(i);
      let point1 = new cv.Point(face.x, face.y);
      let point2 = new cv.Point(face.x + face.width, face.y + face.height);
      
      var x4 = face.x; // Bottom left "x4"
      var y4 = face.y; // Bottom left
      var x2 = face.x + face.width; // Upper right "x2"
      var y2 = face.y + face.height; // Upper right
      // Bottom right "x3"
      var x3 = x2;
      var y3 = y4;
      // upper left "x1"
      var x1 = x4;
      var y1 = y2;
  
      let rec_block = [];
  
      
      let upper_left = [x1,y1];
      let upper_right = [x2,y2];
      let bottom_right = [x3,y3];
      let bottom_left = [x4,y4];
      //python handles the other way, so start from bottom left ->right,upper left->right
      rec_block.push(bottom_left);
      rec_block.push(bottom_right);
      rec_block.push(upper_right);
      rec_block.push(upper_left);
      temp_coordinate.push(rec_block);
      
      dict["coordinate_list"] = temp_coordinate;
  
      cv.rectangle(mat, point1, point2, [255, 0, 0, 255]);
    }
    console.log(dict);
    
    if (faces.size() > 0){
      console.log("Face detected");
    }else{
      console.log("Face not detected");
    }
    console.log(mat)
    cv.imshow('output', mat) // in the callback, load the cascade from file 
  }

function getBase64(file) {
    var reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function () {
      //console.log(reader.result);
      var srcData = "" + reader.result;
      img_input.setAttribute('src', "");
      img_input.setAttribute('src', srcData);
      output_url = srcData;
      console.log("check"+output_url);
    };
    reader.onerror = function (error) {
      console.log(error)
    };
  }
  function capture(output_url) { 
    //console.log("output "+ output_url)   // capture from output_url which is from uploaded image
    document.getElementById("printresult").innerText = output_url;
    //console.log(document.getElementById("printresult").textContent);
    if (dict['num_face']>0){
      
    var data ="" + output_url;
//        axios.post('http://localhost:30001/ekyc_mock',{
          axios.post('https://e6cn7nsp5i.execute-api.us-east-1.amazonaws.com/upload-image',{
          "mode":"base64",
          "image": data,
          //'extension':".jpg",
          //"face_info":dict,
          "filepath":"",
          "filename":"test",
          "country":"my"
        })
            .then(function(res){
              console.log("API RESPONSE RECEIVED: ", res['data']['result']);
              window.alert("Response received");
              var info= res['data']['result']
              //const decodeBase64 = decodeFileBase64(fileBase64String)
              retrieveInfo(info);
            })
    
            .catch((err) => {
              console.log("AXIOS ERROR: ", err);
              window.alert("Response NOT received");
            })
          }
      else{
        var data ="" + output_url;
//        axios.post('http://localhost:30001/ekyc_mock',{
          axios.post('https://e6cn7nsp5i.execute-api.us-east-1.amazonaws.com/upload-image',{
            "mode":"base64",
            "image": data,
            //'extension':".jpg",
            //"face_info":dict,
            "filepath":"",
            "filename":"test",
            "country":"my"
          })
            .then(function(res){
              console.log("API RESPONSE RECEIVED: ", res['data']['result']);
              window.alert("Response received");
              var info= res['data']['result']
              //const decodeBase64 = decodeFileBase64(fileBase64String)
              retrieveInfo(info);
            })
    
            .catch((err) => {
              console.log("AXIOS ERROR: ", err);
              window.alert("Response NOT received");
            })
      }
  }

      function retrieveInfo(info){
        var person=JSON.parse(info);
        try {
          person_name.innerText=person_name.innerText.concat(" "+person.name);
          person_gender.innerText=person_gender.innerText.concat(" "+person.gender);
          face_detected.innerText=face_detected.innerText.concat(" "+person.face_info['num_face']);
          for (i = 0; i < 4; i++){
          face_coords.innerText=face_coords.innerText.concat(" ( "+person.face_info['coordinate_list'][0][i]+" ) ");
          }
        } catch (error) {
          console.log(error);
        }

        retrieveImage.src="data:image/jpeg;base64,"+person.b64_image;
      }

    

     