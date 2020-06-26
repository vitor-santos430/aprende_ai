<?php

    require './models/modelPJ.php';
    require './utils/valida.php';
    class Pages{
        public function ExibirCadastro(){
            $modelPJ = new PessoaJuridica;
            $valida = new Valida;
            require 'views/header.php';
            require 'views/cadastro_pj.php';
            if(isset($_POST['btn_enviar'])){
                $nome = $_POST['nome'];
                $razaoSocial = $_POST['razaoSocial'];
                $cnpj = $_POST['cnpj'];
                $usuario = $_POST['usuario'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $confirmaSenha = $_POST['confirmaSenha'];
                $endereco = $_POST['endereco'];
                $complemento = $_POST['complemento'];
                $cidade = $_POST['cidade'];
                $estado = $_POST['estado'];
                $cep = $_POST['cep'];

                $validadeCNPJ = $valida->cnpj($cnpj);
                $validadeSENHA = $valida->senha($senha,$confirmaSenha);
                $validadeCEP = $valida->cep($cep);

                //margem de erros
                echo "<div class='container text-center'>";
                if($validadeCNPJ == true && $validadeSENHA == true && $validadeCEP == true)
                {
                    $modelPJ->CadastraPJ(
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
                    );
                }
                if($validadeCNPJ == false){
                    echo "
                    <div class='alert-danger p-2 m-1'>
                        CNPJ inválido, certifique-se de colocar somente números e 14 caracteres.
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