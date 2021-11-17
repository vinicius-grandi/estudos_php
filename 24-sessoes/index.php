<?php
session_start();
$_SESSION["Amarelo"] = "Amarelo";
$_SESSION["AZUL"] = "Azul";
echo $_SESSION["Amarelo"]."<br>". $_SESSION["AZUL"]. "<br>". session_id();