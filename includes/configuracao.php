<?php
// $SERVER["SERVER_NAME"]

switch ('localhost') {
    case 'localhost':
        $enviroment['local'] = "https://localhost/";
        break;
    case 'homol':
        $enviroment['homol'] = "https://meusite.com.br";
        break;
    case 'prod':
        $enviroment['prod'] = "";
        break;
}

/**
 * Definindo constante URL_LOCAL
 * Caminho absoluto
 */

define("URL_LOCAL_BASE",$enviroment['local']);
define("URL_LOCAL_SITE",constant("URL_LOCAL_BASE")."Lucas_M/Programacao_Web/");
define("URL_LOCAL_SITE_PAGINA",constant("URL_LOCAL_SITE")."?pagina=");




// define("URL_LOCAL_IMG",constant(("URL_LOCAL_BASE")."./imagens/"));
?>