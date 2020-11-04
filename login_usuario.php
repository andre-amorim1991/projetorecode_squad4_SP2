<?php

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if (strlen($email) > 3 && strlen($senha) > 3) {

    $senhacripto = md5($senha);
    // Conexão com banco de dados
    $conn = mysqli_connect("localhost", "root", "", "sua_voz" );
    
    $resultado_consulta = $conn->query("SELECT * from usuario where email = '$email' and senha = '$senhacripto'");

    $usuario = mysqli_fetch_all($resultado_consulta);


    // echo '<pre>';
    // print_r($resultado_consulta);
    // echo '</pre>';

    
    $_SESSION['nome'] = $usuario[0][0];
    $_SESSION['email'] = $usuario[0][7];
    $_SESSION['senha'] = $usuario[0][11];
    $_SESSION['id_usuario'] = $usuario[0][0];
    $_SESSION['statusconta'] = $usuario[0][1];

    header('Location: hub.php');
}
else {
    echo "
        <script>
            alert('E-mail ou senha inválidos!')
            location.href = 'login.php'
        </script>    
    ";
} 