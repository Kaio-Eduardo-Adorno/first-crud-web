<?php
	include_once('conexao.php');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Consulta </title>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/materialize.min.css">
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0" />
</head>

<body>

	<div class="row">
		<div class="col s12 m8 push-m2">
			<h3 class="Light"> Produtos Cadastrados </h3>
			<table class="striped">
				<thend>
					<tr>
						<th>Código</th>
						<th>Produto</th>
						<th>Descrição</th>
						<th>Valor</th>
					</tr>
				</thend>
				<tbody>
					<?php
					$sql = "SELECT * FROM tabela";
					$resultado = mysqli_query($conexao, $sql);
					if (mysqli_num_rows($resultado) > 0) {
						while ($dados = mysqli_fetch_array($resultado)) {
					?>
						<tr>
							<td><?php echo $dados['codigo'] ?></td>
							<td><?php echo $dados['produto'] ?></td>
							<td><?php echo $dados['descricao'] ?></td>
							<td><?php echo "R$ " . $dados['valor'] ?></td>
							<td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
							<td><a onclick="javascript:return confirm('Tem certeza que deseja excluir?');" type="submit" href="delete.php?id=<?php echo $dados['id']; ?>" name="btn-delete" class="btn-floating green"><i class="material-icons">delete</i></a></td>
							
						</tr>
					<?php
						}
					}
					mysqli_close($conexao);
					?>
				</tbody>
			</table>
			<br>
			<a href="adicionar.php" class="btn">Adicionar produtos</a>
		</div>

		<script scr="http://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</body>