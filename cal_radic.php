<?php
echo "Bienvenido a la calculadora de Radicales, Ingrese el número que desea radicar:"."\n";
$numero = readline();
echo "Ingrese el radical que desea utilizar:"."\n";
$radical = readline();
if ($numero < 0 && $radical % 2 == 0) {
    echo "No se puede calcular la raíz par de un número negativo.\n";
    exit;
}
$aproximacion = 0.00001;
$resultado = 0.0;
while (raíz_aproximada($resultado, $radical) < $numero) {
    $resultado += $aproximacion;
}
echo "La raíz $radical de $numero es aproximadamente: " . round($resultado, 4) . "\n";
function raíz_aproximada($base, $exponente) {
    $resultado = 1.0;
    for ($i = 0; $i < $exponente; $i++) {
        $resultado *= $base;
    }
    return $resultado;
}
?>
