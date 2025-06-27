<?php
echo "Bienvenido a la calculadora de Seno, Ingrese el valor de longitud del Lado Opuesto del triángulo rectángulo:"."\n";
$num1=readline();
echo "Ingrese el valor de longitud de la Hipotenusa del triángulo rectángulo:"."\n";
$num2=readline();
$res=$num1/$num2;
echo "El Seno del Lado Opuesto ($num1) y la Hipotenusa ($num2) es $res\n";
?>