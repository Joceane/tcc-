<?php 
	session_start();
	
	unset( 
		$_SESSION['usuId'] = $resultado['id'];
					$_SESSION['usuName'] = $resultado['name'];
					$_SESSION['usuNiveisAcessoId'] = $resultado['niveis_acesso_id'];
					$_SESSION['usuEmail'] = $resultado['email'];
					$_SESSION['usuSenha'] = $resultado['senha'];