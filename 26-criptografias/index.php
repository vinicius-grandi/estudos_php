<?php
$senha = "123456";
$hash = '$2y$10$ZuJP7i3zv7eHVu3.0bnnkuliMLhpVpMiIW/goDkAMZh4ES4I88f4u';

if(password_verify($senha, $hash)) {
    echo "senha válida";
} else {
    echo "senha inválida";
}