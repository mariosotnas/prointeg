<?php require_once ("cabecalho.php");?>

<!--Faça um if aqui verificando se o usuário está logado (chame a função usuarioEstaLogado() :-->
<?php 
	if (usuarioEstaLogado()){  
?> 

		<div class="container">

			<div class="page-header">
				<center>
					<h1>Novo Funcionário</h1>
				</center>
			</div>

			<div class="row">
				<div class="col-sm-8">
					<form action="" method="POST">
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

					<div class="col-sm-2">
						<div class="form-group"> 
							<label for="rg">RG</label>
							<input type="text" class="form-control" id="rg" name="rg">
						</div>
					</div>

					<div class="col-sm-2">
						<div class="form-group"> 
							<label for="rg">UF</label>
							<select name="estados-brasil" class="form-control">
								<option value="">--</option>
								<option value="acre">AC</option>
								<option value="alagoas">AL</option>
								<option value="amapa">AP</option>
								<option value="amazonas">AM</option>
								<option value="bahia">BA</option>
								<option value="ceara">CE</option>
								<option value="distritoFederal">DF</option>
								<option value="espiritoSanto">ES</option>
								<option value="goias">GO</option>
								<option value="maranhao">MA</option>
								<option value="matoGrosso">MT</option>
								<option value="matoGrossoSul">MS</option>
								<option value="minasGerais">MG</option>
								<option value="para">PA</option>
								<option value="paraiba">PB</option>
								<option value="parana">PR</option>
								<option value="pernambuco">PE</option>
								<option value="piaui">PI</option>
								<option value="rioDeJaneiro">RJ</option>
								<option value="rioGrandeNorte">RN</option>
								<option value="rioGrandeSul">RS</option>
								<option value="rondonia">RO</option>
								<option value="roraima">RR</option>
								<option value="santaCatarina">SC</option>
								<option value="saoPaulo">SP</option>
								<option value="sergipe">SE</option>
								<option value="tocantins">TO</option>
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

					<div class="col-sm-2">
						<div class="form-group">
							<label for="comp">Complemento</label>
							<select name="complemento" class="form-control">
								<option name="" value="">Selecione</option>
								<option name="casa" value="casa">CASA</option>
								<option name="apto" value="apto">APARTAMENTO</option>
								<option name="chac" value="chac">CHÁCARA</option>										
							</select>
						</div>
					</div>

					<div class="col-sm-2">
						<div class="form-group">
							<label for="numResid">Número</label>
							<input type="number" class="form-control" id="numResid" name="numResid" min="1" maxlength="10" placeholder="Número da residência">
						</div>
					</div>

					<div class="col-sm-2">
						<div class="form-group">
							<label for="telefone">Telefone fixo</label>
							<input type="text" class="form-control" id="telefone" name="telefone">
						</div>
					</div>

					<div class="col-sm-2">
						<div class="form-group">
							<label for="celular">Celular</label>
							<input type="text" class="form-control" id="celular" name="celular">
						</div>
					</div>

					<div class="col-sm-2">
						<div class="form-group">
							<label for="cargo">Cargo</label>
							<select name="cargo" class="form-control">
								<option name="" value="">Selecione</option>
								<option name="acougueiro" value="chac">AÇOUGUEIRO</option>	
								<option name="gerente" value="casa">GERENTE</option>
								<option name="caixa" value="apto">OPERADOR DE CAIXA</option>
								<option name="respositor" value="chac">REPOSITOR</option>											
							</select>
						</div>
					</div>

					<div class="col-sm-2">
						<div class="form-group">
							<label for="salario">Salário</label>
							<input type="text" class="form-control" id="salario" name="salario">
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