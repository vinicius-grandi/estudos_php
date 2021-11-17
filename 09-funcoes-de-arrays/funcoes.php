<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções em Arrays</title>
</head>
<body>
    <h1>Funções em Arrays</h1>
    <?php
define('NOMES', ["macho1"=>"joão","macho2"=>"paulo","macho3"=>"maria"]);
// if(in_array("jaimin", $nomes)):
//     echo "Está no array.";
// else:
//     echo "Não está no array.";
// endif;

// $machos = array_values($nomes);
// print_r($machos);

$apelidos = ["Joãozin", "Vera", "Vini"];

// $merge = array_merge(NOMES, APELIDOS);
// print_r($merge)

// array_shift($apelidos);
// print_r($apelidos)

// array_push($apelidos, "macaco");
// print_r($apelidos)

// define("ANIMES", ["Steins;gate", "HxH", "Arifureta"]);
// define("RANKS", ["Excelente", "Ótimo", "Lixo"]);

// $animes = array_combine(RANKS, ANIMES);
// print_r($animes);

define("NUM", [1, 4, 5, 10]);
// echo "Soma: ".array_sum(NUM);

// $stg = "eu.sou.muito.bom";

// $exp = explode(".", $stg);
// print_r($exp)

echo implode("<br>", $apelidos)
    ?>
</body>
</html>