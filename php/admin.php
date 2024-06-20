<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cadastro</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    body {
      background-color: black;
      color: white;
    }


    .classic {

      position: absolute;

      top: 50%;

      left: 50%;

      transform: translate(-50%, -50%);

    }
  </style>
</head>

<body>
  <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <!-- <img src="../img/blackhat.png" class="img-fluid" width="40px"> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
          <a class="nav-link" href="entrar.php">Entrar</a>
          <a class="nav-link" href="../index.php">Sair</a>
          <a class="nav-link" href="?page=listar">Listar Usuários</a>
          <a class="nav-link" href="center.php">LH system</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <?php
        include("config.php");

        if ($_SESSION["cargo"] == 3) { // --verifica se ele é usuario normal e se for manda para a tela normal--
          print "<script>location.href='center.php';</script>";
        }



        switch (@$_REQUEST["page"]) {
          case "pageCadastrar":
            include("novo-usuario.php");
            break;
          case "listar":
            include("listar-usuario.php");
            break;
          case "pageEditar":
            include("editar-usuario.php");
            break;
          case "editar":
            include("salvar-usuario.php");
            break;
          case "excluir";
            include("salvar-usuario.php");

          default:
            print "<h1 class='classic'>Bem Vindo Admin!</h1>";
        }
        ?>
      </div>
    </div>
  </div>
  <div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>