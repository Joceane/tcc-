<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Cadastro </title>



</head>

<body>

	<?php
	$meses =array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
	?>

	<form method="POST" action="validaDados.php?acao=enviar">
    	<table width="625" border="0" <align="center">
        	
            <tr> 
            	<td> Nome Completo </td>
                <td><input type="text" name="nomePessoa" required autofocus />
                </td>
            </tr> 
            
            <tr>
            	<td> Sexo:</td>
                <td>
                Masculino <input type="radio" value="Masc" name="sexoPessoa" required />
                Feminino <input type="radio" value="Fem" name="sexoPessoa" required />
                </td> 
            </tr>
            
            <tr>
            	<td> Cidade</td>
                <td><input type="text" name="cidadePessoa" required />
                </td>  
            </tr>
            
            <tr>
            	<td> Endereço:</td>
                <td><input type="text" name="endPessoa" required />
                </td>
        	</tr>
            
            <tr>
            	<td> CPF </td>
                <td><input type="number" name="numCpf" required />
                </td>
    		</tr>
            
            <tr>
            	<td> Email</td>
                <td><input type="text" name="emailPessoa" required />
                </td>
             </tr>

             <tr>
            	<td> Senha</td>
                <td><input type="password" name="senha" required />
                </td>
             </tr>
             
             <tr>
             	<td> Data Nascimento </td>
             	<td>
             	<select name="diaPessoa">
                <option value="">-- </option>
                	<?php for($i=1; $i<=31; $i++){ ?>
                	<option value="<?php echo $i; ?>"> <?php echo $i;?></option>
                	<?php }?>
                </select>
                
                <select name="mesPessoa">
                <option value="">-- </option>
                	<?php foreach($meses as $valor){?>
                    <option value="<?php echo $valor; ?>"> <?php echo $valor;?> </option> <?php }?>
                    </select>
                    
                    <select name="anoPessoa">
                    <option value="">-- </option>
                	<?php for($i=1980; $i<=2018; $i++){ ?>
                    <option value="<?php echo $i; ?>"> <?php echo $i;?> </option> <?php }?>
                    </select>
        		</td>
                </tr>
                
                <tr>
                	<td> </td>
                    <td><input type="submit" name="enviar" value="Enviar" </td>
                </tr>
                
            
        
        
        </table>
    
    </form>
</body>
</html>