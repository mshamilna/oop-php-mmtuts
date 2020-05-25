<?php

class Test extends Dbh {
  public function getUsers(){
    $sql = "SELECT * FROM post_xc";
    $stmt = $this->connect()->query($sql);
    while($row = $stmt->fetch()) {
      echo $row['title'].'<br/>';
    }
  }


  public function getUsersStmt($comb){
    $sql = "SELECT * FROM post_xc WHERE combinationkey = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$comb]);
    $names = $stmt->fetchAll(); // to fetch every value

    foreach ($names as $name ) {
      echo $name['title'].': '.$name['post_content'].'<br/>';
    }
  }



  public function setUsersStmt($combinationkey, $title, $post_content){
    $sql = "INSERT INTO post_xc ( combinationkey, title, post_content ) VALUES ( ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$combinationkey, $title, $post_content]);
  }
}