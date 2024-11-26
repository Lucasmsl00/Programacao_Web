<div class="conteiner_detalhe">
    <p id="backToTop" class="title_detalhe">BEM VINDO A INFOSPORTS!</p>
    <p class="subTitulo_detalhe">Aqui é onde você encontra todos os itens mais novos e modernos do seu esporte
        preferido.</p>
    <section class="mainDiv_detalhe">
        <div class="contentDiv_detalhe">
            <div class="category_card">
            <img src=" .\assets\uploads\<?=$noticia['imagem']?>" alt="mainCardImg" class="mainCardImg">
            <h1 class="mainCategoryCardTitle"><?=$noticia['titulo']?></h1>
                <p class="mainCategoryCardDescription" Align="justify">
                <?=$noticia['descricao']?>
                </p>   
            </div>
        </div> 
    </section> 
    <br><br>
    <?php
        if (listarNoticiasPorCategoria($noticia['id_categoria'],$noticia['titulo'] > 0)):
    ?>
        <h3 class="center">Notícias relacionadas</h3>
    <?php endif ;?>
    <div class="noticias_relacionadas">
        <?php
            
            foreach (listarNoticiasPorCategoria($noticia['id_categoria'],$noticia['titulo']) as $descricao):
                if($noticia['id'] != $descricao['id']):
        ?>
                    <div class="item1">
                            <a href="<?= constant('URL_LOCAL_SITE_DETALHE').$descricao['id']?>">
                            <img src= .\assets\uploads\<?= $descricao["imagem"] ? $descricao["imagem"] : "" ?>>
                            <br><br><h4><?= $descricao["titulo"] ? $descricao["titulo"] : ""?></h4><br>
                            <p> <?= reduzirStr(($descricao["descricaoCurta"]),100)?></p>
                        </a>
                    </div>
        <?php endif; endforeach;?>
    </div>
</div>
