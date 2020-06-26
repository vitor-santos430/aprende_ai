<?php
require './models/conexao.php';
    class Pages{
        public function CadastroMaterial(){
            require 'views/header_logado.php';
            require 'views/cadastro_material.php';
            require 'views/footer.php';
            $this->CadastramentoMaterial();


        }
        public function CadastramentoMaterial(){
          if(isset($_POST['btn_enviar']) and
             isset($_POST['titulo_Conteudo']) and
             isset($_POST['descricao_Conteudo']) and
             isset($_POST['conteudo'])){
            $conect = new Conexao;
            $con = $conect->Conecta();




            $tituloConteudo = $_POST['titulo_Conteudo'];
            $descricaoConteudo = $_POST['descricao_Conteudo'];
            $conteudo = $_POST['conteudo'];

            if (isset($_POST['SelecaoTema'])) {
              $selecaoTema = $_POST['SelecaoTema'];
              if (isset($_POST['SelecaoAssunto'])) {
                $selecaoAssunto = $_POST['SelecaoAssunto'];
                if(isset($_FILES['img_Conteudo'])){
                $ext = strtolower(substr($_FILES['img_Conteudo']['name'],-4)); //Pegando extensão do arquivo

                $selecionaUltimoInsertQuery = mysqli_query($con,"SELECT id_assunto
                                                                 from tb_assunto
                                                                 ORDER BY id_assunto desc
                                                                 LIMIT 1;");


                $SelecionaUltimoInsert = mysqli_fetch_assoc($selecionaUltimoInsertQuery);
                $dadosUltimoInsert = (int)$SelecionaUltimoInsert['id_assunto'] + 1;


                $SelecionaUltimoInsertRow = mysqli_num_rows($selecionaUltimoInsertQuery);

                  if ($SelecionaUltimoInsertRow > 0) {
                    $adicionaConteudoQuery = mysqli_query($con,"INSERT INTO tb_assunto (nm_assunto, descricao_assunto, conteudo_assunto, img_assunto, assunto_curso, st_ativo)
                                                                VALUES ('".$tituloConteudo."','".$descricaoConteudo."','".$conteudo."','" . $dadosUltimoInsert . $ext . "', $selecaoAssunto ,0);");
                                                                $new_name =  $dadosUltimoInsert . $ext; //Definindo um novo nome para o arquivo
                                                                $dir = './views/img/img_assuntos/'; //Diretório para uploads
                                                                move_uploaded_file($_FILES['img_Conteudo']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
                                                                echo  "<script>alert('O Conteudo $tituloConteudo foi cadastrado com sucesso');</script>";
                  }
                  else {
                    $adicionaConteudoQuery = mysqli_query($con,"INSERT INTO tb_assunto (nm_assunto, descricao_assunto, conteudo_assunto, img_assunto, assunto_curso, st_ativo)
                                                                VALUES ('".$tituloConteudo."','".$descricaoConteudo."','".$conteudo."','1".$ext."',1,0);");
                                                                $new_name = "1" . $ext; //Definindo um novo nome para o arquivo
                                                                $dir = './views/img/img_assuntos/'; //Diretório para uploads
                                                                move_uploaded_file($_FILES['img_Conteudo']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
                                                                echo  "<script>alert('O Conteudo $tituloConteudo foi cadastrado com sucesso');</script>";

                  }

                }
                else {
                echo  "<script>alert('Imagem não selecionada!');</script>";
                }

              }
              else {
                echo "<script>alert('Assunto não selecionado!');</script>";
              }

            }
            else {
              echo "<script>alert('Tema não selecionado!');</script>";
            }

            mysqli_close($con);
          }

        }

        public function SelecionaTema(){
          $conect = new Conexao;
          $con = $conect->Conecta();
          $temaQuery = mysqli_query($con,"SELECT id_tema, nm_tema, img_tema, descricao_tema
                                          FROM tb_tema;");
          $temaRow = mysqli_num_rows($temaQuery);

          if ($temaRow != 0) {
            $contador = 1;
            $exibicao = mysqli_fetch_assoc($temaQuery);
              while ($contador <= $temaRow) {
                echo "<option class='dropdown-item' name='".$exibicao['id_tema']."' value='".$exibicao['id_tema']."' >". $exibicao['nm_tema'] . "</option>";
                      $contador++;
                    }
            }
          mysqli_close($con);
        }

        public function SelecionaAssunto(){
          $conect = new Conexao;
          $con = $conect->Conecta();
          $SelecaoAssunto = mysqli_query($con,"SELECT id_curso, nm_curso FROM tb_curso");

          $assuntoRow = mysqli_num_rows($SelecaoAssunto);
          if ($assuntoRow != 0) {
            while($exibicao = mysqli_fetch_array($SelecaoAssunto)){
                      echo  "<option class='dropdown-item' value='".$exibicao['id_curso']."' >". $exibicao['nm_curso'] . "</option>";
                }
            }
            mysqli_close($con);
        }


    }
?>
