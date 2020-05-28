<?php 

include '../../connect/conexao.php';
$id = $_GET['id'] ;

$sql = "DELETE FROM estoque WHERE id_estoque = $id";

$deletar = mysqli_query($conexao, $sql);

?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="container" style="width: 500px">

    <center>
        <h3 style="margin-top: 25px">
            Deletado com Sucesso!!!
        </h3>
        <div style="margin-top: 20px">
            <a href="../../listagens/listar_produtos.php" class="btn btn-sm btn-success" style="color: #ffffff">Voltar</a>
        </div>

    </center>

</div>