<?php
$res=0;
while (true){
echo "Bienvenido a la Calculadora Básica, ingrese la operación que desea realizar:"."\n"."\n"."1: Suma (+)"."\n"."2: Resta (-)"."\n"."3: Multiplicación (*)"."\n"."4: División (/)"."\n"."5: Salir"."\n";
$op=readline();
if ($op==1){
    echo "Ingrese la cantidad de números que desea sumar:"."\n";
    $cant=readline();
    for ($i=1;$i<=$cant;$i++){
    echo "Ingrese el número $i:"."\n";
    $num=readline();
    $res+=$num;
    }
echo "El resultado de la suma es $res"."\n";
}
elseif ($op==2){
    echo "Ingrese la cantidad de números que desea restar:"."\n";
    $cant=readline();
    echo "Ingrese el número 1:"."\n";
    $res=readline();
    for ($i=2;$i<=$cant;$i++){
    echo "Ingrese el número $i:"."\n";
    $num=readline();
    $res-=$num;
}
echo "El resultado de la resta es $res"."\n";
}
elseif ($op==3){
    echo "Ingrese la cantidad de números que desea multiplicar:"."\n";
    $cant=readline();
    echo "Ingrese el número 1:"."\n";
    $res=readline();
    for ($i=2;$i<=$cant;$i++){
        echo "Ingrese el número $i:"."\n";
        $num=readline();
        $res*=$num;
}
echo "El resultado de la multiplicación es $res"."\n";
}
elseif ($op==4){
    echo "Ingrese el dividendo:"."\n";
    $num1=readline();
    while (true){
    echo "Ingrese el divisor (Números diferentes a cero):"."\n";
    $num2=readline();
    if ($num2!=0){
        $res=$num1/$num2;
        break;
    }
    else {
        echo "El número divisior debe ser diferente de cero\n";
    }
    }
    echo "El resultado de la división es $res\n";
}
elseif ($op==5){
    break;
}
}
?>