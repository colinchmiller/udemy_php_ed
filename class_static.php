<?php

//classes require capitalization to be recognized
class Car {

  //static property attached to class instead of the instance
  static $wheels = 4;
  var $hood = 1;


  //method within the class
  function MoveWheels(){
    Car::$wheels = 10;
  }

}

//Instantiating the class into an object
$bmw = new Car();

//will not work because of static
echo $bmw->wheels;


//referencing static properties of the class
echo Car::$wheels . "<br>";
Car::MoveWheels();
echo Car::$wheels;


 ?>
