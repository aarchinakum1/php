<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Functions</title>
</head>
<body>

<h2>PHP Array Functions</h2>

<?php

// 1. array_change_key_case()
echo "<h3>1. array_change_key_case()</h3>";

$student = array(
    "Name" => "Aarchi",
    "Course" => "MCA",
    "City" => "Ahmedabad"
);

echo "<b>Original Array:</b><br>";
print_r($student);

echo "<br><b>Lowercase Keys:</b><br>";
print_r(array_change_key_case($student, CASE_LOWER));

echo "<br><b>Uppercase Keys:</b><br>";
print_r(array_change_key_case($student, CASE_UPPER));

echo "<hr>";

// 2. array_count_values()
echo "<h3>2. array_count_values()</h3>";

$fruits = array("Apple", "Mango", "Apple", "Orange", "Mango", "Apple");

echo "<b>Original Array:</b><br>";
print_r($fruits);

echo "<br><b>Count of Values:</b><br>";
print_r(array_count_values($fruits));

echo "<hr>";

// 3. array_pop()
echo "<h3>3. array_pop()</h3>";

$vehicles = array("Car", "Bus", "Bike", "Train");

echo "<b>Original Array:</b><br>";
print_r($vehicles);

array_pop($vehicles);

echo "<br><b>After array_pop():</b><br>";
print_r($vehicles);

echo "<hr>";

// 4. array_push()
echo "<h3>4. array_push()</h3>";

$numbers = array(5, 10, 15);

echo "<b>Original Array:</b><br>";
print_r($numbers);

array_push($numbers, 20, 25);

echo "<br><b>After array_push():</b><br>";
print_r($numbers);

echo "<hr>";

// 5. sort()
echo "<h3>5. sort()</h3>";

$marks = array(95, 35, 70, 50, 80);

echo "<b>Original Array:</b><br>";
print_r($marks);

sort($marks);

echo "<br><b>Sorted Array:</b><br>";
print_r($marks);

?>

</body>
</html>