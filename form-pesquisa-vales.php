<?php require_once ("cabecalho.php");?>

<!--Faça um if aqui verificando se o usuário está logado (chame a função usuarioEstaLogado() :-->
<?php 
	if (usuarioEstaLogado()){  
?> 

		<div class="container">

			<div class="page-header">
				<center>
					<h1>Pesquisar Vales</h1>
				</center>
			</div>

			<div class="row">
				<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<form action="" method="POST">
							<div class="form-group">
								<label for="codigo">Código</label>
								<input type="number" class="form-control" id="codigo" name="codigo" autofocus required placeholder="Informe o código do Funcionário">
							</div>
					</div>
			</div><!-- FIM DA ROW -->

			<div class="row">
				<div class="col-sm-3"></div>	
				<div class="col-sm-6">
					<button type="submit" class="btn btn-info btn-block">
						Pesquisar 
					</button>
				</div>
			</div><!-- FIM DA ROW -->				
						</form>
		</div><!-- FIM DO CONTAINER-->

<!--Fechamento do if-->
<?php 
	}  
?> 
<!-- Rodapé: -->
<?php require_once 'rodape.php' ?>