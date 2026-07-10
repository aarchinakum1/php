<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>

<h2>Upload Image</h2>

<form action="upload.php" method="post" enctype="multipart/form-data">

    Select Image:
    <input type="file" name="image" required><br><br>

    <input type="submit" value="Upload Image">

</form>

</body>
</html>