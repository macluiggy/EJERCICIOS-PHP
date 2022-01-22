<?php
if ($_POST) {
  # code...
  $valueA = $_POST['valueA'];
  $valueB = $_POST['valueB'];

  $sum = $valueA + $valueB;
  $sub = $valueA - $valueB;
  $mul = $valueA * $valueB;
  $div = $valueA / $valueB;

  echo "Sum: $sum <br>";
  echo "Sub: $sub <br>";
  echo "Mul: $mul <br>";
  echo "Div: $div <br>";

  if ($valueA == $valueB) {
    # code...
    echo "Value A es igual que Value B <br>";
    if ($valueA == 4) {
      # code...
      echo "Value A es igual que $valueA";
    }
  }

  // sera que eso funciona?
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="ejercicio11.php" method="post">
    <label for="valueA">Value A</label>
    <input type="text" name="valueA" id="valueA">
    <br>
    <label for="valueB">Value B</label>
    <input type="text" name="valueB" id="valueB">
    <br>
    <input type="submit" value="calculate">
  </form>
</body>

</html>