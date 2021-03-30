<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Mensa Seminterrata | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
  <link rel="stylesheet" href="./style.css"><link rel="stylesheet" href="./styleproduto.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body background="fundo.jpg">
<!-- Link css -->
<link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>

<!-- Jundiaí Shopping -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script  src="./script.js"></script><script  src="./scriptproduto.js"></script>


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
      <?php
      
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
      

<!-- Corpo -->




<br>
<main>
  <div class="container">
    <div class="grid product">
      <div class="column-xs-12 column-md-7">
        <div class="product-gallery">
          <div class="product-image">
      <?php
      include("connection.php");
      @$produto=$_SESSION["gay"];
      $consulta = mysqli_query($con, "select * from produtos where id= '$produto'");
      $dados = mysqli_fetch_array($consulta);
      echo'
            <img class="imgprod" src="imgsProd/',$dados["imagem"],'">
          </div>
        </div>
      </div>
      
      <div class="column-xs-12 column-md-5">
        <h1>',$dados["nome"],'</h1>
        <h2>R$',$dados["preco"],'</h2>
        <div class="description">
          <p>',$dados["descricao"],'</p>
        </div>
        <p><b>MAIS INFORMAÇÕES</b></p>
        <p><b>Tipo:</b> ',$dados["categoria"],'⠀⠀⠀
        <b>Categoria:</b> ',$dados["subcategoria"];
        if (($dados["categoria"]=="destilado") or ($dados["categoria"]=="vinho")) {
          echo '<br><b>Idade:</b> ',$dados["idade"],' Anos</p>';
        }
        ?>
        <br>
        <form action="compra.php" method="post">
          <button type="submit" class="add-to-cart">Comprar</button>
        </form>
      </div>
    </div>
    </div>
</main>


    <!--Brasil-->
<br><br>

<!-- Rodamão -->
<div class="blockquote-pe">
  <img src="logo3.png" width="15%" style="margin-left: 1%"/>
</div>

</body>
</html>
