<?php
if(!isset($_SESSION['validacao'])){
header("Location: ../index.php");
}else{
	if(!isset($_SESSION['ongame'])){
	header("Location: main.php?op=startgame");
	}else{
?>
<style>
.estruturas-box{
font-size:12px;
margin-left:0px;
margin-right:0px;
margin-top:0px;
	}
</style>
<div class="subpage">
	<div class="estruturas-box">
	<form id="form1" name="form1" method="post" action="main.php?op=estruturas">
    
	<div class="fl brb">Estruturas</div>	
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