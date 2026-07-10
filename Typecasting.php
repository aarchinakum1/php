<?php

$name = 123;

echo "Before Type Casting<br>";
echo "Value : " . $name . "<br>";
echo "Data Type : " . gettype($name) . "<br><br>";

settype($name, "string");

echo "After Type Casting<br>";
echo "Value : " . $name . "<br>";
echo "Data Type : " . gettype($name);

?>