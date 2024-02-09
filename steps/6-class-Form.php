<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.min.css">
  <title>   6 | The Basics of PHP Form Handling Tutorial | 2023 | Learn PHP Full Course for Beginners   </title>
</head>
<body>
<!--
TODO this is a link into our server
http://aliaz.ddns.net:81/_learnings/php/php-kurse/steps/6-class-Form.php
-->
<main>
  <form action="includes/formhandler.php" method="post">
  <!--
  <form action="<?php /*echo $_SERVER["PHP_SELF"]; */?>" method="get">
  this is prone to hacking.
-->
    <label for="firstname">Firstname?</label>
    <input type="text" id="firstname" name="firstname" placeholder="Firstname...">
    <label for="lastname">Lastname?</label>
    <input type="text" id="lastname" name="lastname" placeholder="Lastname...">
    <label for="favouritepet">Favourite Pet?</label>
    <select name="favouritepet" id="favouritepet">
      <option value="none">None</option>
      <option value="dog">Dog</option>
      <option value="cat">Cat</option>
      <option value="bird">Bird</option>
    </select>
    <button type="submit" >Submit</button>
  </form>
</main>









<footer style="bottom: 20px; position: absolute; text-align: center;
  width: 100%;">
  <a href="https://www.youtube.com/watch?v=MujfofukfwQ&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih&index=6" target="_blank">
    This is a link into Tutorial
  </a>
</footer>
</body>
</html>