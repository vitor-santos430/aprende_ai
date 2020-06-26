<?php
    class Pages{
        public function ExibirForum(){
            require 'views/header_logado.php';
            require 'views/forum.php';
            require 'views/footer.php';

	        if(isset($_POST['btn_enviar'])){
		        echo "<script>alert('Certo');</script>";
	        }
        }
    }
?>