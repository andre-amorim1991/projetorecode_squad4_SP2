<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./globalforms.css">
    <link rel="stylesheet" href="./login.css">
    <script src="./scripts/registro.js"></script>
</head>

<body>

    <header>
        <div class=container-img>
            <img src="./imagens/arrow-left-circle-fill.svg" alt="">
            <img src="./imagens/instagram-fill.svg" alt="Logo">
        </div>

    </header>

    <div class="container-log">
        <h1 id="titulo">Seus dados de login</h1>

        <div class="link">
            <a href="registro.html">
           Ainda não tem uma conta?
           </a>
        </div>


        <hr>
        <form action="#">
            <div class="log">
                <label for="e-mail">E-mail</label>
                <input type="text" name="e-mail">
            </div>
            <div class="log">
                <label for="senha">Senha</label>
                <input type="password" name="senha">
            </div>

        </form>

        <div class="link">
            <a href="#">Esqueceu sua senha?</a>
            <div>

                <footer>
                    <button onclick="entrar()">Entrar</button>
                </footer>
            </div>
            </main>
</body>

</html>