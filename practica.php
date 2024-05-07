<?php
    echo "<h1>"."Hola mundo en PHP"."</h1>"."<br>";
    echo "<H2>"."Variables"."</h2>";
    $nombre = "Ramiro";
    $_edad = 34;
    echo "Mi nombre es: ".$nombre. " y mi edad es: ".$_edad."</br>";
    echo "<h2>"."Operadores de Comparación"."</h2>";
    $num1 = 5;
    $num2 = 6;
    echo "<h2>"."Estructura de Control IF"."</h2>";
    if($num1 > $num2)
        echo "Numero 1 es mayor";
    else
        echo "Numero 1 es menor"."</br>";

    echo "<h2>"."Operaciones Matemáticas"."</h2>";
    echo "Suma es: " .$num1 + $num2 ."</br>";
    echo "Multiplicación es: ".$num1 * $num2;

    echo "<h2>"."Estructura de Control WHILE"."</h2>";
    $n = 1;
    while ($n<=5) {
        echo "Hoy es lunes"."</br>";
        $n++;
    }

    echo "<h2>"."Estructura de Control DO WHILE"."</h2>";
    $n = 6;
    do {
        echo "Hoy es lunes"."</br>";
        $n++;
    }while ($n<=5);

    
?>