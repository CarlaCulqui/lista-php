<?php
   $n1 = $_POST['n1'];
   $n2 = $_POST['n2'];

    if ($n1 > $n2)
        echo " $n1 é maior e $n2 é o menor.";
    else 
        echo " $n2 é maior e $n1 é menor.";
    
?>