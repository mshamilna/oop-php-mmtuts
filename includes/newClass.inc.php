<?php

  class NewClass {
    // properties and methods go here.

    public $data = "this is some info. <br/>";

    public function __construct(){
      echo 'this class has been instantiated <br />';
    }

    public function setProperty($newData){
      $this -> data = $newData;
    }

    public function getProperty(){
      return $this -> data;
    }

    public function __destruct() {
      echo '<br> this is frome destruct';
    }


  }

  // $newObject = new NewClass;
  // var_dump($newObject);

?>