<?php
    session_start();
    if(/*!isset($_SESSION['logged'])*/ false)
    {
        header("Location: ../index.php");
        die;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chave Do Tempo - Postar Novidades</title>
</head>
<body>
    
    <form method='post' action='postar.php' enctype="multipart/form-data">
        <input type="text" name="titulo" placeholder="Titulo da publicação" maxlength="32">
        <input type="file" name="imagem" placeholder="Anexar imagem">
        <textarea name="conteudo" maxlength="512"></textarea>
        <input type="submit" value="Postar">
    </form>

</body>
</html>