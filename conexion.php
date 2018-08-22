<?php
$servidor = 'localhost';
$usuario = 'eduardo';
$contrasenia = '1234';
$db = 'proyecto_santo';
$conn = mysqli_connect($servidor, $usuario, $contrasenia, $db);

if ($conn->connect_error) {

    die("Conexion fallida");
}
?>
