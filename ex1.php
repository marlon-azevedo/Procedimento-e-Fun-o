<?php

/*1. Faça uma função para converter uma temperatura em graus Fahrenheit para Celsius. A
temperatura em Fahrenheit é o dado de entrada e a temperatura em Celsius é o dado
de saída. Utilize a fórmula C = (F - 32) * 5/9, onde F é a temperatura em Fahrenheit e
C é a temperatura em Celsius. */

function graus($fahrenheit){
    $celsius = ($fahrenheit - 32)*(5/9);
    print "A temperatura é $celsius ° celsius.";
}

print "Temperatura em Fahrenheit: ";
$fahrenheit = (float) fgets (STDIN);

graus($fahrenheit);



