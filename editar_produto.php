<?php

include 'connect/conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style type="text/css">
        #tamanhoContainer {
            width: 500px;
        }

        #botao {
            /* Cor do botão */
            background-color: #F14A6F;
            /* Cor da fonte do botão */
            color: #ffffff;
            /* Colocar fonte em negrito */
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container" id="tamanhoContainer" style="margin-top: 40px">
        <h4 style="text-align: center">Atualizar Produto</h4>
        <form action="configuracoes/updates/_atualizar_produto.php" method="POST" style="margin-top: 20px">
            <?php

            $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
            $buscar = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($buscar)) {

                $id_estoque = $array['id_estoque'];
                $nroproduto = $array['nroproduto'];
                $nome = $array['nome'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];



            ?>
                <div class="form-group">
                    <label>Nro Produto</label>
                    <input type="number" name="nroproduto" class="form-control" value="<?php echo $nroproduto ?>" disabled>
                    <input type="number" name="id" class="form-control" value="<?php echo $id ?>" style="display: none">
                </div>
                <div class="form-group">
                    <label>Nome Produto</label>
                    <input type="text" name="nome" class="form-control" value="<?php echo $nome ?>">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select name="categoria" class="form-control">
                        <option>Periféricos</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Celulares</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" name="quantidade" class="form-control" value="<?php echo $quantidade ?>">
                </div>
                <div class="form-group">
                    <label>Fornecedorer</label>
                    <select name="fornecedor" class="form-control">
                        <option>Fornecedor 1</option>
                        <option>Fornecedor 2</option>
                        <option>Fornecedor 3</option>
                        <option>Fornecedor 4</option>
                    </select>
                </div>


                <div style="text-align: right">
                    <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
                </div>
                <div style="text-align: left">
                <a href="listagens/listar_produtos.php" class="btn btn-sm btn-primary" style="color: #ffffff">Voltar</a>
            </div>
            <?php  } ?>
        </form>
    </div>


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>