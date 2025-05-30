<?php

include 'conexao.php';

if(isset($_POST['submit'])){

   $Nome = mysqli_real_escape_string($conn, $_POST['username']);
   $Email = mysqli_real_escape_string($conn, $_POST['email']);
   $Senha = ($_POST['password']);
   $Ocupacao = $_POST['ocupacao'];

   $select = " SELECT * FROM userregistro WHERE email = '$Email' && password = '$Senha' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'O usuário já existe!';

   }else{

    $query = "INSERT INTO userregistro (username, email, password, ocupacao) 
            VALUES ('$Nome', '$Email', '$Senha', '$Ocupacao')";
         mysqli_query($conn, $query);
         header('location:login.php');
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healenth</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.2.0/mdb.min.css" rel="stylesheet" />
    <style>
      body {
        background-color: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }
      .card {
        max-width: 800px;
        margin: auto;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      }
      .form-control {
        font-size: 1rem;
        padding: 0.25rem;
      }
      .btn {
        font-size: 1rem;
        padding: 0.75rem 1.5rem;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="card" style="border-radius: 1rem;">
        <div class="row g-0">
          <div class="col-md-6 col-lg-7 d-flex align-items-center">
            <div class="card-body p-4 p-lg-5 text-black">
              <form action="register.php" method="post">
                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Registre-se</h5>
                <div>
                  <label class="form-label" for="nome">Nome</label>
                  <input type="text" name="username" required="" class="form-control form-control-lg" />
                </div>
                <br>
                <div>
                  <label class="form-label" for="email">Email</label>
                  <input type="email" name="email" required="" class="form-control form-control-lg" />
                </div>
                <br>
                <div>
                  <label class="form-label" for="senha">Senha</label>
                  <input type="password" name="password" required="" class="form-control form-control-lg">
                </div>
                <br>
                <div>
                  <label class="form-label" for="ocupacao">Ocupação</label>
                  <select name="ocupacao" id="ocupacao" required="" class="form-control form-control-lg">
                    <option value="">Selecione</option>
                    <option value="paciente">Paciente</option>
                    <option value="medico">Médico</option>
                  </select>
                </div>
                <br>
                  <input class="btn btn-primary btn-lg" type="submit" value="Enviar" name="submit" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>