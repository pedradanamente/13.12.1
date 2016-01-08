<?php

/* Exibe alertas de acordo com o erro */
if (isset($_SESSION['alerts'])){
$alertsMessage=$_SESSION['alerts'];
?><div style="padding-left:2%; padding-right:2%; padding-bottom:2%;"><?php
switch ($alertsMessage) {
	
case 1;
	$error="Email ou senha nao confere, tente novamente!"; 
	unset($_SESSION['alerts']);
	break;

	case 2;
	$warning="Preencher todos os campos!"; 
	unset($_SESSION['alerts']);
	break;
	
	case 3;
	$error="Erro! Já existe um email ou codinome igual, tente outro ..."; 
	unset($_SESSION['alerts']);
	break;
	
	case 4;
	$error="Envie o arquivo!"; 
	unset($_SESSION['alerts']);
	break;
	
	case 5;
	$error="Somente extencoes jpg, jpeg e png sao considerados permitido!"; 
	unset($_SESSION['alerts']);
	break;
	
	case 6;
	$error="A imagem deve ter no máximo 500.000 bytes"; 
	unset($_SESSION['alerts']);
	break;
	
	case 7;
	$error="Ocorreu um erro desconhecido e não pode ser enviada"; 
	unset($_SESSION['alerts']);
	break;
	
}

?>
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style type="text/css">
.info, .success, .warning, .error, .validation {
    border: 1px solid;
    margin: 10px 0px;
    padding:15px 10px 15px 50px;
    background-repeat: no-repeat;
    background-position: 10px center;
    font-family:Arial, Helvetica, sans-serif;
    font-size:20px;
}

.info {
    color: #00529B;
    background-color: #BDE5F8;
    background-image: url("Info.png");
}
.success {
    color: #4F8A10;
    background-color: #DFF2BF;
    background-image:url("Info.png");
}
.warning {
    color: #9F6000;
    background-color: #FEEFB3;
    background-image: url("Info.png");
}
.error {
    color: #D8000C;
    background-color: #FFBABA;
    background-image: url("Info.png");
}
  </style>
  </head>
  <body>
      
      <?php
	  if (isset($info)){ echo '<div class="info">'.$info.'</div>'; }
      if (isset($success)){ echo '<div class="success">'.$sucess.'</div>'; }
      if (isset($warning)){ echo '<div class="warning">'.$warning.'</div>'; }
      if (isset($error)){ echo '<div class="error">'.$error.'</div>'; }
	  
	  ?></div><?php
	  
	}
	  ?>

  </body>
</html>
