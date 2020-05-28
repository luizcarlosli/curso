<?php 

include '../../connect/conexao.php';

$nome_categoria = $_POST['categoria'];

$sql = "INSERT INTO categoria (nome_categoria) VALUES ('$nome_categoria')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="container" style="width: 500px">

    <center>
        <h3 style="margin-top: 25px">
            Adicionado com Sucesso!!!
        </h3>
        <div style="margin-top: 20px">
            <a href="../../adicionar_categoria.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>
        </div>

    </center>

</div>