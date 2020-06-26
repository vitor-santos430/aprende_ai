<?php
    class Pages{
        public function exibirErro404(){
          if (!isset($_SESSION['usuario_logado'])) {
            require 'views/header.php';
          }
          else {
            require 'views/header_logado.php';
          }

            echo "ERROR 404";
            require 'views/footer.php';
        }
    }
?>
