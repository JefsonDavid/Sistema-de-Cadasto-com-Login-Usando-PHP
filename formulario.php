<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario_style.css">
    <title>Formulário | GN</title>
</head>
<body>
    <div class="box">
        <form action="formulario_action.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br/>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="label_input">Nome Completo</label>
                </div>
                <br/><br/>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="label_input">Email</label>
                </div>
                <br/><br/>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="label_input">Telefone</label>
                </div>
                <p>Sexo</p>

                <input type="radio" name="sexo" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br/>
                <input type="radio" name="sexo" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br/>
                <input type="radio" name="sexo" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br/><br/>
                <label for="nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="nascimento" id="nascimento" class="data_nascimento" required>  
                <br/><br/><br/>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="label_input">Cidade</label>
                </div>
                <br/><br/>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="label_input">Estado</label>
                </div>
                <br/><br/>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endeco" class="inputUser" required>
                    <label for="endereco" class="label_input">Endereço</label>
                </div>
                <br/><br/>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>