<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LH Login</title>
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background: linear-gradient(45deg, #070711, #510d2d, #0c0ca5, #9d2a1d);
      background: -webkit-linear-gradient(45deg, #070711, #510d2d, #0c0ca5, #9d2a1d);
      background: -o-linear-gradient(45deg, #070711, #510d2d, blue, #9d2a1d);
      background: -moz-linear-gradient(45deg, #070711, #510d2d, blue, #9d2a1d);
      color: white;
      animation: colors 12s ease infinite reverse;
      width: 100%;
      height: 90em;
      background-size: 300% 300%;
    }

    #hat {
      width: 55px;
      position: absolute;
      left: 22px;
      top: -25px;
      pointer-events: none
    }

    .login {
      width: 100%;
      height: 100vh;
      align-items: center;
      justify-content: center;
      display: flex;

    }



    @keyframes colors {
      0% {
        background-position: 0% 50%;
      }

      25% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }
  </style>

</head>

<body>

  <div class="login">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 off-set-lg-4"></div>
        <div class="card">
          <div class="card-body">
            <div class="card-body">
              <img src="../img/blackhat.png" id="hat">

              <h3 id="login">Login</h3>
            </div>
            <form action="login.php" method="POST">
              <div>
                <div class="mb-3">
                  <div class="mb-3 form-label">
                    <label>Usuário </label>

                    <input type="text" name="usuario" class="form-control">
                  </div>
                </div>
                <div>
                  <div class="mb-3">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control">

                  </div>
                  <div>
                    <div class="mb-3 d-grid gap-2 col-6 mx-auto">
                      <button type="submit" class="btn btn-dark">Entrar</button>
                      <a href="../index.php" class="btn text-center"> Voltar</a>
                    </div>

                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
