<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Usuário</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #4A90E2, #003D7A);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: #fff;
            padding: 35px;
            border-radius: 12px;
            width: 340px;
            box-shadow: 0px 5px 18px rgba(0,0,0,0.25);
            animation: fadeIn .6s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        h2 {
            text-align: center;
            color: #003D7A;
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
            color: #003D7A;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #4A90E2;
            outline: none;
            transition: border-color .3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #003D7A;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #4A90E2;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: .3s;
        }

        button:hover {
            background: #003D7A;
        }

        .voltar {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #003D7A;
            font-weight: bold;
            text-decoration: none;
            transition: .3s;
        }

        .voltar:hover {
            opacity: 0.7;
        }
    </style>

</head>
<body>

<div class="container">
    <h2>Cadastro</h2>

    <form action="cadastrar-novo-usuario.php" method="POST">

        <label>Usuário:</label>
        <input type="text" name="usuario" required>

        <label>Senha:</label>
        <input type="password" name="senha" required>

        <button type="submit">Cadastrar</button>
    </form>

    <a href="index.php" class="voltar">Voltar ao login</a>
</div>

</body>
</html>
