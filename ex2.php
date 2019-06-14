<?php

/*2. Faça uma função que calcule a hipotenusa. Os catetos são os dados de entrada e a
hipotenusa é o dado de saída. */

function raiz ($catetoA, $catetoB){
    print sqrt (($catetoA**2)+($catetoB**2));
}



print "Cateto A: ";
$catetoA = (float) fgets (STDIN);

print "Cateto B: ";
$catetoB = (float) fgets (STDIN);

raiz($catetoA, $catetoB);
