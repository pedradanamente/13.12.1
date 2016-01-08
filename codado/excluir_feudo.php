<?php
session_start();
include("../config.php");
include("../conexao.php");

/* Verifica se usuario existe no jogo e o retira */
$sql=$conexao->query("SELECT * FROM feudos WHERE id='$id_usuario'");
while($linha =  $sql->fetch_array()) {
$clan= $linha['clan'];
	}
if($sql->num_rows!=null) {
 //Deleta dados 
$sql = $conexao->prepare("DELETE FROM feudos WHERE id = ?");
$sql->bind_param('i', $id_usuario);
$sql->execute(); 
}

$sql = $conexao->query("SELECT * FROM clans where nome='$clan'");
while($linha =  $sql->fetch_array()) {
$feudos=$linha['feudos']-1;
}

$sql = $conexao->prepare("UPDATE clans SET feudos = ? WHERE nome = ?");
$sql->bind_param('ss',$feudos,$clan);
$sql->execute();

//desloga o cara ...

include("../classes/db.class.php");
		$OO = new DB();

$OO->Sair($conexao);

//explode sessao	
unset ($id_usuario);	  
unset ($usuario);
unset ($senha);
session_unset();
header("Location: ../index.php");
?>