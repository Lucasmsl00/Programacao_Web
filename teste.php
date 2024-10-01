<?php

include_once("configuracao/conexao.php");
include_once("includes/funcoes.php");
$consulta = consultarNoticias();


foreach (consultarNoticias() as $noticia){
    var_dump($noticia);
}