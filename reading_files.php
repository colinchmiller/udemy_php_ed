<?php

$file = "example.txt";

if($handle = fopen($file, 'r')){

//second parameter is bytes; each byte equals a character
//echo $content = fread($handle, 2);
echo $content = fread($handle, filesize($file));

fclose($handle);

}else{

  echo "The application was not able to write on the file.";

}






 ?>
