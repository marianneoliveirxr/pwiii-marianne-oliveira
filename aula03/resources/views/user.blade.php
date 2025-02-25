<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Boas-Vindas</title>
    <style>
        /* Reset de margens e preenchimentos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Corpo da página */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        /* Cabeçalho */
        header {
            background-color: 	 #ff80bf;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 2em;
        }

        /* Barra de navegação */
        nav {
            background-color:  #ffb3d9;
            padding: 10px;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: white;
            margin: 0 15px;
            font-size: 1.1em;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Layout do conteúdo principal */
        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .container img {
            width: 45%;
            max-width: 600px;
        }

        .container .texto {
            width: 45%;
            font-size: 1.2em;
            padding: 20px;
        }

        /* Rodapé */
        footer {
            background-color: 	 #ff80bf;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body>

    <!-- Cabeçalho -->
    <header>
        Bem-vindo
    </header>

    <!-- Barra de navegação -->
    <nav>
        <a href="home.html">Home</a>
        <a href="servicos.html">Serviços</a>
        <a href="agendamentos.html">Agendamentos</a>
        <a href="avaliacoes.html">Avaliações</a>
        <a href="sobre-nos.html">Sobre Nós</a>
    </nav>

    <!-- Conteúdo principal -->
    <div class="container">
        <img src="sua-imagem.jpg" alt="Imagem Exemplo">
        <div class="texto">
            <h2>Sobre nós</h2>
            <p>
            Fundado em 2024, o Malams Saloon é um espaço pensado para realçar a sua beleza e proporcionar momentos de relaxamento e cuidado.
            Nosso salão combina expertise, qualidade e um atendimento personalizado, garantindo que cada cliente se sinta único.
            </p>
        </div>
    </div>

    <!-- Rodapé -->
    <footer>
        &copy; 2025 Malams Saloon - Todos os direitos reservados
    </footer>

</body>
</html>

