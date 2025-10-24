<?php
$arquivo = 'clientes.txt';

if (file_exists($arquivo)) {
if (unlink($arquivo)) {
echo "O arquivo $arquivo foi excluído com sucesso.";
} else {
echo "Não foi possível excluir o arquivo $arquivo.";
}
} else {
echo "O arquivo $arquivo não existe.";
}
?>