<?php
$mysqli = new mysqli ("utrm.mysql.database.azure.com","administrador@utrm","root12_12","utrmnombres");


if ($mysqli->connect_errno){
	 echo "La base de datos presenta demorar, no me culpe a mi, culpe a Azure"

	exit;
}

if (isset($_POST["user_nombre"], $_POST["user_email"]) and $_POST["user_nombre"] !="" and $_POST["user_email"] !=""){
	
$nombre = 	$_POST["user_nombre"];
$correo =   $_POST["user_email"]:

$consulta = "INSERT INTO nombreycorreo (nombre,correo)
VALUES ('$nombre','$correo')";

if (mysqli_query($mysqli,$consulta){
	 echo "<p>Registro agregado.</p>";
	 
}else{
	echo "<p>Fallo al agregar</p>";
}
	
}else{
	
	echo "<p>Ingrese los datos</p>";
}


?>

