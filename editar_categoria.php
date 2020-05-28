<?php

include 'connect/conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Categoria</title>


</head>

<body>

    <div class="container" style="margin-top: 40px; width: 500px">
        <h4>Edição de Categoria</h4>
        <form action="configuracoes/edits/_editar_categoria.php" method="post">

            <?php

            $sql = "SELECT * FROM categoria WHERE id_categoria = $id";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $id_categoria = $array['id_categoria'];
                $nome_categoria = $array['nome_categoria'];

            ?>

                <label>Categoria</label>
                <div class="form-group">
                    <input type="number" name="id" class="form-control" value="<?php echo $id ?>" style="display: none">
                    <input type="text" name="categoria" class="form-control" value="<?php echo $nome_categoria ?>">
                </div>
                <div style="text-align: right">
                    <button type="submit" class="btn btn-sm btn-primary">Atualizar</button>
                </div>
            <?php } ?>

        </form>

        <hr>
        <div style="text-align: left">
            <a href="index.php" class="btn btn-outline-dark btn-sm">Voltar</a>
            <a href="listagens/listar_categoria.php" class="btn btn-sm btn-outline-primary">Listar Categorias</a>
        </div>

    </div>


    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>