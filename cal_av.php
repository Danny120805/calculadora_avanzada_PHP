<?php
$finish=false;
while (!$finish){
echo "Bienvenido, seleccione una de las siguientes opciones para utilizar la calculadora:"."\n"."\n"."1: Operaciones básicas (Suma, Resta, Multiplicación y División)"."\n"."2: Radicación"."\n"."3: Seno"."\n"."4: Salir"."\n";
$opt = readline();
if ($opt==1){
    require "cal_bas.php";
    echo "\n";
}
elseif ($opt==2){
    require "cal_radic.php";
    echo "\n";
}
elseif ($opt==3){
    require "cal_sen.php";
    echo "\n";
}
elseif ($opt==4){
    exit;
    echo "Programa finalizado"."\n";
    $finish=true;
}
else {
    echo "La opción ingresada no es válida"."\n";
}

}
?>