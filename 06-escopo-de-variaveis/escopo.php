<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escopo</title>
</head>
<body>
    <h1>Compreendendo o escpo das variáveis</h1>
    <?php
        $a = 7;
        $b = 3;
        $nome = "joão";
        function nome() {
            global $nome;
            echo "Meu nome é $nome e eu gosto de melão.";
        }
        function soma() {
            echo $GLOBALS['a'] % $GLOBALS['b'];
        }
        define("CARRO", 
        ["hillux", "cedan", "gol", "volksvagen"]);
        echo CARRO[$b];
    ?>
</body>
</html>