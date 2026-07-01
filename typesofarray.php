<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Program</title>
    <style>
        body{
            background-color: #d9f3ff; 
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h3{
            color: darkblue;
            background-color: #b3e5fc;
            padding: 8px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<?php

$days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

echo "<h3>Numeric Array (Days)</h3>";
foreach($days as $day){
    echo $day."<br>";
}

 
$months = array(
    "January"=>31,
    "February"=>28,
    "March"=>31,
    "April"=>30,
    "May"=>31,
    "June"=>30,
    "July"=>31,
    "August"=>31,
    "September"=>30,
    "October"=>31,
    "November"=>30,
    "December"=>31
);

echo "<h3>Associative Array (Months)</h3>";
foreach($months as $month=>$days){
    echo $month." => ".$days."<br>";
}


$laptops = array(
    "Dell"=>array("Model"=>"Inspiron 15","Price"=>55000),
    "HP"=>array("Model"=>"Pavilion 14","Price"=>60000)
);

echo "<h3>Multidimensional Array (Laptop Details)</h3>";
foreach($laptops as $company=>$details){
    echo "Company: ".$company."<br>";
    echo "Model: ".$details["Model"]."<br>";
    echo "Price: ₹".$details["Price"]."<br><br>";
}
?>

</body>
</html>