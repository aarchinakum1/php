<?php

if(isset($_COOKIE['visitor']))
{
    echo "Welcome Back! You are a Returning User.";
}
else
{
    setcookie("visitor","visited",time()+3600*24*30);
    echo "Welcome! You are a New User.";
}

?>