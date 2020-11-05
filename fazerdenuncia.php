<?php
session_start();
//Se não existir um valor no nome da sessão, encerra o processamento

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Fazer Denúncia</title>
    <link rel="stylesheet" href="./css/globalforms.css" />
    <link rel="stylesheet" href="./css/fazerdenuncia.css" />
    <script src="./scripts/fazerdenuncia.js"></script>
</head>

<body>
    <header style="background-image:url('./imagens/diversity-teamwork-with-joined-hands.png');">
        <div class="container-img">
            <img src="./imagens/arrow-left-circle-fill.svg " alt="Voltar" onclick="history.back()" style="cursor:pointer;"/>
            <img src="./imagens/logo teste  2.png" alt="Logo "  onclick="location.href='index.php'" style="cursor:pointer;"/>
        </div>


        <div class="tema">
            <h1>Fazer Denúncia</h1>
        </div>
    </header>
    <main>
        <aside class="menu-lateral">
            <ul>
                <li>Você está logado!</li>
                <li><a href="#">Meus Dados</a></li>
                <li><a href="pesquise_denuncias.php">Minhas Denúncias</a></li>
                <li><a href="pesquise_denuncias.php">Buscar Denúncias</a></li>
                <li><a href="index.php">Sair</a></li>
            </ul>
        </aside>

        <div class="container-formulario">
            <form action="fazer_denuncia.php" id="form_denuncia" method="POST">
                <div class="input-formulario">
                    <label for="nomedenuncia">Digite o nome da empresa</label>
                    <input type="text" name="nomedenuncia" id="nomedenuncia" />
                </div>

                <div class="input-formulario">
                    <label for="enderecodenuncia">Digite o endereço da empresa: <small style="color:red">(Opcional)</small></label>
                    <input type="text" name="enderecodenuncia" id="enderecodenuncia" />
                </div>

                <div class="input-formulario">
                    <label for="titulodenuncia">Digite um título para a denúncia:</label>
                    <input type="text" name="titulodenuncia" id="titulodenuncia" />
                </div>

                <div id="caixadetexto" class="input-formulario">
                    <label for="escrevadenuncia">Escreva o que ocorreu:</label>
                    <textarea name="escrevadenuncia" id="escrevadenuncia" placeholder=" ATENÇÃO: Conforme recomendação anterior, você deve relatar o REAL ocorrido com o máximo de detalhes possível !!!"></textarea>
                </div>
            </form>
        </div>

        <footer>
            <p>Seu relato será divulgado como ANÔNIMO</p>
            <button type="submit" form="form_denuncia">ENVIAR</button>
        </footer>
    </main>
</body>

</html>