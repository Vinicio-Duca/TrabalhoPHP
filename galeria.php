<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title> Galeria </title>
  </head>
  <body>
  <div class="container">
    <h1> <b> Galeria </b> </h1>
      <div class="row">
        <form enctype="multipart/form-data" action="index.php">
        <button type="submit">Adicionar Novas Imagens</button>
        </form>
        <div></div>
        <div class="col img1"></div>
        <div class="col img2"></div>
        <div class="col img3"></div>
        <div></div>
        <form enctype="multipart/form-data" action="exCozinha.php" method="POST">
        <button type="submit">Excluir Cozinhas</button>
        </form>
      </div>
      <div class="row">
        <div></div>
        <div class="col img4"></div>
        <div class="col img5"></div>
        <div class="col img6"></div>
        <div></div>
        <form enctype="multipart/form-data" action="exQuarto.php" method="POST">
        <button type="submit">Excluir Quartos</button>
        </form>
      </div>
      <div class="row">
        <div></div>
        <div class="col img10"></div>
        <div class="col img11"></div>
        <div class="col img12"></div>
        <div></div>
        <form enctype="multipart/form-data" action="exSala.php" method="POST">
        <button type="submit">Excluir Salas</button>
        </form>
      </div>
    </div>
  </body>
</html>
<?php
if(is_dir("Cozinha")){
    $cozinha = scandir("Cozinha");
    array_shift($cozinha);
    array_shift($cozinha);
    $i = 1;
    foreach($cozinha as $linha){
    echo "<style>
        .img$i{
          background-image: url(Cozinha/$linha);
          }
          </style>";
    $i++;
    }
}else{
}
if(is_dir("Quarto")){
    $quarto = scandir("Quarto");
    array_shift($quarto);
    array_shift($quarto);
    $j = 4;
    foreach($quarto as $linha){
        echo "<style>
        .img$j{
          background-image: url(Quarto/$linha);
          }
          </style>";
        $j++;
    }
}
if(is_dir("Sala")){
    $sala = scandir("Sala");
    array_shift($sala);
    array_shift($sala);
    $l = 10;
    foreach($sala as $linha){
        echo "<style>
        .img$l{
          background-image: url(Sala/$linha);
          }
          </style>";
        $l++;
    }
}

echo "<style>
.col{
border: 3px solid black;
height: 200px;
margin: 5px;
position: relative;
background-size: cover;
}
.container{
text-align: center;
font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
h1{
font-size: 50px;
}";
?>