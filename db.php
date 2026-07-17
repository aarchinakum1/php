?php
    $lost = "localhost";
    $user = "root";
    $pass = "";
    $database = "sign up";

    $conn = mysqli_connect($lost,$user,$pass,$database,3307);

    if(!$conn){
        echo mysqli_connect_error();
    }

?>