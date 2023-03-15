<?php
include_once("Cservicios.php");
$conexion = $objeto->connectDB();
$objconsulta=new cCliente;
$result=$objconsulta->Mostrar_todo($conexion);

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>Informe de Datos de clientes</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="549" border="1" align="center">
    <tr>
      <td width="83" height="23">Cedula</td>
      <td width="92">Nombres</td>
      <td width="80">Apellidos</td>
      <td width="90">Direccion</td>
      <td width="80">Email</td>
      <td width="84">Celular</td>
    </tr>
    <?php while ($row=mysqli_fetch_array($result)){ ?>
      <tr>
        <td><?php echo $row['cedula']?></td>
        <td><?php echo $row['nombres']?></td>
        <td><?php echo $row['apellidos']?></td>
        <td><?php echo $row['direccion']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['celular']?></td>
    </tr>
    <?php }?>
  </table>
  <p align="center"><a href="index.php">REGRESAR</a></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
