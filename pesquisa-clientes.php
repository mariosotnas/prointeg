<?php require_once ("cabecalho.php");?>
<?php include_once "banco-clientes.php"; ?>
<?php include_once "conexao.php"; ?>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">

<?php 
	$cliente = new Cliente();
	$cliente->nome = $_POST["nome"];

	pesquisaCliente($con, $cliente);
?>

<?php include_once 'rodape.php' ?>	