<?php
    class Pages{
        public function Material(){
            require 'views/header.php';
            require 'views/material.php';
            require 'views/footer.php';

	        if(isset($_POST['btn_enviar'])){
		        echo "<script>alert('Certo');</script>";
	        }
        }
    }
?>