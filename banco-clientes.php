<?php include_once("class/Cliente.php") ?>
<?php include_once("class/Endereco.php") ?>
<?php include_once("conexao.php") ?>

<?php

function insereCliente($con, $cliente, $endereco){ 

	#POPULANDO A TABELA DE CLIENTES
	$query = "INSERT INTO cliente(nm_cliente, email, rg, uf, cpf, telefone, celular) VALUES ('{$cliente->nome}', '{$cliente->email}', '{$cliente->rg}', '{$cliente->uf}', '{$cliente->cpf}', '{$cliente->telefone}', '{$cliente->celular}')";

	$resultado = mysqli_query($con, $query);

	$cliente->id = mysqli_insert_id($con);
	
	#POPULANDO A TABELA DE ENDERECOS
	$query2 = "INSERT INTO endereco(id_cliente, logradouro, complemento, nmr_residencia, cep) VALUES ('{$cliente->id}', '{$endereco->logradouro}', '{$endereco->complemento}', '{$endereco->numero}', '{$endereco->cep}')";

	$resultado2 = mysqli_query($con, $query2);
	return $resultado2;			
}
#FIM DA FUNCAO insereCliente();
#----------------------------------------------------------------------------------------------------#

function pesquisaCliente($con, $cliente){

	#BUSCANDO POR CLIENTES COM BASE NA PRIMEIRA LETRA DO NOME
	#$query = "SELECT * FROM cliente WHERE nm_cliente LIKE '{$cliente->nome}%' ORDER BY nm_cliente";
	$query = "SELECT A.*, B.* FROM cliente A, endereco B WHERE A.nm_cliente LIKE '{$cliente->nome}%' AND A.id_cliente = B.id_cliente ORDER BY A.nm_cliente";

	$resultado = mysqli_query($con, $query);

	if (mysqli_num_rows($resultado) == 0) {

		echo '<meta HTTP-EQUIV="Refresh" CONTENT="1.2; URL=form-pesquisa-clientes.php">';
?>		
		<div class="alert alert-danger alert-dismissable fade in" id="pesquisa-vazia">
			<a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
			<strong>Não foram encontrados registros!</strong>
		</div>
<?php

	}else{

?>
		<div class="container">

			<div class="page-header">
				<h2>Resultados da busca</h2>
			</div>

			<div class="form-group">
				<form action="lista-clientes.php">
					<button type="submit" class="btn btn-default btn-sm">
						<i class="fa fa-list fa-1x" aria-hidden="true"></i>&nbsp;Listar Todos
					</button>
				</form>
			</div>

			<table class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<th>Código</th>
						<th>Nome</th>
						<th>E-mail</th>
						<th>RG</th>
						<th>UF</th>
						<th>CPF</th>
						<th>Telefone</th>
						<th>Celular</th>
						<th>Logradouro</th>
						<th>CEP</th>
						<th>Complemento</th>
						<th>Número</th>				
					</tr>
				</thead>

				<tbody>

<?php
			#ESTRUTURA DE REPETICAO PARA IMPRIMIR OS DADOS TRAZIDOS DO BANCO
		while($array = mysqli_fetch_assoc($resultado)){ 
?>

					<tr>
						<td class="info"><?=$array['id_cliente'] ?></td>
						<td><?=$array['nm_cliente'] ?></td>
						<td><?=$array['email'] ?></td>
						<td><?=$array['rg'] ?></td>
						<td><?=$array['uf'] ?></td>
						<td><?=$array['cpf'] ?></td>
						<td><?=$array['telefone'] ?></td>
						<td><?=$array['celular'] ?></td>

						<td><?=$array['logradouro'] ?></td>
						<td><?=$array['cep'] ?></td>
						<td><?=$array['complemento'] ?></td>
						<td><?=$array['nmr_residencia'] ?></td>				
					</tr>
<?php
		}#FIM DO WHILE
	}#FIM DO IF
}#FIM DA FUNCAO 
?>
				</tbody>
			</table>
		</div>

<!-- -->


<?php
function listaClientes($con){

	#BUSCANDO POR CLIENTES COM BASE NA PRIMEIRA LETRA DO NOME
	#$query = "SELECT * FROM cliente WHERE nm_cliente LIKE '{$cliente->nome}%' ORDER BY nm_cliente";
	$query = "SELECT A.*, B.* FROM cliente A, endereco B WHERE A.id_cliente = B.id_cliente ORDER BY A.nm_cliente";

	$resultado = mysqli_query($con, $query);

	if (mysqli_num_rows($resultado) == 0) {	

		echo '<meta HTTP-EQUIV="Refresh" CONTENT="1.2; URL=form-pesquisa-clientes.php">';
?>

		<div class="alert alert-danger alert-dismissable fade in">
			<a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
			<strong>Não foram encontrados registros!</strong>
		</div>

<?php
	}else{
?>
		<div class="container">

			<div class="page-header">
				<h2>Clientes cadastrados</h2>
			</div>

			<table class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<th>Código</th>
						<th>Nome</th>
						<th>E-mail</th>
						<th>RG</th>
						<th>CPF</th>
						<th>Telefone</th>
						<th>Celular</th>
						<th>Logradouro</th>
						<th>CEP</th>
						<th>Complemento</th>
						<th>Número</th>					
					</tr>
				</thead>

				<tbody>

<?php
			#ESTRUTURA DE REPETICAO PARA IMPRIMIR OS DADOS TRAZIDOS DO BANCO
		while($array = mysqli_fetch_assoc($resultado)){ 
?>

					<tr>
						<td class="info"><?=$array['id_cliente'] ?></td>
						<td><?=$array['nm_cliente'] ?></td>
						<td><?=$array['email'] ?></td>
						<td><?=$array['rg'] ?></td>
						<td><?=$array['cpf'] ?></td>
						<td><?=$array['telefone'] ?></td>
						<td><?=$array['celular'] ?></td>

						<td><?=$array['logradouro'] ?></td>
						<td><?=$array['cep'] ?></td>
						<td><?=$array['complemento'] ?></td>
						<td><?=$array['nmr_residencia'] ?></td>
					</tr>
<?php
		}#FIM DO WHILE
	}#FIM DO IF
}#FIM DA FUNCAO 
?>
				</tbody>
			</table>
		</div>

<?php

/* IMPLEMENTACAO FUTURA

function exibirCliente($con, $cliente, $endereco){

	$query = "SELECT * FROM clientes WHERE nm_cliente == $cliente->$nome";
	$resultado = mysqli_query($con, $query);
}

function removeCliente($con, $cliente) {
	$query = "DELETE FROM clientes WHERE id_cliente = '{$cliente->id_cliente}'";
	$resultado = mysqli_query ($con,$query);
	return $resultado;
} 
*/	 
?>