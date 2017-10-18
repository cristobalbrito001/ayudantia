<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<button onclick="ejecutarAjax('upla')">presioname</button>
	<div id="resultado"></div>
	<script src=js/jquery-3.2.1.min.js></script>
	<script>
		function ejecutarAjax(universidad){
			
			$.ajax({
			url: 'procesar.php',
			data: {param1: 'value1' , param2:universidad},
			beforeSend: function(){
				$("#resultado").html('');
				$("#resultado").append("enviando");
			},
		})
		.done(function(data) {
				$("#resultado").html('');
				$("#resultado").append(data);
			if (data =='1') {
				alert("si es upla");
				alert(data)
			}
		})
		.fail(function() {
			$("#resultado").html('');
				$("#resultado").append("error");
		})
		.always(function() {
			alert("complete");
		});
		
		}
	</script>
</body>
</html>