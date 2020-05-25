<?php

// We are going to connect to the mysql database using PDO.

class Dbh {

  // these data are supposed to be secure. hence private.
  private $host = "localhost";
  private $user = "root";
  private $pwd = "";
  private $dbName = "deeoanjali_db";

  protected function connect() {
    $dsn = 'mysql:host=' . $this->host.';dbname='.$this->dbname;
    $pdo = new PDO($dsn, $this->user, $this->pwd);

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }


}