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
        // Verifica se o usuário já existe
        $verifica = mysqli_query($conexao, "SELECT * FROM userregistro WHERE email = '$Email'");
        if (mysqli_num_rows($verifica) > 0) {
            echo "Usuário já cadastrado!";
            exit;
        }
        // Verifica se a senha tem mais do que 45 caracteres
        if (strlen($Senha) > 45) {
            echo "A senha não pode ter mais do que 45 caracteres!";
            exit;
        }
        // Verifica se o nome de usuário tem pelo menos 45 caracteres
        if (strlen($Nome) < 3) {
            echo "O nome de usuário deve ter pelo menos 45 caracteres!";
            exit;
        }
        // Verifica se o email é válido
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            echo "Email inválido!";
            exit;
        }
        // Verifica se a ocupação é válida
        $ocupacoes_validas = ['paciente', 'medico'];
        if (!in_array($Ocupacao, $ocupacoes_validas)) {
            echo "Ocupação inválida!";
            exit;
        }
        mysqli_query($conexao, $query);

        header("Location: register.html");
        exit;
    ?>