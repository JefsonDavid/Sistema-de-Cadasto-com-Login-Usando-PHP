<?php
    require 'config.php';
    require 'models/UsuarioDaoMysql.php';

    $usuarioDao = new UsuarioDaoMysql($pdo);

    $id = filter_input(INPUT_GET, 'id');

    if($id) {
        $usuarioDao->delete($id);
    }

    header("Location: sistema.php");
    exit;