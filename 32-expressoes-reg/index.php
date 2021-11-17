<?php

$string = "";
// $padrao = "/^[a-z0-9\.\-\_]+@[a-z0-9\.\-\_]\.(com|br|com.br|net)$/i"; // Email
// $padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/"; // Data
// $padrao = "/^[0-9]{2}9[0-9]{8}$/"; // Telefone 
// $padrao = "/^[0-9]{5}-[0-9]{3}$/"; // CEP

if(preg_match($padrao, $string)) {
    echo "válido <br>";
    echo $string;
} else {
    echo "inválido <br>";
    echo $string;
}