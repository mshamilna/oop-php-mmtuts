
<?php 

include_once "./includes/person.inc.php"; 
include_once "./includes/newClass.inc.php"; 

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
    $object = new NewClass(); 
    echo $object -> getProperty();
    echo $object -> setProperty('new property just set <br/>');
    echo $object -> getProperty();

    // 
    //  to destroy an object
    unset($object);
  ?>
</body>
</html>