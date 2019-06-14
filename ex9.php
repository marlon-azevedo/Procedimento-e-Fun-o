<?php

/*Escreva uma função que receba dois números inteiros x e y. Essa função deve
verificar se x é divisível por y. No caso positivo, a função deve retornar 1, caso
contrário zero. Escreva também um programa para testar tal função.*/

function divisivel($x, $y){
    $divisao = $x % $y;
    if ($divisao == 0){
        print "O valor X é divisível por Y \n\n";
    }
    else{
        print "O valor X NÃO é divisível por Y \n\n";
    }
}
print "Digite um número X: ";
$x = (float) fgets (STDIN);

print "Digite um número Y: ";
$y = (float) fgets (STDIN);

divisivel($x, $y);