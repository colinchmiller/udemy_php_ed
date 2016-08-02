<?php

//super global associative array to store the information for the cookie
//$_COOKIE;

$name = "SomeName";
$value = 100;
//setting cookie to expire in a week
$expiration = time() + (60*60*24*7);

setcookie($name, $value, $expiration);

 ?>

<!Doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>



</body>
</html>
