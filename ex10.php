<?php

/*Criar uma função que calcule e retorne o MAIOR entre dois valores recebidos como
parâmetros. Um algoritmo para testar tal função deve ser criado.*/

function maior($n1, $n2){
    if ($n1>$n2){
        print "Maior = $n1 \n\n";
    }
    else{
        print "Maior = $n2 \n\n";
    }
}

print "Digite um número: ";
$n1 = (float) fgets (STDIN);

print "Digite um número: ";
$n2 = (float) fgets (STDIN);

maior($n1, $n2);