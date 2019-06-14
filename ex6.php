<?php

/*Escreva uma função que recebe 2 números inteiros n1 e n2 como entrada e retorna a
soma de todos os números inteiros contidos no intervalo [n1,n2]. Use esta função em
um programa que lê n1 e n2 do usuário e imprime a soma.*/

function intervalo($n1, $n2){

    $cont = $n1;
    $soma = 0;
    while($cont < $n2){
    
    $soma = $soma + $n1;
    $cont = $n1++;
    }
    return $soma;
}

print "Número 1(n1): ";
$n1 = (float) fgets (STDIN);

print "Nùmero 2(n2): ";
$n2 = (float) fgets (STDIN);

$soma = intervalo($n1, $n2);
print "A soma de todos os número inteiros do intervalo [n1, n2] é $soma \n\n";