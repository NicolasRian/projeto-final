<?php 
require 'repositorio.class.php';
$destino = "incluir.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <form action="<?=$destino;?>" method="POST">
        <label>Produto:</label>
        <input type = textarea name = 'nome'>
        <label>armazem<label>
        <input type = textarea name = 'armazem'>
        <label>estante</label>
        <input type = textarea name = 'estante'>
        <label>prateleira</label>
        <input type = textarea name = 'prateleira'>
        <label>posiçao</label>
        <input type = textarea name = 'posicao'>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

