<?php 

require_once("../../conexao.php");


$descricao = $_POST['descricao'];
$processo = $_POST['processo'];


//SCRIPT PARA FOTO NO BANCO
$caminho = '../../img/arquivos/' .$_FILES['foto']['name'];
    if ($_FILES['foto']['name'] == ""){
     echo "Escolha um arquivo!!";
	exit();
    }else{
      $imagem = $_FILES['foto']['name']; 
    }
    
    $imagem_temp = $_FILES['foto']['tmp_name']; 
    move_uploaded_file($imagem_temp, $caminho);




if($descricao == ''){
	echo "Preencha a Descrição!!";
	exit();
}




	$res = $pdo->prepare("INSERT into documentos (descricao, data, processo, arquivo) values (:descricao, curDate(), :processo, :arquivo)");

	$res->bindValue(":descricao", $descricao);
	$res->bindValue(":processo", $processo);
	$res->bindValue(":arquivo", $imagem);
	

	$res->execute();



	echo "Cadastrado com Sucesso!!";



?>