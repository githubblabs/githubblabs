<?php

// Variables
$name = "John";
$age = 25;
$price = 9.99;

// Conditional statement
if ($age >= 18) {
    echo "Welcome, $name! You are eligible to enter.";
} else {
    echo "Sorry, $name! You must be at least 18 years old to enter.";
}

// Loop
for ($i = 1; $i <= 5; $i++) {
    echo "Count: $i<br>";
}

// Array
$fruits = array("Apple", "Banana", "Orange");
echo "My favorite fruit is " . $fruits[0];

// Function
function addNumbers($a, $b)
{
    return $a + $b;
}

$result = addNumbers(2, 3);
echo "<br>The sum is: " . $result;
