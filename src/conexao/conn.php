<?php

    $hostname = "ftpupload.net";
    $database = "epiz_31642061_XXX"
    $username = "epiz_31642061";
    $password "iQMmweTl6RHk";

    if($conecta = mysqli_connect($hostname, $username, $password, $database)){
        echo 'Conectado ao banco de dados '.$database.'.....';
    } else {
        echo 'Erro: '.mysqli_connect_error();
    }