<?php
$nombre = $_POST['txtNombre'];
if ($_POST) { // if the user has submitted the form
  echo 'Hola ' . $nombre;
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
  <!-- hola mundo -->
  <form action="ejercicio2.php" method="post">
    <label for="txtNombre">Nombre</label>
    <input type="text" name="txtNombre" id="txtNombre" placeholder="Introduce tu nombre" value="luiggy">
    <br>
    <input type="submit" value="Enviar">
  </form>
</body>

</html>