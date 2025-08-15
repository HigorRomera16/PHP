<?php
    session_start(); //inicia a sessão
    $_SESSION["usuario"] = "Higor Romera";
    $_SESSION["logado"] = true;
?>
<html>
    <body>
        <form method="post" action="Exemplo2.index.php">
            <input type="submit" value="Enviar" />
        </form>
        <a href="Exemplo2.index.php">Enviar</a>                                                 
    </body>
</html>
