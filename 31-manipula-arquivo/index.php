<?php
$ofile = fopen('arquivo.txt', 'r');
$filesize = filesize('arquivo.txt');

while(!feof($ofile)){
    $linha = fgets($ofile, $filesize);
    echo $linha. "<br>";
}
fclose($ofile);