<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_COOKIE['username']))
{
    echo "Username: " . $_COOKIE['username'];
}
else
{
    echo "Cookie not found.";
}
?>

</body>
</html>