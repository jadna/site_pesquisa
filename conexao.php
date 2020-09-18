<?php
    $servidor = "us-cdbr-east-02.cleardb.com";
    $usuario = "b19d4c9b90d93c";
    $senha = "1e79a7c9";
    $dbname = "heroku_aa679765bbbd2da";    

    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){

        die("Falha na conexao: " . mysqli_connect_error());
    }
?> 