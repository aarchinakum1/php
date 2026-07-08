<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>

<h2>Simple Calculator Using User Defined Function</h2>

<form method="post">
    Number 1:
    <input type="number" name="num1" required><br><br>

    Number 2:
    <input type="number" name="num2" required><br><br>

    Operation:
    <select name="op">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
function calculator($a, $b, $op)
{
    switch($op)
    {
        case "add":
            return $a + $b;

        case "sub":
            return $a - $b;

        case "mul":
            return $a * $b;

        case "div":
            if($b != 0)
                return $a / $b;
            else
                return "Division by zero is not possible";
    }
}

if(isset($_POST['submit']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];

    echo "<h3>Result: " . calculator($num1, $num2, $op) . "</h3>";
}
?>

</body>
</html>