<?php

$file = "example.txt";

//w stands for writing returns a handle informing whether or not it was written
$handle = fopen($file, 'w');

fclose($handle);

 ?>
