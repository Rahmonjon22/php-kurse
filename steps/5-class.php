<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>   5 | Built-In Superglobal Variables in PHP | 2023 | Learn PHP Full Course for Beginners   </title>
</head>
<body>
<!--
TODO this is a link into our server
http://aliaz.ddns.net:81/_learnings/php/php-kurse/steps/5-class.php
-->

<?php
/*
$name = "Rahmonjon"; // this is just variable or predefined variable
*/
?>

<?php
/*
// Super Globals
echo $_SERVER["DOCUMENT_ROOT"]; // =>>>  /var/www/html
echo "<br>";
echo $_SERVER["PHP_SELF"]; // =>>> /_learnings/php/php-kurse/steps/5-class.php
echo "<br>";
echo $_SERVER["SERVER_NAME"]; // =>>>  aliaz.ddns.net
echo "<br>";
echo $_SERVER["REQUEST_METHOD"]; // =>>> GET
echo "<br>";
echo $_SERVER["REQUEST_TIME"]; // =>>> 1707474053
*/
?>
<?php
/*
So get method gets name and adds it into the end of the link
check how it changes the end of the link
http://aliaz.ddns.net:81/_learnings/php/php-kurse/steps/5-class.php
*/
echo $_GET["name"];
/*
// =>>>>  this is how it would look like
 http://aliaz.ddns.net:81/_learnings/php/php-kurse/steps/5-class.php?name=Jon
*/

echo $_GET["surname"];
/*
// =>>>>  this is how it would look like
  http://aliaz.ddns.net:81/_learnings/php/php-kurse/steps/5-class.php?name=Jon&surname=ibragimov
*/
echo $_POST["name"];
/*
The $_POST method in PHP is one of the superglobal variables used to collect form data sent with
the HTTP POST method. When a form is submitted with the method="post" attribute,
the form data is sent to the server as a series of key-value pairs, which PHP then makes available in the $_POST array.
*/

echo $_REQUEST["name"];
/*
The $_REQUEST variable in PHP is a superglobal array that contains the contents of both $_GET, $_POST,
and $_COOKIE. It's a convenient way to access data sent by the client in HTTP requests,
regardless of the HTTP method used (GET or POST) or the type of data (form data or query parameters).
*/
echo $_FILES["name"];
/*
The $_FILES superglobal in PHP is used to collect and handle file uploads submitted via HTTP POST requests.
 When a form with enctype="multipart/form-data" is submitted, the files selected by the user are sent to the server,
and PHP makes this file data available through the $_FILES array.
*/
echo $_COOKIE["name"];
/*
The $_COOKIE superglobal in PHP is used to retrieve values from cookies sent by the client to the server.
 Cookies are small pieces of data that a web server sends to a user's browser for storage, and
the browser sends them back with subsequent requests.
*/
echo $_SESSION["name"];
/*
The $_SESSION superglobal in PHP is used to store session variables that persist
 across multiple page requests for a particular user session. Sessions provide a way to store user-specific
information securely on the server, accessible across multiple pages during a user's visit to a website.
*/
echo $_ENV[""];
/*
The $_ENV superglobal in PHP is used to access environment variables that are set in the server environment
 where PHP is running. Environment variables are dynamic values that are accessible to
 all processes running on the server and can be used to configure various aspects of the server environment.
*/
?>








<footer style="bottom: 20px; position: absolute; text-align: center;
  width: 100%;">
  <a href="https://www.youtube.com/watch?v=MujfofukfwQ&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih&index=5" target="_blank">
    This is a link into Tutorial
  </a>
</footer>
</body>
</html>