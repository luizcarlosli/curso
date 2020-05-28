<?php

include '../../connect/conexao.php';
include '../../scripts/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['emailusuario'];
$senha = $_POST['senhausuario'];
// $nivel = $_POST['nivelusuario'];
$status = 'Inativo';

$sql = "INSERT INTO usuarios (nome_usuario, mail_usuario, senha_usuario, status_usuario) VALUES ('$nomeusuario', '$mail', sha1('$senha'), '$status')";
$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="container" style="width: 500px">

    <center>
        <h3 style="margin-top: 25px">
            Usuário adicionado com Sucesso, esperando aprovação!
        </h3>
        <div style="margin-top: 20px">
            <a href="../../cadastros/cadastro_usuario_externo.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>
        </div>

    </center>

</div>