<?php
session_start();
include("../config.php");
include("../conexao.php");
if(!isset($_SESSION['validacao'])){
header("Location: ../index.php");
}else{
	if(!isset($_SESSION['ongame'])){
	header("Location: main.php?op=startgame");
	}else{
	
if ($id_usuario==1){ 
$sql = $conexao->query("SELECT * FROM feudos WHERE id ='$id_usuario'");

while($linha =  $sql->fetch_array()) {
			if ($linha['nivel']<10){
		$nivel=$linha['nivel']+1;
		$sql = $conexao->prepare("UPDATE feudos SET nivel = ? WHERE id = ?");
		$sql->bind_param('ii',$nivel,$id_usuario);
		$sql->execute();
		header("Location: ../index.php");
			}
		}
	}

		header("Location: ../index.php");
	}
}
?>