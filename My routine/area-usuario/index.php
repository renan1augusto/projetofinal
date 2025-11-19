<?php
session_start();

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
            background: linear-gradient(135deg, #004E92, #000428);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .container {
            background: rgba(255, 255, 255, 0.10);
            backdrop-filter: blur(6px);
            padding: 35px;
            width: 500px;
            border-radius: 14px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
            animation: fadeIn .7s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        h1 {
            margin-top: 0;
            font-size: 26px;
            text-align: center;
            color: #a8d8ff;
        }

        .menu {
            margin: 20px 0;
            padding: 0;
            list-style: none;
            display: flex;
            justify-content: space-around;
        }

        .menu a {
            color: #fff;
            padding: 10px 18px;
            text-decoration: none;
            background: #0066cc;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .menu a:hover {
            background: #003d80;
        }

        .conteudo {
            margin-top: 25px;
            background: rgba(255,255,255,0.15);
            padding: 20px;
            border-radius: 10px;
        }

        .logout {
            text-align: center;
            margin-top: 15px;
        }

        .logout a {
            text-decoration: none;
            color: #ff8080;
            font-weight: bold;
            transition: .3s;
        }

        .logout a:hover {
            opacity: 0.7;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Bem-vindo, <?php echo $_SESSION["usuario"]; ?>!</h1>

    <ul class="menu">
        <li><a href="?pg=pagina1">aba 1</a></li>
        <li><a href="?pg=pagina2">aba 2</a></li>
        <li><a href="?pg=pagina3">aba 3</a></li>
    </ul>

    <div class="conteudo">
        <?php
        // CONTEÚDO DINÂMICO
        if (!empty($_GET["pg"])) {
            $pg = $_GET["pg"];
            include "$pg.php";
        } else {
            echo "<p>Escolha uma opção no menu acima.</p>";
        }
        ?>
    </div>

    <div class="logout">
        <a href="../logout.php">Sair</a>
    </div>

</div>

</body>
</html>