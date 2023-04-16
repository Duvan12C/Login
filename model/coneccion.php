<?php


//conexiopn de base de datos
$servidor= 'localhost';
$usuarioBD = 'root';
$claveBD= 'Base123456';
$nombreBD = 'usuarios';

//conexion
$conexion= new mysqli($servidor,$usuarioBD, $claveBD, $nombreBD);
//entienda caracteres
$conexion->set_charset("utf8");

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

echo "Conexión exitosa a la base de datos";


?>