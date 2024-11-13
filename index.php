<?php
include_once("configuracao.php");
include_once("configuracao/conexao.php");
include_once("funcoes.php");

$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? $_POST['nome'] : null;
$nome_categoria = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome_categoria'])) ? $_POST['nome_categoria'] : null;
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
$categorias = [];
$noticiasPorCategoria = [];




if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

include_once("views/header_view.php");
if($paginaUrl === "principal"){
    include_once("views/principal_view.php");   
}elseif($paginaUrl === "login"){
    $usuarioCadastrado = consultarLogin($login);
    if($usuarioCadastrado && validarSenha($senha, $usuarioCadastrado["senha"])){
    registrarAcessoValido($usuarioCadastrado);}
    include_once("views/login_view.php");
}elseif($paginaUrl === "contato"){
    include_once("views/contato_view.php");
    contatar($nome, $sobrenome, $email, $telefone, $mensagem);
}elseif($paginaUrl === "registro"){
    protegerTela();
    include_once("views/registro_view.php");
    include_once("views/footer_view.php");
    registrar($nome, $email, $telefone, $login, $senha);
}elseif($paginaUrl === "noticia"){
    protegerTela();
    $categorias = listarCategorias();
    include_once("views/noticia_view.php");
}elseif($paginaUrl === "categoria"){
    protegerTela();
    include_once("views/categoria_view.php");
    if(!verificarCategoriaDuplicada($nome_categoria)){
        cadastrarCategoria($nome_categoria);
    }
}elseif($paginaUrl === "sair"){
    limparSessao();
}elseif($paginaUrl === "detalhe"){
    if($_GET && isset($_GET['id'])){
        $idNoticia = $_GET['id'];
    }else{
        $idNoticia = 0;
    }
    $noticia = buscarNoticiaPorId($idNoticia);
    $noticiasPorCategoria = listarNoticiasPorCategoria($noticia['categoria_id']);
    include_once("views/detalhe_view.php");
}else{
    echo "ERROR 404, PÁGINA NÃO EXISTE!";
}
include_once("views/footer_view.php");





    


