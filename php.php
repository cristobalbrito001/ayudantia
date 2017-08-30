<?php

	$variable ="string";
	$alumno= ['cristobal'=>5.2,'diego'=>5.5,'felipe'=>5.5]
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<?php 
 		for ($i=0; $i < 5; $i++) { 
 			echo "<h1>".$variable."</h1>"; 
 		}
 	?>
 	<table style="border: solid 1px;">
 		<tr>
 			<td>alumno</td>
 			<td>nota</td>
 		</tr>
 		<tr>
 			<td>cristobal</td>
 			<td>5.0</td>
 		</tr>
 		<tr>
 			<td>diego</td>
 			<td>3.0</td>
 		</tr>
 	</table>
 	<table style="border: solid 1px;">
 	<?php foreach ($alumno as $key => $value): ?>
 		<tr>
 			<td><?php echo $key; ?></td>
 			<td><?php echo $value; ?></td>
 		</tr>
 	<?php endforeach ?>
 	</table>
 </body>
 </html>