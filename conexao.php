<?php

	 // aqui inicia conexao
	$conexao = new mysqli($banco_hostname,$banco_usuario,$banco_senha,$banco_nome);
	if ( !$conexao ){
	echo "Erro! Não foi possivel conectar ao banco de dados ...";
		}
	
	//retorna usuario e id
	if (isset($_SESSION['id'])&&isset($_SESSION['usuario'])){
	$id_usuario=$_SESSION['id'];
	$usuario=$_SESSION['usuario'];
	$_code=$id_usuario . date("mds");
	}
	
?>