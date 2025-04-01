<?php
    session_start();

        $conexao = mysqli_connect('localhost', 'root', '', 'users')
                    or die ('Não foi possível conectar');

        $Nome = $_POST['username'];
        $Email = $_POST['email'];
        $Senha = $_POST['password'];

        $query = "INSERT INTO userregistro (username, email, password) 
            VALUES ('$Nome', '$Email', '$Senha')";
        mysqli_query($conexao, $query);

        header("Location: register.html");
        exit;
    ?>