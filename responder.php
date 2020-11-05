<?php
//session_start();
//Se não existir um valor no nome da sessão, encerra o processamento
//if(!isset($_SESSION['nome']) || $_SESSION['status_conta']!='ativo'){
//    header('Location: index.php');
//   exit;
//}

$servername = "localhost";
$username = "root";
$password = "";
$database = "sua_voz";

$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn, "utf8");
if (!$conn) {
    die("A conexão falhou: " . mysqli_connect_error());
};

$idTopico = $_POST['id_topico'];
$corpoResposta = $_POST['corpo_resposta'];
$idUsuario = 2; //$_SESSION['id_usuario'];

$sql = "insert into respostas
    (id_empresa,id_usuario,id_reclamacao,data_e_hora,corpo_resposta) 
    values
    (null,'$idUsuario','$idTopico',now(),'$corpoResposta');";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Resposta inserida com sucesso');window.location.href = 'pesquise_denuncias.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
