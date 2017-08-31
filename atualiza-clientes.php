<?php include_once "cabecalho.php"; ?>
<?php include_once "banco-clientes.php"; ?>
<?php include_once "conexao.php"; ?>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">

<?php 
	$cliente = new Cliente();
	$cliente->id = $_POST["id"];
	$cliente->nome = $_POST["nome"];
	$cliente->email = $_POST["email"];
	$cliente->rg = $_POST["rg"];
	$cliente->uf = $_POST["uf"];
	$cliente->cpf = $_POST["cpf"];
	$cliente->telefone = $_POST["telefone"];
	$cliente->celular = $_POST["celular"];

	$endereco = new Endereco();
	$endereco->logradouro = $_POST["logradouro"];
	$endereco->cep = $_POST["cep"];
	$endereco->complemento = $_POST["complemento"];
	$endereco->numero = $_POST["numResid"];

	if (atualizaCliente($con, $cliente, $endereco)){
?>
		<div class="container">
			<div class="page-header">
				<center>
					<h1>Dados atualizados</h1>
				</center>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class=" alert alert-success alert-dismissable fade in">
						<a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
						<strong><?=$cliente->id ?></strong>&nbsp;
						<p>Cliente atualizado com sucesso!</p>
					</div>
				</div>
			</div>

			<div class="row">

				<form action="#" method="POST">

					<div class="col-sm-8">
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
								<option value=""<?=($cliente->uf == '')?'selected':''?>>--</option>
								<option value="AC"<?=($cliente->uf == 'AC')?'selected':''?>>AC</option>
								<option value="AL"<?=($cliente->uf == 'AL')?'selected':''?>>AL</option>
								<option value="AM"<?=($cliente->uf == 'AM')?'selected':''?>>AM</option>
								<option value="AP"<?=($cliente->uf == 'AP')?'selected':''?>>AP</option>
								<option value="BA"<?=($cliente->uf == 'BA')?'selected':''?>>BA</option>
								<option value="CE"<?=($cliente->uf == 'CE')?'selected':''?>>CE</option>
								<option value="DF"<?=($cliente->uf == 'DF')?'selected':''?>>DF</option>
								<option value="ES"<?=($cliente->uf == 'ES')?'selected':''?>>ES</option>
								<option value="GO"<?=($cliente->uf == 'GO')?'selected':''?>>GO</option>
								<option value="MA"<?=($cliente->uf == 'MA')?'selected':''?>>MA</option>
								<option value="MG"<?=($cliente->uf == 'MG')?'selected':''?>>MG</option>
								<option value="MS"<?=($cliente->uf == 'MS')?'selected':''?>>MS</option>
								<option value="MT"<?=($cliente->uf == 'MT')?'selected':''?>>MT</option>
								<option value="PA"<?=($cliente->uf == 'PA')?'selected':''?>>PA</option>
								<option value="PB"<?=($cliente->uf == 'PB')?'selected':''?>>PB</option>
								<option value="PR"<?=($cliente->uf == 'PR')?'selected':''?>>PR</option>				
								<option value="PE"<?=($cliente->uf == 'PE')?'selected':''?>>PE</option>
								<option value="PI"<?=($cliente->uf == 'PI')?'selected':''?>>PI</option>
								<option value="RJ"<?=($cliente->uf == 'RJ')?'selected':''?>>RJ</option>
								<option value="RN"<?=($cliente->uf == 'RN')?'selected':''?>>RN</option>
								<option value="RO"<?=($cliente->uf == 'RO')?'selected':''?>>RO</option>
								<option value="RR"<?=($cliente->uf == 'RR')?'selected':''?>>RR</option>
								<option value="RS"<?=($cliente->uf == 'RS')?'selected':''?>>RS</option>
								<option value="SC"<?=($cliente->uf == 'SC')?'selected':''?>>SC</option>
								<option value="SE"<?=($cliente->uf == 'SE')?'selected':''?>>SE</option>
								<option value="SP"<?=($cliente->uf == 'SP')?'selected':''?>>SP</option>
								<option value="TO"<?=($cliente->uf == 'TO')?'selected':''?>>TO</option>
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
								<option value=""<?=($endereco->complemento == '')?'selected':''?>>Selecione</option>
								<option value="apto"<?=($endereco->complemento == 'apto')?'selected':''?>>APARTAMENTO</option>
								<option value="casa"<?=($endereco->complemento == 'casa')?'selected':''?>>CASA</option>
								<option value="chac"<?=($endereco->complemento == 'chac')?'selected':''?>>CHÁCARA</option>
							</select>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="form-group">
							<label for="numResid">Número</label>
							<input type="number" class="form-control" id="numResid" name="numResid" min="1" maxlength="10" placeholder="Número da residência" value="<?=$endereco->numero ?>">
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

					<div class="col-sm-8">
						<div class="form-group">
							<input type="hidden" class="form-control" name="id" value="<?=$cliente->id ?> ">
						</div>
					</div>

					<div class="col-sm-6">
						<button type="submit" class="btn btn-info btn-lg" formaction="atualiza-clientes.php?atualizaCliente()">
							<!--i class="fa fa-refresh fa-1x" aria-hidden="true"></i-->Atualizar</a></li>
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
			Não foi possível realizar a atualização!
		</div>
<?php
	}#FIM DO IF
?>
