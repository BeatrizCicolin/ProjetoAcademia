<?php
if($_SERVER ['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $foto = $_FILES['foto'];
    if(!empty($email) && (!empty($senha)) && !empty($nome) && !empty($idade)){
        require_once 'conecta.php';
 //verificar o e-mail:
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);
if ($result->num_rows > 0){
    header("Location: esqueci_senha.php");
    exit();
}

$msg = false;
$novo_nome = '';
if (!empty($_FILES['foto']['name'])){
    $extensao = strtolower(substr($_FILES['foto']['name'], -4)); //strtolower -> vai deixar a extensão do arquivo com letras minusculas, exemolo: "imagem.JpG" -> "imagem.jpg"
    $novo_nome = md5(time()) . $extensao;
    $diretorio = $_SERVER['DOCUMENT_ROOT'] . '/upload/';

    move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome); //envia o arquivo para pasta temporaria e depois joga para a pasta diretorio e dá um novo nome.

    if($conn->query($sql)){//executa o codigo
        $foto = $novo_nome;
        $msg = "arquivo enviado com sucesso!";
    }
    else{
    "falha ao enviar arquivo";
    exit();
    }
    
}



//se e mail não está cadastrado preciso cadastrar.
$sql = "insert into usuarios (email, senha, nome, idade, foto, data) values('$email', '$senha', '$nome', '$idade', '$novo_nome', NOW())";
if ($conn->query($sql) === TRUE){
    //registro realizado com sucesso!
    echo 'registro realizado com sucesso!';
    header('Refresh: 3; URL=login.php');
    echo 'você será redirecionado para a tela de login...';
    exit();
}
else{
    echo 'ocorreu um erro ao cadastrar' . $conn->error;
}
//fechar conexão com banco de dados:
    $conn->close();
} else{
//se o formulário não foi enviado:
    header("Location: registro.php");
    exit();
}
}



?>