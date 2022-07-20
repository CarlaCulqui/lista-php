<?php
	$a = $_POST ['num1'];
	$b = $_POST ['num2'];
	$op = $_POST ['operacao'];
    $calculo;

	if ($op == "+"){
		$c = $a + $b;
        echo "o valor da soma dos números é $c";
    }

    else if ($op == "-"){
        $c = $a - $b;
        echo "o valor da subtração dos números é $c";
    }

    else if ($op == "*"){
        $c = $a * $b;
        echo "o valor da mutiplicação dos números é $c";
    }
    
    else {
        $c = $a / $b;
        echo "o valor da divisão dos números é $c";
    }
?>