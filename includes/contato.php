<?php
$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? $_POST['nome'] : null;
$sobrenome =($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['sobrenome'])) ? $_POST['sobrenome'] : null;
$email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) ? $_POST['email'] : null;
$telefone = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;
$mensagem = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['mensagem'])) ? $_POST['mensagem'] : null;

include_once("configuracao/conexao.php");
include_once("funcoes.php");

?>


<div class="conteiner">
    <div class="bgWhite">
        <form class="formContato" action="#" method="POST">
            <h1><strong>Contate-nos</strong></h1>
            <input class="inputImc" type="text" name="nome" placeholder="Nome" required>
            <input class="inputImc" type="text" name="sobrenome" placeholder="Sobrenome" required>
            <input class="inputImc" type="text" name="email" placeholder="E-mail" required>
            <input class="inputImc" type="text" name="telefone" placeholder="Telefone" required>
            <textarea class="input-text-area" name="mensagem" id="" placeholder="Digite sua mensagem aqui..." required></textarea>
            <button class="btnCalcular" type="submit">Enviar</button>
        </form>
    </div>
</div>