<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Cadastro de usuário</title>
</head>
<body>
    <div class="principal" align="center">
        <h1>INFORME SEUS DADOS</h1>

        <form action="cadastrar.php" method="post">
            <div class="campo">
                <div>
                    <label class="hora" for="nome">Nome:</label>
                    <input type="text" name="nome">
                </div>

                <div>
                    <label class="hora" for="dataNasc">Data de nascimento:</label>
                    <input type="date" name="dataNasc">
                </div>

                <div>
                    <label class="hora" for="cep">CEP:</label>
                    <input type="text" name="cep">
                </div>

                <div>
                    <label class="hora" for="curso">Curso:</label>
                    <input type="text" name="curso">
                </div>

                <div>
                    <label class="hora" for="escola">Instituição de ensino:</label>
                    <input type="text" name="escola">
                </div>

                <div>
                    <button class="btn" type="submit" value="Cadastrar">Cadastrar</button>
                </div>
            </div>
        </form>

    </div>
</body>
</html>