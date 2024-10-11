<?php
$login = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['login'])) ? $_POST['login'] : null;
$senha = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['senha'])) ? $_POST['senha'] : null;
?>

<div class="container">
    <div class="bgWhite">
        <form class="forms" action="#" method="post">
        <h4><strong>Faça seu Login</strong></h4>
        <input class="inputImc" type="text" name="login" id="idlogin" placeholder="Login" required>
        <input class="inputImc" type="password" name="senha" id="" placeholder="Senha" required>
        <button class="btnCalcular" type="submit">Entrar</button>
        </form>            
    </div>
</div>

