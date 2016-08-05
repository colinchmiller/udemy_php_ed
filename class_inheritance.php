<?php

//classes require capitalization to be recognized
class Car {

  //properties within the class
  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;

  //method within the class
  function MoveWheels(){
    echo "Wheels rotate. <br>";
    $this->wheels = 10;
  }

}

//new class with inherited attributes from other class
class Plane  extends Car {

}

$jet = new Plane();
echo $jet->wheels. "<br>";
$jet->MoveWheels();

// if(class_exists("Plane")){
//   echo "Class Plane exists.";
// }

 ?>
