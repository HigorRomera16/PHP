<style>
    table {
       border:5px solid black
    }
    tr {
        border:5px solid black
    }
    th {
        border:5px solid black
    }
</style>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>
<body>
    <?php
    $nArquivo = "clientes.txt";
    if(!file_exists($nArquivo)){
        echo("Erro ao abrir o arquivo.");
    }else{
        print "<table>";
        print " <tr><th colspan=\"3\">Dados dos clientes</th></tr>";
        print " <tr><th style='border:5px solid black'>Nome Completo</th><th>E-Mail</th><th>Telefone</th><th>Nome do Animal de Estimação</th><th>Espécie Animal</th></tr>";
        $arquivo = fopen($nArquivo, "r");
        while(($line = fgets($arquivo)) !==false){
            $dados = explode("|", trim($line));
            print "<tr>";
            foreach($dados as $celula)
                print "<td>".$celula."</td>";
            print "</tr>";
        }
        print "</table>";
        fclose($arquivo);
    }
    ?>
    <a href="./desafiomonstroD.php">

    <button>Apagar</button>

    </a>
    
</body>
</html>