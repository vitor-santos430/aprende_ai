<?php
    require 'models/conexao.php';
    class Usuario{
        public function Login($usuario,$senha){
            $conect = new Conexao;
            $con = $conect->Conecta();

            $comando = "SELECT * from tb_usuario where apelido_usuario = '$usuario' and BINARY senha_usuario = '$senha' and st_ativo = 's'";

            $executeQuery = mysqli_query($con,$comando);

            if($dados = mysqli_fetch_assoc($executeQuery)){
                $id = $dados['id_usuario'];
                $_SESSION['usuario_logado'] = $id;
                echo "
                    <script>
                        window.location.href = '?page=Cursos'
                    </script>";
            }else{
                echo "<span class='container'><p class='text-center text-danger'>Usuário ou senha inválidos, cadastre seu usuário clicando <a href='?page=EscolhaCadastro'>aqui.</a></p></span>";
            }

            mysqli_close($con);
        }
    }
?>
