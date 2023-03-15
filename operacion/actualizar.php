<?php

$cedula=$_POST['cedula'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$email=$_POST['email'];
$celular=$_POST['celular'];

include_once("Cservicios.php");
$conexion = $objeto->connectDB();
$objconsulta=new cCliente;
$resul=$objconsulta->actualizar_cliente($cedula,$nombres,$apellidos,$direccion,$email,$celular,$conexion);

?>