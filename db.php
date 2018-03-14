<?php  
	$user="root";
	$pass="";
	$server="localhost";
	$db="anime";
	
	$con=mysqli_connect($server,$user,$pass) or die ("error al coconectar");

	$conexion=mysqli_connect($server,$user,$pass,$db) or die("Problemas con la conexión");
?>

<?php 
/*
function conectar (){
	
	if (!($link=mysqli_connect("localhost","root","prueba","")) {
		echo "Error conectado con la base de datos";
		exit();
	}
	return $link;
}

$link=conectar();
echo "Conectado con la base de datos";
mysqli_close($link);
*/
?>

