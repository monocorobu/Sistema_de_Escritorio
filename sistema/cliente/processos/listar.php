<?php 

require_once("../../conexao.php");
$pagina = 'processos';

$txtbuscar = @$_POST['txtbuscar'];
$cpf = $_SESSION['cpf_usuario'];

echo '
<table class="table table-hover table-sm mt-3 tabelas  ">
	<thead class="thead-light ">
		<tr class="text-center">
			<th scope="col">Número Processo</th>
			<th scope="col">Vara</th>
			<th scope="col">Ação</th>
			<th scope="col">Advogado</th>
			<th scope="col">Audiências</th>
			<th scope="col">Status</th>
			<th scope="col">Pago</th>
			<th scope="col">Opções</th>
		</tr>
	</thead>
	<tbody>';

	
	    $itens_por_pagina = $_POST['itens'];

	//PEGAR A PÁGINA ATUAL
		$pagina_pag = intval(@$_POST['pag']);
		
		$limite = $pagina_pag * $itens_por_pagina;

		//CAMINHO DA PAGINAÇÃO
		$caminho_pag = 'index.php?acao='.$pagina.'&';

	if($txtbuscar == ''){
		$res = $pdo->query("SELECT * from processos where cliente = '$cpf' order by id desc LIMIT $limite, $itens_por_pagina");
	}else{
		$txtbuscar = '%'.@$_POST['txtbuscar'].'%';
		$res = $pdo->query("SELECT * from processos where cliente = '$cpf' and num_processo LIKE '$txtbuscar' order by id desc");

	}
	
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);


	//TOTALIZAR OS REGISTROS PARA PAGINAÇÃO
		$res_todos = $pdo->query("SELECT * from processos");
		$dados_total = $res_todos->fetchAll(PDO::FETCH_ASSOC);
		$num_total = count($dados_total);

		//DEFINIR O TOTAL DE PAGINAS
		$num_paginas = ceil($num_total/$itens_por_pagina);


	for ($i=0; $i < count($dados); $i++) { 
			foreach ($dados[$i] as $key => $value) {
			}

			$id = $dados[$i]['id'];	
			$num_processo = $dados[$i]['num_processo'];
			
			$vara = $dados[$i]['vara'];
			$tipo_acao = $dados[$i]['tipo_acao'];
			$advogado = $dados[$i]['advogado'];
			$status = $dados[$i]['status'];
			$audiencias = $dados[$i]['audiencias'];


			$res_vara = $pdo->query("SELECT * from varas where id = '$vara'");
			$dados_vara = $res_vara->fetchAll(PDO::FETCH_ASSOC);
			$linhas_vara = count($dados_vara);
			$nome_vara = $dados_vara[0]['nome'];


			$res_tipo = $pdo->query("SELECT * from especialidades where id = '$tipo_acao'");
			$dados_tipo = $res_tipo->fetchAll(PDO::FETCH_ASSOC);
			$linhas_tipo = count($dados_tipo);
			$nome_tipo = $dados_tipo[0]['nome'];


			$res_cli = $pdo->query("SELECT * from advogados where cpf = '$advogado'");
			$dados_cli = $res_cli->fetchAll(PDO::FETCH_ASSOC);
			$linhas_cli = count($dados_cli);
			$nome_adv = $dados_cli[0]['nome'];


			//VERIFICAR SE O PROCESSO TEM PAGAMENTO PENDENTE
			$res_rec = $pdo->query("SELECT * from receber where processo = '$id' and pago != 'sim'");
			$dados_rec = $res_rec->fetchAll(PDO::FETCH_ASSOC);
			$linhas_rec = count($dados_rec);
			if($linhas_rec > 0){
				$cor_square = 'text-danger';
			}else{
				$cor_square = 'text-success';
			}
			

echo '
		<tr class="text-center">

			
			<td class="text-left">
			
			
			'.$num_processo.'
			</td>
			
			
			<td>'.$nome_vara.'</td>
			<td>'.$nome_tipo.'</td>
			<td>'.$nome_adv.'</td>

			<td class="justify-content-center">
			<a href="index.php?acao='.$pagina.'&funcao=aud&num='.$num_processo.'" class="text-dark" title="Ver Audiências">
			'.$audiencias.'
			<i class="fas fa-eye ml-1 text-info"></i>
			</a>
			</td>

			<td>'.$status.'</td>
			
			
			<td>
				<a href="index.php?acao=pagar" title="Ver Contas">
				<i class="fas fa-square mr-1 '.$cor_square.'"></i>
				</a>

			</td>
			<td>
			<big>
			
			<a title="Movimentações do Processo" href="index.php?acao='.$pagina.'&funcao=mov&id='.$num_processo.'"><i class="far fa-file-alt text-primary mr-1"></i>
			<a title="Observações" href="index.php?acao='.$pagina.'&funcao=obs&id='.$num_processo.'"><i class="fas fa-comment text-warning"></i></a>

			<a title="Anexar Arquivo" href="index.php?acao='.$pagina.'&funcao=arquivo&id='.$num_processo.'"><i class="fas fa-file-upload text-info ml-1"></i></a>

			</big>

			</td>
		</tr>';

	}

echo  '
	</tbody>
</table> ';


if($txtbuscar == ''){


echo '
<!--ÁREA DA PÁGINAÇÃO -->
<nav class="paginacao" aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="btn btn-outline-dark btn-sm mr-1" href="'.$caminho_pag.'pagina=0&itens='.$itens_por_pagina.'" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>';
            
            for($i=0;$i<$num_paginas;$i++){
            $estilo = "";
            if($pagina_pag == $i)
              $estilo = "active";

          echo '
             <li class="page-item"><a class="btn btn-outline-dark btn-sm mr-1 '.$estilo.'" href="'.$caminho_pag.'pagina='.$i.'&itens='.$itens_por_pagina.'">'.($i+1).'</a></li>';
           } 
            
           echo '<li class="page-item">
              <a class="btn btn-outline-dark btn-sm" href="'.$caminho_pag.'pagina='.($num_paginas-1).'&itens='.$itens_por_pagina.'" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
</nav>




';

}


?>