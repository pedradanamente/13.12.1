<?php
if(!isset($_SESSION['validacao'])){
header("Location: index.php");
}else{
	if(isset($_SESSION['ongame'])){
		
	//echo '<p style="color:white; font-size:18px; font-family:verdana;"> Bem vindo! </p>';
		
		include("sessao/feudo.php");
	}else{
?>

<div class="startgamefundo">
	<table>
		<tr>
			<td>
				<img src="images/startx.png" style="width:100px; height:150px;"/>
			</td>
			<td>
		
	<div class="startgametitle">
	<?php echo '<p>Um jogo de estratégia, de guerra, baseado em turnos e ambientado na china imperial, durante a epoca do feudalismo.</p>'; ?>
	</div>
	
	<div class="startgame">
<p>Tu tens nas tuas mãos a liderança dum feudo chinês. Teu objetivo é entrar nessa disputa pela posição suprema na china, sendo considerado um Imperador. Pra tu conseguires, tu deves saber administrar este teu feudo, seus trabalhadores, e lutar junto com teus amigos, muita estratégia envolve.</p>
	</div>
	
			</td>
		</tr>
	</table>
</div>

<div style="height: 25px;"></div>

<form  id="startgame" action="codado/start.php" method="post">

<table class="startgame">
	<tr>
	<td style="font-weight:bold; font-size:13px;">Digite o nome para seu feudo:</td>
	<td><input class="input_startgame" name="feudo" type="text" placeholder="Nome do feudo" value="" spellcheck="false" maxlength="14" required></td>
	</tr>
</table>

<div style="width: 500px; height:35px;"></div>

<table class="startgame">
	<tr>
	<td>Escolha abaixo a sua origem</td>
	</tr>
</table>
<div style="height:25px;"></div>
<table class="startgame">
	<tr>
		<td><div class="exibe-origem"><img src="images/Supai.png" width="135" height="135" /></div></td>
		<td><div class="exibe-origem"><img src="images/Kogeki.png" width="135" height="135" /></div></td>
		<td><div class="exibe-origem"><img src="images/Shubi.png" width="135" height="135" /></div></td>
		<td><div class="exibe-origem"><img src="images/Seisan.png" width="135" height="135" /></div></td>
	</tr>
	
	<tr>
		<td><div style="margin-top: 10px; font-weight:bold; text-align:center; margin-left:-25px;" ><input type="radio" name="origem" id="origem" value="Supai" checked="true" />Supai</div></td>
		<td><div style="margin-top: 10px; font-weight:bold; text-align:center; margin-left:-25px;" ><input type="radio" name="origem" id="origem" value="Kogeki" />Kōgeki</div></td>
		<td><div style="margin-top: 10px; font-weight:bold; text-align:center; margin-left:-25px;" ><input type="radio" name="origem" id="origem" value="Shubi" />Shubi</div></td>
		<td><div style="margin-top: 10px; font-weight:bold; text-align:center; margin-left:-25px;" ><input type="radio" name="origem" id="origem" value="Seisan" />Seisan</div></td>
	</tr>
</table>

<div style="width: 500px; height:35px;"></div>




    	<div style=" margin-left:375px; text-align:center; "><input type="submit" name="start" class="submit_startgame" value="START" /></div>



</form>


<div style="height:50px"></div>
<?php
	}
}
?>