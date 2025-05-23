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
    <?php
    session_start();
    ?>

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
                <form action="processaLogin.php" method="post">
                    <label for="user">Usuário</label>
                    <input type="text" id="user" name="Usuario"> <br>
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="Senha">
                    <p id="esqueci"><a href="./senha.html">esqueci minha senha</a></p>
                    <div id="button">
                        <div class="itembtn"><button>login</button></div>
                    </div>
                </form>
                <?php
                    $_SESSION['lg001']='Acesso Permitido';
                    $_SESSION['lg002']='Acesso Negado';
                ?>
            </div>
            <p id="resultado"></p>

        </section>
    </div>


    <!-- <script src="./src/assets/js/script.js"></script> -->
</body>

</html>