<link rel="stylesheet" href="../cadastro.css">
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



<img src="img/blackhat.png" id="hat">
<h1>Novo Usuário</h1>
<form method="POST">
  <div class="mb-3">

    <label>Nome <span class="aviso">(Como quer ser chamado)</span></label>
    <input type="text" name="nome" placeholder="Digite seu nome..." class="form-control" required>
  </div>
  <div class="mb-3 usuario">
    <label>Usuário </label>
    <input type="text" name="usuario" placeholder="Digite seu usuário para login..." class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" placeholder="Digite seu email..." class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Senha</label>
    <input type="password" name="senha" placeholder="Digite sua senha..." class="form-control" required>
    <p class="aviso">Use símbolos, números, letras Maiúsculas e Minúsculas exemplo: Teste123@</p>

  </div>
  <div class="mb-3">
    <label>Data de Nascimento</label>
    <input type="date" name="data_nasc" class="form-control" required>
  </div>
  <div class="mb-3  d-grid gap-2 col-6 mx-auto">
    <button type="submit" class="btn btn-dark">Enviar</button>
  </div>


  <?php


  if ($_POST) {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $senha =  ($_POST["senha"]);
    $dataNascimento = $_POST["data_nasc"];

    $sqlVerificarEmail = "SELECT 1 FROM usuarios WHERE email = '{$email}'";
    $sqlVerificarUsuario = "SELECT 1 FROM usuarios WHERE usuario = '{$usuario}'";

    $resultadoVerificacaoEmail = $conn->query($sqlVerificarEmail);
    $resultadoVerificacaoUsuario = $conn->query($sqlVerificarUsuario);

    if (mysqli_num_rows($resultadoVerificacaoEmail) > 0) {
      print "
        <script> toastr.warning('Este email já está sendo usado', 'Erro', {
        timeOut: 5000,
        preventDuplicates: true,
        positionClass: 'toast-top-center',
        });</script>";
    }
    if (mysqli_num_rows($resultadoVerificacaoUsuario) > 0) {
      print "
        <script> toastr.warning('Este usuário já está sendo usado', 'Erro', {
        timeOut: 3000,
        preventDuplicates: true,
        positionClass: 'toast-top-center',
        });</script>";
      return;
    }



    if (!preg_match('/[A-Za-z]/', $senha) || !preg_match('/[0-9]/', $senha) || !preg_match('/[@#\-_$%^&+=§!\?]/', $senha)) {
      print "
        <script> toastr.warning('Siga os requesitos da senha', 'Erro', {
        timeOut: 5000,
        preventDuplicates: true,
        positionClass: 'toast-top-center',
        });</script>";

      return;
    }


    $sqlinserir = "INSERT INTO usuarios (nome, email, usuario, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$usuario}', '{$senha}', '{$dataNascimento}')";
    $res = $conn->query($sqlinserir);
    if ($res == true) {
      $_SESSION["usuarios"] = $usuario;
      $_SESSION["nome"] = $nome;
      $_SESSION["cargo"] = 3;

      print "<script> location.href='./php/center.php';</script>";
      //sistema de cargo
    } else {
      print " <script> toastr.warning('Não foi possivel cadastrar', 'Erro', {
              timeOut: 5000,
              preventDuplicates: true,
              positionClass: 'toast-top-center',
              });</script>";
    }
  }



  ?>
