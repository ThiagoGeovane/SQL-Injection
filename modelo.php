<?php
require 'conexao.php';
$conn = new Conexao();
if($_POST){    
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];    
    $select = $conn->select($nome, $senha);    
    //var_dump($select);    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SQL Injection - Exemplo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>


<div class="page-header">
    <h1>SQL Injection - Resultado</h1>      
  </div>

    <div class="container">
    		<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>ID do Usuário</th>
			        <th>Nome</th>
			        <th>Email</th>
			        <th>Senha</th>
			      </tr>
			    </thead>
			    
			    <tbody>
			    	<?php  foreach($select as $row): ?>
			      <tr>
			        <td><?=$row['id_usuario'];?></td>
			        <td><?=$row['nome'];?></td>
			        <td><?=$row['email'];?></td>
			        <td><?=$row['senha'];?></td>
			      </tr>
			      <?php endforeach;?>
			    </tbody>
		  	</table>

		  	<a href="index.html" class="btn btn-warning" role="button">Página Inicial</a>
    </div>
    </body>
</html>