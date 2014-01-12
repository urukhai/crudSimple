<?php
if (!empty($_POST)){
	include 'sql.php';
	if($_POST['accion'] == 'actualizar'){
		$sqlUpdate = "UPDATE `marca` SET `nombre_marca`='". $_POST['nombre_marca'] ."' WHERE (`id_marca`='". $_POST['id_marca'] ."')";
	}
	if($_POST['accion'] == 'eliminar'){
		$sqlUpdate =  "DELETE FROM `marca` WHERE (`id_marca`='". $_POST['id_marca'] ."')";
	}
	if($_POST['accion'] == 'insertar'){
		$sqlUpdate =  "INSERT INTO `marca` (`nombre_marca`) VALUES ('". $_POST['nombre_marca'] ."')";
	}	
	$conexion->query($conexion->run($sqlUpdate));
	$arrayMsj['success'] = $sqlUpdate;
    echo (json_encode($arrayMsj));
}
