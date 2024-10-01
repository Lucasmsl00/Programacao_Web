<?php

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

    function calcularImc($peso, $altura, $nome, $email){
        $resposta = 0;
        if ($peso && $altura && $nome && $email){
            $resposta = $peso / ($altura * $altura);
        }
        return round($resposta,2);
    }

    function verificarInput($nome, $email, $peso, $altura, $imc, $classificacao){
        if($nome && $email && $peso && $altura && $imc && $classificacao){
            cadastrarImc($nome, $email, $peso, $altura, $imc, $classificacao);
            return $confirmacao = "Cadastro feito com sucesso!";
        }else{
            return $confirmacao = "Erro!";
        }
    }

    function classificarImc($imc){
        if($imc <= 16){
            return $resultado = "Magreza grave";
        }elseif($imc > 16  && $imc <= 16.9){
            return $resultado = "Magreza moderada";
        }elseif($imc >= 17  && $imc <= 18.5){
            return $resultado = "Magreza leve";
        }elseif($imc >= 18.6  && $imc <= 24.9){
            return $resultado = "Peso Ideal";
        }elseif($imc >= 25  && $imc <= 29.9){
            return $resultado = "Sobrepeso";
        }elseif($imc >= 30  && $imc <= 34.9){
            return $resultado = "Obesidade I";
        }elseif($imc >= 35  && $imc <= 39.9){
            return $resultado = "Obesidade II";
        }else{
            return $resultado = "Obesidade III ou mórbida";
        }
    }

    function cadastrarImc($nome, $email, $peso, $altura, $imc, $classificacao){
        $sql = "INSERT INTO `imc` (`nome`,`email`,`peso`,`altura`,`imc`,`classificacao`) 
        VALUES (:nome, :email, :peso, :altura, :imc, :classificacao)";

        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':peso', $peso);
        $stmt->bindParam(':altura', $altura);
        $stmt->bindParam(':imc', $imc);
        $stmt->bindParam(':classificacao', $classificacao);
        $result = $stmt->execute();
        return ($result)?true:false;

    }

    function registrar($nome, $email, $telefone, $login, $senha){

        if( !$nome || !$email || !$telefone || !$login || !$senha){return;}
        $senha = criptografia($senha);
        $sql = "INSERT INTO `registro` (`nome`, `email`, `telefone`, `login`, `senha`) VALUES (:nome, :email, :telefone, :login, :senha)";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

    function contatar($nome, $sobrenome, $email, $telefone, $mensagem){

        if( !$nome || !$sobrenome || !$email || !$telefone || !$mensagem){return;}
        $sql = "INSERT INTO `contato` (`nome`, `sobrenome`, `email`, `telefone`, `mensagem`) VALUES (:nome, :sobrenome, :email, :telefone, :mensagem)";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':sobrenome', $sobrenome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':mensagem', $mensagem);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

    function criptografia($senha){
        if(!$senha){return false;}
        return sha1($senha);
    }

    function criarNoticia($titulo, $descricaoCurta, $descricao, $caminhoImg, $caminhoArquivo){
        if(!$titulo || !$descricaoCurta || !$descricao || !$caminhoImg || !$caminhoArquivo){return;}
        $sql = "INSERT INTO `noticias` (`titulo`, `descricaoCurta`, `descricao`, `caminhoImg`, `caminhoArquivo`) VALUES (:titulo, :descricaoCurta, :descricao, :caminhoImg, :caminhoArquivo)";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descricaoCurta', $descricaoCurta);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':caminhoImg', $caminhoImg);
        $stmt->bindParam(':caminhoArquivo', $caminhoArquivo);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

    function consultarNoticias(){
        $sql = "SELECT * FROM `noticias`";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }