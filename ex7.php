<?php

/*Escreva uma função que receba um número inteiro e imprima o mês correspondente
ao número. Por exemplo, 2 corresponde a “fevereiro”. O procedimento deve mostrar
uma mensagem de erro caso o número recebido não faça sentido. Gere também um
programa que leia um valor e chame a função criada.*/

function mes($valor){
    if ($valor == 1){
        print "Janeiro \n\n";
    }
    if ($valor == 2){
        print "Fevereiro \n\n";
    }
    if ($valor == 3){
        print "Março \n\n";
    }
    if ($valor == 4){
        print "Abril \n\n";
    }
    if ($valor == 5){
        print "Maio \n\n";
    }
    if ($valor == 6){
        print "Junho \n\n";
    }
    if ($valor == 7){
        print "Julho \n\n";
    }
    if ($valor == 8){
        print "Agosto \n\n";
    }
    if ($valor == 9){
        print "Setembro \n\n";
    }
    if ($valor == 10){
        print "Outubro \n\n";
    }
    if ($valor == 11){
        print "Novembro \n\n";
    }
    if ($valor == 12){
        print "Dezembro \n\n";
    }
    if(($valor < 0) or ($valor > 12)){
        print "ERRO 2000 - Número não conta em nosso sistema! \n\n";
    }
}

print "Digite um valor inteiro: ";
$valor = (int) fgets (STDIN);

mes($valor);