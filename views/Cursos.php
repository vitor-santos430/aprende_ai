<?php
  if(!isset($_SESSION['usuario_logado'])){
    echo "
    <script>
      window.location.href = '?page=home';
    </script>
    ";
  }
?>
<html lang="pt" dir="ltr">
<link rel="stylesheet" href="css/styles_Cursos.css">

<meta charset="utf-8">
<div class="container">
<?php
  require './utils/FunCursos.php';
  $Functions = new FunCursos;
  $ExebirUltimoConteudoAcessado = $Functions->ExibeUltimoConteudoAcessado();
  $ExibirConteudosAcessados = $Functions->ExibeConteudosAcessados();
  $ExibirCursosRecentes = $Functions->ExibeConteudosAdicionados();
  $ExibirTodosOsCursos =  $Functions->ExibeCursos();


 ?>

</html>
