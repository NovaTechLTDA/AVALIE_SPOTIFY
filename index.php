<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Email</title>
    <!-- Alteração do ícone da página -->
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/018/930/693/non_2x/spotify-app-logo-spotify-icon-transparent-free-png.png" type="image/png">
    <style>
        /* Configurações Globais */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
            color: #333;
            flex-direction: column;
        }

        /* Container Central */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        /* Caixa do Formulário com Moldura Branca */
        .form-box {
            background: #fff;
            color: #333;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 90%;
            border: 2px solid #00c853; /* Moldura verde */
        }

        /* Estilo do logo Spotify */
        .spotify-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .spotify-logo img {
            width: 150px;  /* Ícone maior */
            height: 150px;
            margin-bottom: 20px;
        }

        /* Título Principal */
        .form-box h1 {
            margin: 0 0 10px;
            font-size: 2.5em;
            color: #00c853;
        }

        /* Subtítulo */
        .form-box h2 {
            margin: 0;
            font-size: 1.2em;
            color: #333;
        }

        /* Estilo do Campo de Entrada */
        input[type="email"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #00c853;
            border-radius: 5px;
            font-size: 1.1em;
            box-sizing: border-box;
        }

        /* Estilo do Botão */
        button {
            background: #00c853;
            color: #fff;
            border: none;
            border-radius: 50px;
            padding: 12px 24px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
            width: 100%;
        }

        button:hover {
            background: #009624;
            transform: scale(1.05);
        }

        button:active {
            background: #007b1e;
        }

        /* Texto de rodapé */
        .footer {
            margin-top: 20px;
            font-size: 0.8em;
            color: #888;
            text-align: center;
        }

        .footer a {
            color: #00c853;
            text-decoration: none;
            margin: 0 5px;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="spotify-logo">
                <!-- Ícone do Spotify atualizado -->
                <img src="https://static.vecteezy.com/system/resources/previews/018/930/693/non_2x/spotify-app-logo-spotify-icon-transparent-free-png.png" alt="Spotify Logo">
            </div>
            <h1>Bem-vindo(a) ao SpotifyOpina</h1>
            <h2>Insira seu email para prosseguir</h2>
            <form action="interface_usuario.html" method="POST">
                <input type="email" name="email" placeholder="Digite seu email" required>
                <button type="submit">Continuar</button>
            </form>
        </div>
    </div>

    <!-- Rodapé com ano e links -->
    <div class="footer">
        <p>© 2025 Spotify LCC | <a href="#">Termos</a> | <a href="politica_privacidade.html" target="_blank">Política de Privacidade</a></p>
    </div>
</body>
</html>
