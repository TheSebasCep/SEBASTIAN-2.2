<?php 
	$num1=$_POST["Numero1"];
	$num2=$_POST["Numero2"];
	$operaciones=$_POST["operacion"];

	if ($operaciones=="sumar") {
		$suma=$num1+$num2;
		echo "El resultado de la suma es: ".$suma;
	}
	elseif ($operaciones=="restar") {
		$resta=$num1-$num2;
		echo "El resultado de la resta es: ".$resta;
	}
	elseif ($operaciones=="multiplicar") {
		$mul=$num1*$num2;
		echo "El resultado de la multiplicacion es: ".$mul;
	}
	elseif ($operaciones=="dividr") {
		$div=$num1/$num2;
		echo "El resultado de la division es: ".$div;
	}
 ?>