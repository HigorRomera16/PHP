<html>
    <head>
        <title>Contador de Visitas</title>
        <!--Caracteres latinos(acentos e etc) -->
        <meta charset="utf-8">
    <head>
    <body>
        <?php
        // abro a sessão, ou seja, começo a guardar os valores
        // das variáveis entre as páginas, no usuário
        session_start();
        // crio a variável de contar visitas --> $_SESSION é um ARRAY!!!
        // uso a $_SESSION justamente para não perder o valor ao autorizar a página

        // isset verefica se a variável existe
        if (isset($_SESSION["visitas"]))
          $_SESSION["visitas"]++; // se ela existir, como +1
        else
          $_SESSION["visitas"] = 1; // se não existir, crio ela valendo 1

          print "Este site teve ".$_SESSION["visitas"]."visitas.";
        ?>
    <body>
<html>
