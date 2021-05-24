<?php
	if(isset($_POST['n1']) && isset($_POST['n2'])){
		$n1 = $_POST['n1'];
		$n2 = $_POST['n2'];
		$opcion = $_POST['opc'];
		//evaluando la operacion a realizar
		switch($opcion){
			case 's' :
				echo "La Suma es: ".sumar($n1,$n2);
				break;
			case 'r':
				echo "La resta es:".restar($n1,$n2);
				break;
			case 'm' :
				echo "La multiplicación es:".multiplicar($n1,$n2);
				break;
			case 'd' :
				echo "La división es:".dividir($n1,$n2);
				break;
		}
	}
	//Creando funciones para las operaciones 
	function sumar($num1,$num2){
		return $num1+$num2;
	}
	function restar($num1,$num2){
		return $num1-$num2;
	}
	function multiplicar($num1,$num2){
		return $num1*$num2;
	}
	function dividir($num1,$num2){
		return $num1/$num2;
	}
?>	