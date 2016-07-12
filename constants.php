<!Doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>

<?php
  //variable
  $number = 10;
  echo $number . "<br>";


  //constant
  define("NAME", 1000);
  echo NAME;

  //this will error because NAME is already defined
  define("NAME", "Colin");
  echo NAME;
 ?>


</body>
</html>
