<!Doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>

<?php

$name = "Colin";
$number = 100;
$camelCase = "Best Practice";
$Number_List = "Another Good Format";

/*
Do not use dashes, as it is a subtraction operator $num-ber
Do not use numbers $0name
Variable names are case sensitive
*/

//concatenation using a decimal point
echo $name . " " . $number;

//variable value changes and html inserted
$name = "<h1>Hello</h1>";

echo $name;


?>

</body>
</html>
