<style>
    body {
        background: #A9C895;
    }
    form {
        background-color: #2E5845;
        position: center;
        padding: 35px;
        border-radius: 40px;
        left:780px;
        top:130px;
        position: fixed;
        box-shadow: 0 0 10px rgba(0, 0, 0, 5);
    }

    input[type="text"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 15px;
        border: 2px solid black;
        border-radius: 18px;
        background-color: white;
        color: black;
        font-size:14px;
    }

    input[type="tel"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 15px;
        border: 2px solid black;
        border-radius: 18px;
        background-color: white;
        color: black;
        font-size:14px;
    }

    input[type="email"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 15px;
        border: 2px solid black;
        border-radius: 18px;
        background-color: white;
        color: black;
        font-size:14px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 15px;
        border: 2px solid black;
        border-radius: 18px;
        background-color: white;
        color: black;
        font-size:14px;
    }

    input[type="reset"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 15px;
        border: 2px solid black;
        border-radius: 18px;
        background-color: white;
        color: black;
        font-size:14px;
    }

    h1 {
        
        color: ghostwhite;
    }

    label {
        color: ghostwhite;
    }
</style>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes para Clínica Veterinária</title>
</head>
<body>
    <center>
    <form action="desafiomonstroP.php" method="post">
    <h1>Cadastro de Clientes</h1>
    <label for="nome">Nome Completo: </label><br>
    <input type="text" id="nome" name="nome" required placeholder="Nome"/><br><br>

    <label for="Email">E-Mail: </label><br>
    <input type="email" id="Email" name="Email" required placeholder="Email" /><br><br>

    <label for="telefone">Telefone: </label><br>
    <input type="tel" id="telefone" name="telefone" required placeholder="Telefone" /><br><br>

    <label for="nomeA">Nome do Animal de Estimação: </label><br>
    <input type="text" id="nomeA" name="nomeA" required placeholder="Ex: Gabriel Jr" /><br><br>

    <label for="especie">Espécie do Animal: </label><br>
    <input type="text" id="especie" name="especie" required placeholder="Canis Lupe" /><br><br>

    <input type="submit" value="Cadastrar">
    <input type="reset" value="Cancelar">
    <center>
</body>
</html>