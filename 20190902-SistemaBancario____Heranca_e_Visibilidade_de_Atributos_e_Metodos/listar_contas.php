<?php

include("cabecalho.php");

include("classeContaEspecial.php");

session_start();

foreach($_SESSION["conta"] as $i=>$c){
	$c->exibe_linha();
}

?>

</body>
</html>