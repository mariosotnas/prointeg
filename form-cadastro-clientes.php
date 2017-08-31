<?php require_once ("cabecalho.php");?>

<!--Faça um if aqui verificando se o usuário está logado (chame a função usuarioEstaLogado() :-->
<?php 
	if (usuarioEstaLogado()){  
?> 
		<div class="container">
			<div class="page-header">
				<center>
					<h1>Novo Cliente</h1>
				</center>
			</div>

			<div class="row">
				<div class="col-sm-8">
					<form action="adiciona-clientes.php" method="POST">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" id="nome" name="nome" autofocus required>
						</div>

						<div class="form-group"> 
							<label for="email">E-mail</label>
							<input type="email" class="form-control" id="email" name="email">
						</div>

						<div class="form-group">
							<label for="end">Endereço</label> 
							<input type="text" class="form-control" id="end" name="logradouro">
						</div>
					</div>
					<!-- FIM DA PRIMEIRA COLUNA -->

					<div class="col-sm-2">
						<div class="form-group"> 
							<label for="rg">RG</label>
							<input type="text" class="form-control" id="rg" name="rg">
						</div>
					</div>

					<div class="col-sm-2">
						<div class="form-group"> 
							<label for="uf">UF</label>
							<select id="uf" name="uf" class="form-control">
								<option value="">--</option>
								<option value="AC">AC</option>
								<option value="AL">AL</option>
								<option value="AM">AM</option>
								<option value="AP">AP</option>
								<option value="BA">BA</option>
								<option value="CE">CE</option>
								<option value="DF">DF</option>
								<option value="ES">ES</option>
								<option value="GO">GO</option>
								<option value="MA">MA</option>
								<option value="MG">MG</option>
								<option value="MS">MS</option>
								<option value="MT">MT</option>
								<option value="PA">PA</option>
								<option value="PB">PB</option>
								<option value="PE">PE</option>
								<option value="PI">PI</option>
								<option value="PR">PR</option>
								<option value="RJ">RJ</option>
								<option value="RN">RN</option>
								<option value="RO">RO</option>
								<option value="RR">RR</option>
								<option value="RS">RS</option>
								<option value="SC">SC</option>
								<option value="SE">SE</option>
								<option value="SP">SP</option>
								<option value="TO">TO</option>
							</select>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group"> 
							<label for="cpf">CPF</label>
							<input type="text" class="form-control" id="cpf" name="cpf">
						</div>

						<div class="form-group">
							<label for="cep">Cep</label>
							<input type="text" class="form-control" id="cep" name="cep">
						</div>
					</div>
					<!-- FIM DA SEGUNDA COLUNA -->	

					<div class="col-sm-3">
						<div class="form-group">
							<label for="complemento">Complemento</label>
							<select name="complemento" class="form-control">
								<option value="">Selecione</option>
								<option value="apto">APARTAMENTO</option>
								<option value="casa">CASA</option>
								<option value="chac">CHÁCARA</option>										
							</select>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="form-group">
							<label for="numResid">Número</label>
							<input type="number" class="form-control" id="numResid" name="numResid" min="1" maxlength="10" placeholder="Número da residência">
						</div>
					</div>

					<div class="col-sm-3">
						<div class="form-group">
							<label for="telefone">Telefone fixo</label>
							<input type="text" class="form-control" id="telefone" name="telefone">
						</div>
					</div>

					<div class="col-sm-3">
						<div class="form-group">
							<label for="celular">Celular</label>
							<input type="text" class="form-control" id="celular" name="celular">
						</div>
					</div>

					<div class="col-sm-6">
						<button type="submit" class="btn btn-primary btn-lg">
							Salvar
						</button>

						<button type="reset" class="btn btn-default btn-lg">
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