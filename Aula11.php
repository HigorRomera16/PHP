<?php
    //fopen(nomeArquivo, tipoAbert)
    //tipoAbert = a: acrescentar texto;
    // w: escrever no arquivo, porém, zera ele; r: somente leitura
    $arquivo = fopen("exemplo1.txt", "a");

    if($arquivo) {
        // escreve no arquivo
        fwrite($arquivo, "Olá 1DS SEDUC!\n");
        fclose($arquivo);
        print "Arquivo gravado com sucesso!";
    }else{
    print "Erro ao abrir o arquivo!";
    }
?>