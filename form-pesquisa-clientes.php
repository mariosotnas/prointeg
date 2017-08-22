<?php require_once ("cabecalho.php");?>

<!--Faça um if aqui verificando se o usuário está logado (chame a função usuarioEstaLogado() :-->
<?php 
	if (usuarioEstaLogado()){  
?> 

		<div class="container">

			<div class="page-header">
				<center>
					<h1>Pesquisar Clientes</h1>
				</center>
			</div>

			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<form action="pesquisa-clientes.php" method="POST">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" id="nome" name="nome" required autofocus>
						</div>
				</div>
			</div><!-- FIM DA ROW -->

				<div class="row">
					<div class="col-sm-3"></div>	
					<div class="col-sm-6">
						<button type="submit" class="btn btn-primary btn-lg">
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