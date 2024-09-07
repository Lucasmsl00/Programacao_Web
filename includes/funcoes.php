<?php
    /**
     * Listar noticias
     */
    function listarNoticias(){

        $listaNoticias[0] = array(
            "link" => "boxe.php",
            "titulo" => "BOXE", 
            "text" => "Descubra a força interior e a técnica impecável necessárias para se destacar no ringue. Desafie-se a superar seus limites físicos e mentais enquanto aprende os segredos deste esporte de combate emocionante.", 
            "img" => "imagens/boxe.jpg");
    
        $listaNoticias[1] = array(
            "link" => "crossfit.php",
            "titulo" => "CROSSFIT",
            "text" => "Entre na arena do crossfit e desafie seu corpo em um terinamento intenso e variado que irá transformar sua força, resistência e condicionamento fisíco. Supere seus limites e alcance novos patamares de desempenho.", 
            "img" => "imagens/crossfit.jpg");
    
        $listaNoticias[2] = array(
            "link" => "esporte_neve.php",
            "titulo" => "ESPORTES NA NEVE", 
            "text" => "Sinta adrenalina das montanhas cobertas de neve enquanto desliza pelas encostas em esportes como esqui e snowboard. Prepare-se para a emoção de voar sobre neve e dominar as pistas.", 
            "img" => "imagens/esporte_neve.jpg");
    
        $listaNoticias[3] = array(
            "link" => "basquete.php",
            "titulo" => "BASQUETE", 
            "text" => "Dibre, passe, arremesse! Junte-se ao emocionante mundo do basquete e experimente a empolgação de jogar em equipe, competir em partidas acirradas e fazer cestas incríveis.", 
            "img" => "imagens/basquete.webp");
    
        $listaNoticias[4] = array(
            "link" => "corrida.php",
            "titulo" => "CORRIDA", 
            "text" => "Calce seus tênis e sinta a energia pulsante das corridas. Desafie-se em diferentes distâncias, supere obstáculos e descubra os benefícios incríveis para saúde e o bem-estar que a corrida proporciona.", 
            "img" => "imagens/corrida.png");
    
        $listaNoticias[5] = array(
            "link" => "surf.php",
            "titulo" => "SURF", 
            "text" => "Sinta a liberdade e a conexão com o mar enquanto desliza pelas ondas no surf. Experimente a emoção de pegar a onda perfeita, domine as técnicas e mergulhe no estilo de vida descontraído e vibrante do surf.", 
            "img" => "imagens/surf.jpg");
    
        $listaNoticias[6] = array(
            "link" => "volei_praia.php",
            "titulo" => "VÔLEI DE PRAIA",
            "text" => "Sinta a energia vibrante e a liberdade do vôlei de praia enquanto salta sobre a areia quente e desafia os limites do seu corpo. Experimente a emoção de um saque poderoso, a precisão de um bloqueio certeiro e a alegria contagiante de uma jogada bem-sucedida.",
            "img" => "imagens/volei-praia.jpg"
        );
    
        $listaNoticias[7] = array(
            "link" => "futebol.php",
            "titulo" => "FUTEBOL",
            "text" => "Sinta a adrenalina de uma partida de futebol enquanto você domina o campo com agilidade e técnica. Mergulhe na emoção de driblar adversários, acertar um passe preciso e disparar um chute que ressoa na rede do gol.",
            "img" => "imagens/futebol.jpg"
        );
    
        $listaNoticias[8] = array(
            "link" => "tenis.php",
            "titulo" => "TÊNIS",
            "text" => "Desafie-se nas quadras de tênis e sinta a emoção de cada saque, cada devolução e cada smash poderoso. Experimente a sensação eletrizante de uma partida intensa, onde a precisão e a estratégia se encontram em cada movimento.",
            "img" => "imagens/tenis.jpg"
        );
        
        if ($listaNoticias){
            return $listaNoticias;
        } else{
            return false;
        }
        
    }

    /**
    * TimeZone
    * Retorna o fuso horario local
    * que definira a hora e a data
    */
    function timeZone(){
        date_default_timezone_set("America/Recife");
    }
    /**
     * DataAtual
     * Retorna a data atualizada
     */
    function dataAtual(){
        return date("d/m/Y"); 
    }
    /**
     * horaAtual
     * Retorna a hora atualizada
     */
    function horaAtual(){
        return date("h:i:sa");
    }

    /**
     * @param $texto
     * É o texto que será manupulado
     * Retorna Texto maiúsculo
     */
    function textoMaiusculo($texto){
        if($texto){
            return strtoupper($texto);
        }
    }
    /**
     * @param $texto
     * É o texto que será manupulado
     * @param  $tipo
     * É o Número que indica o tipo de 
     * manipulação da string
     * Tipos:
     * 1 - Quantidade de caracters de um texto
     * 2 - Quantidade de palavras de um texto
     * 3 - Busca Posição da palavra na string
     */
    function contar($texto, $tipo){
        if($texto && $tipo === 1){
            return strlen($texto);
        }
        if($texto && $tipo === 2){
            return str_word_count($texto);
        }
        if($texto && $tipo === 3){
            return strpos($texto, "Diogo");
        }
        return false;
    }

    /**
     * ReduzirStr
     * Reduzir o tamanho de um texto
     * @param $str que representa o texto a ser reduzido
     * @param $quantidade que reprenta quantos caracters vão ser exibidos
     */
    function reduzirStr($str,$quantidade){
        $tamanho = strlen($str);
        if($str && $tamanho >= $quantidade){
        return substr($str,0,$quantidade)." [...]";
        }
    }