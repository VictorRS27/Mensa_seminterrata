<?php
include("connection.php");
@$login = $_POST["login"];
@$senha = $_POST["senha"];
@$email_admin = $_POST["email_admin"];
@$nome_corp = $_POST["nome_corp"];
@$email_sac = $_POST["email_sac"];
@$acao = $_POST["acao"];

if($acao =="Cadastrar"){
    if(empty($login) or empty($senha) or empty($nome_corp) or empty($email_sac)){
        echo' <script>alert("faltou algum campo obrigatório")</script>';
    }else{
        $extensao = strtolower(substr($_FILES['imagem']['name'], -4)); 
        $novo_nome = md5(time()) . $extensao; 
        $diretorio = "imgsVend/";
        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio. $novo_nome);

        mysqli_query($con, "insert into usersvend(login, senha, email_admin, nome_corp, imagem, email_sac) values ('$login','$senha','$email_admin','$nome_corp','$novo_nome','$email_sac')");
        session_start();
        $_SESSION["login"]=$login;
        $_SESSION["senha"]=$senha;
        header("location:cadprod.php");     
            
        
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
  <meta charset="UTF-8">
  <title>Mensa Seminterrata | Cadastro de Produtos</title>
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
  
  </div>
<br><br>

<!-- Corpo -->


<center>
<form method="POST" enctype="multipart/form-data">
  <div class="shadow-lg p-3 mb-5 bg rounded" style="background:rgb(255, 255, 255) ;width: 45%;">
    <img src="dados.png" width="70%">
    <br><br>

    <div class="input-group mb-3" style="width: 70%;">
        <input style="border-color: #DDB33B" name="login" type="text" class="form-control" placeholder="Nome de Usuário" aria-label="Username" aria-describedby="basic-addon1">
        <input style="border-color: #DDB33B" name="senha" type="text" class="form-control" placeholder="Senha" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3" style="width: 70%;">
        <input style="border-color: #DDB33B" name="nome_corp" type="text" class="form-control" placeholder="Nome Corporativo" aria-label="Username" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3" style="width: 70%;">
        <input style="border-color: #DDB33B" name="email_admin" type="text" class="form-control" placeholder="Email Administrativo" aria-label="Username" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3" style="width: 70%;">
        <input style="border-color: #DDB33B" name="email_sac" type="text" class="form-control" placeholder="Email Sac" aria-label="Username" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3" style="width: 70%;">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="inputGroupFile01">
          <label style="border-color: #DDB33B; text-align: left; color: #6C757D" class="custom-file-label" for="inputGroupFile01">Foto de Perfil</label>
        </div>
      </div>

      <br>
      <button onMouseOver="style.backgroundColor ='#EBC854'; style.borderColor ='#EBC854'" onMouseOut="style.backgroundColor ='#fff'; style.borderColor ='#DDB33B'" style="border-color: #DDB33B; margin-bottom: 2%;" type="submit" value="Cadastrar" name="acao" class="btn btn-outline-secondary">Cadastrar</button>

    </div>
</form>
    </center>
</body>
</html>


    
