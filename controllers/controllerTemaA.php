<?php
    class Pages{
        public function ExibirMenu(){
            require 'views/header_logado.php';
            require 'views/temaA.php';
            require 'views/footer.php';

	        if(isset($_POST['btn_enviar'])){
		        echo "<script>alert('Certo');</script>";
	        }
        }
    }
?>
