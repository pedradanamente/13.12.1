<?php
session_start();
if(!isset($_SESSION['validacao'])){
header("Location: ../index.php");
}else{
	if(!isset($_SESSION['ongame'])){
	header("Location: main.php?op=startgame");
	}else{
?>

<html>
	<!-- Aqui Inicia o cabeçalho da pagina -->
	<head>
		<meta charset="UTF-8">
		
			<link href="../css/main.css" rel="stylesheet" type="text/css" />
			<style>
			body {
				
				background-color:black;
			}
			</style>
	
	</head>
	<!-- Aqui Inicia o cabeçalho da pagina -->
	<!-- Aqui Inicia o topo da página -->	
	<header>
	
	</header>
	<!-- Aqui Termina o topo da página -->
	<!-- Aqui Inicia o conteudo da pagina -->
	<section>
		
	<div>
	
	</div>
	
	
	</section>
	<!-- Aqui Termina o conteudo da pagina -->
	<!-- Aqui Inicia meu rodapé da pagina de controle -->
	<footer>
	
	</footer>
	<!-- Aqui Termina meu rodapé da pagina de controle -->

</html>

<?php
		}
}
?>