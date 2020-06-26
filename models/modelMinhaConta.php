<?php
    require './models/conexao.php';
    class MinhaConta{    
        function TrazDados(){
            $conect = new Conexao;
            $con = $conect->Conecta();
            $id = $_SESSION['usuario_logado'];

            $comando = "SELECT * from tb_usuario where id_usuario = $id";

            $executeQuery = mysqli_query($con,$comando);

            while($dados = mysqli_fetch_assoc($executeQuery)){
                $img = $dados['img_usuario'];
                $nome = $dados['nome_usuario'];
                $sobrenome = $dados['sobrenome_usuario'];
                $apelido = $dados['apelido_usuario'];
                $email = $dados['email_usuario'];
                $cpf = $dados['cpf'];
                $cnpj = $dados['cnpj'];
                $endereco = $dados['endereco'];
                $complemento = $dados['complemento'];
                $cidade = $dados['cidade'];
                $estado = $dados['estado'];
                $cep = $dados['cep'];
                $tp_usuario = $dados['tipo_usuario'];
            }

            mysqli_close($con);

            return array(
                "img" => $img,
                "nome" => $nome,
                "sobrenome" => $sobrenome,
                "apelido" => $apelido,
                "email" => $email,
                "cpf" => $cpf,
                "cnpj" => $cnpj,
                "endereco" => $endereco,
                "complemento" => $complemento,
                "cidade" => $cidade,
                "estado" => $estado,
                "cep" => $cep,
                "tp_usuario" => $tp_usuario
            );
        }
        function AtualizaConta(
            $img,
            $nome,
            $sobrenome,
            //$apelido,
            $email,
            $cpf,
            $endereco,
            $complemento,
            $cidade,
            $estado,
            $cep,
            $senha
        ){
            $id = $_SESSION['usuario_logado'] ;

            $conect = new Conexao;
            $con = $conect->Conecta();

            $comando = "SELECT * from tb_usuario where id_usuario = '$id' and senha_usuario = '$senha'";

            $executeQuery = mysqli_query($con,$comando);

            if(mysqli_fetch_assoc($executeQuery)){
                                
                $comando = "UPDATE tb_usuario set 
                img_usuario = '$img',
                nome_usuario = '$nome',
                sobrenome_usuario = '$sobrenome',
                email_usuario = '$email',
                cpf = '$cpf',
                endereco = '$endereco',
                complemento = '$complemento',
                cidade = '$cidade',
                estado = '$estado',
                cep = '$cep'
                WHERE id_usuario = $id
                ";

                if($executeQuery = mysqli_query($con, $comando)){
                    echo "
                    <script>
                        alert('Dados alterados com sucesso.');
                        window.location.href = '?page=Cursos';
                    </script>
                    ";
                }else{
                    echo "
                    <div class='container alert-danger p-2'>
                        Falha ao alterar dados, verifique cada um dos campos e tente novamente.
                    </div>
                ";
                }
            }else{
                echo "
                <div class='container alert-danger p-2'>
                    A senha está errada. Digite a senha correta para alterar os dados.
                </div>
                ";
            }

            mysqli_close($con);
        }
        function AtualizaContaPJ(
            $img,
            $nome,
            $razaoSocial,
            //$apelido,
            $email,
            $cnpj,
            $endereco,
            $complemento,
            $cidade,
            $estado,
            $cep,
            $senha
        ){
            $id = $_SESSION['usuario_logado'] ;

            $conect = new Conexao;
            $con = $conect->Conecta();

            $comando = "SELECT * from tb_usuario where id_usuario = '$id' and senha_usuario = '$senha'";

            $executeQuery = mysqli_query($con,$comando);

            if(mysqli_fetch_assoc($executeQuery)){
                                
                $comando = "UPDATE tb_usuario set 
                img_usuario = '$img',
                nome_usuario = '$nome',
                sobrenome_usuario = '$razaoSocial',
                email_usuario = '$email',
                cnpj = '$cnpj',
                endereco = '$endereco',
                complemento = '$complemento',
                cidade = '$cidade',
                estado = '$estado',
                cep = '$cep'
                WHERE id_usuario = $id
                ";

                if($executeQuery = mysqli_query($con, $comando)){
                    echo "
                    <script>
                        alert('Dados alterados com sucesso.');
                        window.location.href = '?page=Cursos';
                    </script>
                    ";
                }else{
                    echo "
                    <div class='container alert-danger p-2'>
                        Falha ao alterar dados, verifique cada um dos campos e tente novamente.
                    </div>
                ";
                }
            }else{
                echo "
                <div class='container alert-danger p-2'>
                    A senha está errada. Digite a senha correta para alterar os dados.
                </div>
                ";
            }

            mysqli_close($con);
        }   
    }
?>