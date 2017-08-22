<?php require_once "cabecalho.php";?>

<!-- JavaScript de Validação -->
<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="js/jquery.maskMoney.js" ></script>

<!--Faça um if aqui verificando se o usuário está logado (chame a função usuarioEstaLogado() :-->
<?php 
	if (usuarioEstaLogado()){  
?> 

		<div class="container">

			<div class="row">
				<div class="col-sm-6">

					<div class="page-header">
						<center>
							<h3>Resumo de vendas</h3>
						</center>
					</div>

					<form action="" method="POST">
						<div class="form-group">
							<label for="dinheiro">Dinheiro</label>
							<input type="text" class="form-control" id="dinheiro" name="dinheiro" placeholder="Informe o valor das vendas a dinheiro" autofocus>
						</div>

						<div class="form-group">
							<label for="debito">Débito</label>&nbsp;
							<i class="fa fa-cc-visa" aria-hidden="true"></i> &nbsp;
							<i class="fa fa-cc-mastercard" aria-hidden="true"></i>
							<input type="text" class="form-control" id="debito" name="debito" placeholder="Valor das vendas no Débito">
						</div>

						<div class="form-group">
							<label for="credito">Crédito</label>&nbsp;
							<i class="fa fa-cc-visa" aria-hidden="true"></i> &nbsp;
							<i class="fa fa-cc-mastercard" aria-hidden="true"></i>
							<input type="text" class="form-control" id="credito" name="credito" placeholder="Valor das vendas no Crédito">
						</div>
					</div>

					<div class="col-sm-6">

						<div class="page-header">
							<center>
								<h3>Resumo de compras</h3>
							</center>
						</div>

						<div class="form-group">
							<label for="a-vista">À vista</label>
							<input type="text" class="form-control" id="a-vista" name="vista" placeholder="Valor das compras à vista" autofocus>
						</div>

						<div class="form-group">
							<label for="cartao-debito">Débito</label>&nbsp;
							<i class="fa fa-cc-visa" aria-hidden="true"></i>&nbsp;
							<i class="fa fa-cc-mastercard" aria-hidden="true"></i>
							<input type="text" class="form-control" id="cartao-debito" name="cartao-debito" placeholder="Valor das compras no Débito">
						</div>

						<div class="form-group">
							<label for="cartao-credito">Crédito</label>&nbsp;
							<i class="fa fa-cc-visa" aria-hidden="true"></i>&nbsp;
							<i class="fa fa-cc-mastercard" aria-hidden="true"></i>
							<input type="text" class="form-control" id="cartao-credito" name="cartao-credito" placeholder="Valor das compras no Crédito">
						</div>

					</div>
				</div><!-- FIM DA ROW -->

				<div class="row">
					<div class="form-group col-sm-2">
						<label for="data">Data</label>
						<input type="text" class="form-control" id="data" value="<?php echo date("d/m/Y"); ?>">
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6">		
						<button type="submit" class="btn btn-success btn-lg">
							Salvar
						</button>
	
						<button type="reset" class="btn btn-warning btn-lg">
							Limpar
						</button>
					</div>
				</form>

			</div><!-- FIM DA ROW -->
		</div><!-- FIM DO CONTAINER-->

<!--Fechamento do if-->
<?php 
	}  
?> 
<!-- Rodapé: -->
<?php require_once 'rodape.php' ?>