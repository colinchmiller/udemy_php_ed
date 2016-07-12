<!Doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>

<?php


$x = "outside";  //global scope

function convert(){
  global $x; //sets the variable as global and allows it to be changed anywhere
  $x = "inside"; //local scope

}

echo $x;

echo "<br>";

convert();

echo $x;

 ?>


</body>
</html>
