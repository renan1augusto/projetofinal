<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #11111b;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: #030303;
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
            color: white;
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
            color: white;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 10px;
            border: 1px solid #89b4fa;
            outline: none;
            transition: border-color .3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #4c4f69;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #04a5e5;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: .3s;
        }

        button:hover {
            background: #0c0f1a;
        }

        .link-cadastro {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: white;
            font-weight: bold;
            text-decoration: none;
            transition: .3s;
        }

        .link-cadastro:hover {
            opacity: 0.7;
        }
    </style>

</head>
<body>
    
    <div class="container">
        <h2>Login</h2>
        <form action="validar.php" method="post">
            <label>Usuário:</label>
            <input type="text" name="usuario" required>

            <label>Senha:</label>
            <input type="password" name="senha" required>

            <button type="submit">Entrar</button>
        </form>

        <a class="link-cadastro" href="form-cadastro.php">Não é usuário? Cadastra-se aqui!
        </a>
    </div>

</body>
</html>
