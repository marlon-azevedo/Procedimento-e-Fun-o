<?php
/*Escreva um programa para ler o número de lados de um polígono regular e a medida
do lado (em cm). Faça uma função que receba como parâmetro o número de lados e
a medida do lado deste polígono e calcule e imprima o seguinte:
• Se o número de lados for igual a 3, escrever TRIÂNGULO e o valor do seu
perímetro. 
• Se o número de lados for igual a 4, escrever QUADRADO e o valor da sua área.
• Se o número de lados for igual a 5, escrever PENTÁGONO.
Observação: Considere que o usuário só informará os valores 3, 4 ou 5. */

function poligono($lados){
    if ($lados == 3){
        print "TRIÂNGULO! \n\n";

        print "Digite a medida do 1° lado(cm): ";
        $lado1 = (float) fgets (STDIN);
        print "Digite a medida do 2° lado(cm): ";
        $lado2 = (float) fgets (STDIN);
        print "Digite a medida do 3° lado(cm): ";
        $lado3 = (float) fgets (STDIN);

        $perimetro = $lado1+$lado2+$lado3;
        
        
        print "Perímetro = $perimetro \n";
    }
    if ($lados == 4){
        print "QUADRADO! \n\n";
        
        print "Digite a medida do 1° lado(cm): ";
        $lado1 = (float) fgets (STDIN);
        print "Digite a medida do 2° lado(cm): ";
        $lado2 = (float) fgets (STDIN);
        

        $area = $lado1*$lado2;
        
        
        print "Área = $area \n";
    }
    if ($lados == 5){
        
        
        print "PENTÁGONO! \n";
        
    }

}

print "Quantidade de lados(3, 4 ou 5): ";
$lados = fgets (STDIN);

poligono($lados);


