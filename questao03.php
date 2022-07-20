<?php
    
    $echo = 0;
    $time = $_POST['time'];
    $hora = 0;
    $minuto = 0;
    

    $hora = date('H', strtotime($time));
    $minuto = date('i',  strtotime($time));

    $time = ($hora * 60 ) + $minuto;

    $echo = "Se passaram ($time) minutos!";

    echo "<p>Resultado:</p> $echo";
    
?>