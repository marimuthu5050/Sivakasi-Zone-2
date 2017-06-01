<?php
$target_dir = "Upload/";
$target_file = $target_dir . basename($_FILES["upload"]["name"]);
$uploadOk = 1;
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
} 
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
        header("Location: success.html");
        die();
    } else {
        header("Location : fail.html");
    }
}
?>