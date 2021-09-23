<?php
	include_once('conexao.php');
	
	$codigo 	= $_POST['txt_codigo'];
	$produto 	= $_POST['txt_produto'];
	$descricao 	= $_POST['txt_descricao'];
	$data 		= $_POST['txt_data'];
	$valor 		= $_POST['txt_valor'];

	$sql = "insert into tabela (codigo, produto, descricao, data, valor) values ('$codigo', '$produto', '$descricao', '$data', '$valor')";
	$resultado = @mysqli_query($conexao, $sql);
	if($resultado){
		echo "Dados inseridos no banco com sucesso!";
		header('Location: index.php');
	} else {
		die('Não inseriu: ' . @mysqli_error($conexao));
		header('Location: index.php');
	}

	mysqli_close($conexao);	
?>	