<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
</head>
<body>
    <h1>Cadastro de Pessoas</h1>
    <form action="Aula11CP.php" method="post">
        <?php
        if(isset($_GET["status"])) {
            if ($_GET["status"] == "sucesso"){
                print "Cadastro com sucesso!";
            }else{
                print "Erro ao cadastrar!";
            }
        }
        ?>
        <label for="nome">Nome:<label><br>
        <input type="text" id="nome" name="nome" required /><br><br>

        <label for="email">E-mail:<label><br>
        <input type="text" id="email" name="email" required /><br><br>

        <label for="telefone">Telefone:<label><br>
        <input type="tel" id="telefone" name="telefone" required /><br><br>


        <input type="submit" value="cadastrar" />
    </form>
</body>
</html>
