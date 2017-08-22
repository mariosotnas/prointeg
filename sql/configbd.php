<?php
/*
CONFIGURACOES PARA O BANCO DE DADOS
 */  
$host 	= "localhost";     		# Para o host com o qual você quer se conectar.
$user 	= "root";    			# O nome de usuário para o banco de dados. 
$pass 	= "Leglock1"; 			# A senha do banco de dados. 
$db 	= "bdprointeg";    		# O nome do banco de dados. 

$con 	= mysqli_connect($host, $user, $pass, $db); //or die ("Não foi possível conectar-se com o banco de dados");

?>