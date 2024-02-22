<?php


echo "la tabla del 4 es:"."\n";
for ($i = 1; $i <=10; $i++){
    $tabla4 = 4;

    $resultado = $tabla4 * $i;

    echo  "4". "X". $i  . "=" . $resultado . "\n";
}

echo"\n";

echo "la tabla del 6 es:"."\n";
for ($i = 1; $i <=10; $i++){
    $tabla6 = 6;

    $resultado = $tabla6 * $i;

    echo  "6". "X". $i  . "=" . $resultado . "\n";
}

echo "Ingrese un número: ";
$variable1 = fgets(STDIN);

$resultado = 1;

for ($i = 1; $i <= $variable1; $i++){

    $resultado = $resultado * $i;

}

echo "Factorial de-". $variable1 . "-es-".  $resultado ."\n";
echo"\n";

echo "Ingrese un número: ";
$variable2 = fgets(STDIN);


$es_primo = true;

if($variable2 < 2) {
    $es_primo = false;

}else{
    for ($i = 2; $i <= $variable2 / 2; $i++){
        if ($variable2 % $i == 0){
            $es_primo = false;
            break;
        }
    }
}

if ($es_primo) {
    echo "$variable2 es un número primo.". "\n";
} else {
    echo "$variable2 no es un número primo.". "\n";
}

echo "Ingrese un numero: ";
$variable3 = fgets (STDIN);

if ($variable3 % 2 == 0){
    echo $variable3."es un numero par";
}else {
    echo $variable3. "es un numeor impar";
}


echo "Ingrese un numero: ";
$variable4 = fgets (STDIN);

echo "la tabla del". $variable4 ."es:"."\n";

for ($i = 1; $i <=10; $i++){
    $variable4=$variable4;

    $resultado = $variable4 * $i;

    echo $variable4 . "X". $i  . "=" . $resultado . "\n";
}