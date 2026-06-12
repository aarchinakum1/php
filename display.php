<?php
session_start();

if(isset($_POST['username']))
{
    $_SESSION['username'] = $_POST['username'];
}
?>

<!DOCTYPE html>
<html>
<head>
  
    <title>Display Username</title>
</head>
<body>

<h2>User Information</h2>

<?php
echo "Username: " . $_SESSION['username'];
?>

</body>
</html>