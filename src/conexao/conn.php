<?php

    // Conexão web
    // $hostname = "sql202.epizy.com";
    // $dbname = "epiz_31642061_bancorifa"
    // $username = "epiz_31642061";
    // $password "iQMmweTl6RHk";

    $hostname = "localhost";
    $dbname = "rifa";
    $username = "root";
    $password = "";

   try{
       $pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       //echo 'conexão realizada com sucesso!';
   } catch (PDOException $e){
       echo 'Error: '.$e->getMessage();
   }