
<?php 

 include_once("conexao.php");

	$acao=$_GET['acao'];
		if($acao=="enviar")
		
			$nome_pessoa = $_POST['nomePessoa'];
			$sexo_pessoa = $_POST['sexoPessoa'];
			$cidade_pessoa = $_POST['cidadePessoa'];
			$end_pessoa = $_POST['endPessoa'];
			$num_Cpf = $_POST['numCpf'];
			$email_pessoa = $_POST['emailPessoa'];
			$dia_pessoa = $_POST['diaPessoa'];
			$mes_pessoa = $_POST['mesPessoa'];
			$ano_pessoa = $_POST['anoPessoa'];
			
			$datanascimento =$dia_pessoa."/".$mes_pessoa."/".$ano_pessoa;
			
			//Envia dados para o Banco de Dados
			$enviar_banco=mysql_query("INSERT INTO cadastro_dados values ('','$nome_pessoa','$sexo_pessoa','$cidade_pessoa','$end_pessoa','$num_Cpf','$email_pessoa','$datanascimento')");

?>
		

			
				
			
 



