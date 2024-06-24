<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cadastro</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../style.css">
  <link href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="index.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>
  <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">

          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          <a class="nav-link" href="php/entrar.php">Entrar</a>
          <a class="nav-link" href="?page=pageCadastrar">Novo Usuário</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <img src="img/blackhat.png" id="hat">
        <?php
        include("php/config.php");

        switch (@$_REQUEST["page"]) {
          case "pageCadastrar":
            include("php/novo-usuario.php");
            break;
          case "pageEditar":
            include("php/editar-usuario.php");
            break;
          case "editar":
            include("php/salvar-usuario.php");
            break;
          case "excluir";
            include("php/salvar-usuario.php");
          default:
            echo "
          <div class='classic'>
           <h2 >Olá seja bem vindo ao LH system </h2>
           <p>Este é o meu primeiro CRUD (Create, read, update e delete). Para acessar basta se cadastrar!</p>    
          </div>";
        }
        ?>
        <?php
        $logout = strpos($_SERVER["REQUEST_URI"], 'page=');



        if (!$logout) {
        }
        ?>

      </div>
    </div>
  </div>
  <div>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
