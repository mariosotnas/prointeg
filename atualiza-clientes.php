<?php include_once "cabecalho.php"; ?>
<?php include_once "banco-clientes.php"; ?>
<?php include_once "conexao.php"; ?>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">

<?php 
	$cliente = new Cliente();
	$cliente->id = $_POST["nome"];
	$cliente->nome = $_POST["nome"];
	$cliente->email = $_POST["email"];
	$cliente->rg = $_POST["rg"];
	$cliente->uf = $_POST["uf"];
	$cliente->cpf = $_POST["cpf"];
	$cliente->telefone = $_POST["telefone"];
	$cliente->celular = $_POST["celular"];

	/*$endereco = new Endereco();
	$endereco->logradouro = $_POST["logradouro"];
	$endereco->cep = $_POST["cep"];
	$endereco->complemento = $_POST["complemento"];
	$endereco->numero = $_POST["numResid"];*/

	if (alteraCliente($con, $cliente)){
?>
		<div class="container">
			<div class="page-header">
				<center>
					<h1>Dados alterados</h1>
				</center>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class=" alert alert-success alert-dismissable fade in">
						<a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
						Cadastro alterado com sucesso!
					</div>
				</div>
			</div>

			<div class="row">

				<form action="#" method="POST">
					<div class="col-sm-1">
						<div class="form-group"> 
							<label for="codigo">Código</label>
							<input type="text" class="form-control" id="codigo" name="codigo" value="<?=$cliente->id ?>">
						</div>
					</div>

					<div class="col-sm-7">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" id="nome" name="nome" autofocus required value="<?=$cliente->nome ?>">
						</div>
					</div>

					<div class="col-sm-2">
						<div class="form-group"> 
							<label for="rg">RG</label>
							<input type="text" class="form-control" id="rg" name="rg" value="<?=$cliente->rg ?>">
						</div>
					</div>

					<div class="col-sm-2">
						<div class="form-group"> 
							<label for="uf">UF</label>
							<select id="uf" name="uf" class="form-control">
								<option value="<?=$cliente->uf ?>">--</option>
								<option value="AC">AC</option>
								<option value="AC">AL</option>
								<option value="AP">AP</option>
								<option value="AM">AM</option>
								<option value="BA">BA</option>
								<option value="CE">CE</option>
								<option value="DF">DF</option>
								<option value="ES">ES</option>
								<option value="GO">GO</option>
								<option value="MA">MA</option>
								<option value="MT">MT</option>
								<option value="MS">MS</option>
								<option value="MG">MG</option>
								<option value="PA">PA</option>
								<option value="PB">PB</option>
								<option value="PR">PR</option>
								<option value="PE">PE</option>
								<option value="PI">PI</option>
								<option value="RJ">RJ</option>
								<option value="RN">RN</option>
								<option value="RS">RS</option>
								<option value="RO">RO</option>
								<option value="RR">RR</option>
								<option value="SC">SC</option>
								<option value="SP">SP</option>
								<option value="SE">SE</option>
								<option value="TO">TO</option>
							</select>
						</div>
					</div>

					<div class="col-sm-8">
						<div class="form-group"> 
							<label for="email">E-mail</label>
							<input type="email" class="form-control" id="email" name="email" value="<?=$cliente->email ?>">
						</div>

						<div class="form-group">
							<label for="end">Endereço</label> 
							<input type="text" class="form-control" id="end" name="logradouro" value="<?=$endereco->logradouro ?>">
						</div>
					</div>
					
					<!-- FIM DA PRIMEIRA COLUNA -->

					<div class="col-sm-4">
						<div class="form-group"> 
							<label for="cpf">CPF</label>
							<input type="text" class="form-control" id="cpf" name="cpf" value="<?=$cliente->cpf ?>">
						</div>

						<div class="form-group">
							<label for="cep">Cep</label>
							<input type="text" class="form-control" id="cep" name="cep" value="<?=$endereco->cep ?>">
						</div>
					</div>
					<!-- FIM DA SEGUNDA COLUNA -->	

					<div class="col-sm-3">
						<div class="form-group">
							<label for="complemento">Complemento</label>
							<select name="complemento" class="form-control">
								<option value="<?=$endereco->complemento ?>">Selecione</option>
								<option value="apto">APARTAMENTO</option>
								<option value="casa">CASA</option>
								<option value="chac">CHÁCARA</option>										
							</select>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="form-group">
							<label for="numResid">Número</label>
							<input type="number" class="form-control" id="numResid" name="numResid" min="1" maxlength="10" placeholder="Número da residência" value="<?=$endereco->numResid ?>">
						</div>
					</div>

					<div class="col-sm-3">
						<div class="form-group">
							<label for="telefone">Telefone fixo</label>
							<input type="text" class="form-control" id="telefone" name="telefone" value="<?=$cliente->telefone ?>">
						</div>
					</div>

					<div class="col-sm-3">
						<div class="form-group">
							<label for="celular">Celular</label>
							<input type="text" class="form-control" id="celular" name="celular" value="<?=$cliente->celular ?>">
						</div>
					</div>

					<div class="col-sm-6">
						<button type="submit" class="btn btn-warning btn-lg" formaction="atualiza-clientes.php">
							<i class="fa fa-refresh fa-1x" aria-hidden="true"></i>&nbsp;Atualizar</a></li>
						</button>

						<button type="submit" class="btn btn-danger btn-lg" formaction="exclui-clientes.php">
							<i class="fa fa-trash fa-1x" aria-hidden="true"></i>&nbsp;Excluir</a></li> 
						</button>
					</div>	
				</div><!-- FIM DA ROW -->
			</form>
		</div><!-- FIM DO CONTAINER-->
<?php		

	}else{
?>
			<div class=" alert alert-danger alert-dismissable fade in">
				<a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
				Não foi possível realizar o cadastro!
			</div>
<?php
	}
	//FIM DO IF
?>
