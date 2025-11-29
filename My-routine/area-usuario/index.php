<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["usuario"])) {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Área do Usuário</title>

<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(135deg, #4A90E2, #003D7A);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding-top: 40px;
}

.container {
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    width: 500px;
    box-shadow: 0px 5px 18px rgba(0,0,0,0.25);
    animation: fadeIn 0.6s ease forwards;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to   { opacity: 1; transform: translateY(0); }
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #003D7A;
}

.menu {
    text-align: center;
    margin-bottom: 20px;
}

.menu a {
    margin: 0 10px;
    text-decoration: none;
    font-weight: bold;
    color: #003D7A;
    transition: opacity .3s;
}

.menu a:hover {
    opacity: 0.6;
}

hr {
    border: none;
    border-top: 1px solid #ccc;
    margin: 20px 0;
}

p {
    text-align: center;
    color: #003D7A;
}

ul, li {
    list-style: none;
    padding: 0;
    margin: 0;
}

</style>


</head>
<body>

<div class="container">

    <h2>Bem-vindo, <?php echo $_SESSION["usuario"]; ?>!</h2>

    <ul class="menu">
        <li><a href="?pg=nova">Criar nova nota</a></li>
        <li><a href="?pg=listar">Minhas notas</a></li>
        <li><a href="../logout.php">Sair</a></li>
    </ul>
    <hr>

    <?php
    if (!empty($_GET["pg"])) {
        $pg = $_GET["pg"];

        $permitidos = ["nova", "listar", "editar"];

        if (in_array($pg, $permitidos)) {
            include "$pg.php";
        } else {
            echo "<p>Página inválida.</p>";
        }

    } else {
        echo "<p>Escolha uma opção no menu acima.</p>";
    }
    ?>

</div>
</body>
</html>