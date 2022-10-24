<?php
    include "conexao.php";
    session_start();
    if(/**/ false)
    {
        header("Location: ../index.php");
        die;
    }

    $data_postagem = time();
    $titulo = mysqli_escape_string($conexaoSQL, $_POST['titulo']);
    $conteudo = mysqli_escape_string($conexaoSQL, $_POST['conteudo']);
    $imagem = $_FILES['imagem'];
    $diretorio = "../images/" . $imagem['name'];
    move_uploaded_file($imagem['tmp_name'], $diretorio);
    mysqli_query($conexaoSQL, "INSERT INTO `novidades` (postagem_id, data_postagem, titulo, conteudo, imagem) VALUES (DEFAULT, '$data_postagem', '$titulo', '$conteudo', '$diretorio');");
    header("Location: ../novidades.php");

?>

