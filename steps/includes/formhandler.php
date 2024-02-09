<?php
/*
We need to think of security
http://aliaz.ddns.net:81/_learnings/php/php-kurse/steps/includes/formhandler.php
*/
/*
 if (isset($_POST["submit"])){
  // this is one way to do it but not good way because you must write name="submit" on form button
}
*/
//var_dump($_SERVER["REQUEST_METHOD"]);
if($_SERVER["REQUEST_METHOD"] == "POST"){

  // calling the data that are submitted in form
  $firstname = htmlspecialchars($_POST["firstname"]);
  $lastname = htmlspecialchars($_POST["lastname"]);
  $favouritepet = htmlspecialchars($_POST["favouritepet"]);


  if (empty($firstname)){
// if first name is empty it directs again back to form!
    exit();
    header("Location: ../6-class-Form.php");
  }
  if (empty($lastname)){
// if first name is empty it directs again back to form!
    exit();
    header("Location: ../6-class-Form.php");
  }
  if (empty($favouritepet)){
// if first name is empty it directs again back to form!
    exit();
    header("Location: ../6-class-Form.php");
  }
  // Printing out the data
  echo "These are the data that the user submitted:";
  echo "</br>";
  echo $firstname;
  echo "</br>";
  echo $lastname;
  echo "</br>";
  echo $favouritepet;
// for security reason. going back to form again!
  header("Location: ../6-class-Form.php");
} else{
  // in case user ends up in to the formhandler.php.
  // user will be directed into 6-class-Form.php again!
  header("Location: ../6-class-Form.php");

}
;

/*$var = "Hello, world!";
var_dump($var);*/

?>