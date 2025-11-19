<?php
session_start();
require_once "config.php";

$usuario = $_POST['usuario'];
$senha   = $_POST['senha'];

$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE usuario='$usuario'");

if (mysqli_num_rows($sql) == 1) {

    $dados = mysqli_fetch_assoc($sql);

    if (password_verify($senha, $dados['senha'])) {
        $_SESSION['usuario'] = $usuario;
        header("Location: area-usuario/index.php");
        exit;
    }
}

echo "Usuário ou senha incorretos!";