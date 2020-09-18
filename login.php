<?php

    include("conexao.php");  

    $login = $_POST['login'];
    $entrar = $_POST['entrar'];
    $senha = md5($_POST['senha']);


    if (isset($entrar)) {

        $verifica = mysqli_query($conn, "SELECT * FROM usuarios WHERE login ='$login' AND senha = '$senha'") or die("erro ao selecionar");
        $user_logado = mysqli_fetch_array($verifica);

        if ($verifica == false){
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='login.html';</script>";

        }else{
            setcookie("user",$login);
            setcookie("userId",$user_logado['id']);

            // Se a sessão não existir, inicia uma
            if (!isset($_SESSION)) session_start();

            // Salva os dados encontrados na sessão
            $_SESSION['userId'] = $user_logado['id'];
            $_SESSION['userName'] = $user_logado['login'];

            header("Location:avaliacao.html");

            
        }
    }

?>