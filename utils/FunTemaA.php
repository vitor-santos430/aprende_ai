<?php
    require './models/conexao.php';

  class FunTema{

    function ExibeMaterial($id_assunto){
      $conect = new Conexao;
      $con = $conect->Conecta();
      $assuntoConteudoQuery = mysqli_query($con,"SELECT nm_assunto, img_assunto, conteudo_assunto
                                                 FROM tb_assunto
                                                 WHERE id_assunto = $id_assunto AND st_ativo = 1
                                                 LIMIT 1;");
      $rowAssuntoCounteudoQuery = mysqli_num_rows($assuntoConteudoQuery);
      if ($rowAssuntoCounteudoQuery == 1) {
        $exibicao = mysqli_fetch_assoc($assuntoConteudoQuery);
        echo "<div class='img'>
                <img src='views/img/img_assuntos/". $exibicao['img_assunto'] . "' style='width: 1100px; height: 400px;'>
              </div>
              <div id='titulo'>
                <h1>" . $exibicao['nm_assunto'] . "</h1>
              </div>
              <div>" . $exibicao['conteudo_assunto'] . "
              </div>";
      }
     mysqli_close($con);
    }

    function ExibeSideBar($id_curso, $id_assunto){
      $count = 1;
      $conect = new Conexao;
      $con = $conect->Conecta();
      $sideBarQuery = mysqli_query($con,"SELECT * FROM tb_assunto WHERE assunto_curso = $id_curso AND st_ativo = 1");
      $arrDados = mysqli_fetch_assoc($sideBarQuery);
      $nLinhas = count($arrDados);
      //$sideBarRow = mysqli_num_rows($sideBarQuery);
      if($nLinhas > 0){
        while($exibicao = mysqli_fetch_array($sideBarQuery)){
          if($exibicao['id_assunto'] == $id_assunto){
            echo "<form class='' action='?page=temaA' method='post'>
                    <button name='Btn_assunto' value='" . $exibicao['id_assunto'] . "' style='color: red;'>" . $count .  "- " . $exibicao['nm_assunto'] . "</button>
                  </form>";
                  $count++;
          }
          else {
            echo "<form class='' action='?page=temaA' method='post'>
                    <button name='Btn_assunto' value='" . $exibicao['id_assunto'] . "'>" . $count .  "- " . $exibicao['nm_assunto'] . "</button>
                  </form>";
                  $count++;
          }

        }

      }
           mysqli_close($con);

    }

  }

 ?>
