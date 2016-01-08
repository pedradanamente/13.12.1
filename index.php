<?php
session_start();
if(isset($_SESSION['validacao'])===true){
	header("Location: main.php");
}else{
	include("config.php");
	include("conexao.php");
	include("classes/db.class.php");
	$OO = new DB();
	/* *********************************************************************************** */
	// Inicia Funcao de Login
	if (isset($_POST['email'])&&isset($_POST['senha'])) {
		$email=$_POST['email'];
		$senha=md5($_POST['senha']);
		$OO->Login($conexao,$dir_userphoto,$email,$senha);
	}
	// Inicia Funcao de Cadastro
	if (isset($_POST['email_cadastra'])&&isset($_POST['senha_cadastra'])) {
		$email=$_POST['email_cadastra'];
		$senha=md5($_POST['senha_cadastra']);
		$usuario=$_POST['usuario_cadastra'];
		$cidade=$_POST['cidade_cadastra'];
		$sexo = $_POST['sexo_sign'];
		$OO->Registro($conexao,$dir_userphoto,$email,$senha,$usuario,$cidade,$sexo);
		if (!isset($_SESSION['alerts'])){
			$OO->Login($conexao,$dir_userphoto,$email,$senha);
		}
	}
	/* *********************************************************************************** */
?>
<!-- Inicio do HTML ################################################ -->
<!DOCTYPE HTML>
<html lang="pt-br">
	<!-- Inicia Head da Pagina -->
	<head>
	<meta charset="UTF-8">
	<!-- Inicia estilos css -->
	<style type="text/css">
	.corpo-900 {
		width:900px;
		<?php if (isset($_SESSION['alerts'])){ echo "height:530px;"; } else { echo "height:445px;"; } ?> 
		margin: 0 auto;
		background:rgba(255,255,255,0.1);
	}
	body {
		background-image: url(images/wp.jpg);
		padding:0px;
		margin-right:0px;
		margin-top:0px;
		margin-bottom:0px;
		margin-left:0px;
		margin:0 auto;
	}	
	</style>
	<!-- Termina estilos css -->
	<title><?php echo "$title"; ?></title>
	</head>
	<!-- Termina Head da pagina -->
	<link href="css/main.css" rel="stylesheet" type="text/css" />
	<!-- Inicia Corpo da Pagina -->
	<body>
		<!-- ####################################### -->
		<!-- Aqui inicia o Topo da pagina -->
				<div class="topo-900">
					<!-- Inicia Div que exibe formulario de login -->
					<div class="topo-formulario"> 
						<form id="login_form" action="index.php" method="post">
							<input class="topo-input" name="email" type="text" value="" placeholder="e-mail">
							<input class="topo-input" name="senha" type="password" value="" placeholder="senha">
							<input class="topo-submit" value="entrar" type="submit" id="signIn" name="signIn" />
						</form>
					</div>
					<!-- Termina Div que exibe formulario de login -->
				</div>
		<!-- Aqui termina o Topo da pagina -->
		<!-- ####################################### -->
		<!-- Inicio do Div do Corpo 900px da pagina -->
		<div class="corpo-900">
			<div style="height:5px;"> </div> <!-- Div que define espacamento -->
			<!-- Div de aviso em include -->
			<?php
			if (isset($_SESSION['alerts'])){ ?>
				<div class="alerta"> <?php include("alerts.php"); ?> </div>
			<?php } ?>
			<!-- Imagem do Samurai -->
			<div class="corpo-samurai">	<img src="images/LOGO_600PX_PB.png" width="100%" height="100%" /> </div>	
			<!-- Termina Imagem do Samurai -->
			<!-- Inicia div para tabela de formulario de cadastro -->
			<div class="cadastro-formulario">
				<!-- Tabela do formulario de cadastro -->
				<table width="200px" border="0" align="right" cellpadding="4" cellspacing="0"> 
					<tr>
						<td>
							<!-- Formulario -->
							<p class="cadastro-title">ainda não é cadastrado?</p>
							<form name="cadastra_form" method="post" action="index.php">
								<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="card signin-card ">
									<tr>
										<td colspan="2"><input class="cadastro-input" name="usuario_cadastra" type="text" placeholder="nome" value="" spellcheck="false" maxlength="15" required></td>
									</tr>
									<tr>
										<td colspan="2"><input class="cadastro-input" name="email_cadastra" type="email" placeholder="e-mail" value="" spellcheck="false" maxlength="45" required></td>
									</tr>
										<tr>
											<td colspan="2"><input class="cadastro-input" name="senha_cadastra" type="password" placeholder="senha" value="" spellcheck="false" maxlength="12" required></td>
										</tr>
									<tr>
										<td colspan="2"><input class="cadastro-input" name="cidade_cadastra" type="text" placeholder="cidade" value="" spellcheck="false" maxlength="35" required></td>
									</tr>
									<tr>
										<td width="50%" class="sexo-txt">sexo</td>
										<td width="50%">
										<select class="sexo-select" name="sexo_sign">
											<option value="">selecione</option>
											<option value="masculino">masculino</option>
											<option value="feminino">feminino</option>
										</select></td>
									</tr>
									<tr>
										<td >&nbsp;</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<!-- Botão de fazer cadastro -->
										<td colspan="2"><input type="submit" class="cadastro-submit" name="cadastra" value="fazer cadastro" /></td>
									</tr>
								</table>
							</form>
						<!-- Termina Formulario -->
						</td>
					</tr>
				</table>
				<!-- Termina Tabela de fazer cadastro -->
			</div>
			<!-- Termina div para tabela de formulario de cadastro -->
		</div>
		<!-- Fim do Div do Corpo 900px da pagina -->
		
			<!-- Inicio do Div do Rodape 900px da pagina -->
			<div class="rodape1">
				<p class="rodape-title1">The Chinese Dragon - DESIGNED BY ANDRE MACHADO</p>
				<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 12px; text-align: right;">(:</p>
			</div>
			<!-- Fim do Div do Rodape 900px da pagina -->
		
	</body>
	<!-- Fim do Corpo da Pagina -->
</html>
<!-- Fim do HTML  -->
<?php
	}
?>