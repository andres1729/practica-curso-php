<?php

function operacion($a,$b,$operador){
	if ($operador='s'){
		$resultado=$a+$b;
		echo "EL resultado es".$resultado;
	}

	elseif ($operador='r') {
		$resultado=$a-$b;
		echo "EL resultado es".$resultado;
		# code...
	}
	elseif ($operador='m') {

		$resultado=$a*$b;
		echo "EL resultado es".$resultado;
		# code...
	}

	elseif ($operador='d') {

		$resultado=$a / $b;
		echo "EL resultado es".$resultado;
		# code...
	}
}

echo operacion(2,4,'m');














?>