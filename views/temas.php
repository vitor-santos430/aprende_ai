<?php
  if(!isset($_SESSION['usuario_logado'])){
    echo "
    <script>
      window.location.href = '?page=home';
    </script>
    ";
  }
?>
<link rel="stylesheet" href="css/styles_tema.css">

  <!-- Definição dos subtemas do Tema principal -->
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<?php
    require './utils/FunTemas.php';
    $Functions = new FunTemas;
    $exibirSubTemas = $Functions->ExibeSubTemas($_POST['Btn_Temas']);
 ?>
  </div>
  <!-- Icone do menu -->
  <span onclick="openNav()">
    <div class="margem">
      <div class="icone"></div>
      <div class="icone"></div>
      <div class="icone"></div>
    </div>
  </span>
  <div class="container">
  <!-- Div para inclusão de imagens -->
<?php
    $exibirTema = $Functions->ExibeTema($_POST['Btn_Temas']);

?>


<script type="text/javascript">
 /*Abrir menu lateral*/
 function openNav() {
    document.getElementById("mySidenav").style.width = "180px";
    document.getElementById("main").style.marginLeft = "2px";
    document.getElementById("titulo").style.marginLeft = "2px";
  }

  /*Fechar menu lateral*/
 function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("titulo").style.marginLeft = "0";
  }

</script>
