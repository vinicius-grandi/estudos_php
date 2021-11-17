<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Criando Arrays</h1>
<?php
$sorvete = ['baunilia', 'maracujá', 5=>'murango', 'limão'];
$sorvete[] = "chocolate <br>";
////////////////////////////////////////
$numeros = [2, 5, 6, 1, 6];
$res = 0;

foreach($numeros as $valor) {
    global $res;
    $res += $valor;
};
/////////Arrays associativos////////////
$pessoa = ["nome"=> "joão", "idade" => 33, "sexo"=> "masculino"];
// echo $pessoa["idade"];
////////Arrays multidimensionais///////////
$boneca = [
"russa" => ["drussa" => "bonequinha", "bonequinho"],
"russa2" => ["bonequin", "bonecoza"]
];

// echo $boneca["russa"]["drussa"];
//////////////////////////////////////////
$times = [
"paulistas"=> ["Campeão"=> "santos","Vice"=> "são paulo","Terceiro"=> "palmeiras"],
"baianos"=> ["Campeão"=>"bahia","Vice"=> "vitoria","Terceiro"=> "itabuna"]
];

echo "<strong>Paulistas</strong>:<br>";
foreach($times["paulistas"] as $indice => $valor) {
    echo "$indice : $valor <br>";
};


echo "<br>";

echo "<strong>Baianos</strong>:<br>";
foreach($times["baianos"] as $indice => $valor) {
    echo "$indice : $valor <br>";
};


?>
</body>
</html>