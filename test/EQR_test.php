<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload Form</title>
</head>
<body>
    <form id="form1"  method="post" enctype="multipart/form-data">
        <h2>Upload File</h2>
        <label for="fileSelect">Filename:</label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" name="submit" onclick="uploadFile()" value="Upload" >
        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
    </form>
    

<script>
function toBase64(file) {
   var reader = new FileReader();
   reader.readAsDataURL(file);
   reader.onload = function () {
     console.log(reader.result);
   };
   reader.onerror = function (error) {
     console.log('Error: ', error);
   };
}    
async function uploadFile() {
    var blobFile=document.getElementById("form1").Upload;
    //var blobFile = $('#form1').files[0];
    var formData = new FormData();
    formData.append("fileToUpload", blobFile);
    console.log("test");
    var test=toBase64(blobFile);
    console.log(test)
}

    
</script>



</body>
</html>