<head>
  <link rel="shortcut icon" href="views/img/logo_batata.png">
<<<<<<< HEAD
  <style media="screen">

    ::-webkit-scrollbar { width:15px; background:#FFF;343A40; }
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(180deg,#dc8d0d,#ffc107);
        border-radius: 30px;
        box-shadow: inset 2px 2px 2px hsla(0,0%,100%,.25), inset -2px -2px 2px rgba(0,0,0,.25);
    }
    ::-webkit-scrollbar-track {
        background: linear-gradient(90deg,#343a40,#201c29 1px,#100e17 0,#100e17);
    }
  </style>
=======
  
>>>>>>> 9217740a01c222ca5508bc013ffe3eae80fed8de
</head>
<?php
    require 'controllers/urls.php';
    session_start();
    $pages = new Urls;
    if(isset($_GET['page'])){
        switch($_GET['page']){
            case 'home': $pages->Home();
            break;
            case 'EscolhaCadastro': $pages->EscolhaCadastro();
            break;
            case 'login': $pages->Logar();
            break;
            case 'cadastro_pf': $pages->CadastroPF();
            break;
            case 'cadastro_pj': $pages->CadastroPJ();
            break;
            case 'minha_conta': $pages->MinhaConta();
            break;
            case 'cadastro_vaga': $pages->CadastroVaga();
            break;
            case 'vagas': $pages->Vagas();
            break;
            case 'cadastro_material': $pages->CadastroMaterial();
            break;
            case 'material': $pages->Material();
            break;
            case 'forum': $pages->ExibirForum();
            break;
            case 'resposta': $pages->ExibirResposta();
            break;
            case 'Cursos': $pages->Cursos();
            break;
            case 'temaA': $pages->ExibirMenu();
            break;
            case 'assuntos': $pages->Assuntos();
            break;
            case 'temas': $pages->ExibirTemas();
            break;
            case 'admin': $pages->ExibirAdmin();
            break;
            case 'painelAdmin': $pages->ExibePainelAdmin();
            break;
            default: $pages->exibirErro404();
            break;
        }
    }else{
        $pages->Home();
    }
?>
