<?php

    include_once('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['tel'];

    $result_msg_cadastro = "INSERT INTO diverpet (nome, email, cpf, telefone) VALUES ('$nome', '$email', '$cpf', '$telefone', NOW())";
    $resultado_msg_cadastro = mysqli_query($conn, $result_msg_cadastro)
?>
