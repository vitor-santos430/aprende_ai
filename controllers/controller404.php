<?php
    class Pages{
        public function exibirErro404(){
          if (!isset($_SESSION['usuario_logado'])) {
            require 'views/header.php';
          }
          else {
            require 'views/header_logado.php';
          }

            require 'views/erro_404.php';
            require 'views/footer.php';
        }
    }
?>
