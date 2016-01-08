<?php
session_start();
include("../config.php");
include("../conexao.php");

$bloqueio=1;

$sql = $conexao->prepare("UPDATE feudos SET bloqueio = ? WHERE id = ?");
$sql->bind_param('ii',$bloqueio,$id_usuario);
$sql->execute();


header("Location: ../index.php");
?>