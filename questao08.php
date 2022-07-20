<?php
   $n1 = $_POST['n1'];
   $n2 = $_POST['n2'];
   $n3 = $_POST['n3'];

   if(($n1 > $n2) && ($n1 > $n3))
     echo "O primeiro é maior.";
   else

      if(($n2 > $n1) && ($n2 > $n3))
         echo "O segundo é maior.";
    
      else
          echo "O terceiro é maior.";

    if(($n1 < $n2) && ($n1 < $n3))
          echo "O primeiro é menor";
    else

      if(($n2 < $n1)&& ($n2 <$n3))
          echo "O segundo número é menor";

        else
           echo "O terceiro é menor";


  
?>