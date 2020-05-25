<?php

class UsersView extends Users {
  public function showUsers($comb) {
    $results = $this -> getUser($comb);
    foreach ($results as $user => $value) {
      echo $value['title'].': '.$value['post_content'].'<br/>';
    } 
  }
}