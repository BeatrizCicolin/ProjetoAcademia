<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WE GYM - ACADEMIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="academia.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    
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
            <a class="cadastro" href="registro.php"><button class="button">Cadastre</button></a>
        </Nav>
    </header>

    <h1>Conheça um pouco mais sobre nossa academia</h1>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="smartfit4.png" height="900px" alt="ilustração2"class="d-block w-100" alt="...">>
          </div>
          <div class="carousel-item">
            <img src="smartfit1.png" height="900px" alt="ilustração2"class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="smartfit2.png" height="900px" alt="ilustração2" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
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