
<?php

	session_start();//dá início à sessão
	
	//------------------------------------------------------
	function usuarioEstaLogado(){ 
		return isset($_SESSION["usuario_logado"]);
	}
	//------------------------------------------------------
	function verificaUsuario(){
		if(!usuarioEstaLogado()){
			header("Location:index.php?falhaDeSeguranca=true");
			die();
		}
	}
	//------------------------------------------------------
	function usuarioLogado(){ //usuário ainda não está logado
		return $_SESSION["usuario_logado"];	
	}
	//------------------------------------------------------
	function logaUsuario($_login){ 
		$_SESSION["usuario_logado"]=$_login;
	}
	//------------------------------------------------------
	function logout(){
		session_destroy();
	}
	//------------------------------------------------------

?>
