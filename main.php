<?php
session_start();
if(!isset($_SESSION['validacao'])){
header("Location: index.php");
exit;
}else{
	
	if( isset($_SESSION['bloqueio']) ){
		if($_SESSION['bloqueio']==1){
		include("bloqueado.php");
		exit;
		}
	}

include("config.php");
include("conexao.php");

include("classes/db.class.php");
$OO = new DB();
?>
<!-- Inicio da exibição HTML -->
<!DOCTYPE HTML>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title><?php echo "$title"; ?></title>

<!-- Inclue estilo css padrao e Background -->
<?php include("inc/stylepadrao.php"); ?>

<!-- Aqui carrega CSS Lightbox -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/lightbox-2.6.min.js"></script>
<link href="css/lightbox.css" rel="stylesheet" />
<!-- Aqui carrega CSS da página -->
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>
 
<!-- Inicio do Corpo -->
<body >

	<!-- ####################################### -->
	<!-- Aqui inicia o Topo da pagina -->

			<div class="topomain">
			
				<div style="margin-top:0px; "><img src="images/topo.png" style="width:50px; height:50px;"/>
				
				<div class="topomain-title">The Chinese Dragon - A conquista pela supremacia</div>
				
				</div>
			
			</div>
	<!-- Aqui termina o Topo da pagina -->
	<!-- ####################################### -->
	
<div class="c6">

<!-- Camada Transparente -->
<table width="900px" border="0" align="center" cellpadding="0" cellspacing="0" class="camada">
<tr>

<td valign="top" width="14%">


<div class="menuimg_div"/><img src="images/menu.png" alt="" class="menuimg_arquivo" /></div>

<div class="c2"></div>

<div class="menu"><?php $OO->ShowMenu($conexao);?></div>

</td>

<td width="100%" valign="top" align="center" cellpadding="0" cellspacing="0">

<!-- Include do conteudo variavel -->
<?php
	
	if (isset($_GET["op"])) {
	$url = $_GET["op"];

	}else{ $url = null; }

	if(isset($_SESSION['ongame'])){
		
		include("fixed/dadosfeudo.php");
		include("alerts.php"); 
		
		if(file_exists("$dir_paginas/$url.php")&&$url!==null){
		include("$dir_paginas/$url.php");
		}else{
			include("$dir_paginas/startgame.php");
		}
		
	}else{
		include("$dir_paginas/startgame.php");
	}
?>
<!-- Encerra conteudo variavel -->
</td>


</tr>
</table>
<!-- Include do rodape html -->
<?php include("inc/rodape.php"); ?></div>
<!-- Include do Icq -->
<?php //include("inc/icq.php"); ?></div>
<!-- Fim -->
<?php

}
?>
</body>
</html>
