<?php 
	require_once "connecion.php";
	$smt = $conn->prepare("SELECT * FROM Alumnos");
	$smt -> execute();
	$resultado = $smt->fetchAll();
	
	echo "<pre>";
	//print_r ($resultado);
	echo "</pre>";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<table>
 		<tr>
 			<td>ID</td>
 			<td>ALUMNO</td>
 			<td>NOTAS</td>
 		</tr>
 		<?php foreach ($resultado as $key => $value) : ?>
			<tr>
				<td><?php echo $value['id']; ?></td>
				<td> <?php echo $value['nombre']; ?></td>
				<td> <?php echo $value['nota']; ?></td>
			</tr>
 		<?php endforeach ?>
 	</table>
 </body>
 </html>