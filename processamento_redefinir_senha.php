<?php
        include_once("conecta.php");
    session_start();
    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senha = $_POST["senha"];

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        $email = $_SESSION['username'];

        $stmt = $conn->prepare("UPDATE usuarios SET senha = ? WHERE email = ?");
        $stmt->bind_param("ss", $senha, $email);
        $stmt->execute();
        $stmt->close();

        header("Location: login.php");
        exit();
    }
}
    
    ?>