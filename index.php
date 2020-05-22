
<?php

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
    $pet01 = new Person\Person();

    echo $pet01 -> getName();
  ?>
</body>
</html>