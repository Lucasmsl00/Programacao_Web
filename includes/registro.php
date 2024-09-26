<?php
$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? $_POST['nome'] : null;
$email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) ? $_POST['email'] : null;
$telefone = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;

include_once("configuracao/conexao.php");
include_once("funcoes.php");
registrar($nome, $email, $telefone);
?>

<div class="conteiner">
    <div class="bgWhite">
        <form class="forms" action="#" method="POST">
            <h4><strong>REGISTRE-SE</strong></h4>
            <input class="inputImc" type="text" name="nome" placeholder="Nome" required>
            <input class="inputImc" type="text" name="email" placeholder="E-mail" required>
            <input class="inputImc" type="text" name="telefone" placeholder="Telefone" required>
            <button class="btnCalcular" type="submit">Registrar</button>
        </form>
    </div>
</div>