<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovar Usuário</title>

    <script src="https://kit.fontawesome.com/3edb1c8605.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>

<body>

    <div class="container" style="margin-top: 40px; width: 700px;">
        <h3>Lista de Usuários</h3><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome Usuário</th>
                    <th scope="col">E-mail de Usuário</th>
                    <th scope="col">Nível</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>


            <?php
            include 'connect/conexao.php';
            $sql = "SELECT * FROM usuarios where status_usuario = 'Inativo'";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $id_usuario = $array['id_usuario'];
                $nome_usuario = $array['nome_usuario'];
                $mail = $array['mail_usuario'];
                $nivel = $array['nivel_usuario'];


            ?>
                <tr>
                    <td><?php echo $nome_usuario ?></td>
                    <td><?php echo $mail ?></td>
                    <td><?php echo $nivel ?></td>

                    <td>
                        <a class="btn btn-success btn-sm m-1" style="color: #ffffff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=1" role="button"><i class="far fa-smile-beam" style="margin-right: 10px"></i>Administrador</a>
                        <a class="btn btn-warning btn-sm m-1" style="color: #ffffff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=2" role="button"><i class="far fa-smile-beam" style="margin-right: 10px"></i>Funcionário</a>
                        <a class="btn btn-dark btn-sm m-1" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=3" role="button"><i class="far fa-smile-beam" style="margin-right: 10px"></i>Conferente</a>

                        <a class="btn btn-danger btn-sm m-1" style="color: #ffffff" href="configuracoes/delets/_deletar_usuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="far fa-trash-alt" style="margin-right: 10px"></i>Excluir</a>
                    </td>
                </tr>

            <?php } ?>

        </table>

        <hr>
        <div style="text-align: left">
            <a href="menu.php" class="btn btn-outline-dark btn-sm">Home</a>

        </div>

    </div>







    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>