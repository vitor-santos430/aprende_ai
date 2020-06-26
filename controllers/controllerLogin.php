<?php
    class Pages{
        public function ExibirLogin(){
            require 'views/header.php';
            require 'views/login.php';
            

            require 'models/modelUsuario.php';
            $user = new Usuario;
            if(isset($_POST['btn_enviar'])){
                $usuario = $_POST['login'];
                $senha = $_POST['senha'];
                $user->Login($usuario,$senha);
            }
            require 'views/footer.php';
        }
    }
?>