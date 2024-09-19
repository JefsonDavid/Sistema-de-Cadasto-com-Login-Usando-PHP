<?php

    require 'config.php';
    require 'models/UsuarioDaoMysql.php';

    $usuarioDao =  new UsuarioDaoMysql($pdo);

    $name = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $sexo = filter_input(INPUT_POST, 'sexo');
    $nascimento =  filter_input(INPUT_POST, 'nascimento');
    $cidade = filter_input(INPUT_POST, 'cidade');
    $estado = filter_input(INPUT_POST, 'estado');
    $endereco = filter_input(INPUT_POST, 'endereco');

    if($nome && $email) {

        $novoUsuario = new Usuario();
        $novoUsuario->setNome($nome);
        $novoUsuario->setEmail($email);
        $novoUsuario->setTelefone($telefone);
        $novoUsuario->setSexo($sexo);
        $novoUsuario->setNascimento($nascimento);
        $novoUsuario->setCidade($cidade);
        $novoUsuario->setEstado($estado);
        $novoUsuario->setEndereco($endereco);

        $usuarioDao->adicionar($novoUsuario);

        echo 'Usuário Cadastrado!!!';
        header("location: fomulario.php");
        exit;
    } else {
        header("location: fomulario.php");
        exit;
    }












    // if(isset($_POST['submit'])) {
    //     // print_r($_POST['nome']);
    //     // print_r($_POST['email']);
    //     // print_r($_POST['telefone']);
    //     // print_r($_POST['genero']);
    //     // print_r($_POST['data_nascimento']);
    //     // print_r($_POST['cidade']);
    //     // print_r($_POST['estado']);
    //     // print_r($_POST['endereco']);
    //     // include_once 'config.php';

    //     // $nome = $_POST['nome'];
    //     // $email = $_POST['email'];
    //     // $telefone = $_POST['telefone'];
    //     // $sexo = $_POST['genero'];
    //     // $data_nasc = $_POST['data_nascimento'];
    //     // $cidade = $_POST['cidade'];
    //     // $estado = $_POST['estado'];
    //     // $endereco = $_POST['endereco'];


    // }
?>