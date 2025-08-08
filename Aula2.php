<html>
    <head>
        <meta CHARSET="utf-8" />
        <title>Exercícios 1 - For</title>
</head>
<body>
<?php
  for ($i=0; $i <= 5; $i++){
    print"Número: ".$i."<BR>";
  }
  print"Acabou";
?>
</body>
</html>
--------------------------------------------------------------------------
<html>
    <head>
        <meta CHARSET="utf-8" />
        <title>Exercícios 2 - While</title>
</head>
<body>
<?php
// laço condicional: verifica uma consição para continuar dentro do laço,
// ou seja não é somente números como no for. pré-condicional:
// verefica a codição ANTES de executar o laço. Ou seja, pode ser que
// chegue no laço com a condição NEGATIVA e NÃO execute o laço.
  $i = 1;
  while($i <= 5) {
    print "Número:".$i."<br>";
    $i++;
  }
  print "Terminou";
?>
</body>
</html>
--------------------------------------------------------------------------
<html>
    <head>
        <meta CHARSET="utf-8" />
        <title>Exercícios 3 - Do-while</title>
</head>
<body>
<?php
// laço condicional: verifica uma consição para continuar dentro do laço,
// ou seja não é somente números como no for. pré-condicional:
// verefica a codição APÓS de executar o laço. Ou seja, ele vai
// executar o laço ao menos 1 vez
  $i = 1;
  do{
    print "Números: ".$i."<BR>";
    $i++;
  } while($i <= 5);
  print "Terminou";
?>
</body>
</html>
-------------------------------------------------------------------------
<html>
    <head>
        <meta CHARSET="utf-8" />
        <title>Exercícios 4 - Foreach</title>
</head>
<body>
<?php
// laço foeach: ele passa por todos os índices de um array.
// A cada interação, ele passar em 1 índice do array
  $cestaFrutas = array("Maça","Banana", "Laranja");
  foreach($cestaFrutas as $fruta) {
  print "Fruta: ".$fruta."<br>";
}
?>
</body>
</html>
