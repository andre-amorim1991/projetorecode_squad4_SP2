<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "sua_voz";

$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn, "utf8");
if (!$conn) {
    die("A conexão falhou: " . mysqli_connect_error());
};

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Denuncias</title>
    <script src="scripts/pesquise_denuncias.js"></script>
    <link rel="stylesheet" href="./css/globalforms.css">
    <link rel="stylesheet" href="./css/pesquise_denuncias.css">

</head>

<body>

    <header>
        <!--Na header em CSS tem uma imagem de background-->

        <div class=imagem_voltar>
            <img src="./imagens/arrow-left-circle-fill.svg" onclick="history.back()" style="cursor:pointer;">
            <button onclick="location.href='fazerdenuncia.php'">Fazer uma denúncia</button>
        </div>
        <div class="enunciado">
            <h1>Pesquise denúncias pelo nome da empresa:</h1>
            <div class="button_header">
                <input type="text" name="nome da empresa" id="filtro" placeholder="nome da empresa">
                <button type="button" onclick="filtroEmpresa()">Pesquisar</button>
            </div>

        </div>

    </header>

    <main>

        <div class="container">

            <h2 class="primeiro_h2">Todas as denúncias</h2>
            <hr>

            <?php
            $sql = "select * from reclamacao;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
                    $id_reclamacao = $rows['id_reclamacao'];
                    $id_empresa = $rows['id_empresa'];
                    $id_usuario = $rows['id_usuario'];
                    $titulo = $rows['titulo'];
                    $datahora = $rows['data_e_hora'];
                    $corpo = $rows['corpo_reclamacao'];
                    $endereco = $rows['endereco'];
                    $nome_empresa = $rows['nome_empresa'];

            ?>
                    <div class="topico">
                        <div class="block">

                            <div class="spy_titulos1">

                                <div class="margin_img1">
                                    <img src="./imagens/spy-fill.png">
                                </div>

                                <div>
                                    <div>
                                        <h3 class="empresaJS"><?php echo $nome_empresa; ?></h3>
                                        <h2><?php echo $titulo; ?></h2>
                                    </div>

                                    <div class="apelido_data1">
                                        <div class="apelido">
                                            <h4>Anônimo#<?php echo $id_usuario?></h4>
                                        </div>
                                        <div class="data">
                                            <h4><?php echo $datahora; ?></h4>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <p>
                                <?php
                                if (strlen($endereco) > 0) {
                                    echo "<strong>Local:$endereco</strong><br>";
                                }
                                ?>

                                <?php echo "Relato:$corpo"; ?>
                            </p>
                        </div>

                        <?php
                        $codigo = "select * from respostas where id_reclamacao ='$id_reclamacao';";
                        $retorno = $conn->query($codigo);
                        if ($retorno->num_rows > 0) {
                            while ($coluna = $retorno->fetch_assoc()) {
                                $data = $coluna['data_e_hora'];
                                $corpoResposta = $coluna['corpo_resposta'];
                        ?>
                                <div class="block">

                                    <div class="spy_titulos1">
                                        <div>
                                            <div class="avaliacao">
                                                <h3><?php echo $nome_empresa?></h3>
                                                <h2>Resposta</h2>
                                            </div>

                                            <div class="apelido_data2">
                                                <div class="data2">
                                                    <h4><?php echo $data; ?></h4>
                                                </div>
                                                <div class="apelido2">
                                                    <h4>Anônimo#<?php echo $coluna['id_usuario']?></h4>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="margin_img2">
                                            <img src="./imagens/spy-fill.png">
                                        </div>

                                    </div>

                                    <p>
                                        <?php echo $corpoResposta; ?>
                                    </p>

                                </div>
                        <?php
                            }
                        }
                        if(isset($_SESSION['nome'])){
                            echo '                        <div class="button">

                            <button onclick="showForm(this.parentElement)">Responder</button>
                        </div>';
                        }
                        ?>
                        <form action="responder.php" class="responder <?php echo $id_reclamacao;?>" method="POST" id="<?php echo $id_reclamacao;?>" hidden>
                            <textarea name="corpo_resposta" id="" cols="30" rows="10"></textarea>
                            <input type="number" name="id_topico" value="<?php echo $id_reclamacao;?>" hidden>
                            <button type="submit">Enviar resposta</button>
                        </form>
                    </div>
            <?php
                }
            }
            ?>
            <footer>

            </footer>

        </div>

    </main>



</body>

</html>