<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="usuario.css">
    <title>Document</title>
</head>
<body>
<header>
            <Nav>
                <a href="index.php"><img class="img" src="logo.png" height="100" width="100" alt="we gym logo"></a>
                <ul class="menu">
                    <li><a class="opcoes" href="index.php">Home</a></li>
                    <li><a class="opcoes" href="produtos.php">Produtos</a></li>
                    <li><a class="opcoes" href="academia.php">Academia</a></li>
<?php

    include_once("conecta.php");
        session_start();
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true){
        echo '<li><a class="opcoes" href="usuario.php">Usuário</a></li></ul>';
    // Pega o e mail do usuário logado:
$email = $_SESSION['username'];

// Busca pelas informações do usuário logado:
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($sql);

// checa se retorna a linha
if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

// nome da imagem guardada no banco da determinada pessoa logada:
$nomeimagem = $row["foto"];
if(!empty($nomeimagem)){
    
// lugar da imagem
$diretorioimg = '/upload/';

// lugar + nome da imagem
$lugarimg = $diretorioimg . $nomeimagem;
}
else{
    $diretorioimg = '/alunosacademia/';
    $nomeimagem = 'padrão.png';
    $lugarimg = $diretorioimg . $nomeimagem;
}

} else {
    echo 'User data not found.';
}

echo '<a href="usuario.php"><img class="usu" src=
"'.$lugarimg.'"
 width="50px" height="50px" alt="user.png"></a>';
    }
    else{echo '</ul>';}
?>
<?php
    //isset($_SESSION['logged_in']) -> verifica se existe uma sessão
    //$_SESSION['logged_in'] -> verifica se a sessão é verdadeira (acho)
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true){
        echo '<a href="logout.php"><button class="button">Logout</button></a>';
    } else {
        echo '<a class="login" href="login.php"><button class="button">Login</button></a>';
    }
    ?>
            <a class="registro" href="registro.php"><button class="button">Registre-se</button></a>
        </Nav>
    </header>




        <div class="tabela">
    <table width="40%" height="50%" border="1" cellspacing="10">
<tr>
<td rowspan="5"><img src="<?php echo $lugarimg;?>" width="300px" height="300px" alt="Image"></td>
</tr>

<tr>
<td class="conteudo">Nome:</td>
<td class="informacoes"><h2><?php echo  $row ["nome"]. "<br>";?></h2></td>
</tr>

<tr>
<td class="conteudo">Idade:</td>
<td class="informacoes"><h2><?php echo  $row ["idade"]. " anos<br>";?></h2></td>
</tr>

<tr>
<td class="conteudo">E-Mail (login):</td>
<td class="informacoes"><h2><?php echo  $row ["email"]. "<br>";?></h2></td>
</tr>

<tr>
<td class="conteudo">Cadastrado desde:</td>
<td class="informacoes"><h2><?php echo  $row ["datadecadastro"]. "<br>";?></h2></td>
</tr>

<p><a href="redefinir_senha.php"><button class="button">Redefinir senha</button></a></p>

    </table>
        </div>

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