
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reservas</title>


</head>
<body>
	
			<div class="container">
              <?php
	$estabelecimentos=array("Supermercado Schutze","Shopping Neumarkt","Cafeteria DolceGusto","Supermercado Gessner","Lojão Astral","Hospital Oase","Pavilhão Henry Paul","Guairacás","Shopping Vale Europeu","Norte Shopping","Hospital Santa Catarina","Doctox X");
	?>
				<form class="form-signin" method="POST" action="validaReserva.php">
                <border="0" <align="center">
			<h1>Reservas</h1>
			<hr>
			
				<p style="font-size:1em; font-family:Georgia, 'Times New Roman', Times, serif;" required ></p>
				<tr> 
            	<td> Nome Completo: </td>
                </tr>
                <input type="text" name="nome" placeholder="Nome de usuário" class="campo" maxlength="40" required autofocus>
				
                <p style="font-size:1em; font-family:Georgia, 'Times New Roman', Times, serif;" required ></p>
                <tr>
            	<td> CPF: </td>
                </tr>
				<input type="text" name="CPF" placeholder="CPF" class="campo" maxlength="50" required >
				
                <p style="font-size:1em; font-family:Georgia, 'Times New Roman', Times, serif;" required ></p>
                <tr>
            	<td> Cidade:</td>
                </tr>
				<input type="text" name="cidade" placeholder="Insira a Cidade" class="campo" maxlength="50" required >
				
                <p style="font-size:1em; font-family:Georgia, 'Times New Roman', Times, serif;" required ></p>
                <tr>
            	<td> Placa do Carro: </td>
                </tr>
				<input type="text" name="placaCarro" placeholder="Placa do Carro" class="campo" maxlength="30" required >
				<p style="font-size:1em; font-family:Georgia, 'Times New Roman', Times, serif;" required ></p>
				<tr>
             	<td> Estabelecimentos </td>
             	<td>
                <select name="estabelecimentos">
                <option value="">-- </option>
                	<?php foreach($estabelecimentos as $valor){?>
                    <option value="<?php echo $valor; ?>"> <?php echo $valor;?> </option> <?php }?>
                  </select>
                    
                  <h2> Vagas </h2>
                  
                  <tr> 
            	<td> <table width="857" height="153" border="1">
            	  <tr onclick="location.href = 'sucesso.reserva.php';" style="cursor: hand;">
  						<td width="419" bgcolor="#00FF00"> &nbsp;</td>
                     	<td width="422" bgcolor="#00FF00">Vaga</td>
                     </tr>
                    
                   <td height="22"></tr>
            	 
              
            	  
          	  </table></td>


              <tr>
                	<td> </td>
                    <td><input type="submit" name="Reservar Vaga" value="Reservar" </td>
                </tr>
               
                  
					<br>
					<br>
              </form>
		</section>
	</div>

				




	
    
            

            
    	
            
            
            
            
            
            
             
                
            
        
        
      
</body>
</html>