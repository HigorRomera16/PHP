<?php
    $arquivo = fopen("exemplo1.txt", "r");
    if($arquivo) {
       $conteudo = fread($arquivo, filesize("exemplo1.txt"));
       print $conteudo;
       fclose($arquivo);
    }else{
        print "Erro ao abrir o arquivo!";
    }
?>