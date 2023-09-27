<?php
    echo "Hello World!"; //mostra na tela

    //variaveis
    // toda variavel começa com $

    $a = 10;
    $b = 20;


    // operador de atribuição =

    $soma = $a + $b;

    echo "<br>".$soma; // HTML concatenado com variável PHP

    //  operadores aritmeticos
    
    /*$a + $b	Adição	Soma de $a e $b.
    $a - $b	Subtração	Diferença entre $a e $b.
    $a * $b	Multiplicação	Produto de $a e $b.
    $a / $b	Divisão	Quociente de $a e $b.
    $a % $b	Módulo	Resto de $a dividido por $b.
    $a ** $b	Exponencial	Resultado de $a elevado a $b.

    Exemplos
    */
    $sub = $a - $b;
    echo "<br>Subtração". $sub;

    $mult = $a * $b;
    echo "<br>Multiplicação". $mult;

    $div = $a / $b;
    echo "<br>Divisão". $div;

    $modulo = $a % $b;
    echo "<br>Módulo". $modulo;

    $exp = $a ** 3;
    echo "<br>Expoenciação". $exp;

   
    

?>



   <ul>

    <a href="index.php"><button>Voltar</button></a>

    </ul>