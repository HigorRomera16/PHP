<?php //CadastroPessoas.php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome   = $_POST["nome"];
        $email  = $_POST["email"];
        $telefone =$_POST["telefone"];

        //preparar a linha para armazenar
        $dados = $nome."|".$email."|".$telefone."\n";

        $arquivo = "exemplo4.txt";
        $arquivo = fopen($arquivo, "a");
        if($arquivo) {
            fwrite($arquivo, $dados);
            fclose($arquivo);
            header("Location: exemplo4_form.php?status-sucesso");
        }else{
            print "Erro ao abrir o arquivo!";
            header("Location: exemplo4_form.php?status-erro");
        }
    }else{
        print "Acesso o formulário primeiro!";
        header("Location: exemplo4_form.php?status-erro")
        }
?>



