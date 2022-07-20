<?php 

   $n1 = $_POST['n1']; 
   $n2 = $_POST['n2']; 
    
   if ($n1 == $n2) echo "Os números são iguais."; 
   else 

   if ($n1 > $n2) echo "Os números são diferentes e $n1 é maior que $n2."; 
   else 
   echo "Os números são diferentes e $n2 é maior que $n1.";      

?>