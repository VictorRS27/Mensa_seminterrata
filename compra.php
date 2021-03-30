<?php
include("connection.php");
session_start();
@$id_vend = $_SESSION["id_vend"];
if (empty($id_vend)== false ) {
    echo '<script>alert("cadastro realizado com sucesso")</script>';
    session_destroy();
    header("location:login.php");
}

@$login=$_SESSION["login"];
@$senha=$_SESSION["senha"];
@$produto=$_SESSION["gay"];

if(empty($login)){
    header("location:login.php");

}
@$num_card = $_POST["num_card"];
@$cvv = $_POST["cvv"];
@$data_venc = $_POST["data_venc"];
@$nome = $_POST["nome"];
@$acao = $_POST["acao"];
if ($acao == "Confimar") {
    mysqli_query($con, "insert into login(`num_card`, `cvv`, `data_venc`) VALUES ('$num_card','$cvv','$data_venc')where (login='$login')");
    header("location:nota.php");
}


@$consulta = mysqli_query($con, "select * from userscli where login= '$login'");
@$dados = mysqli_fetch_array($consulta);

echo'
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Mensa Seminterrata | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./style2.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body background="fundo.jpg">
<!-- Link css -->
<link href="https://fonts.googleapis.com/css?family=Montserrat|Cardo" rel="stylesheet" type="text/css">

<!-- Jundiaí Shopping -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script  src="./script.js"></script>


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
    <a class="nav-link active" href="#" style="color:#F1D076">DESTILADOS</a>
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
    <center>
      <div class="hero">
          <img src="logo3.png" width="25%"/>
      
      <br><br>
      
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
      </center>
<br><br>

<center>
  <div class="shadow-lg p-3 mb-5 bg rounded" style="background:rgb(255, 255, 255) ;width: 45%;">
      <form method="POST" action="nota.php">
          <div class="blockquote">
            <img src="dados.png" width="70%">
            <br><br>
  
            <div class="input-group mb-3" style="width: 70%;">
              <input style="border-color: #DDB33B" id="cc" maxlength="19" name="num_card" value="',$dados["num_card"],'" type="text" class="form-control" placeholder="Número do Cartão" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            <div class="input-group mb-3" style="width: 70%;">
              <input style="border-color: #DDB33B" name="cvv" value="',$dados["cvv"],'" type="password" class="form-control" placeholder="CVV" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            <div class="input-group mb-3" style="width: 70%;">
              <input style="border-color: #DDB33B" name="nome" value="',$dados["nome"],'" type="tel" class="form-control" placeholder="Nome Completo" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3" style="width: 70%;">
              <input style="border-color: #DDB33B" onkeypress="mascara(this,data)" name="data_venc" value="',$dados["data_venc"],'" type="tel" class="form-control" placeholder="Vencimento" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            <br>
            <input class="myButton" style="width: 30%; height: 35px; background: #fff; border: 2px #DDB33B solid;" type="submit" value="Confimar" name="acao"><br><br>
          </div>
      </form>
  </div>
  </center>			


	</body>
</html>';
?>