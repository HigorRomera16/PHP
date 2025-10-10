<?php
    $arquivo = fopen("exemplo1.txt", "r");
    if($arquivo) {
        //imprimir o arquivo linha a linha
        while(($linha = fgets($arquivo)) !== false){
            print $linha . "<BR>";
        }
    }else{
        print "Erro ao abrir a arquivo";
    }

?>