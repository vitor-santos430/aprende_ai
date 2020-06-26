<?php
    //require '../models/modelPF.php';
    require './models/modelPF.php';
    require './utils/valida.php';
    class Pages{
        public function ExibirCadastro(){

            $modelPF = new PessoaFisica;
            $valida = new Valida;
            require 'views/header.php';
            require 'views/cadastro_pf.php';
            if(isset($_POST['btn_enviar'])){
                $nome = $_POST['nome'];
                $sobrenome = $_POST['sobrenome'];
                $cpf = $_POST['cpf'];
                $usuario = $_POST['usuario'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $confirmaSenha = $_POST['confirmaSenha'];
                $endereco = $_POST['endereco'];
                $complemento = $_POST['complemento'];
                $cidade = $_POST['cidade'];
                $estado = $_POST['estado'];
                $cep = $_POST['cep'];

                $validadeCPF = $valida->cpf($cpf);
                $validadeSENHA = $valida->senha($senha,$confirmaSenha);
                $validadeCEP = $valida->cep($cep);


                //margem de erros
                echo "<div class='container text-center'>";
                if($validadeCPF == true && $validadeSENHA == true && $validadeCEP == true){
                    $modelPF->CadastraPF(
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
                    );
                }

                
                if($validadeCPF == false){
                    echo "
                    <div class='alert-danger p-2 m-1'>
                        CPF inválido, certifique-se de colocar somente números e 11 caracteres.
                    </div>
                    ";
                }
                if($validadeSENHA == false){
                    echo "
                    <div class='alert-danger p-2 m-1'>
                        Verifique se sua senha contem de 8 a 20 caracteres e se elas são iguais.
                    </div>
                    ";
                }
                if($validadeCEP == false){
                    echo "
                    <div class='alert-danger p-2 m-1'>
                        CEP inválido, você deve digitar apenas 8 caracteres e somente números.
                    </div>
                        ";
                }
                echo "</div>";
                
	        }
            require 'views/footer.php';

	        
        }
    }
?>