<?php
  /*  session_start();

    // Se não existir um valor no índice 'nome', então encerre a aplicação
    if (!isset($_SESSION['nome_completo'])) {
        header('Location: index.php');
        exit;
    }*/
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/hub.css" />
    <title>Pagina HUB</title>
</head>

<body>

    <header class="header">
        <div>
            <img src="./imagens/seta voltar.svg" alt="">
        </div>
        <img src="./imagens/logo amarelo 1.png" width="15%" alt="">
        <div>
            <ul>
                <li class="botoestopo"><a href="denuncias.html" lista>Buscar Denúncias</a></li>
                <br>
                <li class="botoestopo"><a href="fazerdenuncias.html" lista>Denunciar</a></li>
            </ul>
        </div>

    </header>

    <section class="flex">
        <div class="botoes">
            <img src="./imagens/sms.png">
            <br>
            <a href="#text1">ORIENTAÇÕES PARA DENÚNCIAR</a>
        </div>
        <div class="botoes">
            <img src="./imagens/iconpasta.png">
            <br>
            <a href="pesquise_denuncias.php">MINHAS DENÚNCIAS</a>
        </div>
        <div class="botoes">
            <img src="./imagens/config.png">
            <br>
            <a href="#text3">CONFIGURAÇÕES</a>
        </div>
        <div class="botoes">
            <img src="./imagens/iconsair.png">
            <br>
            <a href="<?php //session_destroy()?>">Sair</a>
        </div>
    </section>

    <main>
        <h1 class="titulopagina"> Seção de artigos e dicas </h1>

        <section class="flex2">
            <div>
                <h1>Racismo e assédio moral no trabalho: saiba como denunciar</h1>
                <p>Um trabalhador que se encontra em uma situação de humilhação, assédio, constrangimentos ou de
                    discriminação, de qualquer forma, no ambiente de trabalho deve fazer a denúncia ao Ministério
                    Público do Trabalho (MPT). A primeira recomendação é reunir provas e nunca tomar uma atitude de
                    cabeça quente, como pedir demissão. O importante é reunir elementos, horários, gravação de celular,
                    testemunhas e e-mails. O trabalhador deve se prevenir, já que depois de deixar o ambiente de
                    trabalho
                    fica mais difícil comprovar a denúncia.
                    <br>
                    <br>
                    Para falar sobre o assunto, o programa Tarde Nacional conversou com a procuradora do Ministério
                    Público
                    do Trabalho (MPT), Renata Coelho Vieira, que falou aos ouvintes da Rádio Nacional de Brasília como
                    os
                    funcionários que sofrem com qualquer tipo de assédio no trabalho devem agir para fazer uma denúncia
                    coerente e quais os cuidados que os trabalhadores devem tomar ao coletar as provas.
                    <br>
                    <br>

                    De acordo com Renata Coelho Vieira, a recomendação é que o funcionário não se submeta àquela
                    situação
                    e se informar se a empresa em que trabalha tem algum canal de comunicação e forma de apuração de
                    denúncia sigiloso para que possa se valer desse meio.
                    <br>
                    <br>
                    Para a procuradora, somente depois de tomadas essas medidas é que o trabalhador assediado deve pedir
                    a rescisão do contrato de trabalho, por meio do sindicato ou de uma assistência jurídica gratuita,
                    para que o contrato seja reincidido por culpa do empregador. Assim, ele recebe todas as verbas a que
                    tem direito e pode pleitear uma indenização individual e, ainda, procurar o Ministério Público do
                    Trabalho
                    para solicitar uma investigação.
                    <br>
                    <br>

                    FONT: https://radios.ebc.com.br/tarde-nacional-brasilia/edicao/2015-01/racismo-e-assedio-moral-no-
                    ambiente-de-trabalho-devem-ser
                </p>
            </div>
            <div>
                <h1>Cartilha do governo ajuda a tirar dúvidas sobre discriminação no trabalho</h1>
                <img src="./imagens/iStock agrçao no trampo.jpg" alt="">
                <p id="font">Fonte: movimento mulher 360</p>
                <br>
                <p>Vejá a seguir as principais questões que são respondidas nela.</p>
                <ol>
                    <li> 1 - O que é o princípio da igualdade, ou da não discriminação, nas relações de trabalho?</li>
                    <li> 2 - O que é discriminação? </li>
                    <li> 3 - Qual é a diferença entre preconceito e discriminação?</li>
                    <li> 4 - Quais critérios são considerados discriminatórios?</li>
                    <li> 5 - O que é discriminação direta?</li>
                    <li> 6 - O que é discriminação indireta?</li>
                    <li> 7 - Quando o tratamento diferente não é discriminatório?</li>
                    <li> 8 - De que formas a discriminação no trabalho pode ocorrer?</li>
                    <li> 9 - Quem pode ser vítima de discriminação nas relações de trabalho? </li>
                    <li> 10 - Quem pode praticar discriminação no trabalho?</li>
                    <li> 11 - Quais as repercussões da discriminação sobre o trabalhador?</li>
                    <li> 12 - Quais as consequências legais em caso de prática discriminatória?</li>
                    <li> 13 - O que é um viés cognitivo e como ele pode resultar em práticas discriminatórias?</li>
                </ol>
            </div>
        </section>

        <br>
        <br>
        <br>

        <section class="flex2">
            <div>
                <h1 class="titulopagina">Orientações<a name="text1"></a></h1>
                <br>

                <h5> O QUE E ONDE DENUNCIAR ? </h5>

                Através deste canal podem ser feitas denúncias sobre discriminação em ambientes de trabalho e
                entrevistas de
                emprego. Esses crimes também podem ser denunciados à Secretaria Especial de Previdência e Trabalho, ao
                Ministério Público do
                Trabalho (MPT) ou, por meio de reclamação trabalhista perante a Justiça do Trabalho. E aqui no SuaVoz a
                sua
                denúncia ajuda a promover a necessidade de tratar esses assuntos, trazendo para empresas, funcionarios e
                a
                própria sociedade o
                convite a reflexão para a mudança de comportomento.

                <h5> COMO DENUNCIAR E FAZER O ACOMPANHAMENTO ?</h5>

                Basta selecionar o botão "DENÚNCIAR" no topo da pagína, e seguir as
                etapas de preenchimento do formulário de perguntas. É muito importante trazer referencias, como site e
                contato
                da empresa no preenchimento do formulario que fica acima do texto de denúncias ao invés do campo de
                documentação.
                Após enviar a denúncia você deverá cadastrar uma senha e
                o sistema vai
                lhe fornecer uma chave (protocolo) que deverá ser anotada para que possa fazer posteriormente o
                acompanhamento
                do andamento da sua denúncia e as providencias tomadas pela empresa.

                Para acompanhar o andamento de uma denúncia já enviada, clique no botão MINHAS DENÚNCIAS
                !
            </div>
        </section>

        <br>
        <br>

        <h1 class="titulopagina"><a name="text3"></a></h1>
        <section class="flex2">
            <div class="botoes">
                Editar Perfil
            </div>
            <div class="botoes">
                Remover Denúncia
            </div>
            <div class="botoes">
                Remover Conta
            </div>
        </section>

    </main>
    <br>
    <br>

    <footer class="rodape">
        <P></P>
    </footer>

</body>

</html>