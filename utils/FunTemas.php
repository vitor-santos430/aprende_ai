<?php
    require './models/conexao.php';
  class FunTemas{

    function ExibeTema($tema){
      $conect = new Conexao;
      $con = $conect->Conecta();
      $temaQuery = mysqli_query($con,"SELECT nm_tema, img_tema, descricao_tema
                                                 FROM tb_tema
                                                 WHERE id_tema =" . $tema . "
                                                 LIMIT 1;");
      $temaRow = mysqli_num_rows($temaQuery);

      if ($temaRow != 0) {
        $exibicao = mysqli_fetch_assoc($temaQuery);
        echo "<div class='img'>
                <img src='views/img/img_temas/". $exibicao['img_tema'] . "' style='width: 1100px; height: 400px;'>
              </div>
              <div id='titulo'>
                <h1>" . $exibicao['nm_tema'] . "</h1>
              </div>
              <div>" . $exibicao['descricao_tema'] . "
              </div>";
      }
      mysqli_close($con);
    }

    function ExibeSubTemas($tema){

      $conect = new Conexao;
      $con = $conect->Conecta();
      $sideBarQuery = mysqli_query($con,"SELECT id_curso ,nm_curso
                                         FROM tb_curso
                                         WHERE tema_curso =" . $tema);

      $sideBarRow = mysqli_num_rows($sideBarQuery);
      if($sideBarRow > 0){
        while($exibicao = mysqli_fetch_array($sideBarQuery)){
            echo "<form class='' action='?page=assuntos' method='post'>
                    <button name='Btn_assunto' value='" . $exibicao['id_curso'] . "'> " . $exibicao['nm_curso'] . "</button>
                  </form>";
        }

      }
           mysqli_close($con);
    }
  }

?>
