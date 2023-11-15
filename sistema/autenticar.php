<?php

require_once("conexao.php");
@session_cache_expire(120);
@session_start();

$usuario = $_POST['email'];
$senha = $_POST['senha'];
$senha_cript = md5($_POST['senha']);

if (empty($usuario) || empty($senha)) {
	echo "<script language='javascript'>window.location='index.php'; </script>";
} else {
	$res = $pdo->prepare("SELECT * FROM usuarios WHERE email = :usuario and senha = :senha");
	$res->bindValue(":usuario", $usuario);
	$res->bindValue(":senha", $senha_cript);
	$res->execute();

	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	$linhas = count($dados);

	if ($linhas > 0) {
		

		$_SESSION['nome_usuario'] = $dados[0]['nome'];
		$_SESSION['email_usuario'] = $dados[0]['email'];
		$_SESSION['nivel_acesso'] = $dados[0]['nivel'];
		$_SESSION['cpf_usuario'] = $dados[0]['cpf'];

		

		if($_SESSION['nivel_acesso'] == 'admin'){
			echo "<script language='javascript'>window.location='admin'; </script>";
		}

		if($_SESSION['nivel_acesso'] == 'Advogado'){
			echo "<script language='javascript'>window.location='advogado'; </script>";
		}
		if($_SESSION['nivel_acesso'] == 'Tesoureiro'){
			echo "<script language='javascript'>window.location='recepcao'; </script>";
		}
		if($_SESSION['nivel_acesso'] == 'Recepcionista'){
			echo "<script language='javascript'>window.location='recepcao'; </script>";
		}
		if($_SESSION['nivel_acesso'] == 'Cliente'){
			echo "<script language='javascript'>window.location='cliente'; </script>";
		}


	}else{
		echo "<script language='javascript'>window.alert('Dados Incorretos!'); </script>";
		echo "<script language='javascript'>window.location='index.php'; </script>";
	}
}
