<?php 

include '../../connect/conexao.php';

$nome_fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO fornecedor (nome_fornecedor) VALUES ('$nome_fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="container" style="width: 500px">

    <center>
        <h3 style="margin-top: 25px">
            Adicionado com Sucesso!!!
        </h3>
        <div style="margin-top: 20px">
            <a href="../../adicionar_fornecedor.php" class="btn btn-sm btn-success" style="color: #ffffff">Voltar</a>
        </div>

    </center>

</div>