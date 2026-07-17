<?php
    $db_host = 'localhost';
    $dbuser = 'root';
    $dbpass = 'aarchinakum';
    $dbname = 'php';

    $conn=mysqli_connect($db_host,$dbuser,$dbpass,$dbname);

    if(!$conn)
        {
        die("database connection faild".mysqli_connect_error());
    }
?>