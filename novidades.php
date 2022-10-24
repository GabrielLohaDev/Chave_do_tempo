<?php
    include "php/conexao.php";
    session_start();
    if(/*isset($_SESSION['logged'])*/ true)
    {
        echo "<a href='php/postar_novidade.php'><button class='btn-novidades'>Postar Novidades</button></a>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chave Do Tempo - Novidades</title>
</head>
<body>
    
    <?php
        $cache = mysqli_query($conexaoSQL, "SELECT * FROM `novidades` ORDER BY data_postagem;");
        while($postagem = mysqli_fetch_array($cache))
        {
            $data_postagem = $postagem['data_postagem'];
            $titulo = $postagem['titulo'];
            $conteudo = $postagem['conteudo'];
            $imagem_PATH = $postagem['imagem'];

            echo "
            <br>
            <b>$data_postagem</b>
            <br>
            <h2>$titulo</h2>
            <br>
            <img src='$imagem_PATH' alt=''>
            <br>
            <p>$conteudo</p>
            <br>
            <hr>";
        }
    ?>

</body>
</html>