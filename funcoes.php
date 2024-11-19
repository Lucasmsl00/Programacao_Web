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
        if (count(consultarLogin($login)) > 0 ){return;}
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

    function criarNoticia($titulo_noticia, $descricaoCurta, $descricao, $imagem, $id_categoria){
        if(!$titulo_noticia || !$descricaoCurta || !$descricao || !$imagem || !$id_categoria){return;}
        $sql = "INSERT INTO `noticias` (`titulo`, `descricaoCurta`, `descricao`, `imagem`, `id_categoria`) VALUES (:titulo_noticia, :descricaoCurta, :descricao, :imagem, :id_categoria)";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':titulo_noticia', $titulo_noticia);
        $stmt->bindParam(':descricaoCurta', $descricaoCurta);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':imagem', $imagem);
        $stmt->bindParam(':id_categoria', $id_categoria);
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

    function consultarLogin($login){
        if(!$login){return;}
        $sql = "SELECT `id`, `nome`, `login`, `senha` FROM `registro` WHERE `login` = '$login'";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($resultado) == 0){return false;}
        return $resultado[0];
        var_dump($resultado[0]);die;
    }

    function validarSenha($senhaDigitada, $senhaBd){
        if(!$senhaDigitada || !$senhaBd){return false;}
        if($senhaDigitada == $senhaBd){
            return true;
        }
        return false;
    }

    function protegerTela(){
        if(
            !$_SESSION ||
            !$_SESSION["usuario"]["status"] === 'logado'
        ){
            header("Location:".constant("URL_LOCAL_SITE_PAGINA_LOGIN"));
        }
    }

    function registrarAcessoValido($usuarioCadastrado){
        $_SESSION["usuario"]["nome"] =  $usuarioCadastrado["nome"];
        $_SESSION["usuario"]["id"] = $usuarioCadastrado["id"];
        $_SESSION["usuario"]["status"] = 'logado';
    }


    function limparSessao(){
        unset($_SESSION["usuario"]);
        header('Location:'.constant("URL_LOCAL_SITE_PAGINA_LOGIN"));
    }

    function buscarNoticiaPorId($id){
        if(!$id){return;}
        $sql = "SELECT * FROM `noticias` WHERE `id` = :id";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $result = $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result[0];
    }

    function cadastrarCategoria($nome_categoria){

        if( !$nome_categoria){return;}
        $sql = "INSERT INTO `categoria` (`nome_categoria`) VALUES (:nome_categoria)";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome_categoria', $nome_categoria);
        $result = $stmt->execute();
        return ($result)?true:false;
    }
    
    function verificarCategoriaDuplicada($termo){

        if( !$termo){return;}
        $sql = "SELECT * FROM `categoria` WHERE `nome_categoria` = :termo";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':termo', $termo);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

    function listarCategorias(){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM categoria";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

    function listarNoticiasPorCategoria($idCategoria){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM noticias WHERE `id_categoria` = $idCategoria LIMIT 3;";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

    function buscarIdCategoria($nome_categoria){
        $pdo = Database::conexao();
        $sql = "SELECT `id` FROM categoria WHERE `nome_categoria` = '$nome_categoria'";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list[0];
    }


    function gerarNumerosRandomicos(){
        return date('Y').date('m').date('d').date("h").date(':i').'-'.date('sa').rand();
      }
    
      function upload($imagem){
        if(!@$_FILES["fileToUpload"]){return;}
    
        $target_dir = "assets/uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])){
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
    
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
    
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 900000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
    
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
    
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                return $_FILES["fileToUpload"]["name"];
            } else {
                // echo "Sorry, there was an error uploading your file.";
                return false;
            }
        }
      }