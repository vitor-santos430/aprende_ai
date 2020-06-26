<?php
require './models/conexaoHeader.php';
    class FunHeader{

      function ExibeTemasDropDown(){
        $conect = new ConexaoHeader;
        $con = $conect->Conecta();

        $selecaoTemaQuery = mysqli_query($con,"SELECT id_tema, nm_tema
                                               FROM tb_tema;");

        $selecaoTemaRow = mysqli_num_rows($selecaoTemaQuery);
        if ($selecaoTemaRow != false) {
          while ($exibicao = mysqli_fetch_array($selecaoTemaQuery)) {
            echo "          <form class='' action='?page=temas' method='post'>
                                  <button class='dropdown-item' name='Btn_Temas' value='" . $exibicao['id_tema'] . "'>" . $exibicao['nm_tema'] . "</button>
                            </form>";
          }
        }
        mysqli_close($con);
      }

      function ExibePostarConteudo(){
        $conect = new ConexaoHeader;
        $con = $conect->Conecta();

        $verificaAcesso = mysqli_query($con,"SELECT permissao_conteudo FROM tb_usuario WHERE id_usuario = ".$_SESSION['usuario_logado'].";");

        $dados = mysqli_fetch_assoc($verificaAcesso);
       if ($dados['permissao_conteudo'] == 1) {
        echo  "<li class='nav-item'>
            <a class='nav-link' href='?page=cadastro_material'>Criar novo Material</a>
          </li>";
        }
        mysqli_close($con);

      }

      function ExibePostarVaga(){
        $conect = new ConexaoHeader;
        $con = $conect->Conecta();

        $verificaTipo_usuario = mysqli_query($con,"SELECT tipo_usuario FROM tb_usuario WHERE id_usuario = ".$_SESSION['usuario_logado'].";");

        $dados = mysqli_fetch_assoc($verificaTipo_usuario);
       if ($dados['tipo_usuario'] == 2) {
        echo  "<li class='nav-item'>
            <a class='nav-link' href='?page=cadastro_vaga'>Criar uma nova vaga</a>
          </li>";
        }
        mysqli_close($con);
      }

    }


?>
