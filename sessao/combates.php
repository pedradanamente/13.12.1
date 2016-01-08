<?php
if(!isset($_SESSION['validacao'])){
header("Location: ../index.php");
}else{
	if(!isset($_SESSION['ongame'])){
	header("Location: main.php?op=startgame");
	}else{
?>

<div class="subpage">
	
	<div class="combate-box">
	<form id="form1" name="form1" method="post" action="main.php?op=clan">
    
	<div class="fl brb">Combates</div>	
	<div class="fr mgt">
	
	xxxx
	
	</div>
	</form>
	</div>
</div> <!-- Termina div da classe subpage -->
<?php
		}
}
?>