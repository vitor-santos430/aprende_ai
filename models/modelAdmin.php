<?php
require './models/conexao.php';
class ModelAdmin
{

    public function LoginAdmin($usuario,$senha)
    {
        $conect = new Conexao;
        $con = $conect->Conecta();

        $comando = "SELECT * FROM tb_administrador where usuario = '$usuario' and BINARY senha = '$senha'";

        $executeQuery = mysqli_query($con,$comando);

        if($dados = mysqli_fetch_assoc($executeQuery))
        {
            $id = $dados['id_admin'];
            $_SESSION['admin_logado'] = $id;
            echo "<script>window.location.href = '?page=painelAdmin';</script>";
        }
        else
        {
          echo "<span class='text-danger'>Usuário ou senha inválido.  </span>";
        }

        mysqli_close($con);
    }
    public function ListaUsuarios($tipo)
    {
        $conect = new Conexao;
        $con = $conect->Conecta();

        $comando = "SELECT * FROM tb_usuario where tipo_usuario = $tipo";
        $executeQuery = mysqli_query($con, $comando);

        $nomes = [];
        $snomes = [];
        $usuarios = [];
        $emails = [];
        $permissoes = [];
        $ativos = [];

        if(mysqli_num_rows($executeQuery) != null)
        {
          while ($dados = mysqli_fetch_assoc($executeQuery))
          {
              $nomes[] = $dados['nome_usuario'];
              $snomes[] = $dados['sobrenome_usuario'];
              $usuarios[] = $dados['apelido_usuario'];
              $emails[] = $dados['email_usuario'];
              $permissoes[] = $dados['permissao_conteudo'];
              $ativos[] = $dados['st_ativo'];
          }
        }
        else
        {
            echo 'Nenhum usuário encontrado.';
        }

        mysqli_close($con);
        return array(
          'nomes'=>$nomes,
          'snomes'=>$snomes,
          'usuarios'=>$usuarios,
          'emails'=>$emails,
          'permissoes'=>$permissoes,
          'ativos'=>$ativos
        );
    }

    public function ListarAssuntos(){
      $conect = new Conexao;
      $con = $conect->Conecta();

      $comando = "SELECT id_assunto, nm_assunto, descricao_assunto, conteudo_assunto, img_assunto,st_ativo, ordem_assunto,nm_curso, nm_tema FROM tb_assunto a
                  inner join tb_curso c on a.assunto_curso = c.id_curso
                  inner join tb_tema t on c.tema_curso = t.id_tema
                  where st_ativo = 0";
      $executeQuery = mysqli_query($con, $comando);

      if (mysqli_num_rows($executeQuery) != null) {
        return array($dados = mysqli_fetch_assoc($executeQuery));
      }
      mysqli_close($con);

}
    public function ListaPedidosPostador()

    {
      $conect = new Conexao;
      $con = $conect->Conecta();

      $comando = "SELECT * FROM tb_usuario
      where Arquivo_permissao is not Null
      and Arquivo_permissao <> ''
      and permissao_conteudo = 0";

      $executeQuery = mysqli_query($con, $comando);

      if(mysqli_num_rows($executeQuery) != null)
      {
        while ($dados = mysqli_fetch_assoc($executeQuery))
        {
            $ids[] = $dados['id_usuario'];
            $nomes[] = $dados['nome_usuario'];
            $sobrenomes[] = $dados['sobrenome_usuario'];
            $arquivos[] = $dados['Arquivo_permissao'];
            $emails[] = $dados['email_usuario'];
        }
      }
      else
      {
          mysqli_close($con);
          return 0;
      }

      mysqli_close($con);
      return array(
        'ids'=>$ids,
        'nomes'=>$nomes,
        'sobrenomes'=>$sobrenomes,
        'arquivos'=>$arquivos,
        'emails'=>$emails
      );
    }

    public function RespostaPedidoConteudo($res, $id)
    {
        $conect = new Conexao;
        $con = $conect->Conecta();

        $comando = "UPDATE tb_assunto
        set st_ativo = $res where id_assunto = $id";
        $executeQuery = mysqli_query($con, $comando);

        if($executeQuery)
        {
          header('location: ?page=painelAdmin&type=conteudos');
        }
        else
        {
          echo "<script>alert('Erro ')</script>";
        }

        mysqli_close($con);
    }

    public function RespostaPedidoPostador($res, $id)
    {
        $conect = new Conexao;
        $con = $conect->Conecta();

        if($res != 0)
        {
          $comando = "UPDATE tb_usuario
          set permissao_conteudo = $res where id_usuario = $id";
        }
        else
        {
          $comando = "UPDATE tb_usuario
          set permissao_conteudo = $res,
          Arquivo_permissao = Null
          where id_usuario";
        }
        $executeQuery = mysqli_query($con, $comando);

        if($executeQuery)
        {
          header('location: ?page=painelAdmin&type=pedidos');
        }
        else
        {
          echo "<script>alert('Erro ')</script>";
        }

        mysqli_close($con);

    }

    public function adicionaNovoAdmin(){
      if (isset($_POST['btn_adicionar'])) {
        $conect = new Conexao;
        $con = $conect->Conecta();

        $user = $_POST['txt_usuario'];
        $senha = $_POST['txt_senha'];
        $perguntaDeSeguranca = $_POST['txt_pergunta_de_Seguranca'];
        $respostaDeSeguranca = $_POST['txt_resposta_de_Seguranca'];



        $comando = "INSERT INTO tb_administrador (usuario, senha, resposta_de_seguranca, pergunta_de_seguranca)
                    VALUES('$user', '$senha','$perguntaDeSeguranca','$respostaDeSeguranca')";

        if ($executeQuery = mysqli_query($con,$comando)) {
          echo "<script>alert('$user cadastrado com sucesso')</script>";
        }
        else {
          echo "<script>alert('não foi possivel cadastrar o usuario $user')</script>";
        }
        mysqli_close($con);
      }

    }

    public function aprovaConteudo(){
      $conect = new Conexao;
      $con = $conect->Conecta();

      if(isset($_POST['id_assunto'])){

        $ativo = substr($_POST['id_assunto'],-1);
        $id = substr($_POST['id_assunto'],0,-1);
        $ordem = $_POST['txt_ordem_assunto'];

        if($ativo == 1)
        {
          $comando = "CALL AtualizaOrdemAssunto($ativo, $ordem, $id);";

          $executeQuery = mysqli_query($con, $comando);
        }
        else if($ativo == 0)
        {
          $comando = "CALL AtualizaOrdemAssunto($ativo, $ordem, $id);";

          $executeQuery = mysqli_query($con, $comando);
        }
      }
      mysqli_close($con);
    }

    public function AlteraSenha($senha,$id)
    {
      $conect = new Conexao;
      $con = $conect->Conecta();

      $comando = "UPDATE tb_administrador
      set senha = '$senha'
      where id_admin = $id";

      if(mysqli_query($con, $comando))
      {
          mysqli_close($con);
          return "<p class='text-success'>Senha alterada com sucesso.</p>";
      }
      else
      {
          mysqli_close($con);
          return "<p class='text-danger'>Falha ao alterar senha.</p>";
      }

    }

}
 ?>
