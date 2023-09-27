<?php

// laço de repetição for


for( $i=1 ; $i<10 ; $i++ ){
// inicial comp saida

    
    if( $i == 5 || $i == 8){
        // break; //intenrrompe o laço
        //$i = 100;
        continue; //Vai continuar o laço tudo que estiver embaixo dele nao sera executado
    } else{
        echo "<br>i = ". $i;

    } 

}



?>