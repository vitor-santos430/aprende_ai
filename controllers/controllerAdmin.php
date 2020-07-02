<?php
  class Pages
  {
    public function exibirAdmin()
    {
        require './views/header_admin.php';
        require './views/admin_login.php';
        require './models/ModelAdmin.php';

        if(isset($_POST['btn_enviar']))
        {
            $dadosAdmin = new ModelAdmin;
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            echo "<div class='text-center ml-5 pl-5 mt-4'>";
            $dadosAdmin->LoginAdmin($usuario,$senha);
            echo "</div>";
        }


        require './views/footer.php';
    }
    public function exibirPainel()
    {
      require './views/painelAdmin.php';
    }

  }
?>
