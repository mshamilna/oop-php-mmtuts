
<?php include_once "./includes/person.inc.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>oop_php</title>
</head>
<body>
  <?php
     $person1 = new person();
     $person1 -> setname('muhammed');
     echo $person1 -> name;
  
     $person2 = new person();
     $person2 -> setname('Shamil');
     echo $person2 -> name;
  ?>
</body>
</html>