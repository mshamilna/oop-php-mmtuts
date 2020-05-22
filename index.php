
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
     $person1 = new person('shamil','black', 26); 
     echo $person1 -> getName();
     $person1 -> setName('rahul');
     echo $person1 -> getName();


    echo Person::getDrinkingAge();
    Person::setDrinkingAge(18);
    echo Person::getDrinkingAge();



  ?>
</body>
</html>