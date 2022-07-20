<?php

   $num = $_POST['num'];

   if ($num > 0) {
     echo 'O número informado é positivo';
   } else {

       if($num == 0) {
          echo "Nulo";
       } else {
          echo "O número informado é negativo";
       }
   }
?>
