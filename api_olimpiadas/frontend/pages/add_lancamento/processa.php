<?php
	include_once("conexao.php");
	if(isset($_POST['enviar'])){
	$nome = $_POST['nome'];
	
	$data = $_POST['data'];
	$horainicial = $_POST['horainicial'];
	//echo "$nome_usuario - $email_usuario";



// // 
// 	$sqluser = Mysql::conectar()->prepare("select * from cria_comp_lanc where nome = ?");
// 	$sqluser->execute(array($nome));

// 	if($sqluser->rowCount() == 1){
// 		echo "Este nome ja esta cadastrado";
// 	}else{
// 		$result_usuario = "INSERT INTO cria_comp_lanc(nome,vagas, data, horainicial) VALUES ('$nome','$vagas','$data','$horainicial')";
// 		$resultado_usuario = mysqli_query($conexao, $result_usuario);
// 	}




	
	$result_usuario = "INSERT INTO cria_comp_lanc(nome,data, horainicial) VALUES ('$nome','$data','$horainicial')";
	$resultado_usuario = mysqli_query($conexao, $result_usuario);
	
	if(mysqli_affected_rows($conexao) != 0){
				$_SESSION['mensagem']=  "<div class='alert alert-success'>Cadastrado com sucesso!</div>";
				header("location: ../Cadastro_competidor/Cadastro_competidor.php");
				exit;	
			}else{
				$_SESSION['mensagem']=  "<div class='alert alert-success'>Erro no cadastro</div>";	
				header("location: ../add_lancamento.php");
				exit;
			}

}
?>
