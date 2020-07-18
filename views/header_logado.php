<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Aprende ai que é Batata!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
  <link rel="stylesheet" href="css/styles_geral.css">
 <link rel="stylesheet" href="css/styles_header.css">
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
 <style>
   /* Style the navbar */
#navbar {
  
  background-color: #333;
}

/* Navbar links */
#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

/* Page content */
.content {
  padding: 16px;
}

/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
<<<<<<< HEAD

}
.py-5{
  background:#ee9a13;
  
=======
>>>>>>> e281c6598eddb3f6d9fdf90192f02d578b0fa9c6
}

img#img_menu_sticky {
}
/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
} 
  </style>
</head>



<body>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
 <script>tinymce.init({selector:'#exampleFormControlTextarea1'});</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<div class="py-5"><center>
    <img src="./views/img/menu-sticky.png" alt="Menu Sticky Aprende Ai!" id="img_menu_sticky">
</center></div>


<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light"  style="z-index: 4;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse ml-5"  id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="?page=Cursos">Home</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Temas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
          require './utils/FunHeader.php';
          $Functions = new FunHeader;
          $exibiTemas = $Functions->ExibeTemasDropDown();

           ?>
        </div>
      </li>

      <?php
          $exibeCricaoConteudo = $Functions->ExibePostarConteudo();
          $exibeCricaoVagas = $Functions->ExibePostarVaga();
       ?>
       <li class="nav-item">
         <a class="nav-link" href="?page=vagas">Vagas</a>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="?page=forum">Fórum</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=forum">FAQ</a>
      </li>
    </ul>
    <ul class="navbar-nav" style="margin-left: 1%; margin-right: 8%;">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Minha Conta
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="?page=minha_conta">Meu Perfil <i class="fas fa-user"></i> </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="?page=home">Sair <i class="fas fa-sign-out-alt "></i> </a>
        </div>
      </li>
    </ul>

  </div>
</nav>

<script>
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
} 
</script>
