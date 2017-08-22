<?php include_once "cabecalho.php"; ?>
<?php include_once "banco-clientes.php"; ?>
<?php include_once "conexao.php"; ?>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">

<?php 
	listaClientes($con);
?>

<?php include_once 'rodape.php' ?>