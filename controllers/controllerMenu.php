<?php
    class Pages{
        public function ExibirMenu(){
            require 'views/header.php';
            require 'views/menu.php';
            require 'views/footer.php';

	        if(isset($_POST['btn_enviar'])){
		        echo "<script>alert('Certo');</script>";
	        }
        }
    }
?>