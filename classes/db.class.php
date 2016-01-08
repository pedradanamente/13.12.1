<?php

	class DB{

/* Funcoes Principais */
# Login
# Registro de Usuario
# ShowMenu
# ShowBacground
# ShowAvatar
# Sair

/* Aplicadas diretamente ao Jogo */
# Cadastro de Feudo
# VerificaCadastro
# RetornaTurno

/* ********************************************************************************* */ 
public function Login($conexao,$dir_userphoto,$email,$senha){
// Verifica se Usuario e Senha confere
$sql = $conexao->query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'");
if ($sql->num_rows==1){

// Aqui identificou os dados digitados como validos e inicia o login
while($linha =  $sql->fetch_array()) {
$id_usuario = $linha['id'];
$usuario = $linha['usuario'];
}

// Cria sessions
$_SESSION['id']=$id_usuario;
$_SESSION['usuario']=$usuario;

// Define Variaveis
$sql = $conexao->query("SELECT * FROM usuarios WHERE id='$id_usuario'");
while($linha =  $sql->fetch_array()) {
$lvezes = $linha['lvezes']+1;
$lanterior = $linha['lanterior'];
$clan=$linha['clan'];
}
$status='online';
$_lday=date('d-m-Y');
$_lmounth=date('m-Y');
$_lnovo=date("Y/m/d H:i:s");
$_getdate=date('d-m-Y');
$ip=$_SERVER["REMOTE_ADDR"];

// Atualiza dados na tabela dados_usuario
$sql = $conexao->prepare("UPDATE usuarios SET ip = ?, status = ?, lmounth = ?, lday = ?, lanterior = ?, lvezes = ? WHERE id = ?");
$sql->bind_param('sssssii',$ip,$status,$_lmounth,$_lday,$_lnovo,$lvezes,$id_usuario);
$sql->execute();

// Verifica e Cria Diretório do Usuário
$diretorio = $dir_userphoto . $id_usuario; 
if (!is_dir($diretorio)) {
mkdir($diretorio);
}
$diretorio = $dir_userphoto . $id_usuario . '/img'; 
if (!is_dir($diretorio)) {
mkdir($diretorio);
}

// Define os sessions
session_name("logado");
$_SESSION['validacao']=1;

	// verifica cadastro no jogo
	$sql=$conexao->query("SELECT * FROM feudos WHERE id='$id_usuario'");

	if($sql->num_rows!=null) {
	$_SESSION['ongame']=1;
		
		while($linha = $sql->fetch_array()) {
		$_SESSION['bloqueio']=$linha['bloqueio'];
		
		}
	}

// Leva usuario para pagina principal
	header("Location: main.php");
}else{
/* Caso o Usuario seja Inválido ... */
	$_SESSION['alerts']=1;
			}
	// Termina funcao Login
	}
/* ********************************************************************************* */ 
public function Registro($conexao,$dir_userphoto,$email,$senha,$usuario,$cidade,$sexo){
	
// Verifica se digitou todos campos do formulario
if ((!$usuario) || (!$senha) || (!$email) || (!$sexo)){
	$_SESSION['alerts']=2;
}else{
// VERIFICA SE USUARIO OU EMAIL EXISTE CADASTRADO
$sql = $conexao->query("SELECT * FROM usuarios WHERE email='$email' OR usuario='$usuario'");
if ($sql->num_rows==1){
$_SESSION['alerts']=3;
	}else{
/* Tudo ok, pode iniciar o cadastro */
$nome="Anonimo";
$status='cadastrado';
//$foto='profile-'.$sexo.'.png';
$foto='padrao.png';
$bg='0000.jpg';

// INSERE USUARIO AO BANCO DE DADOS
$sql = $conexao->prepare("INSERT usuarios SET nome = ?, email = ?, usuario = ?, senha = ?, sexo = ?, cidade = ?, ip = ?, status = ?, background = ?, avatar = ?");
$sql->bind_param('ssssssssss',$nome,$email,$usuario,$senha,$sexo,$cidade,$ip,$status,$bg,$foto);
$sql->execute();

$sql = $conexao->query("SELECT id FROM usuarios WHERE email='$email'");
while($linha = $sql->fetch_array()) {
$id_usuario = $linha['id'];
}

// Verifica e Cria Diretorio do Usuorio
$diretorio = $dir_userphoto . $id_usuario; 
if (!is_dir($diretorio)) {
mkdir($diretorio);
}
$diretorio = $dir_userphoto . $id_usuario . '/img'; 
if (!is_dir($diretorio)) {
mkdir($diretorio);
			}
/* Cadastro efetuado com sucesso! */
			}
		}
	}
/* ********************************************************************************* */ 
public function ShowMenu($conexao){
$id_usuario=$_SESSION['id'];
$usuario=$_SESSION['usuario'];

	// Linha HR
	echo ' <div> ';
	echo '<div id="cssmenu"><ul style="width:126px;"> <div class="menu-title"> Menu Principal</div></ul></div>';
	echo '</div>';
	
$sql=$conexao->query("SELECT id FROM administradores WHERE id = '$id_usuario'");
if ($sql->num_rows==1){
	
	/* Mostra o menu para administradores */
	$sqlx=$conexao->query("SELECT * FROM menu WHERE acesso = '4DM1N'");
	while($linha =  $sqlx->fetch_array()) {
	$_linkmenu=$linha['linkmenu'];
	$_idmenu=$linha['idmenu'];
	$_nomemenu=$linha['nome'];

	// Echo do botao do menu
	echo ' <div> ';
	echo '<div id="cssmenu"><ul style="width:126px;"><li class="last" ><a href=' . $_linkmenu . '><span>' . $_nomemenu . '</span></a></li></ul></div>';
	echo '</div>';

	// Termina repeticao do menu
	};	
	
	// Linha HR
	echo ' <div> ';
	echo '<div id="cssmenu"><ul style="width:126px;"><li> <hr class="menu-hr"> </li></ul></div>';
	echo '</div>';
	
}

/* Mostra o menu para usuarios */
$sql=$conexao->query("SELECT * FROM menu WHERE acesso = 'usuario'");
while($linha =  $sql->fetch_array()) {
$_linkmenu=$linha['linkmenu'];
$_idmenu=$linha['idmenu'];
$_nomemenu=$linha['nome'];

// Echo do botao do menu
echo ' <div> ';
echo '<div id="cssmenu"><ul style="width:126px;"><li class="last"><a href=' . $_linkmenu . '><span>' . $_nomemenu . '</span></a></li></ul></div>';
echo '</div>';

// Termina repeticao do menu
	};
	
}
/* ********************************************************************************* */ 
public function ShowBackground($conexao,$dir_background){
$id_usuario=$_SESSION['id'];
$usuario=$_SESSION['usuario'];

/* Background do usuario */
$sql = $conexao->query("SELECT background FROM usuarios WHERE id='$id_usuario'");
while($linha =  $sql->fetch_array()) {
$bground_usuario=$linha['background'];
}
if($bground_usuario=="0000.jpg"){
$ShowBackground=$dir_background . "0000.jpg";
}else{
$ShowBackground=$dir_background . $bground_usuario;
	}
echo "$ShowBackground";
}
/* ********************************************************************************* */ 
public function ShowAvatar($conexao,$dir_avatar){
// Seleciona foto do usuário
$id_usuario=$_SESSION['id'];
$usuario=$_SESSION['usuario'];

$sql = $conexao->query("SELECT avatar FROM usuarios WHERE id='$id_usuario'");
while($linha =  $sql->fetch_array()) {
$foto=$linha['avatar'];
	}
$ShowAvatar=$dir_avatar . $foto;
echo '<img src="'.$ShowAvatar.'" width="105px" height="125px" />';
}
/* ********************************************************************************* */ 
public function Sair($conexao){
$usuario=$_SESSION['usuario'];
$id_usuario=$_SESSION['id'];


/* desloga o cara ... */

//atualiza campo status
$offline='offline';
$sql = $conexao->prepare("UPDATE usuarios SET status = ? WHERE id = ?");
$sql->bind_param('si',$offline,$id_usuario);
$sql->execute();

//fecha conexao com o banco
$conexao->close();
}
/* ********************************************************************************* */ 
/* Aplicadas diretamente ao Jogo */
/* ********************************************************************************* */ 
public function Cadastro($conexao){
	
}
/* ********************************************************************************* */ 
public function VerificaCadastro($conexao){
	
}
/* ********************************************************************************* */ 
public function RetornaTurno($conexao){
$sql = $conexao->query("SELECT * FROM motor");
while($linha = $sql->fetch_array()) {
$Turno = $linha['turno'];
	}
echo "$Turno";
}
/* ********************************************************************************* */ 
// Ranking
public function Ranking($conexao,$mostra_na_tela,$clan,$posicao,$feudo,$rank_titulo){

?>
<div class="ranking-box">
	<form id="form1" name="form1" method="post" action="main.php?op=ranking">
    
	<div class="fl brb"><?php echo "$rank_titulo"; ?></div>	
	<div class="fr mgt">
	
	<ul>
	<table style="width: 100%;">
		
		<tr style="background-color:rgba(0,0,0,0.1); font-weight:bold; font-size:11px; text-align:left;">
		<il class="rank-div">
		<td style="width: 8%;">Rank</td>
		<td style="width: 35%;">Feudo</td>
		<td style="width: 0%;">Nivel</td>
		<td style="width: 5%;"></td>
		<td style="width: 30%;">Clan</td>
		<td style="width: 5%;"></td>
		<td style="width: 20%;">AÇÃO</td>
		</il>
		</tr>
		<?php
	
$sql = $conexao->query("SELECT * FROM feudos ORDER BY posicao ASC LIMIT $mostra_na_tela");
while($linha =  $sql->fetch_array()) {
	
	$rank_feudo=$linha['feudo'];
	$rank_posicao=$linha['posicao'];
	$rank_nivel=$linha['nivel'];
	$rank_origem=$linha['origem'];
	$rank_clan=$linha['clan'];
	$rank_daimyo=$linha['daimyo'];
	
	/* Classe de Bloqueio */
	if ($linha['bloqueio']==FALSE) {
		$class_number="rank-feudo-0";
	}else{
		$class_number="rank-feudo-1";
	}
	/* Fim da classe de Bloqueio */
	
	/* Inicio da TR */
	if (!isset($tr)or$tr==0){ $tr=1; }
	if ($rank_posicao==null||$rank_posicao==0){ $rank_posicao=1; }
	
	?><?php if ($tr==2){ ?><tr style="background-color:rgba(0,0,0,0.3);"> <?php $tr=0; } ?><?php
	?><?php if ($tr==1){ ?><tr style="background-color:rgba(0,0,0,0.4);"> <?php $tr++; } ?><?php
	
	/* Comeca funcao para medalha */
	include("fixed/medalha.php");
	/* Comeca funcao para flag de range  */
	include("fixed/flag.php");
	/* Variavel para acao pelo range */
	if ($rank_range==1) {
	$rank_acao='<div style="font-weight: bold; margin-left:35px; float:left; margin-top:4px;">Ataque</div>';
	}else{ $rank_acao=""; }
	/* Exibe o Ranking */
	?>
	<il class="rank-div" >
		
	<td><?php echo "$rank_posicao"; ?></td>
	
	<td><a href="main.php"><div class="<?php echo "$class_number"; ?>"> <?php echo "$rank_medalha $rank_feudo"; ?> </div></a></td>
	
	<td><?php echo "$rank_nivel"; ?></td>
	
	<td><a href="<?php echo "images/".$rank_origem.".png"; ?>" rel="lightbox"><img width="20px" height="20px" src="<?php echo "images/".$rank_origem.".png"; ?>" title="<?php echo "$rank_origem"; ?>" /></a></td>
	
	<td><?php echo "$rank_clan"; ?></td>
	
	<td><?php echo "$rank_flag"; ?></td>
	
	<td style="text-align:right;"><?php echo "$rank_acao"; ?></td>
	
	</il>
	
	<!-- Fim da TR -->
	</tr>
	<?php
	}
	
	?>
	</table>
	</ul>
	</div>	
	</form>
	</div';
	<?php
	
	}
/* ********************************************************************************* */ 
public function ExercitoDisponivel($conexao,$origem,$units_nivel,$units_categoria,$id_usuario){
	$sql = $conexao->query("SELECT * FROM unidades WHERE origem = '$origem' AND categoria = '$units_categoria' AND nivel = '$units_nivel' ");
	while($linha = $sql->fetch_array()) {
		
	$codigo_unidade = $linha["codigo"];
	}

	$sql = $conexao->query("SELECT * FROM exercito WHERE id = '$id_usuario' ");
	while($linha = $sql->fetch_array()) {
	$disponivel_unidade = $linha[$codigo_unidade];
	}

	echo "$disponivel_unidade";
	
}
/* ********************************************************************************* */ 
public function Exercito($conexao,$origem,$units_nivel,$units_categoria,$return){
	$sql = $conexao->query("SELECT * FROM unidades WHERE origem = '$origem' AND categoria = '$units_categoria' AND nivel = '$units_nivel' ");
while($linha = $sql->fetch_array()) {
	
$return=$linha["$return"];

echo "$return";
	}
}
/* ********************************************************************************* */ 
public function ShowUnImage($conexao,$origem,$units_nivel,$units_categoria,$return){
	$sql = $conexao->query("SELECT * FROM unidades WHERE origem = '$origem' AND categoria = '$units_categoria' AND nivel = '$units_nivel' ");
while($linha = $sql->fetch_array()) {
	
$return=$linha["codigo"];

echo '<img src="images/units/'.$return.'.jpg" width="100%" height="100%" />';
	}
}
/* ********************************************************************************* */ 
 public function ShowUnidade($conexao,$origem,$return){
$id_usuario=$_SESSION['id'];

$sql = $conexao->query("SELECT * FROM feudos WHERE origem = '$origem' AND id = '$id_usuario' ");
while($linha = $sql->fetch_array()) {
	
	$sqlx = $conexao->query("SELECT * FROM unidades WHERE codigo = '$return' ");
	while($linhax = $sqlx->fetch_array()) {
	$UN_nome=$linhax['nome'];
	}
	
	if(isset($linha["$return"])){
	$return=$linha["$return"];
	if ($return!=0){ echo "Nome: $UN_nome - Quantidade: $return"; }
	}
	
  }
} 
/* ********************************************************************************* */ 
// Termina classe
}
?>