<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require 'config.php';
        require 'models/UsuarioDaoMysql.php';

        $usuarioDao = new UsuarioDaoMysql($pdo);

        $usuario = false;

        $id = filter_input(INPUT_GET, 'id');

        // print_r($id);

        if($id) {
            $usuario = $usuarioDao->findById($id);
        }

        // print_r($usuario);

        if($usuario === false) {
            header("Location: sistema.php");
            exit;
        }
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editar_style.css">
    <title>Edição de Cliente</title>
</head>
<body>
<a style="color: white" href="sistema.php">Voltar</a>
    <div class="box">
        <form action="editar_action.php" method="POST">
            <fieldset>
                <legend><b>Edição de Clientes</b></legend>
                <input type="hidden" name="id" value="<?= $usuario->getId(); ?>">
                <br/>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" value="<?= $usuario->getNome(); ?>" class="inputUser" required>
                    <label for="nome" class="label_input">Nome Completo</label>
                </div>
                <br/><br/>
                <div class="inputBox">
                    <input type="text" name="email" id="email" value="<?= $usuario->getEmail(); ?>" class="inputUser" required>
                    <label for="email" class="label_input">Email</label>
                </div>
                <br/><br/>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" value="<?= $usuario->getSenha(); ?>" class="inputUser" required>
                    <label for="senha" class="label_input">Senha</label>
                </div>
                <br/><br/>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" value="<?= $usuario->getTelefone(); ?>" class="inputUser" required>
                    <label for="telefone" class="label_input">Telefone</label>
                </div>
                <p>Sexo</p>
                
                <input type="radio" name="sexo" id="masculino" value="<?= $usuario->getSexo(); ?>" required>
                <label for="masculino">Masculino</label>
                <br/>
                <input type="radio" name="sexo" id="feminino" value="<?= $usuario->getSexo(); ?>" required>
                <label for="feminino">Feminino</label>
                <br/>
                <input type="radio" name="sexo" id="outro" value="<?= $usuario->getSexo(); ?>" required>
                <label for="outro">Outro</label>
                <br/><br/>

                <label for="nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="nascimento" id="nascimento" value="<?= $usuario->getNascimento(); ?>" class="data_nascimento" required>  
                <br/><br/><br/>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" value="<?= $usuario->getCidade(); ?>" class="inputUser" required>
                    <label for="cidade" class="label_input">Cidade</label>
                </div>
                <br/><br/>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" value="<?= $usuario->getEstado(); ?>" class="inputUser" required>
                    <label for="estado" class="label_input">Estado</label>
                </div>
                <br/><br/>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" value="<?= $usuario->getEndereco(); ?>" class="inputUser" required>
                    <label for="endereco" class="label_input">Endereço</label>
                </div>
                <br/><br/>
                <input type="submit" name="submit" id="submit" value="Cadastrar">
            </fieldset>
        </form>
    </div>
</body>
</html>