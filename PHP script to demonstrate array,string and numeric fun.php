<?php
echo "<h2>PHP Function Demonstration</h2>";

/*========================
  ARRAY FUNCTIONS
=========================*/
echo "<h3>Array Functions</h3>";

$fruits = ["apple", "banana", "cherry", "date"];

echo "Original Array:<br>";
print_r($fruits);

// array_push
array_push($fruits, "elderberry");
echo "<br><br>After array_push:<br>";
print_r($fruits);

// array_pop
$popped = array_pop($fruits);
echo "<br><br>Popped item: $popped<br>";
echo "After array_pop:<br>";
print_r($fruits);

// array_reverse
$reversed = array_reverse($fruits);
echo "<br><br>Reversed Array:<br>";
print_r($reversed);

/*========================
  STRING FUNCTIONS
=========================*/
echo "<h3>String Functions</h3>";

$text = "  Hello, World!  ";
echo "Original String: '$text'<br>";

// trim
$trimmed = trim($text);
echo "After trim: '$trimmed'<br>";

// strlen
echo "Length of trimmed string: " . strlen($trimmed) . "<br>";

// strtoupper
echo "Uppercase: " . strtoupper($trimmed) . "<br>";

// str_replace
$replaced = str_replace("World", "PHP", $trimmed);
echo "After str_replace: '$replaced'<br>";

/*========================
  NUMERIC FUNCTIONS
=========================*/
echo "<h3>Numeric Functions</h3>";

$num = -25.75;

echo "Original Number: $num<br>";

// abs
echo "Absolute value: " . abs($num) . "<br>";

// round
echo "Rounded: " . round($num) . "<br>";

// ceil
echo "Ceiling: " . ceil($num) . "<br>";

// floor
echo "Floor: " . floor($num) . "<br>";

?>
