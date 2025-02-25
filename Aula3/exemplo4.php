<?php
    //FUNÇÃO SEM PARAMETRO E COM RETORNO

    function msg(){
        $a = "Lucas";
        return $a;
    }

    $frase = "Olá ";
    $frase .= msg();

    echo $frase;
?>