<?php
session_start();

$msg = "";

if(isset($_POST['login']))
{
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    if($userid == $_SESSION['userid'] &&
       $password == $_SESSION['password'])
    {
        header("Location: welcome.php");
        exit();
    }
    else
    {
        $msg = "Invalid User ID or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>

    <form method="post">
        User ID:
        <input type="text" name="userid" required><br><br>

        Password:
        <input type="password" name="password" required><br><br>

        <input type="submit" name="login" value="Login">
    </form>

    <p><?php echo $msg; ?></p>
</body>
</html>