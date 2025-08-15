<?php
    session_start();

    print "Bem Vindo, ".$_SESSION["usuario"];
    if($_SESSION["logado"]){
        print "<br>Você está logado!";
    }else{
        // volta a página anterior
        header("location: ATV3.index.php");
    }
    
?>