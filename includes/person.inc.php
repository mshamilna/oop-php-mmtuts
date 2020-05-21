<?php 

class Person {
  // properties

  private $name = "Daniel";
  private $eyecolor = "Daniel";
  private $age = "Daniel";

  // public can be accessed from anywhere
  // private cannot access outside class
  // same as private but can be used in inherited classes

  // methods

  public function __construct($name, $eyecolor, $age) {
    $this -> name = $name;
    $this -> eyecolor = $eyecolor;
    $this -> age = $age;
  }

  public function setName($name) {
    $this -> name = $name ; 
    // it doesnt use $ sign with name brcause its a method not variable
  }
  public function getName() {
    return $this -> name;
    // it doesnt use $ sign with name brcause its a method not variable
  }

  public function __destruct() {
    // both constructor and destructor instantiate at the same moment
    // triggered by $variable = new ClassName();
  }
}

