<div>
    <p id="backToTop">BEM VINDO A INFOSPORTS!</p>
    <p>Aqui é onde você encontra todos os itens mais novos e modernos do seu esporte
        preferido.</p>
    <section>
        <div>
            <div>
            <img src="<?=$noticia['caminhoImg']?>" alt="mainCardImg" class="mainCardImg">
            <h1 class="mainCategoryCardTitle"><?=$noticia['titulo']?></h1>
                <p class="mainCategoryCardDescription" Align="justify">
                <?=$noticia['descricao']?>
                </p>   
            </div>
        </div>
    </section>
    <br><br>
    <h3 class="center">Notícias relacionadas</h3>
    <div class="div_grid">        
        <?php  
            foreach (procurarNoticiaPorLike() as $descricao):
                if($noticia['id'] != $descricao['id']):
        ?>
                    <div class="item1">
                            <a href="<?= constant('URL_LOCAL_SITE_DETALHE').$descricao['id']?>">
                            <img src= <?= $descricao["caminhoImg"] ? $descricao["caminhoImg"] : "" ?>>
                            <br><br><h4><?= $descricao["titulo"] ? $descricao["titulo"] : ""?></h4><br>
                            <p> <?= reduzirStr(($descricao["descricaoCurta"]),150)?></p>
                        </a>
                    </div>

        <?php endif; endforeach;?>     
    </div>
</div>
