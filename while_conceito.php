<?php

$i = 1;
while ($i <= 10){

    echo "<br>dentro do laço, contador = " . $i;

    $i++;

}


$i = 1;
while ($i < 1){ //testa primeiro e depois executa

    echo "<br>dentro do laço, contador = " . $i;

    $i++;
}

$i = 1;
do{ //do executa e depois testa o laço

    echo "<br>dentro do laço do, contador = " . $i;

    $i++;
} while ($i < 1);



?>