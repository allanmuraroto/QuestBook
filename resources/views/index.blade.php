<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #f8f8f8;
        }

        .header-center {
            flex-grow: 1;
            display: flex;
            justify-content: center;
        }

        .profile-pic {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: url(caminho/para/sua/imagem) no-repeat center center;
            background-size: cover;
        }

        .nav-left ul, .nav-right ul {
            display: flex;
            list-style-type: none;
            padding: 0;
        }

        .nav-left li, .nav-right li {
            margin: 0 10px;
        }

        .overlap-circle {
            position: absolute;
            top: 80%;
            left: 50%;
            width: 200px;
            height: 200px;
            margin-left: -100px; /* Metade da largura */
            margin-top: -40px; /* 20% da altura */
            background-color: lightblue;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 3px solid black; /* Borda adicionada */
        }

        .circle-image {
            width: 80%;
            height: 80%;
            border-radius: 50%;
            background: url(caminho/para/sua/imagem) no-repeat center center;
            background-size: cover;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #f8f8f8;
            text-align: center;
            padding: 10px;
        }

        .premium-badge {
            position: absolute;
            right: 20px;
            color: yellow;
            border: 2px solid black;
            padding: 5px;
        }

        .body {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            padding-top: 200px; /* A altura da div .overlap-circle */
        }

        .body .col {
            border: 1px solid #ccc; /* Divisão entre as colunas */
            padding: 20px;
        }

        .body .col-1, .body .col-3 {
            flex: 1;
            margin-right: 10px;
        }

        .body .col-2 {
            flex: 2;
        }

        .comments {
            border-collapse: collapse;
            width: 100%;
        }

        .comments td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        .comments .avatar {
            width: 100px; /* Tamanho atualizado */
            height: 100px; /* Tamanho atualizado */
            border-radius: 50%;
            background: url(caminho/para/sua/imagem) no-repeat center center;
            background-size: cover;
        }

        .level-bar {
            height: 20px;
            background-color: #ccc;
            border-radius: 10px;
            position: relative;
            width: 50%; /* Largura atualizada */
            margin: 0 auto; /* Centralização */
        }

        .level-bar span {
            display: block;
            height: 100%;
            background-color: green;
            width: 75%;
            border-radius: 10px;
        }

        .level-bar .level-number {
            position: absolute;
            width: 100%;
            text-align: center;
            font-weight: bold;
            color: white;
        }

        .comment-icons {
            display: flex;
            justify-content: flex-end;
        }

        .comment-icons img {
            width: 30px;
            height: 30px;
            margin-left: 10px;
        }
    </style>
</head>
<body>

<div class="header">
    <nav class="nav-left">
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#minha-lista">Minha Lista</a></li>
            <li><a href="#ranking">Ranking</a></li>
            <li><a href="#minha-prateleira">Minha Prateleira</a></li> <!-- Nova opção adicionada -->
        </ul>
    </nav>
    <div class="header-center">
        <div class="header-icons">
            <img src="caminho/para/icone/mensagem">
            <img src="caminho/para/icone/sino">
            <img src="caminho/para/icone/interrogacao">
        </div>
        <div class="profile-pic"></div>
    </div>
    <nav class="nav-right">
        <ul>
            <li><a href="#cadastrar">Cadastrar</a></li>
            <li><a href="#login">Login</a></li>
        </ul>
    </nav>
    <div class="overlap-circle">
        <div class="circle-image"></div>
    </div>
</div>

<div class="body">
    <div class="col col-1">
        <h2>Top 10 Games</h2>
        <ol>
            <li>Game 1</li>
            <li>Game 2</li>
            <li>Game 3</li>
            <li>Game 4</li>
            <li>Game 5</li>
            <li>Game 6</li>
            <li>Game 7</li>
            <li>Game 8</li>
            <li>Game 9</li>
            <li>Game 10</li>
        </ol>
    </div>
    <div class="col col-2">
        <h2>Comentários</h2>
        <table class="comments">
            <tr>
                <td><div class="avatar" style="background: url(caminho/para/sua/imagem) no-repeat center center;"></div> Nome</td>
                <td>Comentário aqui
                    <div class="comment-icons">
                        <img src="caminho/para/icone/curtir">
                        <img src="caminho/para/icone/apagar">
                        <img src="caminho/para/icone/eternizar">
                    </div>
                </td>
            </tr>
            <tr>
                <td><div class="avatar" style="background: url(caminho/para/sua/imagem) no-repeat center center;"></div> Nome</td>
                <td>Comentário aqui
                    <div class="comment-icons">
                        <img src="caminho/para/icone/curtir">
                        <img src="caminho/para/icone/apagar">
                        <img src="caminho/para/icone/eternizar">
                    </div>
                </td>
            </tr>
            <tr>
                <td><div class="avatar" style="background: url(caminho/para/sua/imagem) no-repeat center center;"></div> Nome</td>
                <td>Comentário aqui
                    <div class="comment-icons">
                        <img src="caminho/para/icone/curtir">
                        <img src="caminho/para/icone/apagar">
                        <img src="caminho/para/icone/eternizar">
                    </div>
                </td>
            </tr>
            <tr>
                <td><div class="avatar" style="background: url(caminho/para/sua/imagem) no-repeat center center;"></div> Nome</td>
                <td>Comentário aqui
                    <div class="comment-icons">
                        <img src="caminho/para/icone/curtir">
                        <img src="caminho/para/icone/apagar">
                        <img src="caminho/para/icone/eternizar">
                    </div>
                </td>
            </tr>
            <tr>
                <td><div class="avatar" style="background: url(caminho/para/sua/imagem) no-repeat center center;"></div> Nome</td>
                <td>Comentário aqui
                    <div class="comment-icons">
                        <img src="caminho/para/icone/curtir">
                        <img src="caminho/para/icone/apagar">
                        <img src="caminho/para/icone/eternizar">
                    </div>
                </td>
            </tr>
            <tr>
                <td><div class="avatar" style="background: url(caminho/para/sua/imagem) no-repeat center center;"></div> Nome</td>
                <td>Comentário aqui
                    <div class="comment-icons">
                        <img src="caminho/para/icone/curtir">
                        <img src="caminho/para/icone/apagar">
                        <img src="caminho/para/icone/eternizar">
                    </div>
                </td>
            </tr>
            <tr>
                <td><div class="avatar" style="background: url(caminho/para/sua/imagem) no-repeat center center;"></div> Nome</td>
                <td>Comentário aqui
                    <div class="comment-icons">
                        <img src="caminho/para/icone/curtir">
                        <img src="caminho/para/icone/apagar">
                        <img src="caminho/para/icone/eternizar">
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="col col-3">
        <h2>LVL</h2>
        <div class="level-bar">
            <span></span>
            <div class="level-number">20</div>
        </div>
    </div>
</div>

<div class="footer">
    <p>© 2023 QuestSocial. Todos os direitos reservados.</p>
    <div class="premium-badge">Assinante Premium</div> <!-- Nova div adicionada -->
</div>

</body>
</html>
