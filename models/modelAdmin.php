<?php
require './models/conexao.php';
class ModelAdmin
{
    public function LoginAdmin($usuario,$senha)
    {
        $conect = new Conexao;
        $con = $conect->Conecta();

        $comando = "SELECT * FROM tb_administrador where usuario = '$usuario' and senha = '$senha'";

        $executeQuery = mysqli_query($con,$comando);

        if($dados = mysqli_fetch_assoc($executeQuery))
        {
            $id = $dados['id_admin'];
            $_SESSION['admin_logado'] = $id;
            echo "<script>window.location.href = '?page=painelAdmin';</script>";
        }
        else
        {
          echo "<span class='text-danger'>Usuário não encontrado. <a href='?page=adminEsc'>Esqueceu sua senha?</a> </span>";
        }

        mysqli_close($con);
    }
    public function ListaUsuarios()
    {
        $conect = new Conexao;
        $con = $conect->Conecta();

        $comando = "SELECT * FROM tb_usuario";
        $executeQuery = mysqli_query($con, $comando);

        $nomes = [];

        if(mysqli_num_rows($executeQuery) != null)
        {
          while ($dados = mysqli_fetch_assoc($executeQuery))
          {
              $nomes = $dados['nome_usuario'];
          }
        }
        else
        {
            echo 'Nenhum usuário encontrado.';
        }

        mysqli_close($con);
        return $nomes;
    }
}

 ?>
