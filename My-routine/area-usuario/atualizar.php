<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require_once '../config.php';

$id_nota = $_POST['id_nota'];
$usuario_id = $_SESSION['id'];
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];

$sql = "UPDATE notas_usuarios 
        SET titulo = '$titulo', conteudo = '$conteudo'
        WHERE id_nota = $id_nota AND usuario_id = $usuario_id";

if (mysqli_query($conexao, $sql)) {
    header("Location: index.php?pg=listar");
    exit;
} else {
    echo "Erro ao atualizar: " . mysqli_error($conexao);
}