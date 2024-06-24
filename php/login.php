<?php


if (empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))) {
   // print "<script>location.href='index.php'</script>";
}
include('config.php');

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql =  "SELECT * FROM usuarios 
             WHERE usuario = '{$usuario}'
             AND senha = '{$senha}'";  

$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();

$qtd = $res->num_rows;
if ($qtd > 0) {
   $_SESSION["usuarios"] = $usuario;
   $_SESSION["nome"] = $row->nome;
   $_SESSION["cargo"] = $row->cargo;
   

   if ($_SESSION["cargo"] == 1 || $_SESSION["cargo"] == 9) { 
      print "<script>location.href='admin.php';</script>"; 
   }

   print "<script>location.href='center.php';</script>";
} else {
   print "<script>alert('Usuário e/ou senha incorreto(s)');</script>";
   print "<script>location.href='../php/entrar.php';</script>";
}
