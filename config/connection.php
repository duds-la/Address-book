<?php
    
    
    $host = "localhost";
    $dbname = "agenda";
    $user = "root";
    $pass = "";


    try{

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        //ATIVAR MODO DE ERROS:
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

    } catch(PDOException $e){
        //ERRO NA CONEXÃO
        $error = $e->getMessage();

        echo "Erro: $error";
    }



?>