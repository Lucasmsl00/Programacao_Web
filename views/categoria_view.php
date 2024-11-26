<?php


include_once("configuracao/conexao.php");
include_once("funcoes.php");

?>


<div class="conteiner">
    <div class="bgWhite">
        <form class="formContato" action="#" method="POST">
            <h1><strong>Criar categoria</strong></h1>
            <input class="inputImc" type="text" name="nome_categoria" placeholder="Nome da categoria" required>
            <?php
            $value = verificarCategoriaDuplicada($nome_categoria);
                if(empty($value)){
                    cadastrarCategoria($nome_categoria);
                }
            if(!empty($value)):?>
                <h4 id= "msg-success">Categoria já existe, tente outra!</h4>
            <?php endif?>
            <button class="btnCalcular" type="submit">Enviar</button>
        </form>
    </div>
</div>