<?php

include '../../connect/conexao.php';

$nroproduto = $_POST['nroproduto']; // Recebe o número do atributo
$nome = $_POST['nome']; //recebe o nome do produto
$categoria = $_POST['categoria']; // Recebe a categoria do produto
$quantidade = $_POST['quantidade']; // Recebe a quantidade do produto
$fornecedor = $_POST['fornecedor']; // Recebe o fornecedor do produto


$sql = "INSERT INTO `estoque`(`nroproduto`, `nome`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto, '$nome', '$categoria', $quantidade, '$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px">
    <center>
        <h4>Produto Adicionado com sucesso!</h4>
    </center>
    <div style="padding-top: 20px">

        <center>
            <a href="../../addproduto.php" role="button" class="btn btn-sm btn-primary">Cadastrar um novo item</a>
        </center>

    </div>
</div>