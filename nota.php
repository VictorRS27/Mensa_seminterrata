<?php
include("connection.php");
session_start();
@$login=$_SESSION["login"];
@$senha=$_SESSION["senha"];
@$nome = $_POST["nome"];
@$num_card = $_POST["num_card"];
@$cvv = $_POST["cvv"];
@$data_venc = $_POST["data_venc"];

@$produto=$_SESSION["gay"];

@$acao = $_POST["acao"];


	if ($acao="Confirmar") {
		mysqli_query($con, "insert into userscli (login,senha,nome,num_card,cvv,data_venc) values ('$login','$senha','$nome','$num_card','$cvv','$data_venc')where login='$login'");
	}
echo'
<center>
<p class="palavra" style="font: 50px "Century Gothic"; color: #505050">Detalhes do pedido</p>

<p class="palavra" style="font: 50px "Century Gothic"; color: #505050">Nome do cliente:',$nome,'</p>
<p class="palavra" style="font: 50px "Century Gothic"; color: #505050">Numero do cartão:',$num_card,'</p>
<p class="palavra" style="font: 50px "Century Gothic"; color: #505050">CVV:',$cvv,'</p>
<p class="palavra" style="font: 50px "Century Gothic"; color: #505050">data de vencimento:',$data_venc,'</p>
<hr style="width: 40%">'
;
  $consulta = mysqli_query($con, "select * from produtos where id= '$produto'");
  $dados = mysqli_fetch_array($consulta);
echo'
<p class="palavra" style="font: 50px "Century Gothic"; color: #505050">Produto:',$dados["nome"],'</p>
<p class="palavra" style="font: 50px "Century Gothic"; color: #505050">Código:',$produto,'</p>
</center>';
?>