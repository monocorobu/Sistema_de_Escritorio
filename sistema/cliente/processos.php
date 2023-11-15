<?php 
$pagina = 'processos';
$agora = date('Y-m-d');
$data = date('Y-m-d');
?>


<div class="container">
	<div class="row botao-novo">
		<div class="col-md-12">
			<a id="btn-novo" data-toggle="modal" data-target="#modal"></a>
			
		</div>
	</div>



	<div class="row mt-4">
		<div class="col-md-6 col-sm-12">
			<div class="float-left">
				<form method="post">
					<select id="itens-pagina" onChange="submit();" class="form-control-sm" id="exampleFormControlSelect1" name="itens-pagina">

						<?php 

						if(isset($_POST['itens-pagina'])){
							$item_paginado = $_POST['itens-pagina'];
						}elseif(isset($_GET['itens'])){
							$item_paginado = $_GET['itens'];
						}

						?>

						<option value="<?php echo @$item_paginado ?>"><?php echo @$item_paginado ?> Registros</option>

						<?php if(@$item_paginado != $opcao1){ ?> 
							<option value="<?php echo $opcao1 ?>"><?php echo $opcao1 ?> Registros</option>
						<?php } ?>

						<?php if(@$item_paginado != $opcao2){ ?> 
							<option value="<?php echo $opcao2 ?>"><?php echo $opcao2 ?> Registros</option>
						<?php } ?>

						<?php if(@$item_paginado != $opcao3){ ?> 
							<option value="<?php echo $opcao3 ?>"><?php echo $opcao3 ?> Registros</option>
						<?php } ?>




					</select>
				</form>
			</div>

		</div>

		<?php 

	//DEFINIR O NUMERO DE ITENS POR PÁGINA
		if(isset($_POST['itens-pagina'])){
			$itens_por_pagina = $_POST['itens-pagina'];
			@$_GET['pagina'] = 0;
		}elseif(isset($_GET['itens'])){
			$itens_por_pagina = $_GET['itens'];
		}
		else{
			$itens_por_pagina = $opcao1;

		}

		?>




		<div class="col-md-6 col-sm-12">

			<div class="float-right mr-4">
				<form id="frm" class="form-inline my-2 my-lg-0" method="post">

					<input type="hidden" id="pag"  name="pag" value="<?php echo @$_GET['pagina'] ?>">

					<input type="hidden" id="itens"  name="itens" value="<?php echo @$itens_por_pagina; ?>">


					<input class="form-control form-control-sm mr-sm-2" type="text" name="txtbuscar" id="txtbuscar" placeholder="Número do Processo">
					<button class="btn btn-outline-secondary btn-sm my-2 my-sm-0" name="btn-buscar" id="btn-buscar"><i class="fas fa-search"></i></button>
				</form>
			</div>

		</div>


	</div>


	<div id="listar" class="mt-4">

	</div>


</div>








<!--CHAMADA DA MODAL COM AS AUDIENCIAS -->
<?php 
if(@$_GET['funcao'] == 'aud' && @$item_paginado == ''){ 
	$num = $_GET['num'];
	?>

	<div class="modal" id="modal-aud" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Audiências</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					

					<?php 
					$res = $pdo->query("SELECT * from audiencias where processo = '$num' order by data desc");
					$dados = $res->fetchAll(PDO::FETCH_ASSOC);


					for ($i=0; $i < count($dados); $i++) { 
						foreach ($dados[$i] as $key => $value) {
						}

						$id = $dados[$i]['id'];	
						$descricao = $dados[$i]['descricao'];
						$data = $dados[$i]['data'];
						$obs = $dados[$i]['obs'];

						$data2 = implode('/', array_reverse(explode('-', $data)));
						?>

						<div class="form-group">

							<span class="text-muted mr-4"><b><?php echo @$descricao ?></b></span> <span class="text-dark">  <?php echo $data2 ?><br>
								<span class="text-muted"><?php echo $obs ?></span>
							</div>
							<hr>

						<?php } ?>

					</div>

				</div>
			</div>
		</div>


	<?php } ?>



	<script>$('#modal-aud').modal("show");</script>







	<!--CHAMADA DA MODAL OBSERVAÇÕES -->
	<?php 
	if(@$_GET['funcao'] == 'obs' && @$item_paginado == ''){ 
		$id = $_GET['id'];
		?>

		<div class="modal" id="modal-obs" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Observações</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post">

							<?php 
							$res = $pdo->query("select * from processos where num_processo = '$id'");
							$dados = $res->fetchAll(PDO::FETCH_ASSOC);
							$obs = $dados[0]['obs'];
							if($obs == ''){
								$obs = 'Nenhuma Observação Lançada!';
							}
							?>


							
							<span><?php echo @$obs ?></span>


						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-cancelar-obs">Cancelar</button>


						</form>
					</div>
				</div>
			</div>
		</div>


	<?php } ?>



	<script>$('#modal-obs').modal("show");</script>









	<!--CHAMADA DA MODAL COM AS MOVIMENTACOES -->
	<?php 
	if(@$_GET['funcao'] == 'mov' && @$item_paginado == ''){ 
		$num = $_GET['id'];
		?>

		<div class="modal" id="modal-mov" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Histórico e Movimentações</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">


						<?php 
						$res = $pdo->query("SELECT * from historico where processo = '$num' order by data desc");
						$dados = $res->fetchAll(PDO::FETCH_ASSOC);
						$linhas = count($dados);
						if($linhas == 0){
							echo '<div class="form-group">

							<span class="text-muted mr-4">Nenhuma Observação Lançada</span>
							</div>';
						}else{


							for ($i=0; $i < count($dados); $i++) { 
								foreach ($dados[$i] as $key => $value) {
								}

								$id = $dados[$i]['id'];	
								$titulo = $dados[$i]['titulo'];
								$data = $dados[$i]['data'];
								$obs = $dados[$i]['obs'];

								$data2 = implode('/', array_reverse(explode('-', $data)));



								?>

								<div class="form-group">

									<span class="text-muted mr-4"><b><?php echo @$titulo ?></b></span> <span class="text-dark">  <?php echo $data2 ?><br>
										<span class="text-muted"><?php echo $obs ?></span>
									</div>
									<hr>

								<?php } }?>

							</div>

						</div>
					</div>
				</div>


			<?php } ?>



			<script>$('#modal-mov').modal("show");</script>







			<!--CHAMADA DA MODAL INSERIR ARQUIVOS -->
			<?php 
			if(@$_GET['funcao'] == 'arquivo' && @$item_paginado == ''){ 
				$num = $_GET['id'];
				?>

				<div class="modal" id="modal-arquivo" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Arquivo Imagem e PDF</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">


								<form id="form" method="post" enctype="multipart/form-data">

									

									<input type="hidden" class="form-control" id="" value="<?php echo $num ?>" name="processo" >



									<div class="form-group">
										<label for="exampleFormControlInput1">Descrição</label>
										<input type="text" class="form-control" id="descricao" placeholder="Insira a Descrição" name="descricao" >
									</div>

									<div class="form-group">
										<label for="inputAddress">Foto</label>
										<div class="custom-file">

											<input type="file" name="foto" id="foto">


										</div>


									</div>

									<div id="mensagem" align="center" class="text-success">

									</div>

								</div>

								<div class="modal-footer mb-4">
									<button type="button" class="btn btn-secondary" id="btn-cancelar-arquivo" data-dismiss="modal">Cancelar</button>

									<button type="submit" id="btn-arquivo" name="btn-arquivo" class="btn btn-primary">Inserir</button>
								</form>
							</div>

							<?php 
							$res = $pdo->query("SELECT * from documentos where processo = '$num' order by id desc");
							$dados = $res->fetchAll(PDO::FETCH_ASSOC);
							for ($i=0; $i < count($dados); $i++) { 
								foreach ($dados[$i] as $key => $value) {
								}

								$id_arq = $dados[$i]['id'];	
								$descricao = $dados[$i]['descricao'];
								$data = $dados[$i]['data'];
								$arquivo = $dados[$i]['arquivo'];
								$data2 = implode('/', array_reverse(explode('-', $data)));
								?>

								
									<span class="text-muted ml-4 mb-1">
										<a target="_blank" class="text-secondary" title="Abrir Arquivo" href="../img/arquivos/<?php echo $arquivo ?>">
										<?php echo $descricao ?> - <?php echo $data ?>
									</a>
									<a title="Excluir" href="index.php?acao=<?php echo $pagina ?>&funcao=excluir&id=<?php echo $id_arq ?>"><i class="far fa-trash-alt text-danger ml-1"></i></a>

								</span>



								<hr>

							<?php } ?>

						</div>
					</div>
				</div>


			<?php } ?>



			<script>$('#modal-arquivo').modal("show");</script>







	<!--CHAMADA DA MODAL DELETAR -->
	<?php 
	if(@$_GET['funcao'] == 'excluir' && @$item_paginado == ''){ 
		$id = $_GET['id'];
		?>

		<div class="modal" id="modal-deletar" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Excluir Registro</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

						<p>Deseja realmente Excluir este Registro?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-cancelar-excluir">Cancelar</button>
						<form method="post">
							<input type="hidden" id="id"  name="id" value="<?php echo @$id ?>" required>

							<button type="button" id="btn-deletar" name="btn-deletar" class="btn btn-danger">Excluir</button>
						</form>
					</div>
				</div>
			</div>
		</div>


	<?php } ?>



	<script>$('#modal-deletar').modal("show");</script>






			<!--MASCARAS -->

			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

			<script src="../js/mascaras.js"></script>








			<!--AJAX PARA BUSCAR OS DADOS -->
			<script type="text/javascript">
				$(document).ready(function(){

					var pag = "<?=$pagina?>";
					$('#btn-buscar').click(function(event){
						event.preventDefault();	

						$.ajax({
							url: pag + "/listar.php",
							method: "post",
							data: $('form').serialize(),
							dataType: "html",
							success: function(result){
								$('#listar').html(result)

							},


						})

					})


				})
			</script>








			<!--AJAX PARA LISTAR OS DADOS -->
			<script type="text/javascript">
				$(document).ready(function(){

					var pag = "<?=$pagina?>";

					$.ajax({
						url: pag + "/listar.php",
						method: "post",
						data: $('#frm').serialize(),
						dataType: "html",
						success: function(result){
							$('#listar').html(result)

						},


					})
				})
			</script>



			<!--AJAX PARA BUSCAR OS DADOS PELA TXT-->
			<script type="text/javascript">
				$('#txtbuscar').keyup(function(){
					$('#btn-buscar').click();
				})
			</script>






			<!--AJAX PARA INSERÇÃO DOS ARQUIVOS -->
			<script type="text/javascript">
				$("#form").submit(function () {
					var pag = "<?=$pagina?>";
					event.preventDefault();
					var formData = new FormData(this);

					$.ajax({
						url: pag + "/inserir-arquivo.php",
						type: 'POST',
						data: formData,
						success: function (data) {
							$('#mensagem').text(data);
							$('#descricao').val('');
							$('#foto').val('');
							$('#btn-cancelar-arquivo').click();

						},
						cache: false,
						contentType: false,
						processData: false,
        xhr: function() {  // Custom XMLHttpRequest
        	var myXhr = $.ajaxSettings.xhr();
            if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
            	myXhr.upload.addEventListener('progress', function () {
            		/* faz alguma coisa durante o progresso do upload */
            	}, false);
            }
            return myXhr;
        }
    });
				});
			</script>




<!--AJAX PARA EXCLUSÃO DOS DADOS -->
	<script type="text/javascript">
		$(document).ready(function(){
			var pag = "<?=$pagina?>";
			$('#btn-deletar').click(function(event){
				event.preventDefault();
				
				$.ajax({
					url: pag + "/excluir-arquivo.php",
					method: "post",
					data: $('form').serialize(),
					dataType: "text",
					success: function(mensagem){

						
						
						$('#btn-cancelar-excluir').click();


					},

				})
			})
		})
	</script>