<?php

include_once("includes/funcoes.php");

if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

include_once("includes/header.php");
if($paginaUrl == "principal"){
    include_once("includes/principal.php");   
    include_once("includes/footer.php");
}elseif($paginaUrl === "login"){
    include_once("includes/login.php");
}else{
    echo "ERRO 404, PÁGINA NÃO EXISTE!";
}

echo "testando";






    


