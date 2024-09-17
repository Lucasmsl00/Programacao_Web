<?php
include_once("includes/configuracao.php");
include_once("includes/funcoes.php");

if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

include_once("includes/header.php");
if($paginaUrl === "principal"){
    include_once("includes/principal.php");   
    include_once("includes/footer.php");
}elseif($paginaUrl === "login"){
    include_once("includes/login.php");
    include_once("includes/footer.php");
}elseif($paginaUrl === "contato"){
    include_once("includes/contato.php");
    include_once("includes/footer.php");
}elseif($paginaUrl === "registro"){
    include_once("includes/registro.php");
    include_once("includes/footer.php");
}elseif($paginaUrl === "boxe"){
    include_once("includes/boxe.php");
    include_once("footer.php");
}else{
    echo "ERROR 404, PÁGINA NÃO EXISTE!";
}





    


