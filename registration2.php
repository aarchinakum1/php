<?php

$conn=mysqli_connect("localhost","root","","college");

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

    $sql="INSERT INTO users(name,email,mobile)
          VALUES('$name','$email','$mobile')";

    if(mysqli_query($conn,$sql))
    {
        echo "Registration Successful";
    }
    else
    {
        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post">

Name:
<input type="text" name="name"><br><br>

Email:
<input type="email" name="email"><br><br>

Mobile:
<input type="text" name="mobile"><br><br>

<input type="submit" name="submit" value="Register">

</form>

</body>
</html>