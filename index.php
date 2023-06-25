<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" contenti="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
        <title>We Gym - Home</title>
        <script src="script.js" defer></script>
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

            <!-- Primeira Parte -->
            <div class="promosticky1">
                <div class="promostickycombotao" id="container">
                    <div class="botao_fechar">
                        <button class="fechar_div" id="action-btn">x</button>
                    </div>
                    <img class="promosticky"  src="promostik.jpg" height="200px" width="200px" alt="promochata" >
                </div>
            </div>

            <div class="direita">

                <div class="capa">
                    <h1 class="frase">Nunca fica mais facil, é você que fica mais forte!</h1>
                    <!--<h1 class="frase">Transforme sua aparência, eleve sua autoestima!</h1>-->
                   <!--<img src="ACADEM.jpg" height="400px" width="400px" alt="Mari Maria pic">-->
                </div>
                <!-- ***************************************************************** -->

                <!-- Promos -->
                <div class="promocaparaiz">
                    <h1 class="promocapa">Confira nossas Promoções!</h1>
                
                    <h2>Produtos com até 50% de desconto!</h2>
                </div>
                    
                <a href="https://www.gsuplementos.com.br/whey-protein-concentrado-1kg-growth-supplements-p985936" target="_blank">
                    <div class="promo">
                                
                        <div class="promoop">
                            <img src="proteina.jpg" height="200px" width="200px" alt="promo1">
                                    
                </a>
                            <div class="promoname">WHEY PROTEIN CONCENTRADO (1KG)</div>
                        </div>    

                        <a href="https://www.gsuplementos.com.br/colageno-tipo-2-40mg-60-capsulas-growth-supplements" target="_blank">
                                <div class="promoop">
                                    <img src="colageno.jpg" height="200px" width="200px" alt="promo2">
                        </a>
                                    <div class="promoname">COLÁGENO TIPO 2 40MG</div>
                                </div>

                        <a href="https://www.gsuplementos.com.br/soy-protein-proteina-isolada-de-soja-1kg-sabor-natural-growth-supplements-p985855" target="_blank">
                                <div class="promoop">
                                    <img src="soyprotein.jpg" height="200px" width="200px" alt="promo3">
                        </a>
                                    <div class="promoname">SOY PROTEIN PROTEÍNA ISOLADA DE SOJA</div>
                                </div>
                    </div>
                    <!-- ****************************************************************************************** -->
            
            <!-- VIDEO -->
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/DIbidf6IIro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
             <!-- ****************************************************************************************** -->
            </div>
            
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