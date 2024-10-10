<h1>Editar Usuário</h1>
<?php

// if ($_SESSION["cargo"] <> 1) {
  
//   print "<script>location.href='center.php';</script>"; 

// }

  $sql = "SELECT * FROM usuarios s WHERE s.id=" . $_REQUEST["id"]. "  and  
        (CASE WHEN ". $_SESSION['cargo']. "= '9' then true 
        ELSE s.cargo = 3  END);";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;
    $row = $res->fetch_object();
  
if ($qtd > 0) {
?>


<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<form action="?page=editar" method="POST">
  <input type="hidden" name="id" value="<?php print $row->id; ?>">
  <div class="mb-3">
    <label>Cargo</label>
    <input type="text" name="cargo" class="form-control" value="<?php print $row->cargo; ?>" required class="form-control">
  </div>
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" class="form-control" value="<?php print $row->nome; ?>" required class="form-control">
  </div>
  <label>Usuário</label>
  <input type="text" name="usuario" value="<?php print $row->usuario; ?>" required class="form-control">
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" value="<?php print $row->email; ?>" required class="form-control">
  </div>
  <div class="mb-3">
    <label>Senha</label>
    <input type="password" name="senha" required class="form-control">
  </div>
  <div class="mb-3">
    <label>Data de Nascimento</label>
    <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>" required class="form-control">
  </div>
  <div class="mb-3  d-grid gap-2 col-6 mx-auto">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>


<?php }else {
   print "<p class='alert alert danger'>Não encontrou resultados</p>";
} ?>    
