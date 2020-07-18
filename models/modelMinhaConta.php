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
            $senha){
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
            $senha){
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

        function verificaPermissao(){

              $conect = new Conexao;
              $con = $conect->Conecta();
              $id = $_SESSION['usuario_logado'];

              $comando = "SELECT * from tb_usuario where id_usuario = $id";

              $executeQuery = mysqli_query($con,$comando);

              $dados = mysqli_fetch_assoc($executeQuery);
              //verificar se ele já possui acesso

              if ($dados['Arquivo_permissao'] == "" && $dados['permissao_conteudo'] == 0){
                return 1;
              }
              //verificar se ele já solicitou acesso
              else if ($dados['Arquivo_permissao'] != "" && $dados['permissao_conteudo'] == 0) {
                return 2;
              }
              else {
                return 3;
              }
            }
            function RequisitarPermissao(){
              $id = $_SESSION['usuario_logado'];
              //se o botão postar foi pressionado
              if (isset($_POST['btn_Postar'])) {
                //ele vai verificar se o upload foi realizado
                $ext = strtolower(substr($_FILES['txt_documento']['name'],-4)); //Pegando extensão do arquivo
                $new_name =  $id . $ext; //Definindo um novo nome para o arquivo
                $dir = './views/Docs_Permissao/'; //Diretório para uploads
                if(move_uploaded_file($_FILES['txt_documento']['tmp_name'], $dir.$new_name)){ //Fazer upload do arquivo
                  $conect = new Conexao;
                  $con = $conect->Conecta();


                  $comando = "UPDATE tb_usuario SET Arquivo_permissao = '$id$ext'WHERE id_usuario = $id";

                  if($executeQuery = mysqli_query($con,$comando)){
                    echo " <script> alert('Solicitação realizada com sucesso!');
                                            window.location.href = '?page=minha_conta';
                           </script> ";

                  }


                }

                //então irá atualizar o banco




              }

        }
  }
?>
