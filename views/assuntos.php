<?php
  if(!isset($_SESSION['usuario_logado'])){
    echo "
    <script>
      window.location.href = '?page=home';
    </script>
    ";
  }
?>
<link rel="stylesheet" href="css/styles_Cursos.css">
<meta charset="utf-8">
<div class="container">
<?php
    require './utils/FunAssuntos.php';
    $Functions = new FunAssuntos;

    $ExibirAssuntos = $Functions->ExibeAssuntos($_POST['Btn_assunto']);

 ?>
