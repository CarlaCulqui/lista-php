<?php

   $numero = 5;
   $m = 0;

   while ($numero<= 40) {
    if ($numero % 5 == 0) {
        echo "<br> $numero";

    } elseif ($numero % 5!=0) {
        $numero = $numero + 1;
        echo "<br> $numero";
    }
    $numero = $numero + 5;
 }   
?>