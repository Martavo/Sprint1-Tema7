<?php
include ('NumberChecker.php'); //hacemos el archivo con los resultados

$prueba = new NumberChecker(0);

if ($prueba->isEven()) {
    echo "es par";
} else {
    echo "es impar";
}
if ($prueba->isPositive()) {
    echo "es positivo";
} else {
    echo "es negativo";
}

?>