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
<center>
<p class="supertext">Sobre Nós</p>
</center>
<p class="textop"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempor enim nibh, ut suscipit turpis tristique vel. Curabitur sollicitudin, nulla in consectetur lacinia, dolor ex malesuada velit, feugiat convallis enim est ac nisi. Mauris molestie sodales eros, sit amet posuere nulla accumsan ut. Nunc diam eros, facilisis ac ultricies non, posuere ut ligula. Duis sollicitudin eget turpis at rhoncus. Fusce quis risus ultricies, sodales arcu sit amet, tristique enim. In finibus, tortor at rhoncus consequat, elit urna vehicula arcu, sed egestas diam ante a urna. Aenean gravida justo sapien, sed elementum elit consequat in. Fusce pellentesque, diam ut mollis elementum, lectus leo efficitur erat, id pharetra lectus nibh vel lacus. Etiam ac nisl vitae erat tempus faucibus mattis quis felis. In laoreet nulla rhoncus, molestie risus vel, sollicitudin urna. Fusce tempus orci et finibus feugiat. Phasellus pharetra leo ac tortor tempor lacinia.
<br><br>
Pellentesque mattis efficitur maximus. Nulla ut sapien massa. Fusce pretium urna ligula. Nunc ac congue purus. Sed a laoreet ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam ornare elit quis nibh varius, in dictum libero consectetur. Nam ornare rutrum velit, nec consequat tellus sollicitudin a. Suspendisse gravida sapien et fermentum molestie. Donec augue nisi, convallis et dignissim vel, feugiat ut massa. Maecenas mattis est et efficitur vehicula.
<br><br>
Donec sed suscipit sapien. Vestibulum commodo felis vitae odio pulvinar ornare. Proin porta metus quam, vitae pharetra mauris vulputate quis. Donec ac elit id ante rutrum imperdiet eu sed nisi. Maecenas posuere neque eget enim vulputate pulvinar. Suspendisse potenti. Nunc commodo tellus id egestas dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed eget facilisis ex. Mauris elit ante, eleifend nec erat vitae, hendrerit gravida turpis. Quisque non augue feugiat, gravida enim vel, vehicula lacus. Cras tincidunt augue eu fringilla viverra.
<br><br>
Praesent aliquet et lacus eu condimentum. Proin augue metus, maximus vel purus vitae, tempus pharetra felis. Vestibulum quis purus et felis ultrices tristique. Etiam gravida placerat nibh tempor suscipit. Nullam tempor luctus luctus. Sed dapibus vestibulum cursus. Vestibulum a pretium risus, eu facilisis turpis. Aliquam erat volutpat. Vivamus auctor lacus diam, vitae faucibus dolor gravida in. Cras aliquam sollicitudin diam, ac porta risus imperdiet at. Suspendisse potenti. Praesent pretium lorem non dolor vulputate finibus. Sed et auctor orci, a euismod metus. Aliquam erat volutpat. Nullam eu tincidunt dolor, nec pretium urna.
</p>







    <!--Brasil-->
<br><br><br>



<!-- Rodamão -->
<div class="blockquote-pe">
  <img src="logo3.png" width="15%" style="margin-left: 1%"/>
</div>

</body>
</html>
