<?php

require 'conexion.php';

$sql = "UPDATE personas SET nombre = 'Ramirito' WHERE cedula = '1104668700'";

if(mysqli_query($conexion,$sql)) {
    echo "Persona actualizada";
}
else {
    echo "Error". mysqli_connect_error();
}

?>
