<?php	
	require_once "cabecalho.php";
	require_once "conexao.php"; 
	require_once "banco-usuarios.php"; 
	require_once "funcoes.php";  

	//Criar uma variável $usuario e atribuir a função buscaUsuario, passando a conexão, login e senha.
	$usuario=buscaUsuario($con, $_POST["login"], $_POST["senha"]);

	//Fazer um if para verificar se o usuário é valido. Se válido chamar a função logaUsuario();
	if($usuario == null){
?>
		<div class="container">

			<div class="page-header">
				<center>
					<h1>ProInteg</h1>
				</center>
			</div>

			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<div class="alert alert-danger alert-dismissable fade in">
						<a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
						<strong>•</strong> Usuário ou senha incorretos!
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<form action="login.php" method="POST">
						<div class="form-group">
							<label for="login">Login</label>
							<input type="text" class="form-control" id="login" name="login" autofocus required placeholder="Digite seu nome de usuário">
						</div>

						<div class="form-group"> 
							<label for="senha">Senha</label>
							<input type="password" class="form-control" id="senha" name="senha" required placeholder="Digite sua senha">
						</div>

						<button type="submit" class="btn btn-success btn-block">
							Logar &nbsp;<span class="glyphicon glyphicon-log-in"></span>
						</button>
					</form>
				</div>
			</div><!-- FIM DA ROW -->
		</div><!-- FIM DO CONTAINER-->

<?php
		#header("Location:index.php?login=0");
		header('Refresh: 0.7; URL=index.php?login=0');

	}else{
		logaUsuario($usuario["login"]);
		header("Location:index.php?login=1");
	}
?>
