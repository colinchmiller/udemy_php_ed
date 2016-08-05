<?php

//classes require capitalization to be recognized
class Car {

  //properties within the class with varying levels of accessibility
  public $wheels = 4;
  //can only be used through the class or subclasses
  protected $hood = 1;
  //private can only be used within the specific class
  private $engine = 1;
  var $doors = 4;

  //method within the class
  function showProperty(){
    echo $this->hood;
  }

  function showPrivate(){
    echo $this->engine;
  }

}

//Instantiating the class into an object
$bmw = new Car();
$semi = new Semi();

echo $bmw->wheels . "<br>";
echo $bmw->showProperty() . "<br>";
echo $bmw->showPrivate();



class Semi extends Car {

  function showProperty(){
    echo $this->engine;
  }

}

//won't work because that property is private. Can't be extended to another class
echo $semi->showProperty();


 ?>
