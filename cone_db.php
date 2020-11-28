<?php 
$server = "localhost";
$base = "juzgado";
$usuario = "root";
$contraseña = "";
$conn = mysqli_connect($server, $usuario, $contraseña, $base);
if(!$conn){
    die("Conexion fallida: " . mysqli_connect_error());
}
?>
