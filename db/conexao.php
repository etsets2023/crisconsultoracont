<?php
//CONFIGURAÇÕES GERAIS
$servidor = "localhost"; //BANCO LOCAL DO XAMPP
$usuario = "root"; //NOME PADRÃO DO USUÁRIO QUANDO TRABALHAMOS COM XAMPP (BANCO DE DADOS LOCAL), AO HOSPEDAR O SITE TEREMOS CRIAREMOS UM NOME DE USUÁRIO E UMA SENHA
$senha = "";
$banco = "sistema"; //NOME DO BANCO QUE CRIEI NO phpMyAdmin 

//CONEXÃO COM O BANCO       //PRIMEIRO PARAMETRO,         //SEGUNDO PARAMETRO
$pdo = new PDO("mysql: host = $servidor; dbname=$banco", $usuario, $senha);

?>



