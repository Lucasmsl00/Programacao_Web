<?php
$titulo = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['titulo'])) ? $_POST['titulo'] : null;
$descricaoCurta = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['descricaoCurta'])) ? $_POST['descricaoCurta'] : null;
$descricao = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['descricao'])) ? $_POST['descricao'] : null;
$caminhoImg = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['caminhoImg'])) ? $_POST['caminhoImg'] : null;
$caminhoArquivo = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['caminhoArquivo'])) ? $_POST['caminhoArquivo'] : null;

include_once("configuracao/conexao.php");
include_once("funcoes.php");
criarNoticia($titulo, $descricaoCurta, $descricao, $caminhoImg, $caminhoArquivo);
?>

<div class="conteiner">
    <div class="bgWhite">
        <form class="forms" action="#" method="POST">
            <h2><strong>CRIE SUA NOTÍCIA</strong></h2>
            <input class="inputImc" type="text" name="titulo" placeholder="Título" required>
            <textarea class="input-text-area" name="descricaoCurta" id="" placeholder="Descrição curta. Para pagina principal" required></textarea>
            <textarea class="input-text-area" name="descricao" id="" placeholder="Descrição completa" required></textarea>
            <input class="inputImc" type="text" name="caminhoImg" placeholder="Caminho da imagem" required>
            <input class="inputImc" type="text" name="caminhoArquivo" placeholder="Caminho para o arquivo" required>
            <button class="btnCalcular" type="submit">Enviar notícia</button>
        </form>
    </div>
</div>