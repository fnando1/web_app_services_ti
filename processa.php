<?php

session_start();
include_once("conexao.php");



$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";
//echo "Telefone: $telefone <br>";
//echo "Senha: $senha <br>";

$result_cliente = "INSERT INTO cliente (nome, senha, telefone, email) VALUES ('$nome','$senha', '$telefone', '$email')";
 
$resultado_cliente = mysqli_query($conn, $result_cliente);


//Fim de processando dados de cadastro



?>