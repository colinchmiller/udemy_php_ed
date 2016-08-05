<?php

//classes require capitalization to be recognized
class Car {

  //properties within the class
  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;

  //constructor within the class
  function __construct(){
    echo $this->wheels = 10;
  }

}

//Instantiating the class into an object
$bmw = new Car();
$truck = new Car();
$semi = new Car();

 ?>
