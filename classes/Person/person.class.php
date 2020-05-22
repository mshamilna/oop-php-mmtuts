<?php 

namespace Person;

class Person {
  private $first = "Daniel";
  private $last = "last";
  private $age = "age";

  // public can be accessed from anywhere
  // private cannot access outside class
  public function getName() {
    return $this -> first;
     
  }
}

 