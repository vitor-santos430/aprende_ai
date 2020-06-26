<?php
require './models/conexao.php';
    class Pages{
        public function Vagas(){
            require 'views/header_logado.php';
            require 'views/vagas.php';
            require 'views/footer.php';
        }

        public function ExibeVagas(){
          $conect = new Conexao;
          $con = $conect->Conecta();

          $queryDadosContratante = "SELECT id_usuario ,nome_usuario, img_usuario
                                    from tb_assunto
                                    WHERE id_usuario = ".$_SESSION['usuario_logado'].";";

          $selecionaDadosContratante = mysqli_query($con,$queryDadosContratante);

          $queryExibeVagas = "SELECT *
                              FROM tb_vagas
                              WHERE st_ativo = 1";

          $executaExibeVagas = mysqli_query($con, $queryExibeVagas);

          while ($dadosVagas = mysqli_fetch_array($executaExibeVagas)) {
            echo "<div class='card'>
                <div class='card-header' id='heading".$dadosVagas['id_vaga']."'>
                  <h5 class='mb-0'>
                    <button class='btn btn-link collapsed' data-toggle='collapse' data-target='#collapse".$dadosVagas['id_vaga']."' aria-expanded='false' aria-controls='collapse".$dadosVagas['id_vaga']."'>
                      ".$dadosVagas['NomeDaVaga']."
                    </button>
                  </h5>
                </div>

                <div id='collapse".$dadosVagas['id_vaga']."' class='collapse' aria-labelledby='heading".$dadosVagas['id_vaga']."' data-parent='#accordion'>
                  <div class='card-body'>

                      <ul class='nav nav-pills mb-3' id='pills-tab' role='tablist'>

                        <li class='nav-item'>
                          <a class='nav-link active' id='pills-home-tab' data-toggle='pill' href='#pills-home".$dadosVagas['id_vaga']."' role='tab' aria-controls='pills-home' aria-selected='true'>Descrição</a>
                        </li>

                        <li class='nav-item'>
                          <a class='nav-link' id='pills-contact-tab' data-toggle='pill' href='#pills-contact".$dadosVagas['id_vaga']."' role='tab' aria-controls='pills-contact' aria-selected='false'>Contato</a>
                        </li>

                      </ul>

                      <div class='tab-content' id='pills-tabContent'>
                        <div class='tab-pane fade show active' id='pills-home".$dadosVagas['id_vaga']."' role='tabpanel' aria-labelledby='pills-home-tab'>"
                        .$dadosVagas['descricaoVaga'] .
                         "</div>
                        <div class='tab-pane fade' id='pills-contact".$dadosVagas['id_vaga']."' role='tabpanel' aria-labelledby='pills-contact-tab'>Nome do Postador: "
                        .$dadosVagas['nome_contato'].
                        " <br> E-mail: "
                        . $dadosVagas['email_Vaga'].
                        "</div>
                      </div>

                  </div>
                </div>
              </div>";
          }

        }
    }
?>
