<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3edb1c8605.js" crossorigin="anonymous"></script>
    <style type="text/css">
        #tamanho {
            width: 350px;
            margin-top: 100px;
            border-radius: 15px;
            border: 2px solid #f3f3f3;
            -webkit-box-shadow: 10px 10px 30px -12px rgba(184, 184, 184, 1);
            -moz-box-shadow: 10px 10px 30px -12px rgba(184, 184, 184, 1);
            box-shadow: 10px 10px 30px -12px rgba(184, 184, 184, 1);
        }
    </style>

</head>

<body>


    <div class="container" id="tamanho">

        <div style="padding: 10px;">
            <form action="index1.php" method="post">
                <div class="form-group">
                    <i class="fas fa-user m-2"></i><label>Usuário</label>
                    <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-lock m-2"></i><label>Senha</label>
                    <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>

                </div>


                <div style="text-align: right;">
                    <button type="submit" class="btn btn-sm btn-success mb-2">Entrar</button>
                </div>
            </form>
        </div>


    </div>


    <div class="mt-3">
        <center>
            <small>
                <p>Você não possui cadastro? Clique <a href="cadastros/cadastro_usuario_externo.php">aqui</a></p>
            </small>
        </center>
    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>