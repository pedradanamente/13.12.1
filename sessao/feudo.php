<?php
if(!isset($_SESSION['validacao'])){
header("Location: ../index.php");
}else{
	if(!isset($_SESSION['ongame'])){
	header("Location: main.php?op=startgame");
	}else{
	include("fixed/dadospeao.php");
?>


<div class="subpage">

<div class="criapeao-box">
<?php
	if (isset($_SESSION['verify-msg'])){
		echo $_SESSION['verify-msg'];
		unset($_SESSION['verify-msg']);
	}

?>
<form id="form1" name="form1" method="post" action="gatilhos/feudo.php">
<!-- Separacao ########################################## -->
	<div class="fl brb">Criar peoes</div>	



	<div class="fr mgt">
		Quantidade: 
    <input class="criapeao-input" name="criapeao_quantidade" type="text" id="criapeao_quantidade" maxlength="3" value="<?php echo $empty_peao; ?>" />
    <input class="criapeao-submit" type="submit" name="criapeao_ok" id="criapeao_ok" value="CRIAR" />
    
    <p style="font-size:11px;">* valor do peao: 110 sushi</p>
</div>
<!-- Separacao ########################################## -->
	</form>
	</div>

<div class="distribui-box">
<form id="form2" name="form2" method="post" action="gatilhos/feudo.php">
<!-- Separacao ########################################## -->
	<div class="fl brb">Distribuir peoes</div>	
	<div class="fr mgt">
<ul>
<li class="distribui-txt">Parados: <input class="distribui-input" style="color:white;" name="distribui_notwork" type="text" id="distribui_notwork" value="<?php echo "$peao_notwork"; ?>" disabled/></li>
<li class="distribui-txt">Sushi: <input class="distribui-input" name="distribui_sushi" type="text" id="distribui_sushi" value="<?php echo "$peao_sushi"; ?>" /></li>
<li class="distribui-txt">Prata: <input class="distribui-input" name="distribui_prata" type="text" id="distribui_prata" value="<?php echo "$peao_prata"; ?>" /></li>
<li class="distribui-txt">Madeira: <input class="distribui-input" name="distribui_madeira" type="text" id="distribui_madeira" value="<?php echo "$peao_madeira"; ?>" /></li>
<li class="distribui-txt"><input class="distribui-submit" type="submit" name="distribuipeao_ok" id="distribuipeao_ok" value="OK" /></li>
</ul>
</form>
</div>
<!-- Separacao ########################################## -->
	<div class="fl brb">Inimigos em seu território</div>	
	<div class="fr mgt">
	Seu feudo não esta recebendo nenhum ataque no momento
</div>
<!-- Separacao ########################################## -->
	<div class="fl brb">Ataques em andamento</div>	
	<div class="fr mgt">
	Você não tem nenhum ataque em andamento
</div>
<!-- Separacao ########################################## -->
<?php
$rank_titulo="TOP 5 - Ranking";
$mostra_na_tela=5;
$OO->Ranking($conexao,$mostra_na_tela,$clan,$posicao,$feudo,$rank_titulo);
?>
<!-- Separacao ########################################## -->
</div> <!-- Termina div da classe subpage -->

<body>
<script type='text/javascript' src='http://code.jquery.com/jquery-2.1.0.min.js'></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#criapeao_quantidade").keydown(function(){
     QuantidadeCriar = $(this).val();
     limitePeao = <?php echo $LimitePeao ;?> - <?php echo $peao_total; ?>;
     if(QuantidadeCriar > limitePeao ){
      $("#criapeao_quantidade").val(limitePeao);
     }
  });
);
</script>
</body>

<?php }
} ?>

