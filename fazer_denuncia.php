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

$nomeEmpresa= $_POST['nomedenuncia'];
$endereco= $_POST['enderecodenuncia'];
$titulo= $_POST['titulodenuncia'];
$corpo= $_POST['escrevadenuncia'];
$endereco = $_POST['enderecodenuncia'];
$idUsuario = $_SESSION['id_usuario'];



if (strlen($nomeEmpresa)>1 && strlen($titulo)>=10 && strlen($corpo)>=10) {
    $sql = "select * from empresa where nome_fantasia = '$nomeEmpresa';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $resultado = mysqli_fetch_assoc($result);
        $id_empresa=$resultado['id_empresa'];
        $sql = "insert into reclamacao
    (id_usuario,id_empresa,data_e_hora,titulo,corpo_reclamacao,endereco,nome_empresa) 
    values
    ('$idUsuario','$id_empresa',now(),'$titulo','$corpo','$endereco','$nomeEmpresa');";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Reclamação criada com sucesso');window.location.href = 'pesquise_denuncias.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $sql = "insert into reclamacao
        (id_usuario,data_e_hora,titulo,corpo_reclamacao,endereco,nome_empresa) 
        values
        ('$idUsuario',now(),'$titulo','$corpo','$endereco','$nomeEmpresa');";
    
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Reclamação criada com sucesso');window.location.href = 'pesquise_denuncias.php';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    }

}else if (strlen($nomeEmpresa)<=1) {
    echo "<script>alert('O nome da empresa deve ser maior do que 1 caractere!');window.location.href = 'fazerdenuncia.php';</script>";
} else if (strlen($titulo)<10) {
    echo "<script>alert('O título deve ter 10 ou mais caracteres!');window.location.href = 'fazerdenuncia.php';</script>";
} else if (strlen($corpo)<10) {
    echo "<script>alert('O relato deve ter 10 ou mais caracteres!');window.location.href = 'fazerdenuncia.php';</script>";
};


