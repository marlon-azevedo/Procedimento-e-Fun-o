<?php

/*Escreva uma função que receba um número natural e imprima os três primeiros
caracteres do dia da semana correspondente ao número. Por exemplo, 7 corresponde
a “SAB”. O procedimento deve mostrar uma mensagem de erro caso o número
recebido não corresponda a um dia da semana. Gere também um programa que
utilize essa função, chamando-a, mas antes lendo um valor para passagem de
parâmetro.*/

function dia_semana($valor){
    if ($valor == 1){
        print "DOM \n\n";
    }
    if ($valor == 2){
        print "SEG \n\n";
    }
    if ($valor == 3){
        print "TER \n\n";
    }
    if ($valor == 4){
        print "QUA \n\n";
    }
    if ($valor == 5){
        print "QUI \n\n";
    }
    if ($valor == 6){
        print "SEX \n\n";
    }
    if ($valor == 7){
        print "SAB \n\n";
    }
    
    if(($valor < 0) or ($valor > 7)){
        print "ERRO 2019 - Número não conta em nosso sistema! \n\n";
    }
}

print "Digite um valor inteiro: ";
$valor = (int) fgets (STDIN);

dia_semana($valor);