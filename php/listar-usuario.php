<h1>Listar Usuários</h1>

<?php


$sql = "SELECT * FROM usuarios";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {

   print "
   <table class='table table-striped table-dark'>
   <tr>
      <th>#</th>
      <th>Cargo</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Usuário</th>
      <th>Data de Nacimento</th>
      <th>Data de Criação</th>
      <th>Ações</th>
   </tr>
   ";



   while ($row =  $res->fetch_object()) {
      print "<tr>";
      print "<td>" . $row->id . "</td>";
      print "<td>" . $row->cargo . "</td>";
      print "<td>" . $row->nome . "</td>";
      print "<td>" . $row->email . "</td>";
      print "<td>" . $row->usuario . "</td>";
      print "<td>" . date('d/m/Y',  strtotime($row->data_nasc)) . "</td>";
      print "<td>" . date('d/m/Y h:m:s',  strtotime($row->data_criacao)) . "</td>";


      print "<td>";
      if ($row->cargo != 1) {
         print "<button onclick=\"location.href='?page=pageEditar&id=" . $row->id . "';\" class='btn btn-success'>Editar</button>";
         print "<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=excluir&acao=excluir&id=" . $row->id . "';}else{return false;}\" class='btn btn-danger'>Excluir</button>";
      } else {
         print "<button class='btn btn-success' disabled>Editar</button>";
         print "<button class='btn btn-danger' disabled>Excluir</button>";
      }
      print "</td>";
      print "</tr>";
   }
   print "</table>";
} else {
   print "<p class='alert alert danger'>Não encontrou resultados</p>";
}

?>