<?php 

require 'conexao.class.php';
include 'produto.class.php';

interface IRepositorioProdutos{
    public function cadastrarProduto($produto);
}

class RepositorioProdutosSQL implements IRepositorioProdutos
{
    private $conexao;
     public function __construct()
     {
        $this->conexao = new Conexao("localhost", "locadora", "alunolab", "sistema");
        if ($this->conexao->conectar() == false){
            echo "Erro" . mysqli_error();
        }
     }
     public function cadastrarProduto($produto)
     {
        $nome = $produto->getNome();
        $armazem = $produto->getArmazem();
        $estante = $produto->getEstante();
        $prateleira = $produto->getPrateleira();
        $posicao = $produto->getPosicao();

        $sql = "INSERT INTO produtos(
        nome,
        armazem,
        estante,
        prateleira,
        posicao,
        codigo)
        
        VALUES(
        '$nome',
        '$armazem',
        '$estante',
        '$prateleira',
        '$posicao',
        NULL)";

        $this->conexao->executarQuery($sql);
     }
}

$repositorio = new RepositorioProdutosSQL();


?>