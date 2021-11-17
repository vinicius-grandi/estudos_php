<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While e do while</title>
</head>
<body>
    <h1>Aprendendo while e do while</h1>
<?php
$n = 1;
while($n <= 10) {
    echo "Passo: $n <br>";
    ++$n;
}

if($n == 10) {
    echo "n é igual 11";
} else {
    echo "n é diferente de 11";
}
// do {
//     echo "Passo: $n <br>";
//     ++$n;}
// while($n <= 10);
?>
</body>
</html>