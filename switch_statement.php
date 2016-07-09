<!Doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>

<?php

//Switch statements are useful testing a variable's value against multiple conditions

$number = 100;

switch($number){

  case 34:
  echo "it is 34";
  break;
  case 25:
  echo "it is 25";
  break;
  case 10:
  echo "it is 10";
  break;

  default:
  echo "No available number matched the input";
  break;
}

?>

</body>
</html>
