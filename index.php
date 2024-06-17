<?php
include("banco/conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Agenda</title>
</head>
<body>
   <header>
   <h1>Agenda</h1>
   <nav>
   <a href="index.php?menuop=home">Home</a> | 
   <a href="index.php?menuop=contatos">Contatos</a> | 
   <a href="index.php?menuop=atividades">Atividades</a> | 
   <a href="index.php?menuop=compromissos">Compromissos</a> 
   </nav>
   </header>
   <main>
   <hr>
   <?php
      $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"home";
      switch ($menuop) {
         case 'home':
            include("paginas/home/home.php");
            break;
         case 'contatos':
            include("paginas/contatos/contatos.php");
            break;
         case 'cad_contatos':
            include("paginas/contatos/cadastrar_contatos.php");
            break;
         case 'inserir_contatos':
            include("paginas/contatos/inserir_contatos.php");
            break;
         case 'editar_contatos':
            include("paginas/contatos/editar_contatos.php");
            break;
            case 'excluir_contatos':
               include("paginas/contatos/excluir_contatos.php");
               break;
         case 'atualizar_contatos':
            include("paginas/contatos/atualizar_contatos.php");
            break;
         case 'atividades';
            include("paginas/atividades/atividades.php");
            break;
         case 'compromissos';
            include("paginas/compromissos/compromissos.php");
            break;
         default:
             include("paginas/home/home.php");
            break;
      }
      ?>
      </main>
      
</body>
</html>