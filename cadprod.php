<?php
include("connection.php");
@$nome = $_POST["nome"];
@$preco = $_POST["preco"];
@$categoria = $_POST["categoria"];
@$subcategoria = $_POST["subcategoria"];
@$idade = $_POST["idade"];
@$acao = $_POST["acao"];

session_start();
@$login=$_SESSION["login"];
@$id_vend = $_SESSION["id_vend"];

if (empty($login) or empty($id_vend)) {
	header("location:login.php"); 
}
if ($acao == "Cadastrar") {
	if(empty($nome) or empty($preco) or empty($_FILES['imagem']) or empty($categoria)){
		echo' <script>alert("faltou algum campo obrigatório")</script>';

	}else{
		$extensao = strtolower(substr($_FILES['imagem']['name'], -4)); 
		$novo_nome = md5(time()) . $extensao; 
		$diretorio = "imgsProd/";
		move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio. $novo_nome);		
		mysqli_query($con, "insert into produtos(nome,preco,imagem,categoria,subcategoria,idade) 
								values ('$nome','$preco','$novo_nome','$categoria','$subcategoria','$idade')");
		@$consulta = mysqli_query($con, "select * from produtos where nome = '$nome'");
		@$dados = mysqli_fetch_array($consulta);	
		@$id_prod = $dados["id"];				
		mysqli_query($con, "insert into vend_prod (id_vend, id_prod) values ( '$id_vend', '$id_prod')");			
		echo '<script>alert("cadastro realizado com sucesso")</script>';
			
		
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

<!-- Corpo -->


<center>
<form method="POST" action="cadprod.php" enctype="multipart/form-data">
  <div class="shadow-lg p-3 mb-5 bg rounded" style="background:rgb(255, 255, 255) ;width: 45%;">
  <img src="dadosprod.png" width="50%">
  <br><br>

  <div class="input-group mb-3" style="width: 75%;">
    <div class="input-group-prepend">
      <span class="input-group-text" style="background: #DDB33B; color:#fff; border-color: #DDB33B; width: 119px;" id="basic-addon1">Nome</span>
    </div>
    <input name="nome" type="text" class="form-control" style="border-color: #DDB33B" placeholder="Vinho Tinto Sutter Home Zinfandel 750ml" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    
    <div class="input-group mb-3" style="width: 75%;">
    <div class="input-group-prepend">
      <span class="input-group-text" style="background: #DDB33B; color:#fff; border-color: #DDB33B; width: 119px;" id="basic-addon1">Preço</span>
    </div>
    <input name="preco" type="tel" class="form-control" style="border-color: #DDB33B" placeholder="R$0,00" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    
    <div class="input-group mb-3" style="width: 75%;">
    <div class="input-group-prepend">
      <label class="input-group-text" style="background: #DDB33B; color:#fff; border-color: #DDB33B; width: 119px;" for="inputGroupSelect01">Categorias</label>
    </div>
    <select name="categoria" class="custom-select" style="border-color: #DDB33B;" id="inputGroupSelect01">
      <option selected  onmouseover="style.backgroundColor ='#EBC854'">Vinho</option>
      <option value="1" onmouseover="style.backgroundColor ='#EBC854'">Cerveja</option>
      <option value="2">Espumante</option>
      <option value="3">Destilado</option>
    </select>
    </div>

      <div class="input-group mb-3" style="width: 75%;">
    <div class="input-group-prepend">
      <span class="input-group-text" style="background: #DDB33B; color:#fff; border-color: #DDB33B; width: 119px;" id="basic-addon1">Subcategoria</span>
    </div>
    <input name="subcategoria" type="text" class="form-control" style="border-color: #DDB33B" placeholder="Tinto" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3" style="width: 75%;">
      <div class="input-group-prepend">
        <span class="input-group-text" style="background: #DDB33B; color:#fff; border-color: #DDB33B; width: 119px;" id="basic-addon1">Idade</span>
      </div>
      <input name="idade" type="tel" class="form-control" style="border-color: #DDB33B" placeholder="5 Anos" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3" style="width: 75%;">
        <div class="input-group-prepend">
          <span class="input-group-text" style="background: #DDB33B; color:#fff; border-color: #DDB33B; width: 119px;" id="basic-addon1">Descrição</span>
        </div>
        <input name="desc" type="tel" class="form-control" style="border-color: #DDB33B" placeholder="..." aria-label="Username" aria-describedby="basic-addon1">
        </div>

    <div class="input-group mb-3" style="width: 75%;">
    <div class="input-group-prepend">
      <span class="input-group-text" style="background: #DDB33B; color:#fff; border-color: #DDB33B; width: 119px;" id="inputGroupFileAddon01">Imagem</span>
    </div>
    <div class="custom-file">
      <input name="imagem" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
      <label class="custom-file-label" style="border-color: #DDB33B" for="inputGroupFile01"></label>
    </div>
    </div>

    <br>
    <button name="acao" onMouseOver="style.backgroundColor ='#EBC854'; style.borderColor ='#EBC854'" onMouseOut="style.backgroundColor ='#DDB33B'; style.borderColor ='#DDB33B'" style="border-color: #DDB33B; background: #DDB33B; color:#fff; margin-bottom: 2%;" type="submit" value="Cadastrar" name="acao" class="btn btn-outline-secondary">Cadastrar</button>
</div>
</form>
</center>
</body>
</html>


