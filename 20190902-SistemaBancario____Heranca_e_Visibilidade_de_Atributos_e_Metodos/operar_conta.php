<?php

	include("cabecalho.php");
	
	$numero_conta = "";
	
	if(isset($_GET["numero"])){
		$numero_conta = $_GET["numero"];
	}
	
	if(!empty($_POST)){
		
		$nro = $_POST["conta"];
		$operacao = $_POST["operacao"];
		$valor = $_POST["valor"];
		include("classeContaEspecial.php");
		session_start();
		foreach($_SESSION["conta"] as $i=>$c){
			if($nro==$c->get_nroConta()){
				
				if($operacao == "sacar"){
					echo $c->sacar($valor);
				}
				else{
					echo $c->depositar($valor);
				}
				
			}
		}
		
	}

?>

<form method="post">

	<input type="number" name="conta" 
		value="<?php echo $numero_conta;?>"
		placeholder="Digite o número da conta..." />
	<br />
	<select name="operacao">
		<option value="sacar">Sacar</option>
		<option value="depositar">Depositar</option>
	</select>
	<br />
	<input type="number" name="valor" 
		placeholder="valor da operação..." />
	<br />
	<input type="submit" value="Enviar" />
	<br />
		
</form>
</body>
</html>