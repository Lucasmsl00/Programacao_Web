<?php
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
        <?php
            if ($usuarioCadastrado != null){ 
                if($usuarioCadastrado == true){echo "<p id= 'msg-success'> Login existente, tente outro! </p>";}
            }
        ?>
    </div>
</div>
