<?php

function operacion($b,$a,$operador){


/*Del manual de PHP que se encuentra en https://www.php.net/manual/es/control-structures.switch.php, Se usa la sentencia switch que es similar a una serie de sentencias IF en la misma expresión. En esta ocasion, se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es que usamos la expresión switch.
*Habia considerado primero el sigueinte codigo
*<?php
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
*Luego de leer el manual me parecio mas comodo para es caso en particular trabajar con la setencia switch */
    switch ($operador) {

        case 's':

            $resultado = $a + $b;

            break;

        case 'r':

            $resultado = $a - $b;

            break;

        case 'm':

            $resultado = $a * $b;

            break;

        case 'd':

            $resultado = $a / $b;

            break;

    }

    return $resultado;

}

 /* aqui ya podemos considerar cualquier valor para $a y $b y cualquiera de las operaciones definidas.
 por ejemplo consideremos $a=2 y $b=7 y $operador='d'*/

echo operacion(2,7,'d');