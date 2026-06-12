<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
    <h2>Welcome <?php echo $_SESSION['userid']; ?></h2>
    
    <p>Login Successful!</p>
</body>
</html>