<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Saudação.php" method="post">

<label>Digite se nome: </label>
<input type="text" name="Higor">
 <input type="submit" value="Entrar">



    </form>
</body>
</html>

<?php
$nomeado = $_POST['Higor'];
echo "Seja bem vindo! " .$nomeado;

?>

--------------------------------------------------------------

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
</head>
<body>
    <h1>Calculadora Simples</h1>
    <form method="POST">

    <label for="num1">Número 1:</label> 
    <input type=number id="num1" name="num1" required><br><br>   
    
    <label for="num2">Número 2: </label>
    <input type="number" id="num2" name="num2" required><br><br>

    <label for="operacao">Operação: </label>
    <select name="operacao" required>
        <option value="soma">Soma</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicao">Multiplicação</option>
        <option value="divisao">Divisão</option>
    </select><br><br>

    <input type="submit" value="Calcular">
</form>

<?php
    //if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacao = $_POST["operacao"];

        $resultado = 0;

        switch ($operacao) {
            case "soma":
                $resultado = $num1 + $num2;
                break;
            case "subtracao":
                $resultado = $num1 - $num2;
                break;
            case "multiplicacao":
                $resultado = $num1 * $num2;
                break;
            case "divisao":
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                }else{
                    $resultado = "Erro: Divisão por zero!";
                }
                break;
            default:
            $resultado = "Operação inválida!";
        }

        echo "<h3>Resultado: $resultado</h3>";
   // }

?>
</body>
</html>
