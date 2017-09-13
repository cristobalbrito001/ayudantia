<?php 
	
	function guardar_formulario_alumno($nombre, $apellido, $rut)
	{
		require 'connecion.php';
		$sql="INSERT INTO alumno (nombre, apellido, rut) VALUES(?,?,?)";
		$smt = $conn -> prepare ($sql);
		$smt -> bindparam(1,$nombre);
		$smt -> bindparam(2,$apellido);
		$smt -> bindparam(3,$rut);
		$smt -> execute();
		$conn = null;
	}
	function guardar_formulario_ramo($ramo, $nota, $rut)
	{
		require 'connecion.php';
		$sql="INSERT INTO ramo (nombre_ramo,nota,rut) VALUES(?,?,?)";
		$smt = $conn -> prepare ($sql);
		$smt -> bindparam(1,$ramo);
		$smt -> bindparam(2,$nota);
		$smt -> bindparam(3,$rut);
		$smt -> execute();
		$conn = null;
	}
	
	
	if (isset($_REQUEST['alumno_formulario1'])) {
		$nombre=$_REQUEST['nombre'];
		$apellido=$_REQUEST['apellido'];
		$rut=$_REQUEST['rut'];
		guardar_formulario_alumno($nombre, $apellido, $rut);
	}
		if (isset($_REQUEST['ramo_formulario1'])) {
			$ramo=$_REQUEST['ramo'];	
			$nota=$_REQUEST['nota'];
			$rut=$_REQUEST['rut'];
			guardar_formulario_ramo($ramo, $nota,$rut);
	}
?>
