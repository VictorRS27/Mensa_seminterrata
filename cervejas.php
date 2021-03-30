<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Mensa Seminterrata | Cervejas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
  <link rel="stylesheet" href="./style.css">
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


<!-- Abinha Bonitinha -->
<header class="main_h">

        <div class="logo"><img src="logo3.png" width="390%" style="margin-left:80%;"/></div>
        <center>

    <ul class="nav justify-content" style="margin-top:15px; margin-left:20%">
      <li class="nav-item">
        <a class="nav-link active" href="index.php" style="color:#F1D076">INÍCIO</a>
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
        <a class="nav-link" href="#" style="color:#F1D076">CERVEJAS</a>
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
            <?php
            session_start();
            @$login=$_SESSION["login"];
            if ($login=="") {
              echo '<a class="nav-link" href="login.php" style="color:#F1D076">ENTRAR</a>';          
            }else{
              echo '<a class="nav-link" href="destroi.php" style="color:#F1D076">olá ',$login,'</a>';
            }
            ?>
          </div>
    
      </div>
<div class="hero2">
  <br>
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="index.php" style="color:#F1D076">INÍCIO</a>
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
    <a class="nav-link" href="#" style="color:#F1D076">CERVEJAS</a>
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



<!-- Corpo -->


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imgoutros/banner1.png" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgoutros/banner5.png" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgoutros/banner2.png" alt="Terceiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgoutros/banner4.png" alt="Terceiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgoutros/banner3.png" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

<br><br>
<center>
<img src="imgoutros/coloradoname.png" width="80%"/>
</center>
<br><br>


<div class="card-groupe">  
  <div class="card" style="margin-left: 2%; margin-right: 2%; background: #670000">
    <img class="card-img-top" src="imgcervejas/cervejabg3.png" style="width: 100%; margin-left:0px" alt="Imagem de capa do card">
    <div class="card-body">
    </div>
  </div>
  <?php
  include("connection.php");
  @$consulta = mysqli_query($con, "select * from produtos where id = '25'");
  @$dados = mysqli_fetch_array($consulta);
  echo'
  <div class="card" style="margin-left: 2%; margin-right: 2%">
  <form action="ligacao.php" method="POST">
    <img class="card-img-top" src="imgsProd/',$dados["imagem"],'" alt="Imagem de capa do card">
    <div class="card-body">
    <center>
    <h5 class="card-title" style=" color: #440000">',$dados["nome"],'</h5>
    <p class="card-text" style=" color: #440000">',$dados["subcategoria"],'</p>
    <p class="card-text" style="font-size: 21px; color:#670000; font-weight: bold">R$',$dados["preco"],'</p>
      <button 
      type="submit" 
      class="btn btn-outline-danger" 
      style="color: #670000; border-color: #670000"
      name="acao"
      value="25"
      >Comprar</button>
    </center>
    </div>
    </form>
  </div>';
  @$consulta = mysqli_query($con, "select * from produtos where id = '26'");
  @$dados = mysqli_fetch_array($consulta);
  echo'
  <div class="card" style="margin-left: 2%; margin-right: 2%">
  <form action="ligacao.php" method="POST">
    <img class="card-img-top" src="imgsProd/',$dados["imagem"],'" alt="Imagem de capa do card">
    <div class="card-body">
    <center>
    <h5 class="card-title" style=" color: #440000">',$dados["nome"],'</h5>
    <p class="card-text" style=" color: #440000">',$dados["subcategoria"],'</p>
    <p class="card-text" style="font-size: 21px; color:#670000; font-weight: bold">R$',$dados["preco"],'</p>
      <button 
      type="submit" 
      class="btn btn-outline-danger" 
      style="color: #670000; border-color: #670000"
      name="acao"
      value="26"
      >Comprar</button>
    </center>
    </div>
    </form>
  </div>';
  @$consulta = mysqli_query($con, "select * from produtos where id = '27'");
  @$dados = mysqli_fetch_array($consulta);
  echo'
  <div class="card" style="margin-left: 2%; margin-right: 2%">
  <form action="ligacao.php" method="POST">
    <img class="card-img-top" src="imgsProd/',$dados["imagem"],'" alt="Imagem de capa do card">
    <div class="card-body">
      <center>
        <h5 class="card-title" style=" color: #440000">',$dados["nome"],'</h5>
        <p class="card-text" style=" color: #440000">',$dados["subcategoria"],'</p>
        <p class="card-text" style="font-size: 21px; color:#670000; font-weight: bold">R$',$dados["preco"],'</p>
          <button 
          type="submit" 
          class="btn btn-outline-danger" 
          style="color: #670000; border-color: #670000"
          name="acao"
          value="27"
          >Comprar</button>
      </center>
    </div>
    </form>
  </div>';?>
</div>
<br>




<br><br>
<center>
<img src="imgoutros/leuvenname.png" width="80%"/>
</center>
<br><br>

<div class="card-group">
<?php
  include("connection.php");
  @$consulta = mysqli_query($con, "select * from produtos where id = '28'");
  @$dados = mysqli_fetch_array($consulta);
  echo'
  <div class="card" style="margin-left: 2%; margin-right: 2%">
  <form action="ligacao.php" method="POST">
    <img class="card-img-top" src="imgsProd/',$dados["imagem"],'" alt="Imagem de capa do card">
    <div class="card-body">
    <center>
    <h5 class="card-title" style=" color: #440000">',$dados["nome"],'</h5>
    <p class="card-text" style=" color: #440000">',$dados["subcategoria"],'</p>
    <p class="card-text" style="font-size: 21px; color:#670000; font-weight: bold">R$',$dados["preco"],'</p>
      <button 
      type="submit" 
      class="btn btn-outline-danger" 
      style="color: #670000; border-color: #670000"
      name="acao"
      value="28"
      >Comprar</button>
    </center>
    </div>
    </form>
  </div>';
  @$consulta = mysqli_query($con, "select * from produtos where id = '29'");
  @$dados = mysqli_fetch_array($consulta);
  echo'
  <div class="card" style="margin-left: 2%; margin-right: 2%">
  <form action="ligacao.php" method="POST">
    <img class="card-img-top" src="imgsProd/',$dados["imagem"],'" alt="Imagem de capa do card">
    <div class="card-body">
    <center>
    <h5 class="card-title" style=" color: #440000">',$dados["nome"],'</h5>
    <p class="card-text" style=" color: #440000">',$dados["subcategoria"],'</p>
    <p class="card-text" style="font-size: 21px; color:#670000; font-weight: bold">R$',$dados["preco"],'</p>
      <button 
      type="submit" 
      class="btn btn-outline-danger" 
      style="color: #670000; border-color: #670000"
      name="acao"
      value="29"
      >Comprar</button>
    </center>
    </div>
    </form>
  </div>';
  @$consulta = mysqli_query($con, "select * from produtos where id = '30'");
  @$dados = mysqli_fetch_array($consulta);
  echo'
  <div class="card" style="margin-left: 2%; margin-right: 2%">
  <form action="ligacao.php" method="POST">
    <img class="card-img-top" src="imgsProd/',$dados["imagem"],'" alt="Imagem de capa do card">
    <div class="card-body">
    <center>
    <h5 class="card-title" style=" color: #440000">',$dados["nome"],'</h5>
    <p class="card-text" style=" color: #440000">',$dados["subcategoria"],'</p>
    <p class="card-text" style="font-size: 21px; color:#670000; font-weight: bold">R$',$dados["preco"],'</p>
      <button 
      type="submit" 
      class="btn btn-outline-danger" 
      style="color: #670000; border-color: #670000"
      name="acao"
      value="30"
      >Comprar</button>
    </center>
    </div>
    </form>
  </div>';?>
    <div class="card" style="margin-left: 2%; margin-right: 2%; background: #670000">
      <img class="card-img-top" src="imgcervejas/cervejabg2.png" style="width: 100%; margin-left:0px" alt="Imagem de capa do card">
      <div class="card-body">
      </div>
    </div>
  </div>
</div>


  <br><br>
  <center>
  <img src="imgoutros/roletaname.png" width="80%"/>
  </center>
  <br><br>

<div class="card-group">
  <div class="card" style="margin-left: 2%; margin-right: 2%; background: #670000">
    <img class="card-img-top" src="imgcervejas/cervejabg1.png" style="width: 100%; margin-left:0px" alt="Imagem de capa do card">
    <div class="card-body">
    </div>
  </div>
  <?php
  include("connection.php");
  @$consulta = mysqli_query($con, "select * from produtos where id = '31'");
  @$dados = mysqli_fetch_array($consulta);
  echo'
    <div class="card" style="margin-left: 2%; margin-right: 2%">
      <form action="ligacao.php" method="POST">
        <img class="card-img-top" src="imgsProd/',$dados["imagem"],'" alt="Imagem de capa do card">
        <div class="card-body">
        <center>
        <h5 class="card-title" style=" color: #440000">',$dados["nome"],'</h5>
        <p class="card-text" style=" color: #440000">',$dados["subcategoria"],'</p>
        <p class="card-text" style="font-size: 21px; color:#670000; font-weight: bold">R$',$dados["preco"],'</p>
          <button 
          type="submit" 
          class="btn btn-outline-danger" 
          style="color: #670000; border-color: #670000"
          name="acao"
          value="31"
          >Comprar</button>
        </center>
        </div>
      </form>
    </div>
  ';
  @$consulta = mysqli_query($con, "select * from produtos where id = '32'");
  @$dados = mysqli_fetch_array($consulta);
  echo'
    <div class="card" style="margin-left: 2%; margin-right: 2%">
      <form action="ligacao.php" method="POST">
        <img class="card-img-top" src="imgsProd/',$dados["imagem"],'" alt="Imagem de capa do card">
        <div class="card-body">
        <center>
        <h5 class="card-title" style=" color: #440000">',$dados["nome"],'</h5>
        <p class="card-text" style=" color: #440000">',$dados["subcategoria"],'</p>
        <p class="card-text" style="font-size: 21px; color:#670000; font-weight: bold">R$',$dados["preco"],'</p>
          <button 
          type="submit" 
          class="btn btn-outline-danger" 
          style="color: #670000; border-color: #670000"
          name="acao"
          value="32"
          >Comprar</button>
        </center>
        </div>
      </form>
    </div>
  ';
  @$consulta = mysqli_query($con, "select * from produtos where id = '33'");
  @$dados = mysqli_fetch_array($consulta);
  echo'  
    <div class="card" style="margin-left: 2%; margin-right: 2%">
      <form action="ligacao.php" method="POST">
        <img class="card-img-top" src="imgsProd/',$dados["imagem"],'" alt="Imagem de capa do card">
        <div class="card-body">
          <center>
          <h5 class="card-title" style=" color: #440000">',$dados["nome"],'</h5>
          <p class="card-text" style=" color: #440000">',$dados["subcategoria"],'</p>
          <p class="card-text" style="font-size: 21px; color:#670000; font-weight: bold">R$',$dados["preco"],'</p>
            <button 
            type="submit" 
            class="btn btn-outline-danger" 
            style="color: #670000; border-color: #670000"
            name="acao"
            value="33"
            >Comprar</button>
          </center>
        </div>
      </form>
    </div>
  ';?>
  
</div>

    <!--Brasil-->
<br><br><br>



<!-- Rodamão -->
<div class="blockquote-pe">
  <img src="logo3.png" width="15%" style="margin-left: 1%"/>
</div>

</body>
</html>
