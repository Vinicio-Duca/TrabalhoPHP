<?php
$salas = scandir("Sala");
array_shift($salas);
array_shift($salas);
foreach($salas as $linha){
    fopen("Sala/$linha",'a');
    unlink("Sala/$linha");
}
rmdir("Sala");
echo 'Imagens da sala excluídas com sucesso!
<form enctype="multipart/form-data" action="galeria.php" method="POST">
<button type="submit">Retornar</button>
</form>
<form enctype="multipart/form-data" action="index.php">
<button type="submit">Adicionar Novas Imagens</button>
</form>';
?>