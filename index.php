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
    $person1 = new Person\Person();
    try {
      $person1 -> setName(8);
      echo $person1->getName();
    } catch (TypeError $e) {
      echo "🤦‍♀️Error!:".$e->getMessage();
    }
  ?>
</body>
</html>