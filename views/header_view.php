<?php $titulo = "BEM-VINDO A INFOSPORTS!";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoSports</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    
    
</head>
<body>
<header>
        <div><a href="<?= constant('URL_LOCAL_SITE_PAGINA').'principal'?>" class="text_white">InfoSports</a></div>
        <nav>
            <?php
                include_once("menu_view.php")
            ?>
        </nav>
</header>