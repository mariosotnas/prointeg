<?php require_once "cabecalho.php";?>

<!--Faça um if aqui verificando se o usuário está logado (chame a função usuarioEstaLogado() :-->
<?php 
	if (usuarioEstaLogado()){  
?> 

		<div class="container">
			<div class="page-header">
				<center>
					<h1>Registrar Vendas</h1>
				</center>
			</div>

			<div class="row">
				<form action="" method="POST">
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-sm-2">
							<div class="form-group">
								<label for="codigo">Código</label>
								<input type="number" class="form-control" id="codigo" name="codigo" placeholder="Cód. do Cliente" autofocus>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="form-group">
								<label for="valor">Valor</label>
								<input type="text" class="form-control" id="valor" name="valor" placeholder="Valor da venda">
							</div>
						</div>

						<div class="col-sm-2">
							<div class="form-group">
								<label for="data">Data</label>
								<input type="text" class="form-control" id="data" value="<?php echo date("d/m/Y"); ?>">
							</div>
						</div>
					</div><!-- FIM DA ROW -->

					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-sm-6">
							<button type="submit" class="btn btn-success btn-lg">
								Salvar
							</button>
						</div>
					</div>
				</form>
			</div><!-- FIM DA 1ª ROW -->
		</div><!-- FIM DO CONTAINER-->

<!--Fechamento do if-->
<?php 
	}  
?> 
<!-- Rodapé: -->
<?php require_once 'rodape.php' ?>