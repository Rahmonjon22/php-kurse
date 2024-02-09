<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>   4 | PHP Variable and Data Type Tutorial | 2023 | Learn PHP Full Course for Beginners   </title>
</head>
<body>
<!--
http://aliaz.ddns.net:81/_learnings/php/php-kurse/steps/4-class.php
-->
<p>This is a paragraph <?php echo "awesome" ?> in html</p>
<?php echo "this is also a paragraph in php"; ?>
</br>
<?php
/*
this is how you declare a datatype
data usually stores string number
*/
$variable = "this is a variable";
$fullName = "Rahmonjon Ibragimov";
echo "$variable and made by $fullName";
?>
<br>
<?php
//Scaler types contain one value
$string = "Aliaz";
$int = "123456";
$float = 2.34567;
$bool = true;
$number = 32;

//Scaler types in default version
$string = "";
$int = 0;
$float =0;
$bool = false;
$number = 0;

// Array type can contain many values.
$array = array("Rahmonjon", "Kilian", "Michael");
// array above and bellow are the same
$names = ["Rahmonjon", "Kilian", "Michael"];
// Array type in default.
$array = [];
// Object type
//$object = new Car();
// obj in default.
//$object = null;

?>
<br>
<?php
$myName = "Rahmonjon Ibragimov";
$test = $myName;
?>
<h1>Hi! My full name is <?php echo $test ?>, and I am learning Php!</h1>

<footer style="bottom: 20px; position: absolute; text-align: center;
  width: 100%;">
  <a href="https://www.youtube.com/watch?v=FLs6rAVQWs0&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih&index=4" target="_blank">
    This is a link into Tutorial
  </a>
</footer>
</body>
</html>