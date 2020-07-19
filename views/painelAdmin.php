<?php
  if(!isset($_SESSION['admin_logado'])){
    echo "
    <script>
      window.location.href = '?page=admin';
    </script>
    ";
  }
  ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>ADM - Aprende Aí</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Favicons -->
    <!-- <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml"> -->

<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Aprende Aí! que é Batata</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <form class="w-100 ml-4 " action="" method="post">
    <div class="row">
      <input class="form-control form-control-dark w-50" type="text" placeholder="Buscar" aria-label="Search">
      <button type="button" class="btn btn-outline-light " name="button">Pesquisar</button>
    </div>

  </form> -->

  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="?page=admin">Sair</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?= $_GET['type'] == 'usuarios'?'active':''; ?>" href="?page=painelAdmin&type=usuarios">
              <span data-feather="home"></span>
              Usuarios <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $_GET['type'] == 'pedidos'?'active':''; ?>" href="?page=painelAdmin&type=pedidos">
              <span data-feather="file"></span>
              Pedidos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $_GET['type'] == 'conteudos'?'active':''; ?>" href="?page=painelAdmin&type=conteudos">
              <span data-feather="shopping-cart"></span>
              Conteúdos
            </a>
          </li>

        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Configurações</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link <?= $_GET['type'] == 'anuncios'?'active':''; ?>" href="?page=painelAdmin&type=anuncios">
              <span data-feather="file-text"></span>
              Anúncios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $_GET['type'] == 'seguranca'?'active':''; ?>" href="?page=painelAdmin&type=seguranca">
              <span data-feather="file-text"></span>
              Segurança
            </a>
          </li>

        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="container">
            <h2 class='mt-4'><?= $titulo; ?></h2>

            <?php
              $_GET['type'] = isset($_GET['type'])?$_GET['type']:'';
              if($_GET['type'] == 'usuarios')
              {
                ?>
                <p>

                <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">Pessoa Física</button>
                <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Pessoa Jurídica</button>

              </p>
              <div >
                <div class="col">
                  <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Usuário</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Permissão para post</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      for ($x = 0;$x < count($dadosPF['nomes']);$x++)
                      {
                        ?>
                        <tr>
                          <th scope="row"><?= $x+1 ?></th>
                          <td><?= $dadosPF['nomes'][$x] ?></td>
                          <td><?= $dadosPF['snomes'][$x] ?></td>
                          <td><?= $dadosPF['usuarios'][$x] ?></td>
                          <td><?= $dadosPF['emails'][$x] ?></td>
                          <td><?= $dadosPF['permissoes'][$x]==1?'Permitido':'Negado' ?></td>
                        </tr>
                        <?php
                      }

                      ?>

                    </tbody>
                  </table>

                  </div>
                </div>
                <div class="col">
                  <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome Fantasia</th>
                        <th scope="col">Razão Social</th>
                        <th scope="col">Usuário</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Permissão para post</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      for ($x = 0;$x < count($dadosPJ['nomes']);$x++)
                      {
                        ?>
                        <tr>
                          <th scope="row"><?= $x+1 ?></th>
                          <td><?= $dadosPJ['nomes'][$x] ?></td>
                          <td><?= $dadosPJ['snomes'][$x] ?></td>
                          <td><?= $dadosPJ['usuarios'][$x] ?></td>
                          <td><?= $dadosPJ['emails'][$x] ?></td>
                          <td><?= $dadosPJ['permissoes'][$x]==1?'Permitido':'Negado' ?></td>
                        </tr>
                        <?php
                      }

                      ?>
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>

                <?php
              }
              else if($_GET['type'] == 'pedidos')
              {
                ?>

                <div class="row">

                  <?php
                  if($respostaPostador != 0)
                  {
                    for($x = 0;$x < count($respostaPostador['nomes']);$x++)
                    {
                  ?>
                    <div class="col-3 mx-4">
                      <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title"><?= $respostaPostador['nomes'][$x].' '.$respostaPostador['sobrenomes'][$x] ?></h5>
                          <h6 class="card-subtitle mb-2 text-muted"> <a href="mailto: <?=$respostaPostador['emails'][$x]?>"> <?= $respostaPostador['emails'][$x] ?></a></h6>
                          <p class="card-text"> <a target="_blank" href="views/Docs_permissao/<?= $respostaPostador['arquivos'][$x] ?>">Currículo</a> </p>
                          <a href="?page=painelAdmin&type=pedidos&posted=aceitar&id=<?= $respostaPostador['ids'][$x]; ?>" class="card-link text-warning">Aceitar</a>
                          <a href="?page=painelAdmin&type=pedidos&posted=negar&id=<?= $respostaPostador['ids'][$x]; ?>" class="card-link text-danger">Recusar</a>
                        </div>
                      </div>
                    </div>
                    <?php
                      }
                    }
                    else
                    {
                        echo '<div class="mx-4">Nenhum pedido para ser postador.</div>';
                    }
                    ?>
                  </div>

                <?php
              }
              else if($_GET['type'] == 'conteudos')
              {
                if(!is_null($dadosConteudos))
                {
                  foreach ($dadosConteudos as $assunto) {


                  ?>
                      <div id="accordion">
                  <div class="card">
                      <div class="card-header" id="heading<?= $assunto['id_assunto'];?>">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse<?= $assunto['id_assunto'];?>" aria-expanded="false" aria-controls="collapse<?= $assunto['id_assunto'];?>">
                            <?= $assunto['nm_assunto']; ?>
                          </button>
                        </h5>
                      </div>

                      <div id="collapse<?=$assunto['id_assunto'];?>" class="collapse" aria-labelledby="heading<?= $assunto['id_assunto'];?>" data-parent="#accordion">
                        <div class="card-body">

                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                              <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home<?= $assunto['id_assunto'];?>" role="tab" aria-controls="pills-home" aria-selected="true">Conteúdo</a>
                              </li>

                              <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact<?= $assunto['id_assunto'];?>" role="tab" aria-controls="pills-contact" aria-selected="false">Autorizar</a>
                              </li>

                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="pills-home<?= $assunto['id_assunto'];?>" role="tabpanel" aria-labelledby="pills-home-tab">
                              <?= $assunto['conteudo_assunto'];?>
                               </div>
                              <div class="tab-pane fade" id="pills-contact<?= $assunto['id_assunto'];?>" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <img src="./views/img/img_assuntos/<?=$assunto['img_assunto'];?>" alt="" style="width: 500px;height:250px;"><br>
                                Materia:
                              <?= $assunto['nm_curso'];?>
                               <br> Tema:
                              <?= $assunto['nm_tema'];?><br>
                              descrição:
                              <?=$assunto['descricao_assunto'] ?><br>
                              <form class="" method="post">
                                <input type="number" name="txt_ordem_assunto" >
                                <button name="id_assunto" value="<?= $assunto['id_assunto']?>1" class="btn btn-warning">Autorizar</button>
                                <button name="id_assunto" value="<?= $assunto['id_assunto']?>0" class="btn btn-danger">Recusar</button>
                              </form>

                              </div>
                            </div>

                        </div>
                      </div>
                    </div>
                    </div>
                    <?php
                    }
                  }
                  else
                  {
                    echo '<div class="mx-4">Nenhum pedido de postagem de conteúdo.</div>';
                  }
              }
              else if($_GET['type'] == 'anuncios')
              {

              }
              else if($_GET['type'] == 'seguranca')
              {
                ?>

                <form class="needs-validation" method="post" novalidate >
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="validationTooltipUsername">Usuario</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                        </div>
                        <input type="text" name="txt_usuario" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationTooltip03">Senha</label>
                      <input type="password" name="txt_senha" class="form-control" id="validationTooltip03" placeholder="EX: P@SsW0rd" required>
                    </div>
<<<<<<< HEAD
                    <button class="btn btn-primary" name="btn_adicionar" type="submit">Adicionar</button>
                  </form>
                </div>
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                  <form method="post">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nova Senha</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nova Senha" name="novaSenha">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Confirmar senha</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmar senha"  name="confirmaSenha">
=======
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip04">Pergunta de segurança</label>
                      <input type="text" name="txt_pergunta_de_Seguranca" class="form-control" id="validationTooltip04" placeholder="EX: nome do seu pet?" required>

                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip05">Resposta de segurança</label>
                      <input type="text" name="txt_resposta_de_Seguranca" class="form-control" id="validationTooltip05" placeholder="EX: Batatinha" required>

>>>>>>> f061cab285be6485348d7d5046a0fc58853bc3da
                    </div>
                  </div>
                  <button class="btn btn-primary" name="btn_adicionar" type="submit">Adicionar</button>
                </form>
                <?php
              }
              else
              {

              }

               ?>

        </div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>
