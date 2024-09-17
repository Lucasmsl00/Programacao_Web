<?php $titulo = "BEM-VINDO A INFOSPORTS!";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoSports</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu_style.css">
    <?php if($paginaUrl === 'login'): ?>
        <link rel="stylesheet" href="css/login.css">
    <?php endif
    ?>
</head>
<body>
<header>
        <div><a href="<?= "http://localhost/Lucas_M/Programacao_Web/?pagina=principal"?>" class="text_white">InfoSports</a></div>
        <nav>
            <button><a href="<?= "http://localhost/Lucas_M/Programacao_Web/?pagina=login"?>" class="a_menu">Login</a></button>
            <button><a href="<?= "http://localhost/Lucas_M/Programacao_Web/?pagina=registro"?>" class="a_menu">Registro</a></button>
            <button><a href="<?= "http://localhost/Lucas_M/Programacao_Web/?pagina=contato"?>" class="a_menu">Contato</a></button>
        </nav>
</header>