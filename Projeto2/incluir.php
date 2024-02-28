<?php 
require 'repositorio.class.php';
$produtoRecebido = new produto($_REQUEST['nome'], $_REQUEST['armazem'], $_REQUEST['estante'], $_REQUEST['prateleira'], $_REQUEST['posicao'], null);

$repositorio->cadastrarProduto($produtoRecebido);
echo "<script> alert('Cadastrado com sucesso!'); </script>";
echo "<script> location.href='index.php';</script>";
?>