<?php

    $host= "localhost";
    $user = "root";
    $pass= "";
    $dbname = "projeto";

    try{
        $conn = mysqli_connect("localhost", "root", "", "projeto");
        //echo "conexão realizada com sucesso";
    } catch(PDOException $err){
        die("Erro: conexão com banco de dados não pode ser realizada com sucesso. Erro gerado" . $err->getMessage());
    }


?>