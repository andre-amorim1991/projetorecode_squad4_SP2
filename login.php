<?php

session_start();
if (isset($_SESSION['nome'])) {
    header('Location: hub.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./css/globalforms.css">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>

    <header style="background-image:url('./imagens/diversity-teamwork-with-joined-hands.png');">
        <div class=container-img>
            <img src="./imagens/arrow-left-circle-fill.svg" alt="" onclick="history.back()" style="cursor:pointer;">
            <img src="./imagens/logo teste  2.png" alt="Logo">
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
                    <button type="submit"  form="enviar">Entrar</button>
                </footer>
            </div>
        
           
</body>

</html>