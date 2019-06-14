<?php

/*Escreva um programa para ler as notas das duas avaliações de um aluno no semestre.
Faça uma função que receba as duas notas por parâmetro e calcule e escreva a média
semestral e a mensagem “PARABÉNS! Você foi aprovado!” somente se o aluno foi
aprovado (considere 6.0 a média mínima para aprovação).*/

function media ($nota1, $nota2){
    $media = ($nota1 + $nota2)/2;
    if ($media >= 6){
        print "Média = $media \n";
        print "PARABÈNS! Você foi provado! \n" ;
    }
    else{
        print "Média = $media \n";
        print "Infelizmente, você foi reprovado! \n" ;
        
    }
}

print "NOTA 1 = ";
$nota1 = (float) fgets (STDIN);

print "NOTA 2 = ";
$nota2 = (float)  fgets (STDIN);

media($nota1, $nota2);