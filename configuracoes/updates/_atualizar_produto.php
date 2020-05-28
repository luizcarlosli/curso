<?php

include '../../connect/conexao.php';

$id = $_POST['id'];
//$nroproduto = $_POST['nroproduto'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE estoque SET nome = '$nome', categoria = '$categoria', quantidade = $quantidade, fornecedor = '$fornecedor' WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao, $sql);



?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="container" style="width: 500px">

    <center>
        <h3 style="margin-top: 25px">
            Atualizado com Sucesso!!!
        </h3>
        <div style="margin-top: 20px">
            <a href="../../listagens/listar_produtos.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>
        </div>

    </center>

</div>