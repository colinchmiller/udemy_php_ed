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

//Instantiating the class into an object
$bmw = new Car();
$mercedes_benz = new Car();

//activating the method within each object
$bmw->MoveWheels();

echo $bmw->wheels;
echo "<br>";
$bmw->wheels = 8;
echo $bmw->wheels;

 ?>
