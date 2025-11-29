<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require_once '../config.php';

$id_nota = $_GET['id'];
$usuario_id = $_SESSION['id'];

$sql = "SELECT * FROM notas_usuarios 
        WHERE id_nota = $id_nota AND usuario_id = $usuario_id";

$result = mysqli_query($conexao, $sql);
$nota = mysqli_fetch_assoc($result);
?>
<style>form {
    margin-top: 10px;
}

label, h2 {
    color: #003D7A;
    font-weight: bold;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border-radius: 8px;
    border: 1px solid #4A90E2;
    outline: none;
    transition: border-color .3s;
    font-family: Arial, Helvetica, sans-serif;
}

input[type="text"]:focus,
textarea:focus {
    border-color: #003D7A;
}

button[type="submit"] {
    width: 100%;
    padding: 12px;
    margin-top: 15px;
    background: #4A90E2;
    border: none;
    color: white;
    font-weight: bold;
    font-size: 16px;
    border-radius: 8px;
    cursor: pointer;
    transition: background .3s;
}

button[type="submit"]:hover {
    background: #003D7A;
}
.voltar {
    display: inline-block;
    margin-top: 15px;
    text-decoration: none;
    font-weight: bold;
    color: #003D7A;
    background: #E6F0FF;
    padding: 8px 14px;
    border-radius: 8px;
    transition: 0.3s;
}

.voltar:hover {
    background: #cddffb;
    opacity: 0.8;
}

</style>
<h2>Editar Nota</h2>

<form method="POST" action="atualizar.php">
    <input type="hidden" name="id_nota" value="<?php echo $nota['id_nota']; ?>">

    Título:<br>
    <input type="text" name="titulo" value="<?php echo $nota['titulo']; ?>"><br><br>

    Conteúdo:<br>
    <textarea name="conteudo" rows="5"><?php echo $nota['conteudo']; ?></textarea><br><br>

    <button type="submit">Atualizar</button>
</form>

<br>
<a href="?pg=listar" class="voltar">Voltar</a>