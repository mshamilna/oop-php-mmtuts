<?php

class Users extends Dbh {
  protected function getUser($comb) {
    $sql = "SELECT * FROM post_xc WHERE combinationkey = ?";
    $stmt = $this -> connect() -> prepare($sql);
    $stmt -> execute([$comb]);

    $results = $stmt -> fetchALL();
    return $results;
  }

  public function setUser($combinationkey, $title, $post_content){
    $sql = "INSERT INTO post_xc ( combinationkey, title, post_content ) VALUES ( ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$combinationkey, $title, $post_content]);
  }
}