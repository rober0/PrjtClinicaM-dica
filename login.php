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
        background-color: #e44e4e;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }
      .card {
        max-width: 900px;
        margin: auto;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      }
      .card img {
        object-fit: cover;
        height: 100%;
        border-radius: 1rem 0 0 1rem;
      }
      .form-control {
        font-size: 1rem;
        padding: 0.25rem;
      }
      .btn {
        font-size: 1rem;
        padding: 0.75rem 1.5rem;
      }
      .h1 {
        font-size: 2rem;
      }
      @media (max-width: 768px) {
        .card img {
          display: none;
        }
        .h1 {
          font-size: 1.5rem;
        }
      }
    </style>
  </head>

  <body style="background-color: #8fc4b7;">

    <div class="container">
      <div class="card" style="border-radius: 1rem;">
        <div class="row g-0">

        <div class="col-md-6 col-lg-5 d-none d-md-block">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" alt="login form" class="img-fluid" />
        </div>

        <div class="col-md-6 col-lg-7 d-flex align-items-center">
        <div class="card-body p-4 p-lg-5 text-black">
            <form>

        <div class="d-flex align-items-center mb-3 pb-1">
                <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                <span class="h1 fw-bold mb-0">Logo</span>
        </div>

            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

        <div data-mdb-input-init>
                <label class="form-label" for="form2Example17">Email</label>
                <input type="email" id="email" class="form-control form-control-lg" />
        </div>

        <div data-mdb-input-init>
                <label class="form-label" for="form2Example27">Senha</label>
                <input type="password" id="logpassword" class="form-control form-control-lg" />
                <img onclick="togglePassword()" id="togglepassw"
src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABDUlEQVQ4jd2SvW3DMBBGbwQVKlyo4BGC4FKFS4+TATKCNxAggkeoSpHSRQbwAB7AA7hQoUKFLH6E2qQQHfgHdpo0yQHX8T3exyPR/ytlQ8kOhgV7FvSx9+xglA3lM3DBgh0LPn/onbJhcQ0bv2SHlgVgQa/suFHVkCg7bm5gzB2OyvjlDFdDcoa19etZMN8Qp7oUDPEM2KFV1ZAQO2zPMBERO7Ra4JQNpRa4K4FDS0R0IdneCbQLb4/zh/c7QdH4NL40tPXrovFpjHQr6PJ6yr5hQV80PiUiIm1OKxZ0LICS8TWvpyyOf2DBQQtcXk8Zi3+JcKfNafVsjZ0WfGgJlZZQxZjdwzX+ykf6u/UF0Fwo5Apfcq8AAAAASUVORK5CYII=">
        </div>

<br>

        <div class="pt-1 mb-4">
                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="button">Login</button>
        </div>

                <a class="small text-muted" href="#!">Forgot password?</a>
                <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php" style="color: #393f81;">Register here</a>
                </p>

                <a href="#!" class="small text-muted">Terms of use.</a>
                <a href="#!" class="small text-muted">Privacy policy</a>


        <script> 
        function togglePassword() {
          let field = document.getElementById('logpassword');
      
          if (field.type === 'password') {
            field.type = 'text';
          } else {
            field.type = 'password';
          }
        }
        </script>
            </form>
        </div>
        </div>
        </div>
    </div>
    </div>
</body>
</html>
