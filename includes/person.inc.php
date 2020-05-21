<?php 

class Person {
  private $first = "Daniel";
  private $last = "Daniel";
  private $age = "Daniel";

  // public can be accessed from anywhere
  // private cannot access outside class
 
}

class Pet extends Person {
  public function owner() {
    $a = $this -> first;
    return $a;
  }
}