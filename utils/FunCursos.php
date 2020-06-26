<?php
  require './models/conexao.php';

class FunCursos{

  function ExibeCursos(){


    $conect = new Conexao;
    $con = $conect->Conecta();
    $SelecaoCurso = mysqli_query($con,"SELECT * FROM tb_curso ORDER BY nm_curso ASC");

    echo "<h1 class='display-3'>Conteúdos disponíveis</h1>
            <div class='row'>";
      while($exibicao = mysqli_fetch_array($SelecaoCurso)){


      echo  "
                    <div class='col-sm-2'>
                        <div class='card' style='width: 18rem;'>
                          <img class='card-img-top' id='img_card' src='views/img/img_cursos/" . $exibicao['img_curso'] . "' alt='Imagem de capa do card'>
                          <div class='card-body'>
                            <h5 class='card-title'>" . $exibicao['nm_curso'] . " </h5>
                            <p class='card-text'>" . $exibicao['descricao_curso'] . " </p>
                            <form action='?page=assuntos' method='post'>
                                <button class='btn btn-primary' name='Btn_assunto' value='" . $exibicao['id_curso'] . "'>Visitar</button>
                            </form>
                          </div>
                        </div>
                  </div>";
        }
      echo "</div>";
      mysqli_close($con);

    }

  function ExibeConteudosAdicionados(){
      $conect = new Conexao;
      $con = $conect->Conecta();
      $count = 0;
      $SelecaoCurso = mysqli_query($con,"SELECT *
                                         FROM tb_curso
                                         ORDER BY date_post
                                         DESC LIMIT 6");

      echo "<h5 class='display-3'>Conteúdos adicionados recentemente</h5>";
      echo "<div id='carouselExampleControls' class='carousel slide' data-ride='carousel' data-interval='0'>";
      while($exibicao = mysqli_fetch_array($SelecaoCurso)){

            if($count == 0){
              echo   "<div class='carousel-inner'>
                      <div class='carousel-item active'>
                          <div class='row'>";
            }

            if($count == 3){
              echo "<div class='carousel-item'>
                      <div class='row'>";
            }

            echo  "    <div class='col-sm-2'>
                            <div class='card' style='width: 18rem;'>
                              <img class='card-img-top' id='img_card' src='views/img/img_cursos/" . $exibicao['img_curso'] . "' alt='Imagem de capa do card'>
                              <div class='card-body'>
                                <h5 class='card-title'>" . $exibicao['nm_curso'] . " </h5>
                                <p class='card-text'>" . $exibicao['descricao_curso'] . " </p>
                                <form action='?page=assuntos' method='post'>
                                    <button class='btn btn-primary' name='Btn_assunto' value='" . $exibicao['id_curso'] . "'>Visitar</button>
                                </form>
                              </div>
                            </div>
                        </div>";

            if($count == 2){
                echo "</div>
                  </div>";
              }

            $count += 1;
          }
          if($count < 3){
            echo "              </div>
                          </div>
                      </div>";
          }
          if($count == 3){
            echo " </div>";
          }

      /*    if($count <= 2){
            echo "              </div>
                          </div>
                      </div>";
          }
          if($count == 3){
            echo " </div>";
          }*/

          if($count > 3){
            echo "              </div>
                          </div>
                      </div>
                            <a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
                              <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                              <span class='sr-only'>Anterior</span>
                            </a>
                            <a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
                              <span class='carousel-control-next-icon' aria-hidden='true'></span>
                              <span class='sr-only'>Próximo</span>
                            </a>";
          }

        echo "</div>";

        mysqli_close($con);
    }

  function ExibeUltimoConteudoAcessado(){
        $conect = new Conexao;
        $con = $conect->Conecta();

        $ultimoCursoSelecionado = mysqli_query($con,"SELECT *
                                                     FROM tb_curso_usuario
                                                     WHERE id_usuario_cu = " . $_SESSION['usuario_logado'] . " ORDER BY date_access DESC LIMIT 1;");

        $SelecaoUltimoCurso = mysqli_fetch_array($ultimoCursoSelecionado);

        $SelecaoCurso = mysqli_query($con,"SELECT *
                                           FROM tb_curso
                                           WHERE id_curso =".$SelecaoUltimoCurso['id_curso_cu']);

        $result = mysqli_num_rows($ultimoCursoSelecionado);

        if($result != false){
          echo "<h5 class='display-3'>Último conteúdo visitado</h5>
                 <div class='row'>";
           while($exibicao = mysqli_fetch_array($SelecaoCurso)){

             echo  "      <div class='card'>
                             <img class='card-img-top' id='UltimoCard' src='views/img/img_cursos/" . $exibicao['img_curso'] . "' alt='Imagem de capa do card'>
                             <div class='card-body'>
                               <h5 class='card-title'>" . $exibicao['nm_curso'] . " </h5>
                               <p class='card-text'>" . $exibicao['descricao_curso'] . " </p>
                               <form action='?page=assuntos' method='post'>
                                   <button class='btn btn-primary' name='Btn_assunto' value='" . $exibicao['id_curso'] . "'>Visitar</button>
                               </form>
                             </div>
                           </div>";
               }
           echo "</div>";

        }

        mysqli_close($con);
      }

  function ExibeConteudosAcessados(){
    $conect = new Conexao;
    $con = $conect->Conecta();
    $count = 0;
    $SelecaoAcessadosQuery = mysqli_query($con,"SELECT id_curso,nm_curso, descricao_curso, img_curso
                                                FROM tb_curso_usuario
                                                INNER JOIN tb_Curso ON tb_curso_usuario.id_curso_cu = tb_Curso.id_curso
                                                WHERE id_usuario_cu = " . $_SESSION['usuario_logado'] . "
                                                ORDER BY date_access DESC LIMIT 6;");
    $result = mysqli_num_rows($SelecaoAcessadosQuery);
    if($result != false){
      echo "<h5 class='display-3'>Conteúdos em andamento</h5>";
      echo "<div id='carouselExampleIndicators' class='carousel slide' data-ride='carousel' data-interval='0'>";
      while($SelecaoAcessados = mysqli_fetch_array($SelecaoAcessadosQuery)){

            if($count == 0){
              echo   "<div class='carousel-inner'>
                      <div class='carousel-item active'>
                          <div class='row'>";
            }

            if($count == 3){
              echo "<div class='carousel-item'>
                      <div class='row'>";
            }

            echo  "    <div class='col-sm-2'>
                            <div class='card' style='width: 18rem;'>
                              <img class='card-img-top' id='img_card' src='views/img/img_cursos/" . $SelecaoAcessados['img_curso'] . "' alt='Imagem de capa do card'>
                              <div class='card-body'>
                                <h5 class='card-title'>" . $SelecaoAcessados['nm_curso'] . " </h5>
                                <p class='card-text'>" . $SelecaoAcessados['descricao_curso'] . " </p>
                                <form action='?page=assuntos' method='post'>
                                    <button class='btn btn-primary' name='Btn_assunto' value='" . $SelecaoAcessados['id_curso'] . "'>Visitar</button>
                                </form>
                              </div>
                            </div>
                        </div>";

            if($count == 2){
                echo "</div>
                  </div>";
              }

            $count += 1;
          }
        /*  if($count)*/

          if($count < 3){
            echo "              </div>
                          </div>
                      </div>";
          }
          if($count == 3){
            echo " </div>";
          }

          if($count > 3){
            echo "              </div>
                          </div>
                      </div>
                            <a class='carousel-control-prev' href='#carouselExampleIndicators' role='button' data-slide='prev'>
                              <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                              <span class='sr-only'>Anterior</span>
                            </a>
                            <a class='carousel-control-next' href='#carouselExampleIndicators' role='button' data-slide='next'>
                              <span class='carousel-control-next-icon' aria-hidden='true'></span>
                              <span class='sr-only'>Próximo</span>
                            </a>";
          }

        echo "</div>";


    }
    mysqli_close($con);
  }


}

 ?>
