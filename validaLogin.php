<?php
session_start();
include_once("conexao.php");

$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin) {
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZDE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$email - $senha";
	if((!empty($email)) AND (!empty($senha))) {
		// Gerar senha criptografada
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar usuario no BD
		
		$result_email = "SELECT id, email, senha FROM * login WHERE email= 'email' LIMIT 1";
		$resultado_email = mysqli_query($conn, $result_email);
			
			if($resultado_email) {
			$row_email = mysqli_fetch_assoc($resultado_email);
				
				if(password_verify($senha, $row_email['senha'])) {
					$_SESSION['id'] = $row_email['id'];
					$_SESSION['email'] = $row_emamil['email'];
					
						header("Location: reservas.php");
					
					}else {
					$_SESSION['msg'] = "Login e Senha Incorreto";
					header("Location: login.php");
					}
						}else {
						$_SESSION['msg'] = "Login e Senha Incorreto";
						header("Location: login.php");
						}
	
	}else {
	$_SESSION['msg'] = "Página não Encontrada";
	header("Location: Estabelecimentos.php");
	}
}