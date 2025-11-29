<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once '../config.php';

$usuario_id = $_SESSION['id'];
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];

$sql = "INSERT INTO notas_usuarios (usuario_id, titulo, conteudo)
        VALUES ($usuario_id, '$titulo', '$conteudo')";

if (mysqli_query($conexao, $sql)) {
    header("Location: index.php?pg=listar");
    exit;
} else {
    echo "Erro ao salvar: " . mysqli_error($conexao);
}