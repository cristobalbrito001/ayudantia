<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 well">
					<form action="ramo.php" method="POST">
						nombre:<input type="text" name="nombre"><br>
						apellido:<input type="text" name="apellido"><br>
						rut: <input type="text" name="rut"><br>
						<input type="hidden" name="alumno_formulario1">
						<input type="Submit" value="enviar">
					</form>
			</div>
			<div class="col-md-6 well">
				<form action="ramo.php" method="POST">
					ramo:<input type="text" name="ramo"><br>
					nota:<input type="text" name="nota"><br>
					rut:<input type="text" name="rut"><br>
					<input type="hidden" name="ramo_formulario1">
					<input type="submit" value="enviar">
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-success btn-lg" onclick="precesardatoalumnos()">Consultas alumnos</button>
				
			</div>
		</div>
	</div>

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script>
			function precesardatoalumnos(){
				$.ajax({
  					method: "POST",
  					url: "ajax.php",
  					data: { nombre: "John"}
				})
  					.done(function( msg ) {
    					alert( "tu vieja se llama: " + msg );
  					});
			}
		</script>
</body>
</html>