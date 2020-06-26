<?php
require './models/conexao.php';
    class Pages{
        public function CadastroVaga(){
            require 'views/header_logado.php';
            require 'views/cadastro_vaga.php';
            require 'views/footer.php';

            $this->CadastramentoVaga();

        }

        public function CadastramentoVaga(){
            if(isset($_POST['btn_enviar'])){
              $conect = new Conexao;
              $con = $conect->Conecta();

              if ($_POST['nome_Vaga'] != '') {
                $tituloVaga = $_POST['nome_Vaga'];

                if ($_POST['descricao_Vaga'] != '') {
                  $descricaoVaga = $_POST['descricao_Vaga'];

                  if ($_POST['nome_Postador'] != '') {
                    $nomePostador = $_POST['nome_Postador'];

                    if ($_POST['email_Vaga'] != '') {
                      $email_Vaga = $_POST['email_Vaga'];

                      $queryInsereVaga = "INSERT INTO tb_vagas(NomeDaVaga,descricaoVaga, email_vaga, nome_contato, st_ativo, id_empresa)
                                          VALUES('$tituloVaga','$descricaoVaga','$email_Vaga','$nomePostador',1," . $_SESSION['usuario_logado'] .");";

                      if ($Inserir = mysqli_query($con,$queryInsereVaga)) {
                        echo "<script>alert('A vaga $tituloVaga foi criada com sucesso')</script>";
                      }
                      else {
                        echo "<script>alert('Erro ao criar a vaga $tituloVaga')</script>";
                      }

                    }
                    else {
                      echo "<script>alert('Favor preencher o campo e-mail!');</script>";
                    }

                  }
                  else {
                    echo "<script>alert('Favor preencher o campo com o nome do postador!');</script>";
                  }

                }
                else {
                  echo "<script>alert('Favor preencher o campo com a descrição da vaga!');</script>";
                }

              }
              else {
                echo "<script>alert('Favor preencher o campo com o nome da vaga!');</script>";
              }

              mysqli_close($con);
            }


        }
    }
?>
