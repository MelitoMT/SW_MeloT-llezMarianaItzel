<?php
    echo"<link rel='stylesheet' href='../Statics/Actividad8-Cesar.css'>";
    echo"<div></div>";
    echo"<div>";
    echo"<fieldset>";
    // !Cifrado César con módulos
    $str=$_POST['str'];
    // *Número pseudoaleatorio.
    $factor= rand(0,10000);
    /*Para evitar que se repitan lugares, el factor no puede ser conruente a 0 módulo longitud del abecedario, siendo este de 27, el factor par, no puede ser 
    congruente a 0 módulo 3 porque eso implicaría ser  a 0 modulo 27 y tampoco congruente a 1 modulo 27 porque implicaria que no se cifre. */
    while($factor%2==1 OR $factor%3==0 OR  $factor%27==1 ){
        $factor++;
    }     
    $abc=['Z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y',',','?','.',' '];
    $count=27;
    // *Se pasa la string a mayúsculas y se vuelve arreglo
    $str2=strtoupper($str);
    $str3=str_split($str2,1);
    /* Buscamos donde coincide el valor de nuestra string en nuestro arreglo y lo multiplicamos por nuestro factor, nos va a dar un número mayor que posiblemente 
    no esté en abc; sin embargo si hacemos una correspondencia este valor va tener la misma congruencia que la nueva letra que le corresponde, entonces sacamos la 
    congruencia y nos da la llave del elemento a imprimir*/
    foreach($str3 as $key => $value){
        foreach($abc as $key2 => $value2){
            if($value==$value2){
                if($key2==27 OR $key2==28 OR $key2==29 OR $key2==30){
                    $char=$key2;
                }
                else{
                    $a=$key2*$factor;
                    $char=$a%$count;
                }
                echo $abc[$char];
            }
        }
    }
    echo"</fieldset>";
    echo"</div>";
    echo"<div></div>";
?>