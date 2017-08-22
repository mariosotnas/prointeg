<?php 

function buscaUsuario($con, $login, $senha){

	$login=mysqli_real_escape_string($con, $login);

	$query = "SELECT login, senha FROM usuario WHERE login = '{$login}' AND senha = '{$senha}'";

	$resultado = mysqli_query($con, $query);

	$usuario = mysqli_fetch_assoc($resultado);

	return $usuario;
}
	
?>