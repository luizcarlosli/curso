<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listando Produtos</title>

    <script src="https://kit.fontawesome.com/3edb1c8605.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>

<body>

    <div class="container" style="margin-top: 40px">
        <h3>Lista de Produtos</h3><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nro Produto</th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>


            <?php
            include '../connect/conexao.php';
            $sql = "SELECT * FROM `estoque`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $id_estoque = $array['id_estoque'];
                $nroproduto = $array['nroproduto'];
                $nome = $array['nome'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];

            ?>
                <tr>
                    <td><?php echo $nroproduto ?></td>
                    <td><?php echo $nome ?></td>
                    <td><?php echo $categoria ?></td>
                    <td><?php echo $quantidade ?></td>
                    <td><?php echo $fornecedor ?></td>
                    <td><a class="btn btn-warning btn-sm" style="color: #ffffff" href="../editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit" style="margin-right: 10px"></i>Editar</a>
                    </td>
                    <td><a class="btn btn-danger btn-sm" style="color: #ffffff" href="../configuracoes/delets/deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-trash-alt" style="margin-right: 10px"></i>Excluir</a></td>
                </tr>

            <?php } ?>

        </table>

        <hr>
        <div style="text-align: left">
            <a href="../menu.php" class="btn btn-outline-dark btn-sm">Home</a>
            
            </div>

    </div>







    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>