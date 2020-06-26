<?php
    class Pages{
        public function Minhaconta(){
            require 'views/header_logado.php';
            require './models/modelMinhaConta.php';
            
            $mconta = new MinhaConta;

            $dados = $mconta->TrazDados();

            $img = $dados['img'];
            $nome = $dados['nome'];
            $sobrenome = $dados['sobrenome'];
            $apelido = $dados['apelido'];
            $email = $dados['email'];
            $cpf = $dados['cpf'];
            $cnpj = $dados['cnpj'];
            $endereco = $dados['endereco'];
            $complemento = $dados['complemento'];
            $cidade = $dados['cidade'];
            $estado = $dados['estado'];
            $cep = $dados['cep'];
            $tp_usuario = $dados['tp_usuario'];

            if((int)$tp_usuario == 1)
            {
                require 'views/minha_conta.php';

                if(isset($_POST['btn_enviar'])){
                    //$img = $_FILES['img_perfil']['name'] == ""?$img:$_FILES['img_perfil']['name'];
                    if($_FILES['img_perfil']['name'] == "")
                    {
                        $img = $img;
                    }
                    else
                    {
                        $img = $_FILES['img_perfil']['name'];
                        $ext = strtolower(substr($_FILES['img_perfil']['name'],-4));
                        $dir = "./views/img/img_usuarios/";
                        $img = $cpf.$ext;
                        move_uploaded_file($_FILES['img_perfil']['tmp_name'],$dir.$img);
                    }
                    $nome = $_POST['nome'];
                    $sobrenome = $_POST['sobrenome'];
                    //$apelido = $_POST['apelido'];
                    $email = $_POST['email'];
                    $cpf = $_POST['cpf'];
                    $endereco = $_POST['endereco'];
                    $complemento = $_POST['complemento'];
                    $cidade = $_POST['cidade'];
                    $estado = $_POST['estado'];
                    $cep = $_POST['cep'];
                    $senha = $_POST['senha'];

                    $mconta->AtualizaConta(
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
                    );
                }
            }
            else
            {
                require 'views/minha_contapj.php';

                if(isset($_POST['btn_enviar'])){
                    if($_FILES['img_perfil']['name'] == "")
                    {
                        $img = $img;
                    }
                    else
                    {
                        $img = $_FILES['img_perfil']['name'];
                        $ext = strtolower(substr($_FILES['img_perfil']['name'],-4));
                        $dir = "./views/img/img_usuarios/";
                        $img = $cnpj.$ext;
                        move_uploaded_file($_FILES['img_perfil']['tmp_name'],$dir.$img);
                    }
                    $nome = $_POST['nome'];
                    $razaoSocial = $_POST['razaoSocial'];
                    //$apelido = $_POST['apelido'];
                    $email = $_POST['email'];
                    $cnpj = $_POST['cnpj'];
                    $endereco = $_POST['endereco'];
                    $complemento = $_POST['complemento'];
                    $cidade = $_POST['cidade'];
                    $estado = $_POST['estado'];
                    $cep = $_POST['cep'];
                    $senha = $_POST['senha'];

                    $mconta->AtualizaContaPJ(
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
                    );
                }
            }

            require 'views/footer.php';

        }
    }
?>