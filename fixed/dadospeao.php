<?php

/* Puxa quantidade que feudo tem de peao */
$sql = $conexao->query("SELECT * FROM feudos WHERE id='$id_usuario'");
while($linha = $sql->fetch_array()) {
$feudo=$linha['feudo'];
$feudo_sushi=$linha['sushi'];
$feudo_prata=$linha['prata'];
$feudo_madeira=$linha['madeira'];
$peao_total=$linha['peao_total'];
$peao_sushi=$linha['peao_sushi'];
$peao_prata=$linha['peao_prata'];
$peao_madeira=$linha['peao_madeira'];
$peao_notwork=$linha['peao_notwork'];
	}
	
/* Limite de peoes */
$sql = $conexao->query("SELECT * FROM feudos WHERE id='$id_usuario'");
while($linha = $sql->fetch_array()) {
$nivel=$linha['nivel'];
}
if ($nivel==1) { $LimitePeao=100; $MaximoPeao=110; }
if ($nivel==2) { $LimitePeao=200; $MaximoPeao=220; }
if ($nivel==3) { $LimitePeao=300; $MaximoPeao=330; }
if ($nivel==4) { $LimitePeao=400; $MaximoPeao=440; }
if ($nivel==5) { $LimitePeao=500; $MaximoPeao=550; }
if ($nivel==6) { $LimitePeao=600; $MaximoPeao=660; }
if ($nivel==7) { $LimitePeao=700; $MaximoPeao=770; }
if ($nivel==8) { $LimitePeao=800; $MaximoPeao=880; }
if ($nivel==9) { $LimitePeao=900; $MaximoPeao=990; }
if ($nivel==10) { $LimitePeao=1000; $MaximoPeao=1100; }

/* Valor dos peao */
$ValorPeao=110;



/* Dados de criar peao ETAPA #1 */ 

if($LimitePeao>=$peao_total){
	
	$empty_peao=$LimitePeao-$peao_total;
	$empty_peao=(int)$empty_peao;
	
	/* echo "<p style='color:white; font-family:verdana; font-size:11px; text-align:left;'>
	TNT #007 - Limite de peao maior que a quantidade total de peao no feudo: $empty_peao</p>"; */
	$TNT007=1;
	
		if($feudo_sushi/$ValorPeao<$empty_peao){
		$empty_peao=$feudo_sushi/$ValorPeao;
		$empty_peao=(int)$empty_peao;
		
		/* echo "<p style='color:white; font-family:verdana; font-size:11px; text-align:left;'>
		TNT #006</p>"; */
		$TNT006=1;
		}
		
	}

if($feudo_sushi/$ValorPeao>1){ 
	
	$empty_peao=$feudo_sushi/$ValorPeao;
	$empty_peao=(int)$empty_peao;
	/* echo "<p style='color:white; font-family:verdana; font-size:11px; text-align:left;'>
	TNT #005 - Capacidade de producao de peao é maior que 1: $empty_peao</p>"; */
	$TNT005=1;
	
	if($LimitePeao>=$peao_total){ 
	$empty_peao=$LimitePeao-$peao_total;
	$empty_peao=(int)$empty_peao;
	/* echo "<p style='color:white; font-family:verdana; font-size:11px; text-align:left;'>
	TNT #004 - Limite de peao é maior ou igual ao total de peao no feudo: $empty_peao</p>"; */
	$TNT004=1;
	}
	
	if($feudo_sushi/$ValorPeao<$empty_peao){
	$empty_peao=$feudo_sushi/$ValorPeao;
	$empty_peao=(int)$empty_peao;
	/* echo "<p style='color:white; font-family:verdana; font-size:11px; text-align:left;'>
	TNT #003 - Capacidade de producao de peao menor que o empty_peao: $empty_peao</p>"; */
	$TNT003=1;
	}
	
}

if($LimitePeao<=$peao_total){
	
	$empty_peao=0;
	
	/* echo "<p style='color:white; font-family:verdana; font-size:11px; text-align:left;'>
	TNT #000 - Limite de Peao é menor ou igual ao peao total no feudo: $empty_peao</p>"; */
	$TNT000=1;
}



/* Dados de criar peao ETAPA #2 */ 

if( ($LimitePeao>=$peao_total+$empty_peao) and ($feudo_sushi/$ValorPeao<$empty_peao) ){ // Se o limite de peao for maior ou igual ao Total de peao no feudo + o empty_peao
	$empty_peao=$LimitePeao-$peao_total; //#1
	$empty_peao=(int)$empty_peao;
	/* echo "<p style='color:white; font-family:verdana; font-size:11px; text-align:left;'>
	TNT #001</p>"; */
	$TNT001=1;
}
	


?>
