<?php
session_start();
include("../config.php");
include("../conexao.php");

include("../classes/db.class.php");
		$OO = new DB();

$OO->Sair($conexao);

//explode sessao		  
unset ($usuario);
unset ($senha);
session_unset();
header("Location: ../index.php");
?>