<?php
//Clase Manejadora de la base de datos y conexi�n con el servidor
class DBManager
{
	var $conexion;

	function connectDB(){

    $server = "localhost";
    $user = "root";
    $pass = "12345678";
    $bd = "personas";

	/*	$server = "localhost";
    $user = "antoniob_antoniob";
    $pass = "C9x{!_A|r5TF6t3";
    $bd = "antoniob_baseejemplo";*/

  $conexion = mysqli_connect($server, $user, $pass,$bd);
	if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
else
echo "Se hizo conexion con la base de datos";
//echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

	//	mysqli_select_db('baseejemplo', $conexion);
      // or die("Ha sucedido un error inexperado en la conexion de la base de datos");
		//	$conn = new mysqli_connect($server, $user, $pass,$bd)
	  //   if ($conn->connect_errno()) {
	 //   echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
     //	}

    return $conexion;
   }
}
?>
