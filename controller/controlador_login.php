<?php
//valida si el boton a sido presionado

//inciamos sesion 
session_start();


if(isset($_POST['enviar'])){
    if (!empty($_POST['nombre'])  and !empty($_POST['clave']) ) {
       $user =  $_POST['nombre'];
       $clave = $_POST['clave'];
       
       $sql = $conexion->query("SELECT * FROM users WHERE usuario='$user' and clave='$clave'");

       if ($datos=$sql->fetch_object()) {
        //varible de sesion para poder almacenear los datos del usuario logeado
        $_SESSION["ID"]=$datos->ID;
        $_SESSION["nombre"]=$datos->nombre;
        $_SESSION["apellido"]=$datos->apellido;
        $_SESSION["clave"]=$datos->clave;
        
           header("Location: inicio.php");
       } else {
         echo "no tiene nada";
       }
       
    }
   }
?>

