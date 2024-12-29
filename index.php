<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Email</title>
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
            min-height: 100vh;
            background-color: #f4f4f9;
            color: #333;
            flex-direction: column;
        }

        /* Container Central */
        .container {
            width: 100%;
<<<<<<< HEAD
            height: 100%;
            padding: 10px;
=======
            padding: 20px;
            box-sizing: border-box;
>>>>>>> d76ba296a67229462fb824668e9b5584f09de6a6
        }

        /* Caixa do Formulário com Moldura Branca */
        .form-box {
            background: #fff;
            color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
<<<<<<< HEAD
            width: 100%;
            border: 2px solid #00c853; /* Moldura verde */
=======
            margin: 0 auto;
            border: 2px solid #00c853;
>>>>>>> d76ba296a67229462fb824668e9b5584f09de6a6
        }

        /* Estilo do logo Spotify */
        .spotify-logo img {
<<<<<<< HEAD
            width: 120px;  /* Ícone maior e responsivo */
=======
            width: 120px;
>>>>>>> d76ba296a67229462fb824668e9b5584f09de6a6
            height: 120px;
            margin-bottom: 20px;
        }

        /* Título Principal */
        .form-box h1 {
            margin: 0 0 10px;
            font-size: 2em;
            color: #00c853;
            word-wrap: break-word;
        }

        /* Subtítulo */
        .form-box h2 {
            margin: 0 0 20px;
            font-size: 1.1em;
            color: #333;
        }

        /* Estilo do Campo de Entrada */
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #00c853;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box;
        }

        /* Estilo do Botão */
        button {
            background: #00c853;
            color: #fff;
            border: none;
            border-radius: 50px;
            padding: 12px 24px;
            font-size: 1em;
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
            font-size: 0.9em;
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

<<<<<<< HEAD
        /* Media Queries para tornar a interface mais responsiva */
        @media (max-width: 768px) {
            .form-box {
                padding: 30px;
                width: 90%;
=======
        /* Media Queries para responsividade */
        @media (max-width: 768px) {
            .form-box {
                padding: 20px;
            }

            .form-box h1 {
                font-size: 1.8em;
            }

            .form-box h2 {
                font-size: 1em;
>>>>>>> d76ba296a67229462fb824668e9b5584f09de6a6
            }

            .spotify-logo img {
                width: 100px;
                height: 100px;
            }

<<<<<<< HEAD
            .form-box h1 {
                font-size: 2em;
            }

            .form-box h2 {
                font-size: 1em;
            }

            input[type="email"] {
                font-size: 1em;
            }

            button {
                font-size: 1em;
=======
            button {
                font-size: 0.9em;
                padding: 10px 20px;
            }

            input[type="email"] {
                font-size: 0.9em;
>>>>>>> d76ba296a67229462fb824668e9b5584f09de6a6
            }
        }

        @media (max-width: 480px) {
            .form-box {
<<<<<<< HEAD
                padding: 20px;
            }

            .spotify-logo img {
                width: 80px;
                height: 80px;
=======
                padding: 15px;
>>>>>>> d76ba296a67229462fb824668e9b5584f09de6a6
            }

            .form-box h1 {
                font-size: 1.5em;
            }

            .form-box h2 {
                font-size: 0.9em;
            }

<<<<<<< HEAD
            input[type="email"] {
                font-size: 0.9em;
            }

            button {
                font-size: 0.9em;
            }

            .footer {
                font-size: 0.7em;
=======
            .spotify-logo img {
                width: 80px;
                height: 80px;
            }

            button {
                font-size: 0.8em;
                padding: 8px 16px;
            }

            input[type="email"] {
                font-size: 0.8em;
>>>>>>> d76ba296a67229462fb824668e9b5584f09de6a6
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="spotify-logo">
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

    <div class="footer">
        <p>© 2025 Spotify LCC | <a href="#">Termos</a> | <a href="politica_privacidade.html" target="_blank">Política de Privacidade</a></p>
    </div>
</body>
</html>
