<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload Form</title>
</head>
<body>
        <div id="result"></div>
    <form action="EQR.php" method="post" enctype="multipart/form-data">
        <h2>Upload File</h2>
        <label for="fileSelect">Filename:</label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" name="submit" value="Upload" onclick="toDataURL">
        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
    </form>
    
<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}


?>    



<?php
if($_FILES["photo"]["error"] > 0){
    echo "Error: " . $_FILES["photo"]["error"] . "<br>";
} else{
    echo "File Name: " . $_FILES["photo"]["name"] . "<br>";
    echo "File Type: " . $_FILES["photo"]["type"] . "<br>";
    echo "File Size: " . ($_FILES["photo"]["size"] / 1024) . " KB<br>";
    echo "Stored in: " . $_FILES["photo"]["tmp_name"];
}
?>
    <script type="text/javascript">
        function toDataURL(src, callback) {
            var xhttp = new XMLHttpRequest();

            xhttp.onload = function() {
                var fileReader = new FileReader();
                fileReader.onloadend = function() {
                    callback(fileReader.result);
                }
                fileReader.readAsDataURL(xhttp.response);
            };

            xhttp.responseType = 'blob';
            xhttp.open('GET', src, true);
            xhttp.send();
        }

        toDataURL('upload/backgroundImage.jpg', function(dataURL) {
            // do something with dataURL
            document.getElementById('result').innerHTML = dataURL;
        });

    </script>

</body>
</html>