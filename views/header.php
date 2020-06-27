<?php
  if(isset($_SESSION['usuario_logado'])){
    unset($_SESSION['usuario_logado']);
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Aprende ai que é Batata!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
  <link rel="stylesheet" href="css/styles_geral.css">
 <link rel="stylesheet" href="css/styles_header.css">
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
</head>

<body>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
 <script>tinymce.init({selector:'#exampleFormControlTextarea1'});</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <h4 class="nav-item active ml-5">
        <a class="nav-link" href="?page=home">Aprende Ai!</a>
      </h4>
      <!--
      <li class="nav-item">
        <a class="nav-link" href="?page=forum">Fórum</a>
      </li>
      -->

    </ul>
    <ul class="nav navbar-nav navbar-right mr-5">
    <li class="nav-item">
      <a href="?page=sobre" class="nav-link">Equipe <i class="fas fa-users"></i></a>
    </li>
    <?php
        if(isset($_GET['page']) && $_GET['page'] != 'EscolhaCadastro')
        {
      ?>
      <li><a class="nav-link" id="nav-link-margin" href="?page=EscolhaCadastro">Cadastre-se <i class="fas fa-user-plus"></i> </a></li>
      <?php
        }
      ?>

      <?php
        if(isset($_GET['page']) && $_GET['page'] != 'login')
        {
      ?>
      <li><a class="nav-link"  href="?page=login">Login <i class="fas fa-sign-in-alt"></i></a></li>
      <?php
        }
        else
        {
        ?>
          <li><a class="nav-link" id="nav-link-margin" href="?page=EscolhaCadastro">Cadastre-se <i class="fas fa-user-plus"></i> </a></li>
          <li><a class="nav-link"  href="?page=login">Login <i class="fas fa-sign-in-alt"></i></a></li>
        <?php
        }
      ?>
    </ul>

  </div>
</nav>
