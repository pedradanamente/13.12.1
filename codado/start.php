<?php
session_start();
if(!isset($_SESSION['validacao'])){
header("Location: ../index.php");
}else{
include("../config.php");
include("../conexao.php");


/* Verifica se usuario existe no jogo */
$sql=$conexao->query("SELECT * FROM feudos WHERE id='$id_usuario'");
if($sql->num_rows!=null) {
	echo "Ongame! - Start";
}else{
/* Insere dados */
/* Quantidade de comida que um feudo vai ter apos cadastro */
$StartPrata=50;
$StartMadeira=100;
$StartSushi=80;
/* Informacoes da conta de jogador */
$feudo=$_POST['feudo'];
$origem=$_POST['origem'];
/* Valores de quantidade de peao inicial */
$peao_prata=0;
$peao_madeira=0;
$peao_sushi=5;
$peao_notwork=0;
$peao_total=5;
/* Outras variaveis de dados pro feudo */
$unidades=0;
$ninjas=0;
$nivel=1;

$sql = $conexao->query("SELECT * FROM feudos");
$posicao=$sql->num_rows+1;

$sql = $conexao->query("SELECT * FROM clans");
$clanmax=$sql->num_rows;
$clanid= rand(1,$clanmax);
$sql = $conexao->query("SELECT * FROM clans where id='$clanid'");
while($linha =  $sql->fetch_array()) {
$clan=$linha['nome'];
$feudos=$linha['feudos']+1;
}

$sql = $conexao->prepare("INSERT feudos SET id = ?, feudo = ?, origem = ?, clan = ?, unidades = ?, ninjas = ?, nivel =?, peao_prata = ?, peao_sushi = ?, peao_madeira = ?, peao_notwork = ?, peao_total = ?, prata = ?, sushi = ?, madeira = ?, posicao = ?");
$sql->bind_param('isssiiiiiiiiiiii',$id_usuario,$feudo,$origem,$clan,$unidades,$ninjas,$nivel,$peao_prata,$peao_sushi,$peao_madeira,$peao_notwork,$peao_total,$StartPrata,$StartSushi,$StartMadeira,$posicao);
$sql->execute();

$sql = $conexao->prepare("UPDATE clans SET feudos = ? WHERE id = ?");
$sql->bind_param('si',$feudos,$clanid);
$sql->execute();


$_SESSION['ongame']=1;

header("Location: ../main.php");
	}

}
?>