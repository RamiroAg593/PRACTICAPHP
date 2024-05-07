<?php
function saludo(){
    echo "<h2>"."Saludo"."</h2>";
    echo date ('Y-m-d');
}

function saludar($nombre, $apellido){
    echo "<h2>"."Saludo"."</h2>";
    echo "<h3>"."Mi nombre es: ".$nombre." ".$apellido."</h3>";
    echo date ('Y-m-d');
}

function sumar($a, $b, $c){
    echo "<h2>"."La suma es"."</h2>";
    $r= $a+$b+$c;
    echo "<h3>".$r."</h3>";
    
}

function multiplicar($a, $b, $c){
    echo "<h2>"."La sresultado es"."</h2>";
    $r= $a * $b * $c;
    echo "<h3>".$r."</h3>";
    
}



echo "<h1>"."Funciones PHP"."</h1>";



echo saludo();
echo saludo();
echo saludar("Ramiro","Agila");
echo saludar("Diana","Torres");
$num1 = 8;
$num2 = 6;
$num3 = 4;
echo sumar($num1, $num2, $num3);
echo multiplicar($num1, $num2, $num3);



?>