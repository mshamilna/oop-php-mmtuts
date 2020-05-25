<?php

class UsersCtrl extends Users {
  public function creatUser($combinationkey, $title, $post_content) {
    $this -> setUser($combinationkey, $title, $post_content);
  }
}