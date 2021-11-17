<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For e For Each</title>
</head>
<body>
    <h1>Aprendendo For e For Each</h1>
<?php
// for($c = 1; $c <= 10;$c++){
//     echo "$c x 12: ". "<strong>". $c * 12 . "</strong>"."<br>";
// }

define("MAT", ["ING", "MAT", "LPL"]);

$sum = 0;
foreach(MAT as $valor => $key) {
    $sum += (int)$key;
    echo $sum;
}

?>
</body>
</html>