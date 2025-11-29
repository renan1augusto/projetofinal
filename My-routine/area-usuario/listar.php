<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../config.php';

$usuario_id = $_SESSION['id'];

$sql = "SELECT * FROM notas_usuarios 
        WHERE usuario_id = $usuario_id
        ORDER BY id_nota DESC";

$result = mysqli_query($conexao, $sql);

?>
<style>

    .acoes {
    text-align: right;
    margin-bottom: 5px;
}

.acoes a {
    text-decoration: none;
    font-weight: bold;
    padding: 5px 10px;
    border-radius: 6px;
    margin-left: 5px;
    transition: 0.3s;
}

/* Editar */
.link-editar {
    color: #003D7A;
    background: #E6F0FF;
}

.link-editar:hover {
    background: #cddffb;
    opacity: 0.8;
}

/* Excluir */
.link-excluir {
    color: white;
    background: #d9534f;
}

.link-excluir:hover {
    background: #b94440;
}

</style>

<?php
echo "<h2>Minhas Notas</h2>";

if (mysqli_num_rows($result) == 0) {
    echo "<p>Nenhuma nota encontrada.</p>";
} else {
    while ($n = mysqli_fetch_assoc($result)) {

        echo "<div style='padding:10px;border:1px solid #ddd;margin-bottom:10px'>";

       echo "
<div class='acoes'>
    <a class='link-editar' href='?pg=editar&id={$n['id_nota']}'>Editar</a>
    <a class='link-excluir' href='excluir.php?id={$n['id_nota']}' onclick=\"return confirm('Excluir nota?');\">Excluir</a>
</div>";


        echo "<strong>{$n['titulo']}</strong><br>";
        echo nl2br($n['conteudo']);
        echo "<br><small>Criada em: {$n['data_criacao']}</small>";

        echo "</div>";
    }
}