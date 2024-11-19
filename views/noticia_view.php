<?php
include_once("configuracao/conexao.php");
include_once("funcoes.php");


?>

<div class="conteiner">
    <div class="bgWhite">
        <form class="forms" action="#" method="POST" enctype="multipart/form-data">
            <h2><strong>CRIE SUA NOTÍCIA</strong></h2>
            <input class="inputImc" type="text" name="titulo_noticia" placeholder="Título" required>
            <textarea class="input-text-area" name="descricaoCurta" id="" placeholder="Descrição curta. Para pagina principal" required></textarea>
            <textarea class="input-text-area" name="descricao" id="" placeholder="Descrição completa" required></textarea>
            <input type="file" name="fileToUpload" id="fileToUpload" required>
            <div class="input-box">
                            <select name="nome_categoria" class="name">
                                <?php foreach ($categorias as $itemCategoria):?>
                                    <option value="<?=$itemCategoria['id']?>"><?=$itemCategoria['nome_categoria']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
            <button class="btnCalcular" type="submit">Enviar notícia</button>
        </form>
        <?php
        
        ?>
    </div>
</div>