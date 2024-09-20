<?php
    //Com o print_r($_REQUEST); eu consigo ver o que o formulário de login está mandando pra cá
    //print_r($_REQUEST);
    session_start();
    require 'config.php';
    require 'models/UsuarioDaoMysql.php';

    $usuarioDao = new UsuarioDaoMysql($pdo);

    $email =  filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha');

    if($email && $senha) {
        //Verificando se email e senha estão chegando nas variáveis
        // print_r($email);
        // print_r($senha);
        if($usuarioDao->login($email, $senha) === true) {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header("Location: sistema.php");
            exit;
        } else {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header("Location: formulario.php");
            exit;
        }
    } else {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header("Location: login.php");
        exit;
    }
?>