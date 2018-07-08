<?php
session_start();
include_once("conexao.php");

$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

if($btnLogin) {
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$senha = MD5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));

	if((!empty($email)) && (!empty($senha))) {
		//Pesquisar usuario no BD
		
		$result_email = "SELECT id, email, senha FROM cadastro_dados WHERE email= '" .$email. "' AND senha= '" .$senha. "' LIMIT 1";
		echo $result_email;
		$resultado_email = mysqli_query($conn, $result_email);
			
			if($resultado_email) 
			{
				$row_email = mysqli_fetch_assoc($resultado_email);
				
				if($senha == $row_email['senha']) 
				{
					$_SESSION['id'] = $row_email['id'];
					$_SESSION['email'] = $row_emamil['email'];
					echo $senha . "<br>" . $row_email['senha'];
					header("Location: reservas.php");
				}
				else 
				{
					$_SESSION['msg'] = "Login e Senha Incorreto";
					header("Location: login.php");
				}
			}
			else 
			{
				$_SESSION['msg'] = "Login e Senha Incorreto";
				//header("Location: login.php");
			}
	
	}
}