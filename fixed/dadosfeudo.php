<style>

</style>
<?php
		
$sql = $conexao->query("SELECT * FROM feudos where id='$id_usuario'");
while($linha =  $sql->fetch_array()) {

$feudo=$linha['feudo'];
$origem=$linha['origem'];
$unidades=$linha['unidades'];
$ataque=$linha['ataque_total'];
$defesa=$linha['defesa_total'];
$prata=$linha['prata'];
$madeira=$linha['madeira'];
$sushi=$linha['sushi'];
$ninjas=$linha['ninjas'];
$nivel=$linha['nivel'];
$posicao=$linha['posicao'];
$clan=$linha['clan'];
$daimyo=$linha['daimyo'];

	$peao_prata=$linha['peao_prata'];
	$peao_madeira=$linha['peao_madeira'];
	$peao_sushi=$linha['peao_sushi'];
	$peoes=$linha['peao_total'];

	$producao_sushi=$peao_sushi*8;
	$producao_prata=$peao_prata*5;
	$producao_madeira=$peao_madeira*10;
	
}
?>

<div class="avatar">
<table>
<tr><td><?php $OO->ShowAvatar($conexao,$dir_avatar); ?></td></tr>
<tr><td><p class="txt-feudo"><?php echo $feudo; ?></p></td></tr>
</table>
</div>

<div class="dados_feudo">

<div class="container-galerry">
<ul>
<li class="box-img">
	<?php echo '<img class="img-dados" src="images/'.$origem.'.jpg" alt="">'; ?>
	<p class="txt-desc">Origem</p>
	<p class="txt-dados"><?php echo $origem; ?></p>
</li>
<li class="box-img">
	<img class="img-dados" src="images/clan.jpg" alt="">
	<p class="txt-desc">Clan</p>
	<p class="txt-dados"><?php echo $clan; ?></p>
</li>
<li class="box-img">
	<img class="img-dados" src="images/ataque.jpg" alt="">
	<p class="txt-desc">F. de ataque</p>
	<p class="txt-dados"><?php echo $ataque; ?></p>
</li>
<li class="box-img">
	<img class="img-dados" src="images/defesa.jpg" alt="">
	<p class="txt-desc">F. de defesa</p>
	<p class="txt-dados"><?php echo $defesa; ?></p>
</li>
<li class="box-img">
	<img class="img-dados" src="images/unidades.jpg" alt="">
	<p class="txt-desc">Unidades</p>
	<p class="txt-dados"><?php echo $unidades; ?></p>
</li>

<div style="height:90px;"></div>
		
<li class="box-img_mini">
	<img class="img-dados" src="images/turno.jpg" alt="">
	<p class="txt-desc">Turno</p>
   <p class="txt-dados"><?php $OO->RetornaTurno($conexao); ?></p>
</li>
<li class="box-img_mini">
	<img class="img-dados" src="images/nivel.jpg" alt="">
	<p class="txt-desc">Nivel</p>
	<p class="txt-dados"><?php echo $nivel; ?></p>
</li>
<li class="box-img_mini">
	<img class="img-dados" src="images/rank.jpg" alt="">
	<p class="txt-desc">Rank</p>
	<p class="txt-dados"><?php echo $posicao; ?></p>
</li>
<li class="box-img_mini">
	<img class="img-dados" src="images/ninjas.jpg" alt="">
	<p class="txt-desc">Ninjas</p>
	<p class="txt-dados"><?php echo $ninjas; ?></p>
</li>
<li class="box-img_mini">
	<img class="img-dados" src="images/peoes.jpg" alt="">
	<p class="txt-desc">Peoes</p>
	<p class="txt-dados"><?php echo $peoes; ?></p>
</li>
<li class="box-img_pequeno">
	<img class="img-dados" src="images/sushi.jpg" alt="">
	<p class="txt-desc" style="color:#eedd82;">Sushi</p>
	<p class="txt-dados" style="color:#eedd82;"><?php echo $sushi  .' +'. $producao_sushi; ?></p>
</li>
<li class="box-img_pequeno">
	<img class="img-dados" src="images/prata.jpg" alt="">
	<p class="txt-desc" style="color:#eedd82;">Prata</p>
	<p class="txt-dados" style="color:#eedd82;"><?php echo $prata  .' +'. $producao_prata; ?></p>
</li>
<li class="box-img_pequeno">
	<img class="img-dados" src="images/madeira.jpg" alt="">
	<p class="txt-desc" style="color:#eedd82;">Madeira</p>
	<p class="txt-dados" style="color:#eedd82;"><?php echo $madeira  .' +'. $producao_madeira; ?></p>
</li>
</ul>
</div>

</div>

