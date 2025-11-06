<?php

    require_once "admin/config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO usuario (nome, email, senha)
                VALUES ('$nome', '$email', '$senha')";
        if(mysqli_query($conexao, $sql)){
            echo "<h3>Cliente cadastrado com sucesso!</h3>";
        }else{
            echo "<h3>Erro ao cadastrar usuario!</h3>";
        }
    }