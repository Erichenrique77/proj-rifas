<?php

    $hostname = "ftpupload.net";
    $dbname = "epiz_31642061_XXX"
    $username = "epiz_31642061";
    $password "iQMmweTl6RHk";

   try{
       $pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       //echo 'conexão realizada com sucesso!';
   } catch (PDOException $e){
       echo 'Error: '.$e->getMessage();
   }