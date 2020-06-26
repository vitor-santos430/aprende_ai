<?php
    require 'models/conexao.php';

    class PessoaJuridica{
        public function CadastraPJ(
            $nome,
            $razaoSocial,
            $cnpj,
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

            $comando = "INSERT INTO tb_usuario(nome_usuario,sobrenome_usuario,apelido_usuario,email_usuario,senha_usuario,cpf,cnpj,endereco,complemento,cidade,estado,cep,tipo_usuario,permissao_conteudo,img_usuario,st_ativo) values ('$nome','$razaoSocial','$usuario','$email','$senha',null,'$cnpj','$endereco','$complemento','$cidade','$estado','$cep',2,0,'avatar.jpg','s')";

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
                                    <p>Você também pode divulgar a sua empresa em nosso site. Encaminhe  um e-mail para <a href="mailto:aprendeai@batata.com.br" target="_blank">aprendeai@batata.com.br</a> para mais informações</p>
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

            mysqli_close($con);
        }
    }
?>
