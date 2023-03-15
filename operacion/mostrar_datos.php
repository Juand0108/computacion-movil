<?php
$cedula=$_POST['cedula'];
include_once("Cservicios.php");
$conexion = $objeto-> connectDB();
$objconsulta= new cCliente;
$result=$objconsulta->consultar_cliente($cedula,$conexion);

if(empty($result)){
  echo "no hay datos";
}
$row=mysqli_fetch_array($result);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p align="center"> INFORMACION PERONAL </p>
  <table width="251" border="1" align="center">
    <tr>
      <td width="66"><div align="center"><strong>Cedula</strong></div></td>
      <td width="169"><label></label><?php echo $row['cedula']?></td>
    </tr>
    <tr>
      <td><div align="center"><strong>Nombre</strong></div></td>
      <td><label></label><?php echo $row['nombres']?></td>
    </tr>
    <tr>
      <td><div align="center" class="Estilo1">Apellido</div></td>
      <td><label></label><?php echo $row['apellidos']?></td>
    </tr>
    <tr>
      <td><div align="center" class="Estilo1">Direccion</div></td>
      <td><label></label><?php echo $row['direccion']?></td>
    </tr>
    <tr>
      <td><div align="center" class="Estilo1">Email</div></td>
      <td><label></label><?php echo $row['email']?></td>
    </tr>
    <tr>
      <td><div align="center" class="Estilo1">Celular</div></td>
      <td><label></label><?php echo $row['celular']?></td>
    </tr>
  </table>
  <p align="center">
    <label><a href="ingresar_cedula.php">Regresar</a></label>
  </p>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
