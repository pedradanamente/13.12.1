<?php
if(!isset($_SESSION['validacao'])){
header("Location: ../index.php");
}else{
	if(!isset($_SESSION['ongame'])){
	header("Location: main.php?op=startgame");
	}else{
?>
<style>

</style>
<div class="subpage">
	<div class="conta-box">
	<form id="form1" name="form1" method="post" action="main.php?op=conta">
    
	<div class="fl brb">Minha Conta</div>
	<div class="fr mgt">
	
	<a href="http://www.w3schools.com"> Ativar Daimyo	</a>
	
	</div>
	</form>
	</div>
</div> <!-- Termina div da classe subpage -->
<?php
		}
}
?>