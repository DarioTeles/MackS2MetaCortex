<?php
    // Abrir conexao e selecionar o banco de dados
    // CONFERIR A PORTA ABERTA PARA MYSQL NO MACKENZIE – 3306 ou 3308
    /* variável = método("servidor", "usuario", "senha", "base de dados") */
    $conexao = mysqli_connect("127.0.0.1:3306","root","","bd_projeto");
    
    // Tratamento de erros
    if (mysqli_connect_errno()){
        echo "Não foi possível conectar: " . mysqli_connect_error();
    }

?>