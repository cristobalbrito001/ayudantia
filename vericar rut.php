   <?php 
   $r=$_POST['rut'];
   $s=1;
     for($m=0;$r!=0;$r/=10)
         $s=($s+$r%10*(9-$m++%6))%11;
     //echo 'El digito verificador es: ',chr($s?$s+47:75);
     $x=chr($s?$s+47:75);
     echo $x
   ?>