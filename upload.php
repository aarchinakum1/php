<?php

$folder = "uploads/";

if (!is_dir($folder)) {
    mkdir($folder);
}

$fileName = basename($_FILES["image"]["name"]);
$targetFile = $folder . $fileName;

if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile))
{
    echo "<h2>Image Uploaded Successfully</h2>";

    echo "<b>Image Name :</b> " . pathinfo($fileName, PATHINFO_FILENAME) . "<br>";
    echo "<b>File Name :</b> " . $fileName . "<br>";
    echo "<b>File Type :</b> " . $_FILES["image"]["type"] . "<br>";
    echo "<b>File Size :</b> " . $_FILES["image"]["size"] . " Bytes<br><br>";

    echo "<img src='$targetFile' width='250'>";
}
else
{
    echo "Image Upload Failed.";
}

?>