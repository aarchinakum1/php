<!DOCTYPE html>
<html>
<head>
    <title>Sort Array</title>
</head>
<body>

<h2>Sort an Array Entered by User</h2>

<form method="post">
    Enter array elements (separated by space):<br><br>
    <input type="text" name="array" size="50" required>
    <br><br>
    <input type="submit" name="submit" value="Sort Array">
</form>

<?php
if (isset($_POST['submit'])) {
    $input = $_POST['array'];

    
    $arr = explode(" ", $input);

    
    sort($arr);

    echo "<h3>Sorted Array:</h3>";
    echo implode(" ", $arr);
}
?>

</body>
</html>