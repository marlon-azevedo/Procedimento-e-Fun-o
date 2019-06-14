<?php 

/*Crie uma função que realize a conversão de Polegadas (pol) para Centímetros (cm),
onde pol é passado como parâmetro e cm é retornado. Sabe-se que 1 polegada tem
2.54 centímetros. Crie também um programa para testar tal função.*/

function conversor($polegadas){

    $centimetros = 2.54 * $polegadas;

    return $centimetros;
}


print "Polegadas: ";
$polegadas = (float) fgets (STDIN);

$centimetros = conversor($polegadas);

print "$polegadas polegadas, correpondem a $centimetros centímetros. \n\n";