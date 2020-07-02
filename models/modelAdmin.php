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

        if(mysqli_fetch_assoc($executeQuery))
        {
            echo "OK";
        }
        else
        {
          echo "<span class='text-danger'>Usuário não encontrado. <a href='?page=adminEsc'>Esqueceu sua senha?</a> </span>";
        }

        mysqli_close($con);
    }
}

 ?>
