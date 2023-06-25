  <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
    <link rel="stylesheet" href="redefinir_senha.css">
</head>
<body>
    
<section class="formulario">   


<form method="post" action="processamento_redefinir_senha.php">
    <label for="senha">Redefina sua senha:</label>
    <input type="password" id="senha" name="senha" required>
    <button class="limpar" type="reset">LIMPAR</button>
    <button class="enviar" type="submit">ENVIAR</button>
</form>
</section>

</body>
</html>