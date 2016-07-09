<!Doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>

<?php

$numberList = array(23,64,267,487,276,"Colin",'47','<h1>Hello</h1>');

echo $numberList[7];

echo "<br>";

/*print_r will show the contents of the array with their associated index number */
print_r($numberList);

 ?>

</body>
</html>
