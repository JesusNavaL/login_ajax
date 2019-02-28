<?php
require 'conexion.php';
sleep(2);
$consulta = $mysqli->query("SELECT Nombre FROM usuario
             WHERE Nombre = '".$_POST['usulog']."'
             AND Password = '".$_POST['passlog']."'");

if($consulta->num_rows==1){
	$datos= $consulta->fetch_assoc();
	echo json_encode( array('error' => false ));
}else{
	echo json_encode( array('error' => true));
}


$mysqli->close();
?>