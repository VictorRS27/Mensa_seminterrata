<?php
	session_start();
	@$acao=$_POST["acao"];
	if ($acao!==0) {
		$_SESSION["gay"]=$acao;
		header("location:pgproduto.php");
	}
?>