<?php 

//O isset serve para verificar se uma variável está vazia ou não

if(!isset($_GET['nome_livro'])){
    header("Location: index.php");
    exit;
}

/*
O método trim() remove os espaços em branco (whitespaces) do início
e/ou fim de um texto. É considerado espaço em branco (espaço, tabulação, 
espaço fixo/rígido, etc.) e todo sinal de fim de linha de texto.

O "%" serve para no banco de dados 
*/

?>