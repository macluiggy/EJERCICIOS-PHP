<?php
if ($_POST) {
  # code...
  $boton = $_POST['btnValor'];
  switch ($boton) {
    case 1:
      # code...
      echo "El boton 1 fue presionado";
      break;
    case 2:
      # code...
      echo "El boton 2 fue presionado";
      break;
    case 3:
      # code...
      echo "El boton 3 fue presionado";
      break;
    default:
      # code...
      echo "No se ha presionado ningun boton";
      break;
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch</title>
</head>

<body>
  <form action="ejercicio13.php" method="post">
    <input type="submit" value="1" name="btnValor">
    <input type="submit" value="2" name="btnValor">
    <input type="submit" value="3" name="btnValor">
    <input type="submit" value="none" name="btnValor">
  </form>

  <script>
    var elForm = document.getElementsByTagName('form')[0];
    // elForm.style.border = "1px solid red";
  </script>
</body>

</html>