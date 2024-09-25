<?php
    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header("Location: login.php");
    } else {
        $logado = $_SESSION['email'];
    }

    require 'config.php';
    require 'models/UsuarioDaoMysql.php';

    $usuarioDao = new UsuarioDaoMysql($pdo);

    $lista = $usuarioDao->findAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sistema_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sistema | JD</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SISTEMA | JD</a>
            <button class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <br/>
    <?php
        echo "<h1>Bem vindo! $logado</h1>";
    ?>

    <table class=" table table-hover table-bg" >
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">SENHA</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">SEXO</th>
            <th scope="col">DATA NASCIMENTO</th>
            <th scope="col">CIDADE</th>
            <th scope="col">ESTADO</th>
            <th scope="col">ENDEREÇO</th>
            <th scope="col">...</th>
        </tr>

        <?php foreach ($lista as $usuario ): ?>

            <tr>
                <td><?= $usuario->getId(); ?></td>
                <td><?= $usuario->getNome(); ?></td>
                <td><?= $usuario->getEmail(); ?></td>
                <td><?= $usuario->getSenha(); ?></td>
                <td><?= $usuario->getTelefone(); ?></td>
                <td><?= $usuario->getSexo(); ?></td>
                <td><?= $usuario->getNascimento(); ?></td>
                <td><?= $usuario->getCidade(); ?></td>
                <td><?= $usuario->getEstado(); ?></td>
                <td><?= $usuario->getEndereco(); ?></td>
                <td>
                    ...
                </td>
            </tr>
        <?php endforeach; ?>    
    </table>
</body>
</html>