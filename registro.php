
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We GYM - Contatos</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <header>
        <Nav>
            <a href="index.php"><img src="LOGO.png" height="100" width="100" alt="principal"></a>
            <ul class="menu">
             <li><a class="opcoes" href="index.php">Home</a></li>
             <li><a class="opcoes" href="produtos.php">Produtos</a></li>
             <li><a class="opcoes" href="produtos.php">Academia</a></li>
            </ul>
            <a class="login" href="login.php"><button class="button">Login</button></a>
            
        </Nav>
    </header>

    <section class="formulario">
        <form method='post' action="processamento_registo.php" enctype="multipart/form-data">
            <label for="email">E-mail (login)</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>

            <label for="idade">Idade</label>
            <input type="number" id="idade" name="idade" required>

            <label for="foto">Enviar foto (opcional)</label>
            <input type="file" id="foto" name="foto">

            <!-- <label for="Escolaridade">Escolaridade</label>
            <select name="Escolaridade" id="Escolaridade">
                <option value="EMI">Ensino Médio Incompleto</option>
                <option value="EMC">Ensino Médio Completo</option>
                <option value="NT">Nível Técnicno</option>
                <option value="NS">Nível superior</option>
            </select> -->

            <label for="Observações">Observações (restrições, medicações, etc)</label>
            <input type="text" id="Observações" name="Observações">

            <button class="limpar" type="reset">LIMPAR</button>
            <button class="enviar" type="submit">ENVIAR</button>
        </form>
    </section>

    <footer>
        <div class="marca">
        <p class="marcaf">WE GYM</p>
        </div>
        <div class="trade">
            <p class="trademark">&copy; 2023 WE GYM</p>
        </div>
        <div class="rede">
        <img class="redes" height="32px" width="32px" src="face.png" alt="face">
        <img class="redes" height="32px" width="32px" src="insta.png" alt="insta">
        <img class="redes" height="32px" width="32px" src="youtube.png" alt="youtube">
        <img class="redes" height="32px" width="32px" src="twitter.png" alt="twitter">
        </div>
    </footer>

</body>
</html>