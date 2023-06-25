<?php
require_once 'conecta.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
    if (!empty($email) && (!empty($senha))){
        
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1){
            $row = $result->fetch_assoc();
            session_start();
            $_SESSION['username'] = $row['email'];
            $_SESSION['logged_in'] = true;

            header('Location: index.php');
            exit();
        } else {
            $error = 'Combinação de email e senha inválida';
        }
    } else {
        $error = 'Por favor, preencha todos os campos';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela do Login</title>
</head>
<body>
    <h1>LOGIN INVÁLIDO</h1>
    <?php if (isset($error)): ?>
        <p>
            <?php
                if ($error === 'Senha inválida') {
                    echo '<h2>' . $error . '</h2>';
                } elseif ($error === 'Email nao encontrado'){
                    echo '<h2>' . $error . '</h2>';
                } else {
                    echo $error;
                }
            ?>
        </p>
    <?php endif; ?>

    <?php
    
    if (isset($error)){
        header('Refresh: 3; URL=login.php');
        echo "<p>Voce sera redirecionado para a pagina de login</p>";
        exit();
    }
    ?>
</body>
</html>