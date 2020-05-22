<?php

class Calc {
  public $op;
  public $num1;
  public $num2;

  public function __construct(string $op, int $num1, int $num2 ) {
    $this -> op = $op;
    $this -> num1 = $num1;
    $this -> num2 = $num2;
  }

  public function calculator() {
    switch ($this -> op) {
      case 'add':
        $result = $this -> num1 + $this -> num2;
        return $result;
        break;
      
      case 'sub':
        $result = $this -> num1 - $this -> num2;
        return $result;
        break;
      
      case 'div':
        $result = $this -> num1 / $this -> num2;
        return $result;
        break;
      
      case 'mul':
        $result = $this -> num1 * $this -> num2;
        return $result;
        break;
      
      default:
        return 'error!!';
        break;
    }
  }
}