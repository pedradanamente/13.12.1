<?php
if(!isset($_SESSION['validacao'])){
header("Location: ../index.php");
}else{
	if(!isset($_SESSION['ongame'])){
	header("Location: main.php?op=startgame");
	}else{
		
	echo '<p>
	<a style="color:white;" href="https://chrome.google.com/webstore/detail/memo-notepad/nmoihkoninaoanjobiiknmgenhpaecec" target="_blank"> 
	Adicionar extenção </a></p>';
	
	echo '<p><a style="color:white;" href="chrome-extension://nmoihkoninaoanjobiiknmgenhpaecec/html/app.html" target="_blank"> 
	Abrir anotações (Utilize: Botão Direito, abrir nova aba) </a></p>';

	}
}
?>