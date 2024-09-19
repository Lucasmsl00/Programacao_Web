
<div class="center"><br>
        <h1> <?php echo $titulo ?></h1>
        <p>Aqui é onde você encontra todos os itens mais novos e modernos do seu esporte preferido.</p>

    </div>
    <br>
    <section class="mainContent">
        <div>
            <div class="div_grid">
                
                <?php  
                    foreach (listarNoticias() as $noticia):
                ?>

                <div class="item1">
                    <a href= <?= $noticia["link"] ? $noticia["link"] : "";?>>
                        <img src= <?= $noticia["img"] ? $noticia["img"] : ""; ?>>
                        <br><br><h4><?= $noticia["titulo"] ? $noticia["titulo"] : "";?></h4><br>
                        <p> <?= reduzirStr(($noticia["text"]),150)?></p>
                    </a>
                </div>

                <?php endforeach
                ?>
            
            </div>
        </div>
        
        <aside class="sidebarContent">
            <form action="#" method="POST">
                <div class="imc">
                    <p>INDICE DE MASSA CORPORAL (IMC)</p>
                    <label for="#peso">Peso (KG)</label>
                    <input id="peso" name="peso" type="text" placeholder="Digite o peso...">
                    <label for="#altura">Altura (M)</label>
                    <input id="altura" name="altura" type="text" placeholder="Digite a altura...">
                    <button class="btnCalcular" type="submit">Calcular</button>
                </div>
            </form>
            <div class="left">
            Resultado: <?= $resposta?><br>
            Você está com: <?= $resultado?>
            </div>
        </aside>
    </section>

