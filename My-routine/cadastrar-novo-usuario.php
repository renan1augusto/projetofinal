<?php 
require_once 'config.php';
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Verifica se já existe 
$sql = "SELECT id FROM usuarios WHERE usuario = '$usuario'";
$resultado = mysqli_query($conexao, $sql); 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Status do Cadastro</title>

<style>
    body {
        margin: 0;
        padding: 0;
        background: #f0f2f5;
        font-family: Arial, Helvetica, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        width: 450px;
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        text-align: center;
        animation: fade .4s ease-out;
    }

    @keyframes fade {
        from { opacity: 0; transform: translateY(10px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .success {
        padding: 15px;
        border-left: 6px solid #2ecc71;
        background: #e9f9f0;
        color: #1e824c;
        font-size: 18px;
        border-radius: 8px;
    }

    .error {
        padding: 15px;
        border-left: 6px solid #e74c3c;
        background: #ffeaea;
        color: #c0392b;
        font-size: 18px;
        border-radius: 8px;
    }

    .warning {
        padding: 15px;
        border-left: 6px solid #f1c40f;
        background: #fff7dd;
        color: #b7950b;
        font-size: 18px;
        border-radius: 8px;
    }

    a {
        display: inline-block;
        margin-top: 20px;
        text-decoration: none;
        padding: 12px 20px;
        background: #4A90E2;
        color: white;
        border-radius: 8px;
        font-weight: bold;
        transition: .3s;
    }

    a:hover { background: #003D7A; }
</style>

</head>
<body>

<div class="card">
<?php

if (mysqli_num_rows($resultado) > 0) {
    echo '<div class="warning">Este nome de usuário já está cadastrado!</div>';
    echo '<a href="form-cadastro.php">Tentar novamente</a>';
    exit;
}

// Cria hash
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// Cadastra
$sqlInsert = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario', '$senhaHash')";

if (mysqli_query($conexao, $sqlInsert)) {
    echo '<div class="success">Usuário cadastrado com sucesso!</div>';
    echo '<a href="index.php">Ir para o login</a>';
} else {
    echo '<div class="error">Erro ao cadastrar: ' . mysqli_error($conexao) . '</div>';
    echo '<a href="form-cadastro.php">Tentar novamente</a>';
}

mysqli_close($conexao);
?>
</div>

</body>
</html>