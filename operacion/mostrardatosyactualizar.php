<?php
$cedula=$_POST['cedula'];
include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new cCliente;
$result=$objconsulta->consultar_cliente($cedula,$conexion);
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<div align="center">
  <p>Actualizar datos tus datos </p>
</div>
<form id="form1" name="form1" method="post" action="actualizar.php">
  <table width="401" border="1" align="center">
    <tr>
      <td width="197">Cedula</td>
      <td width="188"><label> 
		<input type="text" value="<?php echo $row['cedula']?>" name="cedula" readonly="false"/>
      </label></td>
    </tr>
    <tr>
      <td>Nombres</td>
      <td><label>
      <input type="text" value="<?php echo $row['nombres']?>" name="nombres";  
      </label></td>
    </tr>
    <tr>
      <td>Apellidos</td>
      <td><label>
      <input type="text" value="<?php echo $row['apellidos']?>" name="apellidos"; 
      </label></td>
    </tr>
    <tr>
      <td>Direccion</td>
      <td><label>
      <input type="text" value="<?php echo $row['direccion']?>" name="direccion"; 
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label>
      <input type="text" value="<?php echo $row['email']?>" name="email" ; 
      </label></td>
    </tr>
    <tr>
      <td>Celular</td>
      <td><label>
      <input type="text" value="<?php echo $row['celular']?>" name="celular" radonly="false"; 
      </label></td>
    </tr>
  </table>
  <p>
    <label>
    <div align="center">
      <input type="submit" name="Submit" value="Actualizar" />
    </div>
    </label>
    <div align="center">    <a href="ingresar_cedula2.php">Regresar</a></div>
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>
