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
	
$sql = $conexao->query("SELECT * FROM feudos WHERE id ='$id_usuario'");

while($linha =  $sql->fetch_array()) {
			if ($linha['daimyo']<18){
		$daimyo=$linha['daimyo']+1;
		$sql = $conexao->prepare("UPDATE feudos SET daimyo = ? WHERE id = ?");
		$sql->bind_param('ii',$daimyo,$id_usuario);
		$sql->execute();
		header("Location: ../index.php");
			}
		}

		header("Location: ../index.php");
	}
}
?>