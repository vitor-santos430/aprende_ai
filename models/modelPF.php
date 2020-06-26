<?php
    require 'models/conexao.php';

    class PessoaFisica{
        public function CadastraPF(
            $nome,
            $sobrenome,
            $cpf,
            $usuario,
            $email,
            $senha,
            $endereco,
            $complemento,
            $cidade,
            $estado,
            $cep
            ){
            $conect = new Conexao;
            $con = $conect->Conecta();

            $comando = "SELECT * from tb_usuario where cpf = '$cpf'
             or apelido_usuario = '$usuario'
             or email_usuario = '$email'";

            $executeQuery = mysqli_query($con, $comando);

            if($dados = mysqli_fetch_assoc($executeQuery)){

                if($dados['apelido_usuario'] == $usuario || $dados['cpf'] == $cpf || $dados['email_usuario'] == $email){
                    ?>
                <script>
                    $(document).ready(function(){
                        $("#myModal").modal();
                    });
                </script>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Falha no Cadastro!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Esse usuário já está cadastrado verifique o nome de usuário, CPF ou e-mail. Ou pode entrar em 
                                    contato com nossa equipe através do e-mail <a href="mailto:aprendeai@batata.com.br" target="_blank">aprendeai@batata.com.br</a>.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button trigger modal -->
                <?php
                }
            }else{
                $comando = "INSERT INTO tb_usuario(nome_usuario,sobrenome_usuario,apelido_usuario,email_usuario,senha_usuario,cpf,cnpj,endereco,complemento,cidade,estado,cep,tipo_usuario,permissao_conteudo,img_usuario,st_ativo) values ('$nome','$sobrenome','$usuario','$email','$senha','$cpf',null,'$endereco','$complemento','$cidade','$estado','$cep',1, 0,'avatar.jpg','s')";
                if(mysqli_query($con, $comando)){
                    ?>
                    <script>
                        $(document).ready(function(){
                            $("#myModal").modal();
                        });
                    </script>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Parabéns Pelo Cadastro!</h5>
                                        <a href="?page=login" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </a>
                                    </div>
                                    <div class="modal-body">
                                        <p>Opa! Parabéns agora você saberá por onde começar a estudar! Clique em OK ;-)</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="?page=login" class="btn btn-primary">Ok</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Button trigger modal -->
                    <?php
                }else{

                    echo "<script>alert('$comando');</script>";
                    echo mysqli_error($con);
                    echo "<script>alert('Falha no cadastro do usuário.');</script>";
                }
            }

            mysqli_close($con);
        }
    }
?>
