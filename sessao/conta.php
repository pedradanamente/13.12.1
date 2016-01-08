<?php
if(!isset($_SESSION['validacao'])){
header("Location: ../index.php");
}else{
	if(!isset($_SESSION['ongame'])){
	header("Location: main.php?op=startgame");
	}else{
?>

<div class="subpage">
	<div class="conta-box">
    
	<div class="fl brb">Daimyo</div>
	<div class="fr mgt">
	<a href="codado/ativar_daimyo.php"><p style="color:white; text-align: right;"> Ativar Daimyo <?php $daimyo++; echo "$daimyo" ?> </p>	</a>
	</div>
	
	<div class="fl brb">Nivel</div>
	<div class="fr mgt">
	<a href="codado/avancar_nivel.php"><p style="color:white; text-align: right;"> Avançar </p>	</a>
	</div>
	
	<div class="fl brb">Feudo</div>
	<div class="fr mgt">
	<a href="codado/excluir_feudo.php"><p style="color:white; text-align: right;"> Excluir </p>	</a>
	</div>
	
	<div class="fl brb">Bloqueio</div>
	<div class="fr mgt">
	<a href="codado/bloquear_feudo.php"><p style="color:white; text-align: right;"> Ativar </p>	</a>
	<a href="codado/desbloquear_feudo.php"><p style="color:white; text-align: right;"> Desativar </p>	</a>
	</div>
	
	<div class="fl brb">Avatar</div>
	<div class="fr mgt">
		
	<form enctype="multipart/form-data" action="codado/alterar_avatar.php" method="post">
		
	<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
	
	<p style="color:white; text-align: right;"> <input class="avatar-file" name="imagefile" type="file" />
	<p style="color:white; text-align: right;"> <input class="padrao-submit" type="submit" value="Alterar" /> </p>
	
	</form>
		
	</div>
	
	</div>
</div> <!-- Termina div da classe subpage -->
<?php
		}
}
?>