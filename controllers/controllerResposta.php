<?php
    class Pages{
        public function ExibirResposta(){
            require 'views/header.php';
            require 'views/resposta.php';
            require 'views/footer.php';

            if(isset($_POST['btn_enviar'])){
                echo "<script>alert('Certo');</script>";
            }
        }
    }
?>