
<div class="center"><br>
        <h1> <?php echo $titulo ?></h1>
        <p>Aqui é onde você encontra todos os itens mais novos e modernos do seu esporte preferido.</p>

    </div>
    <br>
    <section class="mainContent">
        <div>
            <div class="div_grid">
                
                <?php  
                    foreach (consultarNoticias() as $noticia):
                ?>

                <div class="item1">
                        <a href="<?= constant('URL_LOCAL_SITE_DETALHE').$noticia['id']?>"?>
                        <img src= <?= $noticia["caminhoImg"] ? $noticia["caminhoImg"] : "" ?>>
                        <br><br><h4><?= $noticia["titulo"] ? $noticia["titulo"] : ""?></h4><br>
                        <p> <?= reduzirStr(($noticia["descricaoCurta"]),150)?></p>
                    </a>
                </div>

                <?php endforeach
                ?>
            
            </div>
        </div>
        <aside class="sidebarContent">
            <form class="formImc" action="#" method="POST">
                <div class="imc">
                    <p>INDICE DE MASSA CORPORAL (IMC)</p>
                    <label for="#peso">Nome</label>
                    <input class="inputImc" id="nome" name="nome" type="text" placeholder="Digite seu nome..." required>
                    <label for="#peso">E-mail</label>
                    <input class="inputImc" id="email" name="email" type="text" placeholder="Digite seu e-mail..." required>
                    <label for="#peso">Peso (KG)</label>
                    <input class="inputImc" id="peso" name="peso" type="text" placeholder="Digite o peso..." required>
                    <label for="#altura">Altura (M)</label>
                    <input class="inputImc" id="altura" name="altura" type="text" placeholder="Digite a altura..." required>
                    <button class="btnCalcular" type="submit" >Calcular</button>
                </div>
            </form>
            <?php if($imc):?>
            <h4>
                <?php
                    if($nome && $email && $imc && $classificacao){
                        echo "Resultado: $imc <br>";
                        echo "Você está com:  $classificacao";
                    }
                ?>
            </h4>
            <?php endif ?>
        </aside>
        
    </section>

