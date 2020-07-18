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
        require './models/ModelAdmin.php';
        $dadosAdmin = new ModelAdmin;

        $_GET['type'] = isset($_GET['type'])?$_GET['type']:'';
        if($_GET['type'] == 'usuarios')
        {
          $titulo = 'Usuários';
          $dadosPF = $dadosAdmin->ListaUsuarios(1);
          $dadosPJ = $dadosAdmin->ListaUsuarios(2);
        }
        else if($_GET['type'] == 'pedidos')
        {
          $titulo = 'Pedidos';

          $respostaPostador = $dadosAdmin->ListaPedidosPostador();

          $posted = isset($_GET['posted'])?$_GET['posted']:'';

          $id = isset($_GET['id'])?$_GET['id']:'';


          if($posted == 'aceitar')
          {
            $dadosAdmin->RespostaPedidoPostador(1,$id);
          }
          else if($posted == 'negar')
          {
            $dadosAdmin->RespostaPedidoPostador(0,$id);
          }


        }
        else if($_GET['type'] == 'conteudos')
        {
          $titulo = 'Conteúdos';
          $dadosConteudos = $dadosAdmin->ListarAssuntos();

          $content = isset($_GET['content'])?$_GET['content']:'';
          $id = isset($_GET['id'])?$_GET['id']:'';

          if($content == 'aceitar')
          {
            $dadosAdmin->RespostaPedidoConteudo(1,$id);
          }
          else if($content == 'negar')
          {
            $dadosAdmin->RespostaPedidoConteudo(0,$id);
          }
        }
        else if($_GET['type'] == 'anuncios')
        {
          $titulo = 'Anúncios';
        }
        else if($_GET['type'] == 'seguranca')
        {
          $titulo = 'Segurança';
        }
        else
        {
          $titulo = 'Bem-Vindo!';
        }

        require './views/painelAdmin.php';

    }

  }
?>
