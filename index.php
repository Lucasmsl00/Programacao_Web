<?php
$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? $_POST['nome'] : null;
$email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) ? $_POST['email'] : null;
$peso = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['peso'])) ? $_POST['peso'] : null;
$altura = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['altura'])) ? $_POST['altura'] : null;
$imc = 0;

include_once("includes/configuracao.php");
include_once("configuracao/conexao.php");
include_once("includes/funcoes.php");
$imc = calcularImc($peso, $altura, $nome, $email);
$classificacao = classificarImc($imc);
$confirmacao = verificarInput($nome, $email, $peso, $altura, $imc, $classificacao);


// if (($nome && $email && $peso && $altura) === null){

// }

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
    include_once("includes/footer.php");
}else{
    echo "ERROR 404, PÁGINA NÃO EXISTE!";
}





    


