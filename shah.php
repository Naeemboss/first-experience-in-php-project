<?php
function addNumbers($num1, $num2)
 {
    $sum = $num1 + $num2;
    return $sum;
}

$result = addNumbers(12, 10);
echo "The sum is: " . $result;
echo "<br>"
?>

<?php
function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    // Check if $num2 is not zero to avoid division by zero
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Cannot divide by zero";
    }
}

$num1 = 123;
$num2 = 23;
echo "It can show the value for Arithmatic metic value";
echo "<br>";
echo "Addition: " . add($num1, $num2) . "\n";
echo "<br>";
echo "Subtraction: " . subtract($num1, $num2) . "\n";
echo "<br>";
echo "Multiplication: " . multiply($num1, $num2) . "\n";
echo "<br>";
echo "Division: " . divide($num1, $num2);
?>

