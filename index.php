<?php 
  declare(strict_types = 1);
  include 'includes/autoloader.inc.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>oop_php</title>
</head>
<body>
  <?php

    $userObj = new UsersCtrl();
    // $userObj->creatUser('PDO', 'Vimal Madhav', 'inserting from oop php pdo4');
    $userObj2 = new UsersView();
    $userObj2->showUsers('PDO');

  ?>
</body>
</html>