<!-- conexao.php -->
<?php

$host = 'localhost';
$dbname= 'hyperjacket';
$user = 'root';
$password = '';

$conexao = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
?>