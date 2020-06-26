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
    <a href="#">SubTema1 aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
    <a href="#">SubTema2 aaaaaaa</a>
    <a href="#">SubTema3 aaaaaaaaa</a>
    <a href="#">SubTema4</a>
  </div>
<div class="container">
  <!-- Icone do menu -->
  <span onclick="openNav()">
    <div class="margem">
      <div class="icone"></div>
      <div class="icone"></div>
      <div class="icone"></div>
    </div>
  </span>

  <!-- Div para inclusão de imagens -->
  <div class="img">
    <img src="views/img/logo_batata1.png" width="250px" heigth="250px">
  </div>

  <div class="container">

  <!-- Div para Título -->
  <div id="titulo">
  <h1>Aprende Ai! Que é bataba</h1>
  </div>

  <!-- Div para conteúdo -->
  <div>

<p>Uma plataforma que organiza o conteúdo que você deve estudar</p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra nibh eget rutrum convallis. Aliquam consequat neque quam, quis hendrerit nibh condimentum sit amet. Quisque dapibus felis eros, nec ultrices est molestie sed. Nam ligula felis, commodo commodo rutrum non, hendrerit eu massa. Suspendisse mollis vulputate interdum. Vestibulum luctus interdum consectetur. Duis ut sapien eget lacus porta imperdiet eget nec nibh. Phasellus dapibus convallis ante, sollicitudin mattis ante interdum eget. Aliquam pellentesque turpis sed ullamcorper auctor.
<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce non velit vel mi auctor ultrices et condimentum ante. Fusce laoreet rhoncus augue quis mattis. Duis nec pulvinar odio, eu fermentum augue. Donec sit amet erat vel risus pellentesque ultricies quis a nunc. Vivamus non porta nulla. Donec porttitor ligula cursus ante luctus, ac varius est aliquet. Vivamus placerat ultrices condimentum. Nunc facilisis nunc nec augue ullamcorper pulvinar.</p>
<p>Donec sit amet metus pharetra, semper justo a, pretium magna. Ut pretium eu ipsum nec tincidunt. Etiam libero magna, hendrerit sit amet ante at, pellentesque aliquam mi. Quisque tristique ligula vitae ante aliquet, vel ullamcorper nunc tincidunt. In turpis tortor, viverra eu tempus eu, tristique at metus. Vestibulum nec dolor vestibulum, vulputate quam ut, tincidunt nisi. Nunc leo justo, aliquam quis varius quis, vulputate vitae purus. Sed interdum odio quis consequat gravida. Donec eleifend eros sit amet volutpat lobortis. Suspendisse gravida feugiat diam quis rutrum. Vivamus quis placerat ligula. Proin vel odio et est sollicitudin egestas tristique id lorem. Curabitur magna metus, porta at consectetur ac, auctor ornare tellus. Morbi imperdiet et elit ut ultrices. Suspendisse sed purus non lectus scelerisque bibendum. Integer vel nibh vitae ante convallis convallis at a risus.</p>
<p>Uma plataforma que organiza o conteúdo que você deve estudar</p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra nibh eget rutrum convallis. Aliquam consequat neque quam, quis hendrerit nibh condimentum sit amet. Quisque dapibus felis eros, nec ultrices est molestie sed. Nam ligula felis, commodo commodo rutrum non, hendrerit eu massa. Suspendisse mollis vulputate interdum. Vestibulum luctus interdum consectetur. Duis ut sapien eget lacus porta imperdiet eget nec nibh. Phasellus dapibus convallis ante, sollicitudin mattis ante interdum eget. Aliquam pellentesque turpis sed ullamcorper auctor.
<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce non velit vel mi auctor ultrices et condimentum ante. Fusce laoreet rhoncus augue quis mattis. Duis nec pulvinar odio, eu fermentum augue. Donec sit amet erat vel risus pellentesque ultricies quis a nunc. Vivamus non porta nulla. Donec porttitor ligula cursus ante luctus, ac varius est aliquet. Vivamus placerat ultrices condimentum. Nunc facilisis nunc nec augue ullamcorper pulvinar.</p>
<p>Donec sit amet metus pharetra, semper justo a, pretium magna. Ut pretium eu ipsum nec tincidunt. Etiam libero magna, hendrerit sit amet ante at, pellentesque aliquam mi. Quisque tristique ligula vitae ante aliquet, vel ullamcorper nunc tincidunt. In turpis tortor, viverra eu tempus eu, tristique at metus. Vestibulum nec dolor vestibulum, vulputate quam ut, tincidunt nisi. Nunc leo justo, aliquam quis varius quis, vulputate vitae purus. Sed interdum odio quis consequat gravida. Donec eleifend eros sit amet volutpat lobortis. Suspendisse gravida feugiat diam quis rutrum. Vivamus quis placerat ligula. Proin vel odio et est sollicitudin egestas tristique id lorem. Curabitur magna metus, porta at consectetur ac, auctor ornare tellus. Morbi imperdiet et elit ut ultrices. Suspendisse sed purus non lectus scelerisque bibendum. Integer vel nibh vitae ante convallis convallis at a risus.</p><p>Uma plataforma que organiza o conteúdo que você deve estudar</p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra nibh eget rutrum convallis. Aliquam consequat neque quam, quis hendrerit nibh condimentum sit amet. Quisque dapibus felis eros, nec ultrices est molestie sed. Nam ligula felis, commodo commodo rutrum non, hendrerit eu massa. Suspendisse mollis vulputate interdum. Vestibulum luctus interdum consectetur. Duis ut sapien eget lacus porta imperdiet eget nec nibh. Phasellus dapibus convallis ante, sollicitudin mattis ante interdum eget. Aliquam pellentesque turpis sed ullamcorper auctor.
<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce non velit vel mi auctor ultrices et condimentum ante. Fusce laoreet rhoncus augue quis mattis. Duis nec pulvinar odio, eu fermentum augue. Donec sit amet erat vel risus pellentesque ultricies quis a nunc. Vivamus non porta nulla. Donec porttitor ligula cursus ante luctus, ac varius est aliquet. Vivamus placerat ultrices condimentum. Nunc facilisis nunc nec augue ullamcorper pulvinar.</p>
<p>Donec sit amet metus pharetra, semper justo a, pretium magna. Ut pretium eu ipsum nec tincidunt. Etiam libero magna, hendrerit sit amet ante at, pellentesque aliquam mi. Quisque tristique ligula vitae ante aliquet, vel ullamcorper nunc tincidunt. In turpis tortor, viverra eu tempus eu, tristique at metus. Vestibulum nec dolor vestibulum, vulputate quam ut, tincidunt nisi. Nunc leo justo, aliquam quis varius quis, vulputate vitae purus. Sed interdum odio quis consequat gravida. Donec eleifend eros sit amet volutpat lobortis. Suspendisse gravida feugiat diam quis rutrum. Vivamus quis placerat ligula. Proin vel odio et est sollicitudin egestas tristique id lorem. Curabitur magna metus, porta at consectetur ac, auctor ornare tellus. Morbi imperdiet et elit ut ultrices. Suspendisse sed purus non lectus scelerisque bibendum. Integer vel nibh vitae ante convallis convallis at a risus.</p><p>Uma plataforma que organiza o conteúdo que você deve estudar</p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra nibh eget rutrum convallis. Aliquam consequat neque quam, quis hendrerit nibh condimentum sit amet. Quisque dapibus felis eros, nec ultrices est molestie sed. Nam ligula felis, commodo commodo rutrum non, hendrerit eu massa. Suspendisse mollis vulputate interdum. Vestibulum luctus interdum consectetur. Duis ut sapien eget lacus porta imperdiet eget nec nibh. Phasellus dapibus convallis ante, sollicitudin mattis ante interdum eget. Aliquam pellentesque turpis sed ullamcorper auctor.
<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce non velit vel mi auctor ultrices et condimentum ante. Fusce laoreet rhoncus augue quis mattis. Duis nec pulvinar odio, eu fermentum augue. Donec sit amet erat vel risus pellentesque ultricies quis a nunc. Vivamus non porta nulla. Donec porttitor ligula cursus ante luctus, ac varius est aliquet. Vivamus placerat ultrices condimentum. Nunc facilisis nunc nec augue ullamcorper pulvinar.</p>
<p>Donec sit amet metus pharetra, semper justo a, pretium magna. Ut pretium eu ipsum nec tincidunt. Etiam libero magna, hendrerit sit amet ante at, pellentesque aliquam mi. Quisque tristique ligula vitae ante aliquet, vel ullamcorper nunc tincidunt. In turpis tortor, viverra eu tempus eu, tristique at metus. Vestibulum nec dolor vestibulum, vulputate quam ut, tincidunt nisi. Nunc leo justo, aliquam quis varius quis, vulputate vitae purus. Sed interdum odio quis consequat gravida. Donec eleifend eros sit amet volutpat lobortis. Suspendisse gravida feugiat diam quis rutrum. Vivamus quis placerat ligula. Proin vel odio et est sollicitudin egestas tristique id lorem. Curabitur magna metus, porta at consectetur ac, auctor ornare tellus. Morbi imperdiet et elit ut ultrices. Suspendisse sed purus non lectus scelerisque bibendum. Integer vel nibh vitae ante convallis convallis at a risus.</p><p>Uma plataforma que organiza o conteúdo que você deve estudar</p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra nibh eget rutrum convallis. Aliquam consequat neque quam, quis hendrerit nibh condimentum sit amet. Quisque dapibus felis eros, nec ultrices est molestie sed. Nam ligula felis, commodo commodo rutrum non, hendrerit eu massa. Suspendisse mollis vulputate interdum. Vestibulum luctus interdum consectetur. Duis ut sapien eget lacus porta imperdiet eget nec nibh. Phasellus dapibus convallis ante, sollicitudin mattis ante interdum eget. Aliquam pellentesque turpis sed ullamcorper auctor.
<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce non velit vel mi auctor ultrices et condimentum ante. Fusce laoreet rhoncus augue quis mattis. Duis nec pulvinar odio, eu fermentum augue. Donec sit amet erat vel risus pellentesque ultricies quis a nunc. Vivamus non porta nulla. Donec porttitor ligula cursus ante luctus, ac varius est aliquet. Vivamus placerat ultrices condimentum. Nunc facilisis nunc nec augue ullamcorper pulvinar.</p>
<p>Donec sit amet metus pharetra, semper justo a, pretium magna. Ut pretium eu ipsum nec tincidunt. Etiam libero magna, hendrerit sit amet ante at, pellentesque aliquam mi. Quisque tristique ligula vitae ante aliquet, vel ullamcorper nunc tincidunt. In turpis tortor, viverra eu tempus eu, tristique at metus. Vestibulum nec dolor vestibulum, vulputate quam ut, tincidunt nisi. Nunc leo justo, aliquam quis varius quis, vulputate vitae purus. Sed interdum odio quis consequat gravida. Donec eleifend eros sit amet volutpat lobortis. Suspendisse gravida feugiat diam quis rutrum. Vivamus quis placerat ligula. Proin vel odio et est sollicitudin egestas tristique id lorem. Curabitur magna metus, porta at consectetur ac, auctor ornare tellus. Morbi imperdiet et elit ut ultrices. Suspendisse sed purus non lectus scelerisque bibendum. Integer vel nibh vitae ante convallis convallis at a risus.</p>
</div>


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
