<?php

include 'connect/conexao.php';
include 'scripts/password.php';

$usuario = $_POST['usuario'];
$senhaPost = $_POST['senha'];

$sql = "SELECT mail_usuario, senha_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status_usuario = 'Ativo'";
$buscar = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($buscar);

if ($total > 0) {
    while ($array = mysqli_fetch_array($buscar)) {

        $senhaBanco = $array['senha_usuario'];

        $senhadecodificada = sha1($senhaPost);


        if ($senhadecodificada == $senhaBanco) {

            session_start();
            $_SESSION['usuario'] = $usuario;

            header("Location: menu.php");

        } else {
            header("Location: erro.php");
        }
    }

} else {
    header("Location: erro.php");
}

?>