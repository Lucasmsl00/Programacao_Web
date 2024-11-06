<?php

include_once("configuracao/conexao.php");
include_once("funcoes.php");

?>

<div class="container">
    <div class="bgWhite">
        <form class="forms" action="#" method="post">
        <h4><strong>Faça seu Login</strong></h4>
        <input class="inputImc" type="text" name="login" id="login" placeholder="Login" required>
        <input class="inputImc" type="password" name="senha" id="senha" placeholder="Senha" required>
        <button class="btnCalcular" type="submit">Entrar</button>
        <?php
            if($verificar_login == null){
                echo ('<p id= "msg-success"> Login ou senha inválidos </p>');
            }
        ?>
        </form>           
    </div>
</div>


