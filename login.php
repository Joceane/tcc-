<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>

    

	<h2> Login </h2>
    <?php
		if(isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
	?>
   
    <form 	method="POST" action="validaLogin.php">
    	<label> Email </label>
        <input type="text" name="email" placeholder="Digite seu Email"> 
        
        <label> Senha </label>
        <input type="password" name="senha" placeholder="Digite sua Senha">        
        <input type="submit" name="btnLogin" value="Acessar">
     </form>
     



</body>
</html>