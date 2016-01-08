<?php
session_start();
include("../config.php");
include("../conexao.php");
if(!isset($_SESSION['validacao'])){
header("Location: ../index.php");
}else{
	if(!isset($_SESSION['ongame'])){
	header("Location: ../main.php?op=startgame");
	}else{
	include("../fixed/dadospeao.php");
	/* Quando alguem cria algum peao vai pra este codigo */
		if(isset($_POST["criapeao_quantidade"])){
			$QuantidadeCriar=preg_replace("/[^0-9]/","", $_POST["criapeao_quantidade"]);
			if($QuantidadeCriar==0){ header("Location: ../main.php?op=feudo"); exit; }
			if($QuantidadeCriar+$peao_total<=$LimitePeao&&$feudo_sushi/$ValorPeao>=$QuantidadeCriar) {
			$FeudoPeao=$QuantidadeCriar+$peao_total;
			$FeudoSushi=$feudo_sushi-$ValorPeao*$QuantidadeCriar;
			$PeaoNotwork=$QuantidadeCriar+$peao_notwork;
			$sql = $conexao->prepare("UPDATE feudos SET peao_total = ?, sushi = ?, peao_notwork = ? WHERE id = ?");
			$sql->bind_param('iiii',$FeudoPeao,$FeudoSushi,$PeaoNotwork,$id_usuario);
			$sql->execute();
			$_SESSION['verify-msg']='<div style="margin-top:-5; font-weight:bold; color:#eee8aa;">processo efetuado com sucesso ...</div>';
			$QuantidadeCriar=0;
			}
			if($feudo_sushi/$ValorPeao<$QuantidadeCriar){
			$_SESSION['verify-msg']='<div style="margin-top:-5; font-weight:bold; color:#fa8072;">Desculpe, Voce nao tem recursos suficientes</div>';
			}
			if($QuantidadeCriar+$peao_total>$LimitePeao){
			$_SESSION['verify-msg']='<div style="margin-top:-5; font-weight:bold; color:#fa8072;">Desculpe, Voce atingiu o limite de peoes</div>';
			}
	header("Location: ../main.php?op=feudo");
		}
		
		/* Quando alguem distribui os peoes vai pra este codigo */
if ($_POST["distribui_prata"]||$_POST["distribui_madeira"]||$_POST["distribui_sushi"]){
$distribui_prata=preg_replace("/[^0-9]/","", $_POST["distribui_prata"]);
$distribui_madeira=preg_replace("/[^0-9]/","", $_POST["distribui_madeira"]);
$distribui_sushi=preg_replace("/[^0-9]/","", $_POST["distribui_sushi"]);
if ($distribui_prata+$distribui_madeira+$distribui_sushi<=$peao_total){
$_SESSION['verify-msg']='<div style="margin-top:-5; font-weight:bold; color:#eee8aa;">processo efetuado com sucesso ...</div>';
$distribui_notwork=$peao_total-$distribui_prata-$distribui_madeira-$distribui_sushi;
$sql = $conexao->prepare("UPDATE feudos SET peao_prata = ?, peao_madeira = ?, peao_sushi = ?, peao_notwork = ? WHERE id = ?");
$sql->bind_param('iiiii',$distribui_prata,$distribui_madeira,$distribui_sushi,$distribui_notwork,$id_usuario);
$sql->execute();
	}
if ($distribui_prata+$distribui_madeira+$distribui_sushi>$peao_total){
			$_SESSION['verify-msg']='<div style="margin-top:-5; font-weight:bold; color:#555555;">Verifique os campos da distribuição, pois foi má alocada</div>';
	}
	
		header("Location: ../main.php?op=feudo");
}
	/* Termina if de Criar Peao */
	}
}
?>
	