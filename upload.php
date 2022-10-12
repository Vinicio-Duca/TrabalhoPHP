<?php
$dir = $_POST['comodo'];
if (is_dir($dir)) {
    // Nada
} else {
    mkdir($dir);
}
 
$nomeF1 = $_FILES['userfile1']['name'];
$nomeF2 = $_FILES['userfile2']['name'];
$nomeF3 = $_FILES['userfile3']['name'];
$nomeTemp1 = $_FILES['userfile1']['tmp_name'];
$nomeTemp2 = $_FILES['userfile2']['tmp_name'];
$nomeTemp3 = $_FILES['userfile3']['tmp_name'];
$nomeFile1 = $_POST['diretorio1'];
$nomeFile2 = $_POST['diretorio2'];
$nomeFile3 = $_POST['diretorio3'];
$parInfo1 = pathinfo("$nomeF1");
$parInfo2 = pathinfo("$nomeF2");
$parInfo3 = pathinfo("$nomeF3");
$ext1 = $parInfo1['extension'];
$ext2 = $parInfo2['extension'];
$ext3 = $parInfo3['extension'];
if( $ext1 == "jpg" || $ext1 == "png" ||  $ext1 == "jpeg" ){
    echo "Extenção aceita! - Upload do arquivo 01 realizado!";
    $ctr1 = move_uploaded_file($nomeTemp1,$dir."/".$nomeFile1.".$ext1");
}else{
    echo "Extenção não aceita!";
}
echo "<br>";
if( $ext2 == "jpg" || $ext2 == "png" || $ext2 == "jpeg" ){
    echo "Extenção aceita! - Upload do arquivo 02 realizado!";
    $ctr2 = move_uploaded_file($nomeTemp2,$dir."/".$nomeFile2.".$ext2");
}else{
    echo "Extenção não aceita!";
}
echo "<br>";
if( $ext3 == "jpg" || $ext3 == "png" || $ext3 == "jpeg" ){
    echo "Extenção aceita! - Upload do arquivo 03 realizado!";
    $ctr3 = move_uploaded_file($nomeTemp3,$dir."/".$nomeFile3.".$ext3");
}else{
    echo "Extenção não aceita!";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form method="post" action="galeria.php">
        <button type="submit"> Galeria de Fotos </button>
    </form>
</body>
</html>


