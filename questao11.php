<?php

   $num = $_POST['num'];
   if (($num >= 10) && ($num <= 500)) {
      echo "Esse valor se encontra em um intervalo de 10 a 500.";
 }
    else {
      echo "Esse valor não se encontra em um intervalo de 10 a 500.";
 }

?>