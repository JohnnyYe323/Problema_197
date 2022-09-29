<?php
$frase=$_POST['mensaje'];

//VARIABLES 

$par="";
$impar="";
$vocales=array("A", "E", "I", "O", "U", "a", "e", "i", "o", "u");
$fraseTrasformada="";
$letras="";

//recorremos la frase añadida por el formulario y guardamos las letras con indice impar y par por separado

for ($i=0;$i<strlen($frase);$i++){
    if ($i % 2 == 0){
        $par=$par.$frase{$i};
    } else {
        $impar=$impar.$frase{$i};
    }
}
//invierto el string guardado en impar

$impar=strrev($impar);

//juntamos las letras con indices pares y impares revertidas para tener la frase

$final=$par.$impar;

//volvemos a recorrer la frase y hacemos la imagen especular de las consonantes seguidas

for ($i=0;$i<strlen($final);$i++){
    if (in_array($final{$i},$vocales)){
        $letras=strrev($letras);
        $fraseTrasformada=$fraseTrasformada.$letras.$final{$i};
        $letras="";
    } else {
        $letras=$letras.$final{$i};
    }
}
echo $fraseTrasformada;

