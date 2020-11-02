<?php
// registro.php
// registro.sql

$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$nasc = $_POST['nasc'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];

if (strlen($nome) > 3 && strlen($rg) > 6 && strlen($cpf) == 11 && strlen($telefone) > 9 && strlen($email) > 3 && strlen($nasc) != 0 && strlen($estado) != 0 && strlen($cidade) != 0 && strlen($senha) > 3 && $senha == $conf_senha ) {
    $senha_cripto = md5($senha);

    #Conecta banco de dados 
    $conn = mysqli_connect("localhost", "root", "", "sua_voz");
    $sql = "select * from usuario where email = '$email'";
    $result = $conn->query($sql);

    #Se o retorno for maior do que zero, diz que já existe um.
    if($result->num_rows>0) {
        echo "<script>
            alert('Email já existe')
            window.location.href = 'registro.php'
         </script>";}
    else { 
        $conn = mysqli_connect("localhost", "root", "", "sua_voz");

        $sql = "insert into usuario (status_conta, nome_completo, rg, cpf, telefone, email, data_nascimento, estado, cidade, senha) values ('ativo', '$nome', '$rg', '$cpf', '$telefone', '$email', '$nasc', '$estado', '$cidade', '$senha_cripto')";
        $conn->query($sql);
        
        echo "<script>
                alert('Cadastro efetuado!')
                window.location.href = 'login.php'               
            </script>
            ";
         
}}
  

else if ($senha != $conf_senha) {
    echo "<script>
            alert('As senhas devem ser iguais')
            window.location.href = 'registro.php'
        </script>
        ";
}
else if (strlen($nome) <= 3) {
    echo "<script>
        alert('Digite um nome com 3 ou mais letras')
        window.location.href = 'registro.php'
    </script>
    ";
}
else if (strlen($rg) <= 6) {
    echo "<script>
        alert('Digite um rg válido')
        window.location.href = 'registro.php'
    </script>
    ";
}
else if (strlen($cpf) != 11) {
    echo "<script>
        alert('Digite um cpf válido')
        window.location.href = 'registro.php'
    </script>
    ";
}
else if (strlen($telefone) <= 9) {
    echo "<script>
        alert('Digite um telefone válido, com ddd sem o zero e somente números sem espaço')
        window.location.href = 'registro.php'
    </script>
    ";
}
else if (strlen($email) <= 3) {
    echo "<script>
        alert('Digite um email válido para realziar o cadastrado!')
        window.location.href = 'registro.php'
    </script>
    ";
}
else if (strlen($nasc) == 0) {
    echo "<script>
        alert('Informe a data de nascimento')
        window.location.href = 'registro.php'
    </script>
    ";
}
else if (strlen($estado) == 0) {
    echo "<script>
        alert('Informe o estado')
        window.location.href = 'registro.php'
    </script>
    ";
}
else if (strlen($cidade) == 0) {
    echo "<script>
        alert('Informe a cidade')
        window.location.href = 'registro.php'
    </script>
    ";
}
else if (strlen($senha) <= 3) {
    echo "<script>
        alert('Cadastre uma senha com mais de 3 caracteres')
        window.location.href = 'registro.php'
    </script>
    ";

}
//SELECT * FROM usuarios WHERE email = '$email'

//