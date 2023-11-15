<?php 

require_once("../conexao.php");
$cpf_adv = $_SESSION['cpf_usuario'];


//CONTAR QUANTAS COISAS TEM


//CONTAGEM CLIENTES
$res_clientes = $pdo->query("select * from clientes ");
$dados_clientes = $res_clientes->fetchAll(PDO::FETCH_ASSOC);
$linhas_clientes = count($dados_clientes);

//CONTAGEM TAREFAS
$res_tarefas = $pdo->query("select * from tarefas ");
$dados_tarefas = $res_tarefas->fetchAll(PDO::FETCH_ASSOC);
$linhas_tarefas = count($dados_tarefas);



//CONTAGEM PROCESSOS
$res_processos = $pdo->query("select * from processos ");
$dados_processos = $res_processos->fetchAll(PDO::FETCH_ASSOC);
$linhas_processos = count($dados_processos);
?>

<div class="container-fluid">

<div class="area_cards">
	<div class="row">

		<div class="col-sm-12 col-lg-3 col-md-6 col-sm-6 mb-4">
			<div class="card card-stats">
				<div class="card-body ">
					<div class="row">
						<div class="col-5 col-md-4">
							<div class="icone-card text-center text-info">
								<i class="fas fas2 fa-user-friends"></i>
							</div>
						</div>
						<div class="col-7 col-md-8">
							<div class="numbers">
								<p class="titulo-card">Clientes</p>
								<p class="subtitulo-card"><?php echo $linhas_clientes?><p>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer rodape-card">
						Clientes Cadastrados

					</div>
				</div>
			</div>


			<div class="col-sm-12 col-lg-3 col-md-6 col-sm-6 mb-4">
				<div class="card card-stats">
					<div class="card-body ">
						<div class="row">
							<div class="col-5 col-md-4">
								<div class="icone-card text-center text-success">
									<i class="fas fas2 fa-paste"></i>
								</div>
							</div>
							<div class="col-7 col-md-8">
								<div class="numbers">
									<p class="titulo-card">Processos</p>
									<p class="subtitulo-card"><?php echo $linhas_processos?><p>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer rodape-card">
							Processos em Andamento

						</div>
					</div>
				</div>


				<div class="col-sm-12 col-lg-3 col-md-6 col-sm-6 mb-4">
					<div class="card card-stats">
						<div class="card-body ">
							<div class="row">
								<div class="col-5 col-md-4">
									<div class="icone-card text-center text-info">
										<i class="fas fas2 fa-folder-open"></i>
									</div>
								</div>
								<div class="col-7 col-md-8">
									<div class="numbers">
										<p class="titulo-card">Audiências</p>
										<p class="subtitulo-card">2<p>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer rodape-card">
								Audiência para Hoje

							</div>
						</div>
					</div>


					<div class="col-sm-12 col-lg-3 col-md-6 col-sm-6 mb-4">
					<div class="card card-stats">
						<div class="card-body ">
							<div class="row">
								<div class="col-5 col-md-4">
									<div class="icone-card text-center text-danger">
										<i class="far far2 fa-calendar-alt"></i>
									</div>
								</div>
								<div class="col-7 col-md-8">
									<div class="numbers">
										<p class="titulo-card">Tarefas Agendadas</p>
										<p class="subtitulo-card"><?php echo $linhas_tarefas?><p>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer rodape-card">
								Tarefas para Hoje

							</div>
						</div>
					</div>

				</div>
			</div>


			<div class="mt-4">
				<i class="far fa-calendar-check ml-4 text-danger"></i>
				<span class="text-muted ml-1">PRÓXIMAS TAREFAS</span>
				<hr>

				<div class="row">
					

					<?php 
					$res = $pdo->query("SELECT * from tarefas where advogado = '$cpf_adv' and data = curDate() and status = 'Agendada' order by hora asc limit 4");
					$dados = $res->fetchAll(PDO::FETCH_ASSOC);
					for ($i=0; $i < count($dados); $i++) { 
						foreach ($dados[$i] as $key => $value) {
						}

						$id = $dados[$i]['id'];	
						$nome = $dados[$i]['nome'];

						$descricao = $dados[$i]['descricao'];
						$hora = $dados[$i]['hora'];
						$status = $dados[$i]['status'];

						?>

						<div class="col-sm-12 col-lg-3 col-md-6 col-sm-6 mb-4">
							<div class="card card-stats bg-light mb-3">
								<div class="card-header bg-dark text-white"><?php echo $hora ?></div>
								<div class="card-body">
									<span class="card-title text-secondary"><big><big><?php echo $nome ?></span></big></big>
									<p class="card-text text-dark"><?php echo $descricao ?></p>
								</div>
							</div>
						</div>

						<?php } ?>
						




					</div>


				</div>


</div>