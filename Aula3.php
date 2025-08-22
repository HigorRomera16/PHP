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

-------------------------------------------------------------------------------------------------

<html>
    <head>
        <title>Contador de Visitas</title>
        <!--Caracteres latinos(acentos e etc) -->
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Login no sistema Calu e Barreto SA</h1>
        <!-- elementos de formulário, como caixas de texto, selects, etc-->
        <!-- get ele coloca as var na URL. Post não coloca -->
        <form action="login.php" method="post">
            <!-- o que estiver no name, será a var do PHP --> 
            Usuário: <input type="text" name="usuario"> <br>
            Senha: <input type="password" name="senha"> <br>
            <input type="submit" value="Login do sistema"> <br>
        </form>
        <?php
          session_start();
          // inicialmente, o usuário não está logado
          $_SESSION["logado"] =false;
          if(isset($_POST["usuario"])){
            // pega as variáveis do formulário e guarda na sessão
            $_SESSION["usuario"] = $_POST["usuario"];
            $_SESSION["senha"] = $_POST["senha"];
            // verifica usuário e senha
            if($_SESSION["usuario"] == "admin" && $_SESSION["usuario"] == "senha123") {
                $_SESSION["logado"] = true;
                //redirecionar para á página inicial, que é obrigado a estar logado
                header("location: inicial.php");
            }else{
                // se a senha estiver errada
                print"<h2>Usuário ou senha incorretos!<h2>";
            }
            }
        
        ?>

    </body>
</html>
    
-------------------------------------------------------------------------------------------------

    <html>
    <head>
        <title>Tela Inicial no Sistemas</title>
        <!--Caracteres latinos(acentos e etc) -->
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        session_start();
        if(isset($_SESSION["logado"])){
            if($_SESSION["logado"]){
                // pega o $_SESSION["logado"] da outra tela
                print "<h1> Bem vindo ".$_SESSION["usuario"]."!</h1>";
            }else{
                // se errou usuário ou senha
                header("location: login3.php");
            }
        }else{
            // se não se logou
            header("location: login3.php");
        }
        ?>

    </body>
</html>
