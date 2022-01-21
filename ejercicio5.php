<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
if ($_POST) { // if the user has submitted the form
  # code...
  echo 'Hola ' . $nombre . ' ' . $apellido;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <form action="ejercicio5.php" method="post" data-bitwarden-watching>
      <div class="form-group row">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre_</label>
        <div class="col-sm-5">
          <input value="Luiggy" type="text" name="nombre" class="form-control .col-sm" />
        </div>
      </div>
      <div class="form-group row">
        <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
        <div class="col-sm-5">
          <input value="Macias" type="text" name="apellido" class="form-control .col-sm" />
        </div>
      </div>
      <br />
      <input type="submit" value="enviar" />
    </form>
  </div>

  <style></style>
</body>

</html>