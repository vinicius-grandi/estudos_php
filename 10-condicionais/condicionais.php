<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<h1>Aprendendo Condicionais</h1>
<body>
<?php

$num = 3;

// if($num > 5):
//     echo "é maior que 5";
// elseif($num < 4 && $num > 2):
//     echo "é menor que 4 e maior que 2";
// else:
//     echo "seu número é uma porcaria";
// endif

// echo ($num <= 3) ? "Número menor ou igual a 3" : "número porcaria";

$dia = 21;

switch($dia) {
    case 1:
        echo "Domingo";
break;
    case 2:
        echo "Segunda";
break;
    case 3:
        echo "Terça";
break;
    case 4:
        echo "Quarta";
break;
    case 5:
        echo "Quinta";
break;
    case 6:
        echo "Sexta";
break;
    case 7:
        echo "Sábado";
break;
    break;
    default: echo "<p>Este não é um dia da semana.</p>";
};
?>
</body>
</html>