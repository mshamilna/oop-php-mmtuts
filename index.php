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
  <form action="includes/calc.inc.php" method="post">
    <p>MY CALCULATOR</p>
    <input type="number" name='num1' placeholder="first number">
    <select name="oper" id="">
      <option value="add">Addition</option>
      <option value="sub">Subtraction</option>
      <option value="div">Division</option>
      <option value="mul">Multiplication</option>
    </select>
    <input type="number" name="num2" id="" placeholder="second number">
    <button type="submit" name="submit">Calculate</button>
  </form>
</body>
</html>