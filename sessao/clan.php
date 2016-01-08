<?php
if(!isset($_SESSION['validacao'])){
header("Location: ../index.php");
}else{
	if(!isset($_SESSION['ongame'])){
	header("Location: main.php?op=startgame");
	}else{
?>

<div class="subpage">
	
	<div class="clan-box">
	<form id="form1" name="form1" method="post" action="main.php?op=clan">
    
	<div class="fl brb">Integrantes do seu clan</div>	
	<div class="fr mgt">
	
	Informacao indisponivel no momento	
	
	</div>
	</form>
	</div>
	
	
	<div class="clan-box">
	<form id="form1" name="form1" method="post" action="main.php?op=clan">
    
	<div class="fl brb">Informações gerais do seu clan</div>	
	<div class="fr mgt">

	Informacao indisponivel no momento	
	
	</div>
	</form>
	</div>
	
	
	<div class="clan-box">
	<form id="form1" name="form1" method="post" action="main.php?op=clan">
    
	<div class="fl brb">Forum Interno</div>	
	<div class="fr mgt">
	
	Informacao indisponivel no momento	
	
	</div>
	</form>
	</div>
	
	
	<div class="clan-box">
	<form id="form1" name="form1" method="post" action="codado/criar_clan.php">
    
	<div class="fl brb">Criar um novo clan</div>	
	<div class="fr mgt">
	
	<input class="criaclan-input" name="criaclan-input" type="text" id="criaclan-input" maxlength="20" value="" />
	<input class="criaclan-submit" type="submit" name="criaclan_ok" id="criaclan_ok" value="CRIAR" />
	
	</div>
	</form>
	</div>
	
	
	
</div> <!-- Termina div da classe subpage -->
<?php
		}
}
?>