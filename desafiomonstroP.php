<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['Email'];
    $telefone = $_POST['telefone'];
    $nomeA = $_POST['nomeA'];
    $especie = $_POST['especie'];

    $dados = $nome."|".$email."|".$telefone."|".$nomeA."|".$especie."|"."\n";

    $arquivo = "clientes.txt";

    $file = fopen($arquivo, 'a');
    if ($file) {
        fwrite($file, $dados);
        fclose($file);
        echo "Cliente cadastrado com sucesso!";
    }else{
        echo "Erro ao abrir o arquivo.";
    }
}else{
    echo "Metódo de requisição inválido.";
}
?>
     <form action="desafiomonstroT.php" method="post">

<button type="submit"> Confirmar </button>
</form>
</body>
</html>
