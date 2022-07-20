<?php
   
   $lado1 = $_POST['n1'];
   $lado2 = $_POST['n2'];
   $lado3 = $_POST['n3'];

   if(($lado1 == $lado2) && ($lado1 == $lado3))
     echo "O triangulo é equilátero.";
   else

      if(($lado2 == $lado1) && ($lado2 != $lado3))
         echo "O triangulo é isócele.";
    
      else
          echo "O triangulo é escaleno.";
  
?>