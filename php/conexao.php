<?php

  const DB_HOSTNAME = "127.0.0.1"; // IP da hospedagem do banco de dados
  const DB_USER = "root"; // usuario (admin) geral
  const DB_PASS = ""; // Senha do usuario (admin) geral
  const DB_NAME = "chavedotempo"; // nome do banco de dados
  const DB_PORT = 3306; // porta de conexao com o banco de dados, troque caso a hospedagem necessitar (3306 = padrao)

  const Sys_Version = "0.1.2"; // VersÃ£o do site (Release, Sub version, patch)

  $conexaoSQL = mysqli_connect(DB_HOSTNAME, DB_USER, DB_PASS, DB_NAME, DB_PORT);
  if(!$conexaoSQL) 
  {
    $SpecialError = "Erro Ao se conectar com o sistema, apenas dados dinâmicos foram exibidos."; // mensagem de erro q deverÃ¡ aparecer pro usuÃ¡rio caso nÃ£o seja possivel se conectar com o banco de dados, altere conforme queira
    printf("<span class='error'>%s</span>", $SpecialError);
  }
  ?>