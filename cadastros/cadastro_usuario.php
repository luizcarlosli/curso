<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container mt-4" style="width: 500px">
        <center>
            <h4>Cadastro de usuários</h4>
        </center>

        <form action="../configuracoes/inserts/_insert_usuario.php" method="post">

            <div class="form-group">
                <label>Nome do Usuário</label>
                <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome completo">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="emailusuario" class="form-control" required autocomplete="off" placeholder="Seu e-mail">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" id="txtSenha" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Informe sua senha">
            </div>
            <div class="form-group">
                <label>Repetir Senha</label>
                <input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Informe sua senha" oninput="validaSenha(this)">
                <small>Precisa ser igual a senha digitada acima!</small>
            </div>
            <hr>
            <div class="form-group">
                <label>Nível de acesso</label>
                <select class="form-control" name="nivelusuario">

                    <option value="1">Administrador</option>
                    <option value="2">Funcionário</option>
                    <option value="3">Conferente</option>

                </select>
            </div>
            <div style="text-align: right">
                <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
            </div>

        </form>

        <div style="text-align: left">
            <a href="../menu.php" class="btn btn-outline-dark btn-sm">Voltar</a>
        </div>


    </div>



    <script>

        function validaSenha (input){
            if (input.value != document.getElementById('txtSenha').value) {
                input.setCustomValidity('Repita a senha corretamente');
            } else {
                input.setCustomValidity('');
            }
        }


    </script>
</body>

</html>