<?php
$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? $_POST['nome'] : null;
$email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) ? $_POST['email'] : null;
$telefone = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;
$login = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['login'])) ? $_POST['login'] : null;
$senha = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['senha'])) ? $_POST['senha'] : null;

include_once("configuracao/conexao.php");
include_once("funcoes.php");

?>

<div class="conteiner">
    <div class="bgWhite">
        <form class="forms" action="#" method="POST">
            <h2><strong>REGISTRE-SE</strong></h2>
            <input class="inputImc" type="text" name="nome" placeholder="Nome" required>
            <input class="inputImc" type="text" name="email" placeholder="E-mail" required>
            <input class="inputImc" type="text" name="telefone" placeholder="Telefone" required>
            <input class="inputImc" type="text" name="login" placeholder="Login" required>
            <input class="inputImc" type="password" name="senha" placeholder="Senha" required>
            <button class="btnCalcular" type="submit">Concluir</button>
        </form>
    </div>
</div>