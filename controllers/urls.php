<?php

    class Urls{
        public function Home(){
            require 'controllers/controllerHome.php';
            $pages = new Pages;
            $pages->ExibirHome();
        }
        public function EscolhaCadastro(){
            require 'controllers/controllerEscolhaCadastro.php';
            $pages = new Pages;
            $pages->EscolhaCadastro();
        }
        public function Logar(){
            require 'controllers/controllerLogin.php';
            $pages = new Pages;
            $pages->ExibirLogin();
        }
        public function CadastroPF(){
            require 'controllers/controllerCadastroPf.php';
            $pages = new Pages;
            $pages->ExibirCadastro();
        }
        public function CadastroPJ(){
            require 'controllers/controllerCadastroPj.php';
            $pages = new Pages;
            $pages->ExibirCadastro();
        }
        public function MinhaConta(){
            require 'controllers/controllerMinhaConta.php';
            $pages = new Pages;
            $pages->MinhaConta();
        }
        public function CadastroVaga(){
            require 'controllers/controllerCadastroVaga.php';
            $pages = new Pages;
            $pages->CadastroVaga();
        }
        public function Vagas(){
            require 'controllers/controllerVagas.php';
            $pages = new Pages;
            $pages->Vagas();
        }

        public function CadastroMaterial(){
            require 'controllers/controllerCadastroMaterial.php';
            $pages = new Pages;
            $pages->CadastroMaterial();
        }
        public function Material(){
            require 'controllers/controllerMaterial.php';
            $pages = new Pages;
            $pages->Material();
        }
        public function ExibirForum(){
        	require 'controllers/controllerForum.php';
        	$pages = new Pages;
            $pages->ExibirForum();
        }
        public function ExibirResposta(){
        	require 'controllers/controllerResposta.php';
        	$pages = new Pages;
            $pages->ExibirResposta();
        }
        public function Cursos(){
            require 'controllers/controllerCursos.php';
            $pages = new Pages;
            $pages->ExibirCursos();
          }
        public function ExibirMenu(){
            require 'controllers/controllerTemaA.php';
            $pages = new Pages;
            $pages->ExibirMenu();
        }
        public function Assuntos(){
          require 'controllers/controllerAssuntos.php';
          $pages = new Pages;
          $pages->Assuntos();
        }
        public function ExibirTemas(){
          require 'controllers/controllerTemas.php';
          $pages = new Pages;
          $pages->ExibirTemas();
        }
        public function NovoAssunto(){
          require 'controllers/controllerNovo_Assunto.php';
          $pages = new Pages;
          $pages->ExibirTemas();
        }
        public function exibirErro404(){
          require 'controllers/controller404.php';
          $pages = new Pages;
          $pages->exibirErro404();
        }


    }
?>
