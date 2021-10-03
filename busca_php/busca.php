<?php 

//O isset serve para verificar se uma variável está vazia ou não

if(!isset($_GET['nome_livro'])){
    header("Location: index.php");
    exit;
}

/*
O método trim() remove os espaços em branco (whitespaces) do início
e/ou fim de um texto. É considerado espaço em branco (espaço, tabulação, 
espaço fixo/rígido, etc.) e todo sinal de fim de linha de texto;

O % serve para pesquisas no banco de dados;

O . é para concatenar.
*/

$nome = "%".trim($_GET['nome_livro'])."%";

/*

O prepare() vai servir para fazer o mesmo que uma query no banco de dados,
porém não serão valores estáticos, pois é possível executar(execute()) o prepare 
varias vezes porém injetando valores diferentes a cada vez;

O bindParam() vai passar os parâmetros para o a query que vai ser executada no 
banco de dados.

*/
$dbh = new PDO('mysql:host=Localhost; dbname=db_buscaphp', 'root', '06012005');
$sth = $dbh->prepare('select * from `tbl_livro` where `nome` like :nome');
$sth->bindParam(':nome', $nome, PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($resultados); exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Busca</title>
</head>
<body>
    <h2>Resultado da Busca</h2>
    <?php
    if(count($resultados)) {
        foreach($resultados as $Resultado){
    ?>
    <label><?php echo $Resultado['nome']; ?></label>
    <br>
    <?php
    }} else { ?>
    <label>Não foram encontrados resultados pelo termo buscado</label>
    <?php }?>
</body>
</html>