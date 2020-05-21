<?php 

class Person {
  // properties

  private $first = "Daniel";
  private $last = "Daniel";
  private $age = "Daniel";

  // public can be accessed from anywhere
  // private cannot access outside class
  // same as private but can be used in inherited classes

  // methods
  public function setName($name) {
    $this -> name = $name ; 
    // it doesnt use $ sign with name brcause its a method not variable
  }
}

