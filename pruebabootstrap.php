<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 well">
					<form action="alum.php" method="POST">
						nombre:<input type="text" name="nombre"><br>
						apellido:<input type="text" name="apellido"><br>
						rut: <input type="text" name="rut"><br>
						<input type="Submit" value="enviar">
					</form>
			</div>
			<div class="col-md-6 well">
				<form action="ramo.php" method="POST">
					ramo:<input type="text" name="ramo"><br>
					nota:<input type="text" name="nota"><br>
					<input type="submit" value="enviar">
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>