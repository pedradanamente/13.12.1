<style>
body {
        background-image: url(images/wp.jpg);
}
.bloqueio {
	height:300px;
	width:60%;
	margin-left:20%;
	margin-right:20%;
	margin-top:5%;
	background-color: rgba(0,0,0,0.7);
	font-family:verdana;
	text-align:center;
}
.bloqueio-title {
	padding-top:30px;
	padding-bottom:30px;
    color: #FFF;
    font-size:25px;
}
.bloqueio-txt {
    color: #FFF;
    font-size:15px;
    float:right;
    padding-right:45px;
}
</style>
<?php

if(isset($_SESSION['bloqueio'])==1){
	
include("config.php");
include("conexao.php");

include("classes/db.class.php");
$OO = new DB();

$OO->Sair($conexao);

//explode sessao		  
unset ($usuario);
unset ($senha);
session_unset();
?>

<html lang="pt-br"
	<head><meta charset="UTF-8"></head>
<body>
<div class="bloqueio">
	
<div class="bloqueio-title">Atenção, você foi bloqueado</div>

<div class="bloqueio-txt">
	<p>Sua conta foi congelada e esta sob investigação, por favor aguarde ...</p>
	<p>Você pode entrar em contato por o seguinte email: staff-feudal@gmail.com</p>
</div>

<div style="float:left;"><img width="130px" height="140px" src="images/police.png"</div>
	
<div/>
</body>
</html>

<?php
	}

?>