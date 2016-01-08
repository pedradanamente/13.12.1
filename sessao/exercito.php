<?php
if(!isset($_SESSION['validacao'])){
header("Location: ../index.php");
}else{
	if(!isset($_SESSION['ongame'])){
	header("Location: main.php?op=startgame");
	}else{
			

?>

<div class="subpage">
	
	<div class="units-box fl">
	<div class="fl brb">Seu Exército</div>	
	
	<div class="fr mgt" >
	Informações do seu exército
	</div>
	
	<div class="fr mgtinfo "style="clear:both;">
	<?php
	
	//nivel 1
	$return="UN001"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN002"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN003"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN004"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN005"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN006"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN007"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN008"; $OO->ShowUnidade($conexao,$origem,$return);
	
	//nivel 2
	$return="UN009"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN010"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN011"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN012"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN013"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN014"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN015"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN016"; $OO->ShowUnidade($conexao,$origem,$return);
	
	//nivel 3
	$return="UN017"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN018"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN019"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN020"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN021"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN022"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN023"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN024"; $OO->ShowUnidade($conexao,$origem,$return);
	
	//nivel 4
	$return="UN025"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN026"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN027"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN028"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN029"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN030"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN031"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN032"; $OO->ShowUnidade($conexao,$origem,$return);
	
	//nivel 5
	$return="UN033"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN034"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN035"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN036"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN037"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN038"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN039"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN040"; $OO->ShowUnidade($conexao,$origem,$return);
	
	//nivel 6
	$return="UN041"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN042"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN043"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN044"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN045"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN046"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN047"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN048"; $OO->ShowUnidade($conexao,$origem,$return);
	
	//nivel 7
	$return="UN049"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN050"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN051"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN052"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN053"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN054"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN055"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN056"; $OO->ShowUnidade($conexao,$origem,$return);
	
	//nivel 8
	$return="UN057"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN058"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN059"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN060"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN061"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN062"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN063"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN064"; $OO->ShowUnidade($conexao,$origem,$return);
	
	//nivel 9
	$return="UN065"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN066"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN067"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN068"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN069"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN070"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN071"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN072"; $OO->ShowUnidade($conexao,$origem,$return);
	
	//nivel 10
	$return="UN073"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN074"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN075"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN076"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN078"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN079"; $OO->ShowUnidade($conexao,$origem,$return);
	$return="UN080"; $OO->ShowUnidade($conexao,$origem,$return);
	
	?>
	</div>
	
	</div>
	
	<div class="units-box fl">
	<div class="fl brb">Treinamento</div>	
	<div class="fr mgt">
	Aqui voce poderia treinar suas unidades de combate
	</div>
	</div>
	
	<?php
		$units_nivel=1;
		if ($nivel>=$units_nivel){
			
		$units_categoria="ataque";
	?>
	<!-- Nivel 1 -->
		<!-- Samurai 1 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:20%;">GUERREIRO</td>
		<td style="width:20%;">DISPONIVEIS</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:8%;">PRATA</td>
		<td style="width:8%;">SUSHI</td>
		<td style="width:8%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $OO->ExercitoDisponivel($conexao,$origem,$units_nivel,$units_categoria,$id_usuario); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td style="color:#eedd82;"><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td style="color:#eedd82;"><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td style="color:#eedd82;"><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
		
		<?php
		}
		$units_nivel=1;
		if ($nivel>=$units_nivel){
			
		$units_categoria="defesa";
		
		?>
	<!-- Nivel 1 -->
		<!-- Samurai 2 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:20%;">GUERREIRO</td>
		<td style="width:20%;">DISPONIVEIS</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:8%;">PRATA</td>
		<td style="width:8%;">SUSHI</td>
		<td style="width:8%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $OO->ExercitoDisponivel($conexao,$origem,$units_nivel,$units_categoria,$id_usuario); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td style="color:#eedd82;"><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td style="color:#eedd82;"><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td style="color:#eedd82;"><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
		<?php
		}
		$units_nivel=2;
		if ($nivel>=$units_nivel){
			
		$units_categoria="ataque";
		?>
	<!-- Nivel 2 -->
		<!-- Samurai 3 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:20%;">GUERREIRO</td>
		<td style="width:20%;">DISPONIVEIS</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:8%;">PRATA</td>
		<td style="width:8%;">SUSHI</td>
		<td style="width:8%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $OO->ExercitoDisponivel($conexao,$origem,$units_nivel,$units_categoria,$id_usuario); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td style="color:#eedd82;"><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td style="color:#eedd82;"><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td style="color:#eedd82;"><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
		<?php
		}
		$units_nivel=2;
		if ($nivel>=$units_nivel){
			
		$units_categoria="defesa";
		?>
	<!-- Nivel 2 -->
		<!-- Samurai 4 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:20%;">GUERREIRO</td>
		<td style="width:20%;">DISPONIVEIS</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:8%;">PRATA</td>
		<td style="width:8%;">SUSHI</td>
		<td style="width:8%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $OO->ExercitoDisponivel($conexao,$origem,$units_nivel,$units_categoria,$id_usuario); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td style="color:#eedd82;"><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td style="color:#eedd82;"><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td style="color:#eedd82;"><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
		<?php
		}
		$units_nivel=3;
		if ($nivel>=$units_nivel){
			
		$units_categoria="ataque";		
		?>
	<!-- Nivel 3 -->
		<!-- Samurai 5 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:27%;">GUERREIRO</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:10%;">PRATA</td>
		<td style="width:10%;">SUSHI</td>
		<td style="width:10%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
		
		<?php
		}
		$units_nivel=3;
		if ($nivel>=$units_nivel){
			
		$units_categoria="defesa";
		?>
	<!-- Nivel 3 -->
		<!-- Samurai 6 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:27%;">GUERREIRO</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:10%;">PRATA</td>
		<td style="width:10%;">SUSHI</td>
		<td style="width:10%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
			<?php
		}
		$units_nivel=4;
		if ($nivel>=$units_nivel){
			
		$units_categoria="ataque";		
		?>
	<!-- Nivel 4 -->
		<!-- Samurai 7 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:27%;">GUERREIRO</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:10%;">PRATA</td>
		<td style="width:10%;">SUSHI</td>
		<td style="width:10%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
		<?php
		}
		$units_nivel=4;
		if ($nivel>=$units_nivel){
			
		$units_categoria="defesa";
		?>
	<!-- Nivel 4 -->
		<!-- Samurai 8 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:27%;">GUERREIRO</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:10%;">PRATA</td>
		<td style="width:10%;">SUSHI</td>
		<td style="width:10%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
			<?php
		}
		$units_nivel=5;
		if ($nivel>=$units_nivel){
			
		$units_categoria="ataque";		
		?>
	<!-- Nivel 5 -->
		<!-- Samurai 9 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:27%;">GUERREIRO</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:10%;">PRATA</td>
		<td style="width:10%;">SUSHI</td>
		<td style="width:10%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
		<?php
		}
		$units_nivel=5;
		if ($nivel>=$units_nivel){
			
		$units_categoria="defesa";
		?>
	<!-- Nivel 5 -->
		<!-- Samurai 10 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:27%;">GUERREIRO</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:10%;">PRATA</td>
		<td style="width:10%;">SUSHI</td>
		<td style="width:10%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
			<?php
		}
		$units_nivel=6;
		if ($nivel>=$units_nivel){
			
		$units_categoria="ataque";		
		?>
	<!-- Nivel 6 -->
		<!-- Samurai 11 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:27%;">GUERREIRO</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:10%;">PRATA</td>
		<td style="width:10%;">SUSHI</td>
		<td style="width:10%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
		<?php
		}
		$units_nivel=6;
		if ($nivel>=$units_nivel){
			
		$units_categoria="defesa";
		?>
	<!-- Nivel 6 -->
		<!-- Samurai 12 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:27%;">GUERREIRO</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:10%;">PRATA</td>
		<td style="width:10%;">SUSHI</td>
		<td style="width:10%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
			<?php
		}
		$units_nivel=7;
		if ($nivel>=$units_nivel){
			
		$units_categoria="ataque";		
		?>
	<!-- Nivel 7 -->
		<!-- Samurai 13 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:27%;">GUERREIRO</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:10%;">PRATA</td>
		<td style="width:10%;">SUSHI</td>
		<td style="width:10%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
		<?php
		}
		$units_nivel=7;
		if ($nivel>=$units_nivel){
			
		$units_categoria="defesa";
		?>
	<!-- Nivel 7 -->
		<!-- Samurai 14 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:27%;">GUERREIRO</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:10%;">PRATA</td>
		<td style="width:10%;">SUSHI</td>
		<td style="width:10%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
			<?php
		}
		$units_nivel=8;
		if ($nivel>=$units_nivel){
			
		$units_categoria="ataque";		
		?>
	<!-- Nivel 8 -->
		<!-- Samurai 15 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:27%;">GUERREIRO</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:10%;">PRATA</td>
		<td style="width:10%;">SUSHI</td>
		<td style="width:10%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
		<?php
		}
		$units_nivel=8;
		if ($nivel>=$units_nivel){
			
		$units_categoria="defesa";
		?>
	<!-- Nivel 8 -->
		<!-- Samurai 16 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:27%;">GUERREIRO</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:10%;">PRATA</td>
		<td style="width:10%;">SUSHI</td>
		<td style="width:10%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
		<?php
		}
		$units_nivel=9;
		if ($nivel>=$units_nivel){
			
		$units_categoria="ataque";		
		?>
	<!-- Nivel 9 -->
		<!-- Samurai 17 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:27%;">GUERREIRO</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:10%;">PRATA</td>
		<td style="width:10%;">SUSHI</td>
		<td style="width:10%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
		<?php
		}
		$units_nivel=9;
		if ($nivel>=$units_nivel){
			
		$units_categoria="defesa";
		?>
	<!-- Nivel 9 -->
		<!-- Samurai 18 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:27%;">GUERREIRO</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:10%;">PRATA</td>
		<td style="width:10%;">SUSHI</td>
		<td style="width:10%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
				<?php
		}
		$units_nivel=10;
		if ($nivel>=$units_nivel){
			
		$units_categoria="ataque";		
		?>
	<!-- Nivel 10 -->
		<!-- Samurai 19 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:27%;">GUERREIRO</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:10%;">PRATA</td>
		<td style="width:10%;">SUSHI</td>
		<td style="width:10%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
		<?php
		}
		$units_nivel=10;
		if ($nivel>=$units_nivel){
			
		$units_categoria="defesa";
		?>
	<!-- Nivel 10 -->
		<!-- Samurai 20 -->
	
		<div class="samurai-box fl">
	
	<div class="fr samurai-mgt" style="text-align: right;">

		<div style="float:right;">
		
	<table style="width:100%;">
		
		<tr style="background-color:rgba(0,0,0,0.3); font-size:11px; text-align:center;">
		<td style="width:27%;">GUERREIRO</td>
		<td style="width:20%;">FORÇA DE ATAQUE</td>
		<td style="width:20%;">FORÇA DE DEFESA</td>
		<td style="width:10%;">PRATA</td>
		<td style="width:10%;">SUSHI</td>
		<td style="width:10%;">MADEIRA</td>
		</tr>
		
		<tr style="background-color:rgba(0,0,0,0.8); font-size:13px; text-align:center;">
		<td><?php $return="nome"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="ataque"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="defesa"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="prata"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="sushi"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		<td><?php $return="madeira"; $OO->Exercito($conexao,$origem,$units_nivel,$units_categoria,$return); ?></td>
		
		</tr>
	</table>
	
	</div>
	
	<p>
    <input class="samurai-input" name="samurai_quantidade" type="text" id="samurai_quantidade" size="10" maxlength="3" value="0" />
    <input class="samurai-submit" type="submit" name="samurai_ok" id="samurai_ok" value="TREINAR" />
	</p>
	
	</div>
	
		</div>
	
	<?php } ?>
	
</div> <!-- Termina div da classe subpage -->
<?php
		}
}
?>