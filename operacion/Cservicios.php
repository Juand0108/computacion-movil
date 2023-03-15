<?php

include_once("DbManager.php");

$objeto=new DBManager();

class cCliente{

  //funcion para registrar los clientes

  function registrar_cliente($cedula,$nombres,$apellidos,$direccion,$email,$celular,$conexion) {
    $sql="insert into clientes(cedula,nombres,apellidos,direccion,email,celular)
    VALUES('$cedula','$nombres','$apellidos','$direccion','$email','$celular')";
    $rec = mysqli_query($conexion,$sql);

    include_once("registrardatos.php");
  }

  //funcon para consultar los clientes
  
  function consultar_cliente($cedula,$conexion){

$sql="SELECT * from clientes where cedula= '$cedula'";
$rec = mysqli_query($conexion,$sql);
if($rec==""){

  $_SESSION['k_cedula'] = $row['cedula'];
    echo $_SESSION['k_cedula'];

     }
     return $rec;

  }

  function Mostrar_todo($conexion){

    $sql ="SELECT * FROM clientes";
    $rec = mysqli_query($conexion,$sql);
    return $rec;
  }

  function actualizar_cliente($cedula,$nombres,$apellidos,$direccion,$email,$celular,$conexion) 
  {  $sql="UPDATE clientes SET nombres='$nombres',apellidos='$apellidos',direccion='$direccion',email='$email',celular='$celular'
    where cedula='$cedula'";
     $rec = mysqli_query($conexion,$sql);
     ?>
 <table width="324" heigt="29" border="1" aling="center">   
 <tr>
  <td width="324" heigt="29" coldspan="2" valing="top"><label> 
    Los datos se actualizaron </label></td>
  </tr>
<?php  
include_once("ingresar_cedula2.php");
  }
}
?>
