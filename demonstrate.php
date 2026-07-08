<?php
$str = "Hello World Welcome to PHP";

echo "<h2>PHP String Functions</h2>";

echo "Original String: " . $str . "<br><br>";

// 1. strlen()
echo "1. Length of String (strlen): " . strlen($str) . "<br><br>";

// 2. strpos()
echo "2. Position of 'World' (strpos): " . strpos($str, "World") . "<br><br>";

// 3. str_word_count()
echo "3. Number of Words (str_word_count): " . str_word_count($str) . "<br><br>";

// 4. strrev()
echo "4. Reverse String (strrev): " . strrev($str) . "<br><br>";

// 5. strtolower()
echo "5. Lowercase (strtolower): " . strtolower($str) . "<br><br>";

// 6. strtoupper()
echo "6. Uppercase (strtoupper): " . strtoupper($str);
?>