<?php
    
    const PRIMARY_MAIL = "vtbolado17@gmail.com"; // Email da equipe q deverÃ¡ receber a mensagem

    $headers = "MIME-Version: 1.1\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: vtbolado17@gmail.com\r\n"; // remetente
    $headers .= "Return-Path: vtbolado17@gmail.com\r\n"; // return-path

    $email = mail(PRIMARY_MAIL, "Loha", "dev", $headers);

    printf("EMAIL STATUS : %d", $email);

?>