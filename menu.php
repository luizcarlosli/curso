<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrando Produtos</title>


</head>

<body>

  <?php

  include 'connect/conexao.php';
  include 'scripts/password.php';

  session_start();

  $usuario = $_SESSION['usuario'];

  if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
  }

  $sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status_usuario = 'Ativo'";
  $buscar = mysqli_query($conexao, $sql);
  $array = mysqli_fetch_array($buscar);
  $nivel = $array['nivel_usuario'];

  ?>

  <div class="container">

    <div class="row mt-5">

      <?php
      if (($nivel < 3)) {

      ?>
        <div class="col-sm-6 mt-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Adicionar Produtos</h5>
              <p class="card-text">Opção para adicionar produtos no banco de dados!</p>
              <a href="addproduto.php" class="btn btn-primary">Cadastrar produto</a>
            </div>
          </div>
        </div>
      <?php } ?>
      <div class="col-sm-6 mt-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Lista de Produtos</h5>
            <p class="card-text">Listar, Editar e Excluir produtos!</p>
            <a href="listagens/listar_produtos.php" class="btn btn-primary">Listar</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6 mt-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar Categoria</h5>
            <p class="card-text">Opção para adicionar e listar categorias!</p>
            <a href="adicionar_categoria.php" class="btn btn-primary m-1">Cadastrar Categorias</a>
            <a href="listagens/listar_categoria.php" class="btn btn-primary m-1">Listar Categorias</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mt-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar Fornecedor</h5>
            <p class="card-text">Opção para adicionar e listar fornecedores!</p>
            <a href="adicionar_fornecedor.php" class="btn btn-primary m-1">Cadastrar Fornecedor</a>
            <a href="listagens/listar_fornecedor.php" class="btn btn-primary m-1">Listar Fornecedor</a>
          </div>
        </div>


      </div>

      <div class="col-sm-6 mt-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Aprovar Usuários</h5>
            <p class="card-text">Aprovar usuários cadastrados!</p>
            <a href="aprovar_usuario.php" class="btn btn-primary m-1">Aprovar usuários</a>
            <a href="cadastros/cadastro_usuario.php" class="btn btn-primary m-1">Cadastrar Usuário</a>
            <a href="cadastros/cadastro_usuario_externo.php" class="btn btn-primary m-1">Cadastrar Usuário Externo</a>
          </div>
        </div>

        <div class="col-sm-8 mt-4">


          <?php

          //Para poder utilizar a senha como hash e ver se esta sendo verificado...

          // $password1 = password_hash("Luiz Carlos Lima da Silva", PASSWORD_DEFAULT);
          // echo $password1;

          // $hash = $password1;
          // echo '</br>';
          // if (password_verify('Luiz Carlos', $password1)) {
          //   echo 'Password é válido';
          // } else {
          //   echo 'Password é inválido';
          // }

          ?>

        </div>
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