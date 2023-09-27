<?php

/*
       1-crie uma variavel do tipo array com o nome frutas
       esse array deve ter os seguintes elementos
       mamão,maça,melão
        
       2- utilizando as funções de array faça:
            a- inclusao de uma nova fruta no início do array
            b-inclusao de uma nova fruta no final do array
            c- exclusao da fruta que está na posição 1
            d- exclusão da fruta que está na última posição do array
            e- alteração da fruta que está na posição 01 por maracujá
        
        3- A cada alteraçao no array realize um print_r ou var_dump
            para comprovar os resultados obtidos    



*/

    $array=["mamão","maça","melão"];
    echo "<pre>  ";
    print_r($array);
    echo "</pre>";

    array_unshift($array, "kiwi");
    echo "<pre> Início ";
    print_r($array);
    echo "</pre>";

    array_push($array,"banana");
    echo "<pre> Final ";
    print_r($array);
    echo "</pre>";

    array_splice($array, 1,1,);
    echo "<pre> Exclusão Início ";
    print_r($array);
    echo "</pre>";

    array_pop($array);
    echo "<pre> Exclusão Final ";
    print_r($array);
    echo "</pre>";

    array_splice($array, 1, 1,["maracujá"]);  
    echo "<pre> Alteração ";
    print_r($array);
    echo "</pre>";

?>