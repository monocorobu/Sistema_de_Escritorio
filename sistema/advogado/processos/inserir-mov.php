<?php

require_once("../../conexao.php");

$obs = $_POST['obs'];
$data = $_POST['data'];
$titulo = $_POST['titulo'];
$processo = $_POST['num'];

//VERIFICAR SE O REGISTRO JÁ ESTÁ CADASTRADO
$res_mov = $pdo->query("SELECT * from historico where titulo = '$titulo'");
$dados_mov = $res_mov->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados_mov);



if($linhas == 0){
    $res = $pdo->prepare("INSERT into historico (titulo, obs, data, processo) values (:titulo, :obs, :data, :processo)");

    $res->bindValue(":titulo", $titulo);
    $res->bindValue(":obs", $obs);
    $res->bindValue(":data", $data);
    $res->bindValue(":processo", $processo);
    
    
    
    $res->execute();
    
    echo "Cadastrado com Sucesso!!";
    
    
    
    /* //RECUPERAR O CPF DO CLIENTE
    $res_cpf = $pdo->query("SELECT * from processos where num_processo = '$processo'");
    $dados_cpf = $res_cpf->fetchAll(PDO::FETCH_ASSOC);
    $cpf_cliente = $dados_cpf[0]['cliente'];
    
    //TRAZER O EMAIL DO CLIENTE
    $res_cl = $pdo->query("SELECT * from clientes where cpf = '$cpf_cliente'");
    $dados_cl = $res_cl->fetchAll(PDO::FETCH_ASSOC);
    $email_cli = $dados_cl[0]['email'];
    
    
    //CÓDIGO PARA DISPARAR EMAIL PARA O CLIENTE
    $url_painel_cli = $url_sistema . 'cliente';
    $to = $email_cli;    //enviar para o email do cliente
    $subject = "Movimentação no Processo";
    
    $message = "
          <b>$titulo</b> <br><br>
          $obs !! 
          <br><br>
          
    
              <br><br><br> <i>Ver no seu painel do Cliente - <a title='$url_painel_cli' href='$url_painel_cli' target='_blank'>$url_painel_cli</a></i>
             
    
                          ";
    
    $remet = $email_site;
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8;' . "\r\n";
    $headers .= "From: " . $remet;
    mail($to, $subject, $message, $headers);


	echo "Cadastrado com Sucesso!!"; */

}else{
	echo "Este Registro já está cadastrado!!";
}

?>



