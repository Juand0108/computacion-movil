<?php

$cedula=$_POST['cedula'];
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellido'];
$direccion=$_POST['direccion'];
$email=$_POST['email'];
$celular=$_POST['celular'];

include_once("Cservicios.php");
$conexion = $objeto->connectDB();
$objconsulta=new cCliente;
$resul=$objconsulta->registrar_cliente($cedula,$nombres,$apellidos,$direccion,$email,$celular,$conexion);

?>
