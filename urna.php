<?php 
$digito = filter_input(INPUT_GET,'digito');
	if(($digito === '13') || ($digito === '24') || ($digito === '45')){
         $arquivo= "voto.txt";
         $conteudo=$digito.",";
         $abertura=fopen("$arquivo","a+");
         $gravacao=fwrite($abertura,$conteudo);
         fclose($abertura);
    }else if (($digito === "branco")){
		$arquivo = "branco.txt"; 
		$abertura = fopen($arquivo, "r"); 
		$leitura = fread($abertura, filesize($arquivo));
		fclose($abertura); 
			///////////////////delicia///////////////////////
		$abertura = fopen($arquivo, "w"); 
		$cont = $leitura + 1; 
		$gravacao = fwrite($abertura, $cont); 
		fclose($abertura); 
    }else{
		$arquivo = "nulo.txt"; 
		$abertura = fopen($arquivo, "r"); 
		$leitura = fread($abertura, filesize($arquivo));
		fclose($abertura); 
		/////////////////////////////delicia////////////////////
		$abertura = fopen($arquivo, "w"); 
		$cont = $leitura + 1; 
		$gravacao = fwrite($abertura, $cont); 
		fclose($abertura); 
    }
?>
<html>
<head><center>
	<title>Urna</title>
</head>
<body>
	<form name="ur" method="get" action="urna.php">
	<fieldset style="background-color:gray;height:400px;width:230px">
    <table align="center" >
		<tr>
			<td><center>
				<input type="text"  name="digito" style="font-size:16" readonly>
				</center>
			</td>
		</tr>
		<tr>
			<td align="center"></br>
				<input type="button" value="1" onclick="ur.digito.value += '1'"  style="height:60px;width:60px"/>
				<input type="button" value="2" onclick="ur.digito.value += '2'"style="height:60px;width:60px"/>  
				<input type="button" value="3" onclick="ur.digito.value += '3'"style="height:60px;width:60px"/><br />
			</td>
		</tr>
		<tr>
			<td align="center">
				<input type="button" value="4" onclick="ur.digito.value += '4'"style="height:60px;width:60px"/>
				<input type="button" value="5" onclick="ur.digito.value += '5'"style="height:60px;width:60px"/>
				<input type="button" value="6" onclick="ur.digito.value += '6'"style="height:60px;width:60px"/><br />
			</td>
		</tr>
		<tr>
			<td align="center">
				<input type="button" value="7" onclick="ur.digito.value += '7'"style="height:60px;width:60px"/>
				<input type="button" value="8" onclick="ur.digito.value += '8'"style="height:60px;width:60px"/>  
				<input type="button" value="9" onclick="ur.digito.value += '9'"style="height:60px;width:60px"/><br/>
			</td>
		</tr>
		<tr>
			<td align="center">
				<input type="button" value="0" onclick="ur.digito.value += '0'"style="height:60px;width:60px"/><br></br>
			</td>
			</br>
		</tr>
		<tr>
			<td align="center">
				<input type="submit" value="branco" onclick="ur.digito.value += 'branco'"style="height:48px;width:70px "  />
				<input type="reset" value="corrige" style="height:48px;width:70px;background-color:#FE7708"/>
				<input type="submit" value="confirma" style="height:48px;width:70px;background-color:#4AFE08"/>
			</td>
		</tr>
		
	</table>
</form>
 </body>
</html>
