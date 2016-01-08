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
		
		$id_usuario=$_SESSION['id'];
		$ClanNovo_Nome=$_POST['criaclan-input'];
		$ClanNovo_Feudos=1;
		
		$sql = $conexao->query("SELECT * FROM feudos WHERE id ='$id_usuario'");
		while($linha =  $sql->fetch_array()) {
		$ClanAntigo_Nome=$linha['clan'];
		$ClanNovo_Lider=$linha['feudo'];
		}
		
		// verifica se clan novo ja existe
		$sql = $conexao->query("SELECT * FROM clans WHERE nome ='$ClanNovo_Nome'");
		if ($sql->num_rows>=1){	echo "</br>Clan $ClanNovo_Nome ja existe"; header("Location: ../index.php"); }else{
		
		//echo "</br> Clan Novo: $ClanNovo_Nome </br>Clan velho: $ClanAntigo_Nome </br>Membros para novo clan: $ClanNovo_Feudos </br>Novo lider: $ClanNovo_Lider";
		
		// diminuir quantidade de feudos no clan antigo ou deletar
		$sql = $conexao->query("SELECT * FROM clans WHERE nome ='$ClanAntigo_Nome'");
		while($linha = $sql->fetch_array()) {
			
			$ClanAntigo_Lider=$linha['lider'];
			$ClanAntigo_Feudos=$linha['feudos']-1;
			//echo "</br>Membros no clan antigo: $ClanAntigo_Feudos";
			
			if( ($ClanAntigo_Feudos<=0)and($ClanAntigo_Lider!="$ClanNovo_Lider") ){
				$ClanAntigo_Feudos=0;
			}
			
			if( ($ClanAntigo_Feudos<=0)and($ClanAntigo_Lider=="$ClanNovo_Lider") ){
			$sqlx = $conexao->prepare("DELETE FROM clans WHERE nome = ?");
			$sqlx->bind_param('s', $ClanAntigo_Nome);
			$sqlx->execute(); 
			//echo "</br>O clan antigo $ClanAntigo_Nome foi deletado.";
			
			}else{				
				if ($ClanAntigo_Lider==$ClanNovo_Lider){
				$ClanAntigo_Lider="nulo";
				//echo "</br>Novo lider setado para: $ClanAntigo_Lider";
				}
			$sqlx = $conexao->prepare("UPDATE clans SET feudos = ?, lider = ? WHERE nome = ?");
			$sqlx->bind_param('iss',$ClanAntigo_Feudos,$ClanAntigo_Lider,$ClanAntigo_Nome);
			$sqlx->execute();
			}
			
		}
		
		// atualiza novo clan para tabela do feudo
		$sql = $conexao->prepare("UPDATE feudos SET clan = ? WHERE id = ?");
		$sql->bind_param('si',$ClanNovo_Nome,$id_usuario);
		$sql->execute();
		
		// insere clan na tabela de clans
		$sql = $conexao->prepare("INSERT clans SET nome = ?, feudos = ?, lider = ?");
		$sql->bind_param('sis',$ClanNovo_Nome,$ClanNovo_Feudos,$ClanNovo_Lider);
		$sql->execute();
		
		header("Location: ../index.php");
	
		}
		
	}
}
?>