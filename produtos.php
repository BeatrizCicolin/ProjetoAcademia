<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="produtos.css">
    <title>We Gym - Projetos</title>
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
    
       <div class="corpo">
            <a href="https://www.smartfitsupps.com.br/produto/creatina-creapure-250g-smartfit-supps/">
            <div class="promo">
                <div class="promoop">
                    <img src="vd1.jpg" height="200px" width="200px" alt="Creatina">
            </a>
                    <div class="promoname">Creatina (Creapure®) 250g – Smart Fit Supps</div>
                </div>

                <a href="https://www.smartfitsupps.com.br/produto/whey-protein-concentrado-900g-pote-smartfit-supps/">
                <div class="promoop">
                    <img src="vd2.jpg" height="200px" width="200px" alt="Whey">
                </a>
                    <div class="promoname">Whey Protein Concentrado 900g – Smart Fit Supps</div>
                </div>

                <a href="https://www.smartfitsupps.com.br/produto/creatina-monohidratada-250g-smartfit-supps/">
                <div class="promoop">
                    <img src="vd3.jpg" height="200px" width="200px" alt="Creatina ">
                </a>
                    <div class="promoname">Creatina Monohidratada 250g – Smart Fit Supps</div>
                </div>
            </div>

            <a href="https://www.smartfitsupps.com.br/produto/whey-protein-isolado-900g-pote-smarfit-supps/">
            <div class="promo">
                <div class="promoop">
                    <img src="vd4.jpg" height="200px" width="200px" alt="Whey">
            </a>
                    <div class="promoname">Whey Protein Isolado 900g – Smart Fit Supps</div>
                </div>

                <a href="https://www.smartfitsupps.com.br/produto/smartfitsupps-smartbar/">
                <div class="promoop">
                    <img src="vd5.jpg" height="200px" width="200px" alt="Barrinha de Proteína">
                </a>
                    <div class="promoname">Smart Bar 40g – Smart Fit Supps</div>
                </div>

                <a href="https://www.smartfitsupps.com.br/produto/cafeina-200-60-comprimidos-smart-fit-supps/">
                <div class="promoop">
                    <img src="vd6.jpg" height="200px" width="200px" alt="cafeína">
                </a>
                    <div class="promoname">Cafeína – 60 Comprimidos – Smart Fit Supps</div>
                </div>
            </div>

            <a href="https://www.smartfitsupps.com.br/produto/pre-treino-300g-smartfit-supps/">
            <div class="promo">
                <div class="promoop">
                    <img src="vd7.jpg" height="200px" width="200px" alt="pré-treino">
            </a>
                    <div class="promoname">Smart Workout 300g – Smart Fit Supps</div>
                </div>

                <a href="https://www.smartfitsupps.com.br/produto/smart-workout-beta/">
                <div class="promoop">
                    <img src="vd8.jpg" height="200px" width="200px" alt="corretivo">
                </a>
                    <div class="promoname">Smart Workout Beta 300g – Smart Fit Supps</div>
                </div>

                <a href="https://www.smartfitsupps.com.br/produto/smart-whey-900g-smart-fit-supps/">
                <div class="promoop">
                    <img src="vd15.jpg" height="200px" width="200px" alt="Whey">
                </a>
                    <div class="promoname">Smart Whey 900g – Smart Fit Supps</div>
                </div>
            </div>

            <a href="https://www.gsuplementos.com.br/multivitaminico-vegano-120comp-growth-supplements">
            <div class="promo">
                <div class="promoop">
                    <img src="vd16.jpg" height="200px" width="200px" alt="suplemento">
            </a>
                    <div class="promoname">multivitaminioco vegano 120 comp - growth supplements</div>
                </div>

                <a href="https://www.gsuplementos.com.br/multivitaminico-ultra-120comp-growth-supplements">
                <div class="promoop">
                    <img src="vd17.jpg" height="200px" width="200px" alt="suplemento">
                </a>
                    <div class="promoname">multivitaminioco ultra 120 comp - growth supplements</div>
                </div>

                <a href="https://www.gsuplementos.com.br/melatonina-gummy-30un-growth-supplements">
                <div class="promoop">
                    <img src="vd18.jpg" height="200px" width="200px" alt="suplemento">
                </a>
                    <div class="promoname">melatonina gummy 30un - growth supplements</div>
                </div>
            </div>

            <a href="https://www.gsuplementos.com.br/pasta-de-amendoim-sabor-cookies-500g-growth-supplements">
            <div class="promo">
                <div class="promoop">
                    <img src="vd19.jpg" height="200px" width="200px" alt="pasta de amendoim">
            </a>
                    <div class="promoname">pasta de amendoim sabor cookies 500g - growth </div>
                </div>

                <a href="https://www.gsuplementos.com.br/pasta-de-amendoim-sabor-chocolate-e-coco-500gr-growth-supplements">
                <div class="promoop">
                    <img src="vd20.jpg" height="200px" width="200px" alt="pasta de amendoim">
                </a>
                    <div class="promoname">pasta de amendoim sabor chocolate e coco 500g</div>
                </div>

                <a href="https://www.gsuplementos.com.br/pasta-de-amendoim-sabor-beijinho-500gr-growth-supplements">
                <div class="promoop">
                    <img src="vd21.jpg" height="200px" width="200px" alt="pasta de amendoim">
                </a>
                    <div class="promoname">pasta de amendoim sabor beijinho 500g - growth supplements</div>
                </div>
            </div>

            <a href="https://www.smartfitsupps.com.br/produto/coqueteleira-objetivo-de-hoje-600ml-smart-fit-supps/">
            <div class="promo">
                <div class="promoop">
                    <img src="vd14.jpg" height="200px" width="200px" alt="Coqueteleira">
            </a>
                    <div class="promoname">Coqueteleira “Objetivo de hoje” 600ml – Smart Fit</div>
                </div>

                <a href="https://www.smartfitsupps.com.br/produto/coqueteleira-a-vida-e-barra-600ml-smart-fit-supps/">
                <div class="promoop">
                    <img src="vd13.jpg" height="200px" width="200px" alt="Coqueteleira">
                </a>
                    <div class="promoname">Coqueteleira “A Vida é Barra” 600ml – Smart Fit Supps</div>
                </div>

                <a href="https://www.smartfitsupps.com.br/produto/babylook-suplemento-supps/">
                <div class="promoop">
                    <img src="vd12.jpg" height="200px" width="200px" alt="camiseta">
                </a>
                    <div class="promoname">Baby Look Feminina Preta “Suplemento”</div>
                </div>
            </div>

            <a href="https://www.smartfitsupps.com.br/produto/babylook-foco-forca-whey-supps/">
            <div class="promo">
                <div class="promoop">
                    <img src="vd11.jpg" height="200px" width="200px" alt="camiseta">
            </a>
                    <div class="promoname">Baby Look Feminina Preta “Foco, Força & Whey”</div>
                </div>

                <a href="https://www.smartfitsupps.com.br/produto/camiseta-foco-supps/">
                <div class="promoop">
                    <img src="vd10.jpg" height="200px" width="200px" alt="camiseta">
                </a>
                    <div class="promoname">Camiseta Preta “Foco, Força & Whey” – Smart Fit Supps</div>
                </div>

                <a href="https://www.smartfitsupps.com.br/produto/camiseta-suplemento-supps/">
                <div class="promoop">
                    <img src="vd9.jpg" height="200px" width="200px" alt="camiseta">
                </a>
                    <div class="promoname">Camiseta Preta “Suplemento” – Smart Fit Supps</div>
                </div>
            </div>
        </div>
        <!-- ****************************************************************************************** -->

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