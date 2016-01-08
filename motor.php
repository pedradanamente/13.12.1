<?php
include("config.php");
include("conexao.php");

include("classes/motor.class.php");
$OOMotor = new Motor();
$OOMotor->Gira($conexao);

/* ******************************************************************************** */
/* !Importante: #### Ranking */
$sql = $conexao->query("SELECT * FROM feudos ORDER BY prata DESC");
while($linha =  $sql->fetch_array()) {
if (!isset($posicao)or$posicao==0){ $posicao=1; }
	$id_feudo=$linha['id'];
	$sqlx = $conexao->prepare("UPDATE feudos SET posicao = ? WHERE id = ?");
	$sqlx->bind_param('ii',$posicao,$id_feudo);
	$sqlx->execute();
	$posicao++;
	}
/* ******************************************************************************** */
/* Atualiza producao de todos usuarios */
$sql = $conexao->query("SELECT * FROM feudos");
while($linha =  $sql->fetch_array()) {

	$feudo_id=$linha['id'];
	
	$feudo_prata=$linha['prata'];
	$feudo_madeira=$linha['madeira'];
	$feudo_sushi=$linha['sushi'];
	
	$peao_prata=$linha['peao_prata'];
	$peao_madeira=$linha['peao_madeira'];
	$peao_sushi=$linha['peao_sushi'];
	$peao_total=$linha['peao_total'];
	
	$prata=$feudo_prata+$peao_prata*5;
	$madeira=$feudo_madeira+$peao_madeira*10;
	$sushi=$feudo_sushi+$peao_sushi*8;

$sqlx = $conexao->prepare("UPDATE feudos SET prata = ?, madeira = ?, sushi = ? WHERE id = ?");
$sqlx->bind_param('iiis',$prata,$madeira,$sushi,$feudo_id);
$sqlx->execute();
	
}
/* ******************************************************************************** */


?>