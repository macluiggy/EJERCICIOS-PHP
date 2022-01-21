<?php
if ($_POST) {
  # code...
  $valueA = $_POST['valueA'];
  $valueB = $_POST['valueB'];
  if ($valueA !== $valueB && $valueA > $valueB) {
    # code...
    echo "Value A es mayor que Value B";
  } else if ($valueA < $valueB) {
    echo "Value A es menor que Value B";
  } else {
    echo "Value A es igual que Value B";
  }
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
  <form action="ejercicio9.php" method="post">
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