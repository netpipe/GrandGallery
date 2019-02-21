<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//check valid email

//$_FILES[""]


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
       // echo "File is not an image.";
        $uploadOk = 1;  // set to 1 because were uploading video too
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 11500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "webm" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?> 




<?php
/*
define("UPLOAD_DIR", "./");
define("ERROR", "STOP! Error time! I have no idea what caused this." )
// The upload form
if ($_SERVER["REQUEST_METHOD"] == "GET") {
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
 <input type="file" name="myFile"/>
 <br/>
 <input type="submit" value="Upload"/>
</form>

<?php
}
// File upload action
else if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];
    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo $ERROR;
        exit;
    }
    // Check the filename is safe
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
    // Grab file from the temp dir
    $success = move_uploaded_file($myFile["tmp_name"], UPLOAD_DIR . $name);
    if (!$success) {
        echo $ERROR;
        exit;
    }
    echo "Uploaded file! <a href=$name>Click</a> to execute/view ";
}

<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
  */
?> 
