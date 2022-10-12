<?php
$cozinha = scandir("Cozinha");
array_shift($cozinha);
array_shift($cozinha);
foreach($cozinha as $linha){
    fopen("Cozinha/$linha",'a');
    unlink("Cozinha/$linha");
}
rmdir("Cozinha");
echo 'Imagens da cozinha excluídas com sucesso!
<form enctype="multipart/form-data" action="galeria.php" method="POST">
<button type="submit">Retornar</button>
</form>
<form enctype="multipart/form-data" action="index.php">
<button type="submit">Adicionar Novas Imagens</button>
</form>';