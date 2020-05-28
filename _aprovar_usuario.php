<?php

include 'connect/conexao.php';

$id = $_GET['id'];
$nivel = $_GET['nivel'];



if ($nivel == 1) {
    $update = "UPDATE usuarios SET status_usuario= 'Ativo', nivel_usuario = 1 where id_usuario = $id";
    echo "ADMINISTRADOR APROVADO";
    $sql = mysqli_query($conexao, $update);
} else if ($nivel == 2){
    $update = "UPDATE usuarios SET status_usuario= 'Ativo', nivel_usuario = 2 where id_usuario = $id";
    ECHO "FUNCIONARIO CADASTRADO";
    $sql = mysqli_query($conexao, $update);
} else {
    $update = "UPDATE usuarios SET status_usuario= 'Ativo', nivel_usuario = 3 where id_usuario = $id";
    ECHO "CONFERENTE APROVADO";
    $sql = mysqli_query($conexao, $update);
}
header("Location: aprovar_usuario.php");
?>