<!DOCTYPE html>
<html>
<body>

<h2>Login Form</h2>

<form action="" method="post">
    User Name: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    Confirm Password: <input type="password" name="conformpassword"><br><br>
    Email: <input type="text" name="email"><br><br>
    Phone No: <input type="number" name="phoneno"><br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>

<?php
include 'database.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["username"];
    $pass = $_POST["password"];
    $confirm = $_POST["conformpassword"];
    $email = $_POST["email"];
    $phone_no = $_POST["phoneno"];

    if($pass == $confirm)
    {
        $sql = "INSERT INTO sign_up(`Name`,`Password`,`E_mail`,`Phone_No`)
                VALUES('$name','$pass','$email','$phone_no')";
        mysqli_query($conn,$sql);
    }
    else
    {
        echo "Password and Confirm Password do not match.";
    }
}
?>