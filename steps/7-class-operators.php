<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>7 | The PHP Operators You Need to Know! | 2023 | Learn PHP Full Course for Beginners</title>
</head>
<body>
<!--
TODO this is a link into our server
http://aliaz.ddns.net:81/_learnings/php/php-kurse/steps/7-class-operators.php
-->
<?php
// string operator
$a = "Hello";
$b = "World!!!!";
//$c = "Hello World";
// $c = $a . $b; // without space
$c = $a . " " . $b; // without space
echo $c;
echo "</br>";
//********Arithmetic operator ********
/*
echo 1 + 2; // ==> 3
echo "</br>";
echo 10 - 2; // ==> 8
echo "</br>";
echo 10 / 2; // ==> 5
echo "</br>";
echo 10 * 2; // ==> 20
echo "</br>";
echo 10 % 3; // ==> 1
echo "</br>";
echo 10 ** 3; // ==> 1000
echo "</br>";
echo 10 + 5 * 2; // ==> 20
echo "</br>";
echo (10 + 5) * 2; // ==> 30
echo "</br>";
echo (10 + 5) * (2 + 2); // ==> 60
echo "</br>";
*/

//******* Assignment operators
/*
$a = 2;
$a = $a + 2;
echo $a;
echo "</br>";
$b = 2;
$b = $a * 4;
echo $b;
*/

//******* Comparision operators

// ===> Equal to (==):
$a = 5;
$b = "5";
if ($a == $b) {
  echo "Equal";
} else {
  echo "Not equal";
}
// Output: Equal
echo "</br>";

//==> Identical (===): Checks if two values are equal and of the same type.
$a = 5;
$b = "5";
if ($a === $b) {
  echo "Equal and of the same type";
} else {
  echo "Not equal or not of the same type";
}
echo "</br>";
// Output: Not equal or not of the same type

//==>Not equal to (!= or <>): Checks if two values are not equal
$a = 5;
$b = "5";
if ($a != $b) {
  echo "Not equal";
} else {
  echo "Equal";
}
// Output: Not equal
echo "</br>";
//==>Not identical (!==): Checks if two values are not equal or not of the same type.
$a = 5;
$b = "5";
if ($a !== $b) {
  echo "Not equal or not of the same type";
} else {
  echo "Equal and of the same type";
}
// Output: Equal and of the same type
echo "</br>";

//==>Greater than (>): Checks if the left operand is greater than the right operand.
$a = 10;
$b = 5;
if ($a > $b) {
  echo "a is greater than b";
} else {
  echo "a is not greater than b";
}
// Output: a is greater than b
echo "</br>";

//==>Greater than or equal to (>=): Checks if the left operand is greater than or equal to the right operand.
$a = 10;
$b = 10;
if ($a >= $b) {
  echo "a is greater than or equal to b";
} else {
  echo "a is less than b";
}
// Output: a is greater than or equal to b
echo "</br>";

//==>Logical AND (&& or and): This operator returns true if both operands are true.
$x = 5;
$y = 10;
if ($x > 0 && $y > 0) {
	echo "Both x and y are positive";
} else {
	echo "Either x or y is not positive";
}
// Output: Both x and y are positive

echo "</br>";


//==>Logical OR (|| or or): This operator returns true if at least one of the operands is true.
$x = 5;
$y = -10;
if ($x > 0 || $y > 0) {
	echo "At least one of x and y is positive";
} else {
	echo "Neither x nor y is positive";
}
// Output: At least one of x and y is positive

echo "</br>";


//==>Logical NOT (!): This operator negates the value of its operand, i.e.,
// it returns true if the operand is false, and vice versa.
$x = 5;
if (!$x) {
	echo "x is false";
} else {
	echo "x is true";
}
// Output: x is true

echo "</br>";


//==> Pre-increment (++$variable):
// This operator increments the value of the variable and then returns the incremented value.
$a = 5;
echo ++$a; // Output: 6

echo "</br>";


//==>Post-increment ($variable++): This operator returns the value of the variable and
// then increments the variable.
$a = 5;
echo $a++; // Output: 5
echo $a;   // Output: 6

echo "</br>";








?>


<footer style="bottom: 20px; position: absolute; text-align: center;
  width: 100%;">
	<a href="https://www.youtube.com/watch?v=oY91DwQyGlI&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih&index=7" target="_blank">
		This is a link into Tutorial
	</a>
</footer>
</body>
</html>