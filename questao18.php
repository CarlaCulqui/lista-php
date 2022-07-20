<?php

    $i = 1;
    $j = 0;

    while ($i <= 250){
        $i = $i + 1; 

        if ($i % 2 == 0){
            echo " <br> $i ";
            $j = $j + $i;
            }
        }
        echo "<br> <br> A soma é igual a: $j";
?>