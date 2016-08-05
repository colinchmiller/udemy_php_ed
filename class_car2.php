<?php

//classes require capitalization to be recognized
class Car {

  //method within the class
  function MoveWheels(){
    echo "Wheels rotate.";
  }

}

if(method_exists("Car", "MoveWheels")){

  echo "The method MoveWheels exists.";

} else {

  echo "The method MoveWheels does not exist";

}

 ?>
