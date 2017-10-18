<?php
 $mysqli = new  mysqli('localhost','root','','trabajo_ayudantia'); 
          $query="SELECT * FROM alumno";
          $result= $mysqli-> query($query);
    if ($_GET['param2']=="upla") {
    foreach($result as $fila){

         echo $fila['id']; 
         echo $fila['rut']; 
         echo $fila['nombre']; 
         echo $fila['apellido']; 
     }    
  }
  else{
    echo "0";
  }
  
        
    ?>