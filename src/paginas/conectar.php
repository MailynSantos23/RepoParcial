<?php
#$usuario = "root";
#$password = "root";
#$dbname = "programacion";

#try{
	#$conn = new PDO('mysql:host=;dbname='.$dbname, $usuario, $password);
	#$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Conexion satisfactoria";
#}catch(PDOException $e){
	#echo "ERROR: " . $e->getMessage();
	#die();
#}


$mysqli = new mysqli("parcial-mysql:3310", "demo", "12345", "programacion");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

?>
