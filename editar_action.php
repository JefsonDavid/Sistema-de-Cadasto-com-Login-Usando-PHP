<?php
    require 'config.php';
    require 'models/UsuarioDaoMysql.php';

    $usuarioDao = new UsuarioDaoMysql($pdo);

    $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $email =  filter_input(INPUT_POST, 'email');
    $senha = filter_input(INPUT_POST, 'senha');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $sexo = filter_input(INPUT_POST, 'sexo');
    $nascimento = filter_input(INPUT_POST, 'nascimento');
    $cidade = filter_input(INPUT_POST, 'cidade');
    $estado = filter_input(INPUT_POST, 'estado');
    $endereco = filter_input(INPUT_POST, 'endereco');

    if($id && $nome && $email) {

        $usuario = new Usuario();
        $usuario->setId($id);
        $usuario->setNome($nome);
        $usuario->setEmail($email);
        $usuario->setSenha($senha);
        $usuario->setTelefone($telefone);
        $usuario->setSexo($sexo);
        $usuario->setNascimento($nascimento);
        $usuario->setCidade($cidade);
        $usuario->setEstado($estado);
        $usuario->setEndereco($endereco);

        $usuarioDao->update($usuario);

        header("Location: sistema.php");
        exit;
    } else {
        header("Location: editar.php?id=".$id);
    }