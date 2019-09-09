<?php

	include("cabecalho.php");


	if(!empty($_POST)){
		include("classeContaEspecial.php");
		
		
		if($_POST["tipo"]=="ce"){
			$c = new ContaEspecial($_POST);
		}
		else{
			$c = new ContaCorrente($_POST);
		}
		
		$c->exibe_cadastro();
		
		session_start();
		
		$_SESSION["conta"][] = $c;
		
	}else{

?>
<script>

	function libera_limite(opcao){
		if(opcao=="ce"){
			document.getElementById("limite").style.display="block";
		}
		else{
			document.getElementById("limite").style.display="none";
		}
	}

</script>

<form method="post">

<input type="text" name="cpf" placeholder="CPF..." /><br />
<input type="text" name="nome" placeholder="Nome..." /><br />
<input type="email" name="email" placeholder="Email..." /><br />

<select name="tipo" onchange="libera_limite(this.value)">
	<option value="cc">Conta Corrente</option>
	<option value="ce">Conta Especial</option>
</select>

<div id="limite" style="display:none">
<input type="number" name="limite" 
	placeholder="Digite o limite..." />
</div>

<br />
<input type="submit" value="cadastrar" />
</form>
<?php 
}
?>
</body>
</html>