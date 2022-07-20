<?php
   $imx = $_POST['imx'];

   $imx = $imx + 1;

    while($imx > 1){
    $imx = $imx - 1;

        if($imx % 2 != 0)
            echo "Número: $imx. ";
        }
?>