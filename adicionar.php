<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Sistema de cadastro de produtos</title>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" href="css/materialize.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

	<div class="row">
		<div class="col s12 m6 push-m3">
			<h3 class="light"> Novo Produto </h3>
			<form action="cadastro.php" method="POST">
				<div class="input-field col s12">
					<input type="text" name="txt_codigo" id="codigo">
					<label for="codigo">Codigo</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="txt_produto" id="produto">
					<label for="produto">Produto</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="txt_descricao" id="descricao">
					<label for="descricao">Descrição</label>
				</div>

				<div class="input-field col s12">
					<input type="date" name="txt_data" id="data">
					<label for="data">Data Lançamento</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="txt_valor" id="valor">
					<label for="valor">Valor</label>
				</div>

				<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
				<a href="index.php" class="btn green"> Lista de produtos </a>
			</form>

		</div>
	</div>

	<!--JavaScript at end of body for optimized loading-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</body>

</html>