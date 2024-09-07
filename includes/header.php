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
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<header>
        <div><a href="<?= "http://localhost/programacao_web/?pagina=principal"?>" class="text_white">InfoSports</a></div>
        <nav>
            <button><a href="<?= "http://localhost/programacao_web/?pagina=login"?>" class="a_menu">Login</a></button>
            <button><a href="#" class="a_menu">Registro</a></button>
            <button><a href="#" class="a_menu">Contato</a></button>
        </nav>
</header>