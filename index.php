<?php
include_once("configuracao.php");
include_once("configuracao/conexao.php");
include_once("funcoes.php");
include_once("models/acesso_model.php");

$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? $_POST['nome'] : null;
$nome_categoria = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome_categoria'])) ? $_POST['nome_categoria'] : null;
$email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) ? $_POST['email'] : null;
$peso = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['peso'])) ? $_POST['peso'] : null;
$altura = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['altura'])) ? $_POST['altura'] : null;
$telefone = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;
$login = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['login'])) ? $_POST['login'] : null;
@$senha = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty(criptografia($_POST['senha']))) ? criptografia($_POST['senha']) : null;
$sobrenome =($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['sobrenome'])) ? $_POST['sobrenome'] : null;
$mensagem = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['mensagem'])) ? $_POST['mensagem'] : null;
$titulo_noticia = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['titulo_noticia'])) ? $_POST['titulo_noticia'] : null;
$descricaoCurta = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['descricaoCurta'])) ? $_POST['descricaoCurta'] : null;
$descricao = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['descricao'])) ? $_POST['descricao'] : null;
$imagem = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['fileToUpload'])) ? $_POST['fileToUpload'] : null;


$imc = 0;
$imc = calcularImc($peso, $altura, $nome, $email);
$classificacao = classificarImc($imc);

$confirmacao = verificarInput($nome, $email, $peso, $altura, $imc, $classificacao);
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

}elseif($paginaUrl === "registro"){
    acesso::protegerTela();
    include_once("models/registro_model.php");
    $usuarioCadastrado = registro::consultarLogin($login);;
    include_once("controller/registro_controller.php");

}elseif($paginaUrl === "login"){
    include_once("models/registro_model.php");
    $usuarioCadastrado = registro::consultarLogin($login);;
    if($usuarioCadastrado && acesso::validarSenha($senha, $usuarioCadastrado["senha"])){
    acesso::registrarAcessoValido($usuarioCadastrado);}
    include_once("views/login_view.php");

}elseif($paginaUrl === "contato"){
    include_once("views/contato_view.php");
    contatar($nome, $sobrenome, $email, $telefone, $mensagem);

}elseif($paginaUrl === "noticia"){
    acesso::protegerTela();
    $categorias = listarCategorias();
    $id_categoria = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome_categoria'])) ? $_POST['nome_categoria'] : null;
    $nomedaImagem = upload($imagem);
    criarNoticia($titulo_noticia, $descricaoCurta, $descricao, $nomedaImagem, $id_categoria);
    include_once("views/noticia_view.php");

}elseif($paginaUrl === "categoria"){
    acesso::protegerTela();
    include_once("views/categoria_view.php");

}elseif($paginaUrl === "sair"){
    acesso::limparSessao();

}elseif($paginaUrl === "detalhe"){
    if($_GET && isset($_GET['id'])){
        $idNoticia = $_GET['id'];
    }else{
        $idNoticia = 0;
    }
    $noticia = buscarNoticiaPorId($idNoticia);
    $noticiasPorCategoria = listarNoticiasPorCategoria($noticia['id_categoria']);
    include_once("views/detalhe_view.php");

}else{
    echo "ERROR 404, PÁGINA NÃO EXISTE!";

}
include_once("views/footer_view.php");





    


