<?php

//classes require capitalization to be recognized
class Car {

  //method within the class
  function MoveWheels(){
    echo "Wheels rotate.";
  }

}

//Instantiating the class into an object
$bmw = new Car();
$mercedes_benz = new Car();


//activating the method within each object
$bmw->MoveWheels();
$mercedes_benz->MoveWheels();

 ?>
