<?php
include("connection.php");
@$login = $_POST["login"];
@$senha = $_POST["senha"];
@$num_card = $_POST["num_card"]; 
@$cvv = $_POST["cvv"];
@$nome = $_POST["nome"];
@$data_venc = $_POST["data_venc"]; 
@$endereco = $_POST["endereco"];
@$numero = $_POST["numero"];
@$acao = $_POST["acao"];
	
if ($acao=="Cadastrar") {

	if(empty($login) or empty($senha) ){
		echo' <script>alert("faltou algum campo obrigatório"</script>';
	}else{
		@$consulta = mysqli_query($con, "select * from userscli where login = '$login'");
		@$dados = mysqli_fetch_array($consulta);	
		if ($dados==null) {
			

			@$consulta2 = mysqli_query($con, "select * from usersvend where login = '$login'");
			@$dados2 = mysqli_fetch_array($consulta2);
			
			if ($dados2["login"]=="") {
				mysqli_query($con, "insert into userscli (login, senha, num_card, nome, cvv, data_venc, endereco, numero) 
								values ('$login', '$senha','$num_card','$nome','$cvv','$data_venc','$endereco','$numero')");
				session_start();
				$_SESSION["login"]=$login;
				$_SESSION["senha"]=$senha;
				header("location:index.php");
			}else{
				echo' <script>alert("você ja está cadastrado como vendedor")</script>';
				
			}
			
		}else{
			echo' <script>alert("você ja está cadastrado como cliente")</script>';
		}	
	}
}
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Mensa Seminterrata | Cadastro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./style2.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body background="fundo.jpg">
<!-- Link css -->
<link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>

<!-- Jundiaí Shopping -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script  src="./script.js"></script>
<script type="text/javascript">
			function mascara(o,f){
			    v_obj=o
			    v_fun=f
			    setTimeout("execmascara()",1)
			}
			function execmascara(){
			    v_obj.value=v_fun(v_obj.value)
			}
			function mcc(v){
			    v=v.replace(/\D/g,"");
			    v=v.replace(/^(\d{4})(\d)/g,"$1 $2");
			    v=v.replace(/^(\d{4})\s(\d{4})(\d)/g,"$1 $2 $3");
			    v=v.replace(/^(\d{4})\s(\d{4})\s(\d{4})(\d)/g,"$1 $2 $3 $4");
			    return v;
			}
			function id( el ){
				return document.getElementById( el );
			}
			window.onload = function(){
				id("cc").onkeypress = function(){
					mascara( this, mcc );
				}
			}
			function mascara(o,f){
			v_obj=o
			v_fun=f
			setTimeout("execmascara()",1)
			}
			function execmascara(){
				v_obj.value=v_fun(v_obj.value)
			}
			function data(v){
				v=v.replace(/\D/g,"");					//Remove tudo o que não é dígito
				v=v.replace(/(\d{2})(\d)/,"$1/$2");	   
				v=v.replace(/(\d{2})(\d)/,"$1/$2");	   
														 
				v=v.replace(/(\d{2})(\d{2})$/,"$1$2");
				return v;
			}
</script>

<!-- Abinha Bonitinha -->
<header class="main_h">

  <div class="logo"><img src="logo3.png" width="390%" style="margin-left:80%;"/></div>
  <center>

  <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="index.php" style="color:#F1D076;">INÍCIO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="vinhos.php" style="color:#F1D076">VINHOS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cervejas.php" style="color:#F1D076">CERVEJAS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="espumantes.php" style="color:#F1D076">ESPUMANTES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="Destilados.php" style="color:#F1D076">DESTILADOS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="sobre.php" style="color:#F1D076">SOBRE NÓS</a>
  </li>
</ul>
</center>

</header>

    <!-- Logão -->
	<div class="hero">
  <div class="minihero">
    <div class="heroimg">
      <img src="logo3.png" width="50%"/>
    </div>
      <div class="login">
        
    <a class="nav-link" href="login.php" style="color:#F1D076">ENTRAR</a>        
    
      </div>

  </div>
      <div class="hero2">
        <br>
        <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="index.php" style="color:#F1D076;">INÍCIO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="vinhos.php" style="color:#F1D076">VINHOS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cervejas.php" style="color:#F1D076">CERVEJAS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="espumantes.php" style="color:#F1D076">ESPUMANTES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="Destilados.php" style="color:#F1D076">DESTILADOS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="sobre.php" style="color:#F1D076">SOBRE NÓS</a>
  </li>
</ul>
      <br>
      </div>
      </div>
      
<br><br>

<!-- Corpo -->


<center>
  <div class="shadow-lg p-3 mb-5 bg rounded" style="background:rgb(255, 255, 255) ;width: 45%;">
      <form method="POST" action="cadastro.php">
          <div class="blockquote">
            <img src="dados.png" width="70%">
            <br><br>
  
            <div class="input-group mb-3" style="width: 70%;">
              <input style="border-color: #DDB33B" name="login" type="text" class="form-control" placeholder="Nome de Usuário" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            <div class="input-group mb-3" style="width: 70%;">
              <input style="border-color: #DDB33B" name="senha" type="password" class="form-control" placeholder="Senha" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            <hr style=" width: 50%; margin: 3%; background: #DDB33B;">
            <div class="input-group mb-3" style="width: 70%;">
              <input style="border-color: #DDB33B" name="nome" type="tel" class="form-control" placeholder="Nome Completo" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3" style="width: 70%;">
              <input style="border-color: #DDB33B" name="endereco" type="tel" class="form-control" placeholder="Endereço Completo" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3" style="width: 70%;">
              <input style="border-color: #DDB33B" name="numero" type="tel" class="form-control" placeholder="Número" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3" style="width: 70%;">
              <input style="border-color: #DDB33B" name="num_card" id="cc" type="tel" maxlength="19" class="form-control" placeholder="Número do Cartão" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3" style="width: 70%;">
              <input style="border-color: #DDB33B" name="data_venc" onkeypress="mascara(this,data)" type="text" class="form-control" placeholder="Data de Vencimento" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3" style="width: 70%;">
              <input style="border-color: #DDB33B" name="cvv" maxlength="3" type="tel" class="form-control" placeholder="CVV" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            <br>
            <button onMouseOver="style.backgroundColor ='#EBC854'; style.borderColor ='#EBC854'" onMouseOut="style.backgroundColor ='#fff'; style.borderColor ='#DDB33B'" style="border-color: #DDB33B;" type="submit" name="acao" value="Cadastrar" class="btn btn-outline-secondary">Cadastrar</button>
  
          </div>
      </form>
  </div>
  </center>			
  <br>
  </body>
  </html>
  


