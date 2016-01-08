<?php
if(!isset($_SESSION['validacao'])){
header("Location: ../index.php");
}else{
	if(!isset($_SESSION['ongame'])){
	header("Location: main.php?op=startgame");
	}else{
		
		if (isset($_POST["quantidade_ninja"])){
			$ninjas = $_POST ["quantidade_ninja"];
			echo $ninjas;
		}
	?>
<style>
.ninja-submit {
	border: 1px solid #363636;
	background-color: #000;
	width: 75px;
	color: #FFF;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 11px;
	height: 24px;
	margin-top:0;
}	

.ninja-input {
	border: 1px solid #363636;
	background-color: #000;
	width: 50px;
	height: 21px;
	color: #90ee90;
	padding:1px;
	margin-right:5px;
	text-align:center;
}
</style>

<div class="subpage">
	
<div class="ninja">

<form name="formulario" method="post" action="main.php?op=espionagem">
   <center> 
	<div class="fl brb">Criar ninjas</div>	
	<div class="fr mgt" style="font-size:13px;">
		
	Quantidade:	  
	  <input class="ninja-input" type="text" name="quantidade_ninja" maxlength="3" />
	  <input class="ninja-submit" type="submit" name="bt1" value="CRIAR" action="enviar.php"  />

	  
	  <p style="font-size:11px;">* valor do ninja: 95 pratas</p>
	  
	</div>
    </center>
	</form>
	</div>
</div> <!-- Termina div da classe subpage -->
		<?php
		}
}
?>