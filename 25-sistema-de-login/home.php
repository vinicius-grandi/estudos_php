<?php
// Conexão
require_once "db_connect.php";
// Sessão
session_start();
// Verificação
if(!isset($_SESSION["logged"])) {
    header("location: index.php");
}
// Dados
$id = $_SESSION["user_id"];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$res = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($res);
mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu circular</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h1>Olá <?php echo $dados["nome"]; ?></h1>
    <div id="c-menu">
        <div id="s-menu"></div>
        <a href="logout.php" class="item1">
            <div class="item1 menu" aria-label="LOGOUT" title="LOGOUT"></div>
        </a>
        <img src="images/home.png" alt="icone home" class="icons" id="i1">
        <a href="logout.php" class="item2">
            <div class="item2 menu" ></div>
        </a>
        <img src="images/carrinho.png" alt="icone loja" class="icons" id="i2">
        <a href="#" class="item3">
            <div class="item3 menu"></div>
        </a>
        <img src="images/download.png" alt="icone download" class="icons" id="i3">
        <a href="#" class="item4">
            <div class="item4 menu">
            </div>
        </a>
        <img src="images/phone-call-icon.png" alt="icone fale conosco" class="icons" id="i4">
    </div>
    <script src="script.js"></script>
</body>
</html>