<?php

switch ($_REQUEST["page"]) {

  case 'editar':
    $cargo = $_POST["cargo"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $senha = ($_POST["senha"]);
    $data_nasc = $_POST["data_nasc"];


    $sql = "UPDATE usuarios SET cargo='{$cargo}', nome='{$nome}', email='{$email}', usuario='{$usuario}', senha='{$senha}', data_nasc='{$data_nasc}' WHERE id=" . $_REQUEST["id"];
    $res = $conn->query($sql);
    if ($res == true) {

      print "
      <script> toastr.success('feita com sucesso','Edição', {
      timeOut: 1000,
      preventDuplicates: true,
      positionClass: 'toast-top-center',
      // Redirect 
      onHidden: function() {
      window.location.href = '?page=listar';
      }});</script>";
    } else {
      print "
      <script> toastr.warning('não foi possível editar','Erro', {
      timeOut: 1000,
      preventDuplicates: true,
      positionClass: 'toast-top-center',
      // Redirect 
      onHidden: function() {
      window.location.href = '?page=listar';
      }
      });</script>";
    }
    break;

  case 'excluir':
    $sql = "DELETE FROM usuarios WHERE id=" . $_REQUEST["id"];
    $res = $conn->query($sql);
    if ($res == true) {
      print "
      <script> toastr.success(' com sucesso','Excluido', {
      timeOut: 1000,
      preventDuplicates: true,
      positionClass: 'toast-top-center',
      // Redirect 
      onHidden: function() {
      window.location.href = '?page=listar';
      }
      });</script>";
    } else {
      print "
      <script> toastr.warning('não foi possível excluir','Erro', {
      timeOut: 1000,
      preventDuplicates: true,
      positionClass: 'toast-top-center',
      // Redirect 
      onHidden: function() {
      window.location.href = '?page=listar';
      }
      });</script>";
    }
    break;
}
