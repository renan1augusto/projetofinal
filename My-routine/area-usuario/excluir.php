<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require_once '../config.php';

$id_nota = $_GET['id'];
$usuario_id = $_SESSION['id'];

$sql = "DELETE FROM notas_usuarios 
        WHERE id_nota = $id_nota AND usuario_id = $usuario_id";

mysqli_query($conexao, $sql);

header("Location: index.php?pg=listar");
exit;