<?php
include_once("includes/configuracao.php");
include_once("configuracao/conexao.php");
include_once("includes/funcoes.php");

$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? $_POST['nome'] : null;
$email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) ? $_POST['email'] : null;
$peso = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['peso'])) ? $_POST['peso'] : null;
$altura = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['altura'])) ? $_POST['altura'] : null;
$telefone = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;
$login = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['login'])) ? $_POST['login'] : null;
@$senha = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty(criptografia($_POST['senha']))) ? criptografia($_POST['senha']) : null;
$imc = 0;
$sobrenome =($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['sobrenome'])) ? $_POST['sobrenome'] : null;
$mensagem = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['mensagem'])) ? $_POST['mensagem'] : null;

$imc = calcularImc($peso, $altura, $nome, $email);
$classificacao = classificarImc($imc);
$confirmacao = verificarInput($nome, $email, $peso, $altura, $imc, $classificacao);
$verificar_login = consultarLogin($login);
$noticia = null;



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
    $usuarioCadastrado = consultarLogin($login);
    if($usuarioCadastrado && validarSenha($senha, $usuarioCadastrado["senha"])){
    registrarAcessoValido($usuarioCadastrado);}
    include_once("includes/login.php");
    include_once("includes/footer.php");
}elseif($paginaUrl === "contato"){
    include_once("includes/contato.php");
    include_once("includes/footer.php");
    contatar($nome, $sobrenome, $email, $telefone, $mensagem);
}elseif($paginaUrl === "registro"){
    protegerTela();
    include_once("includes/registro.php");
    include_once("includes/footer.php");
    registrar($nome, $email, $telefone, $login, $senha);
}elseif($paginaUrl === "noticia"){
    protegerTela();
    include_once("includes/noticia.php");
    include_once("includes/footer.php");
}elseif($paginaUrl === "sair"){
    limparSessao();
}elseif($paginaUrl === "detalhe"){
    if($_GET && isset($_GET['id'])){
        $idNoticia = $_GET['id'];
    }else{
        $idNoticia = 0;
    }
    $noticia = buscarNoticiaPorId($idNoticia);
    include_once("includes/detalhe.php");
}else{
    echo "ERROR 404, PÁGINA NÃO EXISTE!";
}





    


