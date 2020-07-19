<head>
  <link rel="shortcut icon" href="views/img/logo_batata.png">
  
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
