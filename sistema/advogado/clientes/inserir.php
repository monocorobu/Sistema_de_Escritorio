<?php

require_once("../../conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$obs = $_POST['obs'];
$pessoa = $_POST['pessoa'];

$cpf_adv = $_SESSION['cpf_usuario'];

if ($cpf == '') {
	$cpf = $_POST['cnpj'];
}


$cpf_limpo = preg_replace('/[^0-9]/', '', $cpf);
$cpf_cript = md5($cpf_limpo);

//VERIFICAR SE O REGISTRO JÁ ESTÁ CADASTRADO
$res_c = $pdo->query("select * from clientes where cpf = '$cpf'");
$dados_c = $res_c->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados_c);
if ($linhas == 0) {
	$res = $pdo->prepare("INSERT into clientes (nome, cpf, telefone, email, endereco, advogado, data, obs, pessoa) values (:nome, :cpf, :telefone, :email, :endereco, :advogado, curDate(), :obs, :pessoa) ");

	$res->bindValue(":nome", $nome);
	$res->bindValue(":cpf", $cpf);
	$res->bindValue(":telefone", $telefone);
	$res->bindValue(":email", $email);
	$res->bindValue(":endereco", $endereco);
	$res->bindValue(":advogado", $cpf_adv);

	$res->bindValue(":obs", $obs);
	$res->bindValue(":pessoa", $pessoa);

	$res->execute();




	$res = $pdo->prepare("INSERT into usuarios (nome, cpf, email, senha, senha_original, nivel) values (:nome, :cpf, :email, :senha, :senha_original, :nivel) ");

	$res->bindValue(":nome", $nome);
	$res->bindValue(":cpf", $cpf);
	$res->bindValue(":email", $email);
	$res->bindValue(":senha", $cpf_cript);
	$res->bindValue(":senha_original", $cpf_limpo);
	$res->bindValue(":nivel", 'Cliente');

	$res->execute();



	echo "Cadastrado com Sucesso!!";
} else {
	echo "Este Registro já está cadastrado!!";
}
