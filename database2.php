<?php

    include 'database2.php';

    $sel="SELECT * FROM `sign_up`";
    $result=mysqli_query($conn,$sel);

    if($result -> num_rows  > 0){
        while($row = $result -> fetch_assoc())
            echo $row['ID']." ".$row['Name']."<br>";
    }
?>
