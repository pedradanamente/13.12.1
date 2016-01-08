<?php
session_start();
include("../config.php");
include("../conexao.php");
if(!isset($_SESSION['validacao'])){
header("Location: ../index.php");
}else{
	if(!isset($_SESSION['ongame'])){
	header("Location: ../main.php?op=startgame");
	}else{
	// Se inseriu o arquivo para enviar
	if (isset($_FILES['imagefile']['name'])) {
		$tamanho_maximo = 500000;	
		$name = $_FILES['imagefile']['name'];
		$type = $_FILES['imagefile']['type'];
		$tamanho = $_FILES['imagefile']['size'];
		$file_ext = strrchr($_FILES['imagefile']['name'], '.'); 
		// verifica extencao	
		if( ($file_ext!=".jpg")&&($file_ext!=".jpeg")&&($file_ext!=".png")&&($file_ext!=".gif") ){
			$_SESSION['alerts']=5;
			header("Location: ../main.php?op=conta");
			exit;
		}
		if($tamanho > $tamanho_maximo) {
			$_SESSION['alerts']=6;
			header("Location: ../main.php?op=conta");
			exit;	
		}
		// monta novo nome da foto
		$nome_da_imagem = 'PERFIL' . $_code . $file_ext;
		$uploadfile = "../" . $dir_avatar . $nome_da_imagem;
		//move arquivo e cadastra no banco de dados
		if (move_uploaded_file($_FILES['imagefile']['tmp_name'],$uploadfile)){
			//deleta foto anterior se nao for padrao
			$sql = $conexao->query("SELECT avatar FROM usuarios WHERE id='$id_usuario'");
			while($linha =  $sql->fetch_array()) {
				$foto_apagar=$linha['avatar'];
				if( ($foto_apagar!="profile-feminino.png")&&($foto_apagar!="profile-masculino.png")&&($foto_apagar!="padrao.png") ){
					unlink("../" . $dir_avatar . $foto_apagar);
				}
			}
			// registra no banco de dados o nome para da foto o usuario	
			$sql = $conexao->prepare("UPDATE usuarios SET avatar = ? WHERE id = ?");
			$sql->bind_param('si',$nome_da_imagem,$id_usuario);
			$sql->execute();
			// tudo ok, manda devolta para pagina da conta de usuario
			header("Location: ../main.php?op=conta");
		}else{
		// ocorreu um erro desconhecido ...
		$_SESSION['alerts']=7;
		header("Location: ../main.php?op=conta");
		}
		// fecha chaves que confere se inseriu a foto	
	}else{
		// Se não estiver inserido nenhum arquivo para enviar
		$_SESSION['alerts']=4;
		header("Location: ../main.php?op=conta");
	}
}
}
?>