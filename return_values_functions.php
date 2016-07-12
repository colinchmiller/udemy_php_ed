<!Doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Returning Values From Functions</title>
</head>

<body>

<?php

function addNumbers($number1, $number2){

  $sum = $number1 + $number2;

  return $sum;

}

$result = addNumbers(34, 46);

echo $result + addNumbers(5, 5);

echo "<br>";

echo addnumbers($result, $result);

?>

</body>
</html>
