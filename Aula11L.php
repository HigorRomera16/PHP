<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitor de Clientes</title>
</head>
<body>
   <?php
   $nArquivo = "exemplo4.txt";
   if(!file_exists($nArquivo)){
    header("Location: exemplo4_form.php?status=erro");
   }else{
     print "<table>";
     print " <tr><td colspan=\"3\">Dados dos clientes</td></tr>";
     print " <tr><td>Nome</td><td>E-Mail</td><td>Telefone</td></tr>";
     $arquivo = fopen($nArquivo, "r");
     while(($linha = fgets($arquivo)) !==false){
        //divide os | em um array
        $dados = explode("|", trim($linha));
        print "<tr>";
        // para cada | que ele achar, ele imprime uma célula da tabela
        foreach($dados as $celula)
            print "<td>".$celula."</td>";
        print "</tr>";
     }
     print "</table>";
     fclose($arquivo);
    }
    ?>
    </body>
</html>