<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trabalho </title>
</head>
<body>
    <form enctype="multipart/form-data" method="post" action="upload.php">
        <h2> Selecione o cômodo da casa: </h2>
        <p><input type="radio" name="comodo" value="Sala"> Sala </p>
        <p><input type="radio" name="comodo" value="Cozinha"> Cozinha </p>
        <p><input type="radio" name="comodo" value="Quarto"> Quarto </p>
        <p> Nome do Arquivo 01: <input type="text" name="diretorio1"> </p>
        <p> IMG01: <input type="file" name="userfile1"> </p>
        <p> Nome do Arquivo 02: <input type="text" name="diretorio2"> </p>
        <p> IMG02: <input type="file" name="userfile2"> </p>
        <p> Nome do Arquivo 03: <input type="text" name="diretorio3"> </p>
        <p> IMG03: <input type="file" name="userfile3"> </p>
        <p> <button type="submit"> Enviar </button></p>
    </form>
</body>
</html>