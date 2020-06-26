<?php
  require './models/conexao.php';
  class FunAssuntos{

    function ExibeAssuntos($id_curso){
      unset($_SESSION['curso_clicado']);
      $count = 1;
      $conect = new Conexao;
      $con = $conect->Conecta();
      $exibeAssuntosQuery = mysqli_query($con,"SELECT *
                                               FROM tb_assunto
                                               WHERE assunto_curso =  $id_curso AND st_ativo = 1");

      $nomeConteudoQuery = mysqli_query($con,"SELECT nm_curso
                                               FROM tb_curso
                                               WHERE id_curso =" . $id_curso . "
                                                LIMIT 1;");
      $currentDate = date('Y/m/d H:i:s');

      $SelecaoCursoAluno =  mysqli_query($con, "SELECT *
                                                FROM tb_curso_usuario
                                                WHERE id_usuario_cu = " . $_SESSION['usuario_logado'] . "
                                                and id_curso_cu = " . $id_curso);

      $updateDateQuery = mysqli_query($con, "UPDATE tb_curso_usuario
                                            SET date_access = '" . $currentDate . "'
                                            WHERE id_usuario_cu = " . $_SESSION['usuario_logado'] . "
                                            and id_curso_cu = " . $id_curso);

      $rowUpdate = mysqli_num_rows($SelecaoCursoAluno);
      if ($rowUpdate == 0) {
            $create_date_query = mysqli_query($con, "INSERT INTO tb_curso_usuario (date_access, id_curso_cu, id_usuario_cu )
                                         VALUES('" .$currentDate . "', " . $id_curso . " , " . $_SESSION['usuario_logado'] . ");");
            }
      $result = mysqli_num_rows($nomeConteudoQuery);
      $result2 = mysqli_num_rows($exibeAssuntosQuery);


      if($result != false and $result2 != false){
        $nome_Conteudo = mysqli_fetch_assoc($nomeConteudoQuery);
        echo "<h5 class='display-3'>Assuntos sobre " . $nome_Conteudo['nm_curso'] . " disponíveis</h5>
               <div class='row'>";
        while($exibicao = mysqli_fetch_array($exibeAssuntosQuery)){
          echo " <div class='col-sm-2'>
                   <div class='card' style='width: 18rem;'>
                      <img class='card-img-top' id='img_card' src='views/img/img_assuntos/" . $exibicao['img_assunto'] . "' alt='Imagem de capa do card'>
                          <div class='card-body'>
                            <h5 class='card-title'>". $count . "- " . $exibicao['nm_assunto'] . " </h5>
                            <p class='card-text'>" . $exibicao['descricao_assunto'] . " </p>
                            <form action='?page=temaA' method='post'>
                                <button class='btn btn-primary' name='Btn_assunto' value='" . $exibicao['id_assunto'] . "'>Visitar</button>
                            </form>
                          </div>
                    </div>
                  </div>";
                  $count++;
        }
        echo "</div>";
      }
      mysqli_close($con);
      $_SESSION['curso_clicado'] = $id_curso;


    }
  }


 ?>
