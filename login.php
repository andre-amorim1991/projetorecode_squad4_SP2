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
            <a href="registro.php">
           Ainda não tem uma conta?
           </a>
        </div>


        <hr>
        <form id="enviar" action="login_usuario.php" method="post">
            <div class="log">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Digite seu e-mail">
            </div>
            <div class="log">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha">
               
            </div>
           
         </form> 

        <div class="link">
            <a href="#">Esqueceu sua senha?</a>
            <div>

                <footer>
                    <button type="submit"  form="enviar" /*onclick="entrar()"*/>Entrar</button>
                </footer>
            </div>
        
           
</body>

</html>