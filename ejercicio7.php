<?php
$edad = 32;

echo "Edad: $edad <br>";

$edad = 40;

echo "Edad: $edad";

// use of constants: we first define the constant
define('NOMBRE', 'Luiggy');
// the we can print it
echo '<br> Nombre: ' . NOMBRE;

// if we try to change the value of the constant we get an error
// define('NOMBRE', 'Luiggy');
// NOMBRE = 'Luiggy'; // even when we change the value to the same previous value, we get an error