<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Registre-se</title>
    <link rel="stylesheet" href="./css/globalforms.css">
    <link rel="stylesheet" href="./css/registro.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./scripts/registro.js"></script>
    <script>
        $(document).ready(() => {
        })
    </script>
</head>

<body>

    <!-- header é a parte preta do topo, coloquei duas divs para estilizar cada uma de um jeito-->
    <header style="background-image:url('./imagens/diversity-teamwork-with-joined-hands-FRACL2W\ 1.png')">
        <div class=container-img>
            <img src="./imagens/arrow-left-circle-fill.svg" alt="">
            <img src="./imagens/logo teste  2.png" alt="Logo">
        </div>
        <div class="enunciado">
            <h1>Se quer ajudar a mudar o mercado, pode começar por aqui</h1>
            <h2>Comece preenchendo o formulário abaixo</h2>
        </div>
    </header>
    <main>
        <div class="container-form">
            <h3 id="titulo" class="user">Seus dados</h3>
            <hr>
            <form action="cadastro_usuario.php" class="user" id="form_usuario" method="post">

                <div class="input-block">
                    <label for="nome">Nome Completo</label>
                    <input type="text" name="nome" id="nome">
                </div>


                <!--div para alinhar os campos menores que ficam em uma linha só-->
                <div class="row">
                    <div class="input-block">
                        <label for="rg">RG</label>
                        <input type="text" name="rg" id="rg">
                    </div>

                    <div class="input-block">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" id="cpf">
                    </div>

                    <div class="input-block">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" id="telefone" placeholder="ex: 11 87654321">
                    </div>
                </div>
                <div class="input-block">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>

                <div class="row">
                    <div class="input-block">
                        <label for="nasc">Data de Nascimento</label>
                        <input type="date" name="nasc" id="nasc">
                    </div>

                    <div class="input-block">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado">
                            <option value="" selected disabled hidden>Selecione seu estado</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>

                    <div class="input-block">
                        <label for="cidade">Cidade</label>
                        <input type="text" name="cidade" id="cidade">
                    </div>
                </div>

                <div class="input-block">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>

                <div class="input-block">
                    <label for="confsenha">Confirme sua senha</label>
                    <input type="password" name="conf_senha" id="confsenha">
                </div>


                <div class="termos">
                    <input type="checkbox" name="termos" id="termos">
                    <label for="termos" id="termos">Li e concordo com os &nbsp <a href="#"> Termos de Uso </a>&nbsp e a
                        &nbsp <a href="#"> Política de Privacidade </a></label>
                </div>

            </form>
        </div>
        <footer>

            <div class="left">
                <img src="./imagens/alert-fill.svg" alt="">
                <p>Importante!<br> Preencha todos os dados.</p>
            </div>
            <button type="submit" form="form_usuario" class="user">Salvar Cadastro</button>
        </footer>
    </main>

</body>

</html>