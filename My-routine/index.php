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
            background: linear-gradient(135deg, #4A90E2, #003D7A);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            width: 320px;
            box-shadow: 0px 5px 18px rgba(0,0,0,0.25);
            animation: fadeIn 0.6s ease forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #003D7A;
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
            border-radius: 8px;
            border: 1px solid #4A90E2;
            outline: none;
            transition: border-color .3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #003D7A;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background: #4A90E2;
            border: none;
            color: white;
            font-weight: bold;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background .3s;
        }

        input[type="submit"]:hover {
            background: #003D7A;
        }

        .link-cadastro {
            display: block;
            margin-top: 15px;
            text-align: center;
            font-size: 14px;
            text-decoration: none;
            color: #003D7A;
            font-weight: bold;
            transition: opacity .3s;
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

            <br><br>

            <label>Senha:</label>
            <input type="password" name="senha" required>

            <input type="submit" value="Entrar">
        </form>

        <a class="link-cadastro" href="form-cadastro.php">Novo usuário</a>
    </div>

</body>
</html>
