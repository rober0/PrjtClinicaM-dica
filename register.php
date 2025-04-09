<?php
    session_start();

        $conexao = mysqli_connect('localhost', 'root', '', 'users')
                    or die ('Não foi possível conectar');

        $Nome = $_POST['username'];
        $Email = $_POST['email'];
        $Senha = $_POST['password'];
        $Ocupacao = $_POST['ocupacao'];

        $query = "INSERT INTO userregistro (username, email, password, ocupacao) 
            VALUES ('$Nome', '$Email', '$Senha', '$Ocupacao')";

        mysqli_query($conexao, $query);

        header("Location: register.html");
        exit;
    ?>