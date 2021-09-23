<?php
	include_once('conexao.php');
	
	$id = $_GET['id'];

  	$sql = "DELETE FROM tabela WHERE id = '$id' ";

	if(mysqli_query($conexao, $sql)){
		echo "Deletado com sucesso!";
		header('Location: index.php');
	} 
	else {
		echo "Erro ao deletar";
		header('Location: index.php');
	}
	
	mysqli_close($conexao);	
?>
