<?php

	$nome_servidor = "localhost";
	$nome_usuario  = "root";
	$senha         = "";
	$nome_banco    = "banco";

	$conexao = mysqli_connect($nome_servidor, $nome_usuario, $senha, $nome_banco);
	@mysqli_set_charset($conexao, "utf-8");

	if(mysqli_connect_error())
	{
		echo "Error na Conexão ".mysqli_connect_error();
	}
	else
		echo "<center><b>Acesso confirmado!</center></b>"
?>	
