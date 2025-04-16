<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./src/assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./src/assets/css/estilo.css">
    <title>Login</title>
</head>

<body>
    <header id="titulo">
        <h1>ENTRE AGORA</h1>
        <img src="" alt="">
    </header>
    <div id="container">
        <section id="login_container">
            <div class="itemImg">
                <img src="./src/assets/img/iconUser.png" alt="">
            </div>
            <div class="itemLogin">
                <label for="user">Usuário</label>
                <input type="text" id="user"> <br>
                <label for="senha">Senha</label>
                <input type="password" id="senha">
                <p id="esqueci"><a href="./senha.html">esqueci minha senha</a></p>
            </div>
            <div id="button">
                <div class="itembtn"><button onclick="clickbtn()">login</button></div>
            </div>
            <p id="resultado"></p>
        </section>
    </div>

    <script src="./src/assets/js/script.js"></script>
</body>
</html>