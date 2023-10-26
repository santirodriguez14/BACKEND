<?php
    echo "Hola Mundo";
    echo "<br>";
    $variable = 5;
    echo $variable;

    //Operaciones aritméticas
    $numero1 = 5;
    $numero2 = 10;

    //Suma
    echo $numero1 + $numero2;
    echo "<br>";

    //Resta
    echo $numero1 - $numero2;
    echo "<br>";

    //Multiplicación
    echo $numero1 * $numero2;
    echo "<br>";


    //División
    echo $numero2 / $numero1;
    echo "<br>";

    //Resto
    echo $numero2 % $numero1;
    echo "<br>";
    echo "<br>";

    //Grados C a F

    $temperaturaC = 20;
    $formula = 1.8;
    $sumatoria = 32;

    echo ($temperaturaC * $formula) + $sumatoria;

    echo "<br>";
    echo "<br>";

    //EJERCICIO 5

    //Perímetro y área del rectangulo
    $baseR = 18;
    $alturaR = 12;

    echo "Perimetro Rectangulo = ", ($baseR * 2) + ($alturaR * 2);
    echo "<br>";
    echo "Area Rectangulo =", ($baseR * $alturaR);

    echo "<br>";
    //Perímetro y área del círculo
    $radio = 30;
    $pi = M_PI;
    $perimetroCirculo = 2 * $pi * $radio;
    $areaCirculo = $pi * ($radio * $radio);
    echo "Area del círculo: " . $areaCirculo . " cm2";
    echo "<br>";
    echo "Perímetro del círculo: " . $perimetroCirculo . " cm"; 

    echo "<br>";
?>