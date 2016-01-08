<?php

	class Motor{

# Gira

/* ********************************************************************************* */ 
public function Gira($conexao){

$sql = $conexao->query("SELECT turno FROM motor");
while($linha =  $sql->fetch_array()) {
$NovoTurno = $linha['turno']+1;
}
$data=date("Y-m-d H:i:s");

$sql = $conexao->prepare("UPDATE motor SET turno = ?, horario = ?");
$sql->bind_param('is',$NovoTurno,$data);
$sql->execute();

//$sql = $conexao->prepare("UPDATE ambiente SET turno = ?");
//$sql->bind_param('i',$NovoTurno);
//$sql->execute();

}
/* ********************************************************************************* */ 

// Termina classe
}
	
?>