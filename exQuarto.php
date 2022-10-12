<?php
$quartos = scandir("Quarto");
array_shift($quartos);
array_shift($quartos);
foreach($quartos as $linha){
    fopen("Quarto/$linha",'a');
    unlink("Quarto/$linha");
}
rmdir("Quarto");
echo 'Imagens do quarto excluídas com sucesso!
<form enctype="multipart/form-data" action="galeria.php" method="POST">
<button type="submit">Retornar</button>
</form>
<form enctype="multipart/form-data" action="index.php">
<button type="submit">Adicionar Novas Imagens</button>
</form>';