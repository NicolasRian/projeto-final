<?php 
class produto{

	private $nome;
	private $armazem;
	private $estante;
	private $prateleira;
	private $posicao;
    private $codigo;


	public function __construct($nome, $armazem2, $estante, $prateleira, $posicao){
		$this->nome = $nome;
		$this->armazem = $armazem;
		$this->estante = $estante;
		$this->prateleira = $prateleira;
		$this->posicao = $posicao;
        $this->codigo = $codigo;

	}
	public function setNome($novoNome){
		$this->nome = $novoNome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setArmazem($novoArmazem){
		$this->armazem= $novoArmazem;
	}

	public function getArmazem(){
		return $this->armazem;
	}

	
	public function setEstante($novoEstante){
		$this->estante = $novoEstante;
	}

	public function getEstante(){
		return $this->estante;
	}


	public function setPrateleira($novoPrateleira){
		$this->prateleira = $novoPrateleira;
	}

	public function getPrateleira(){
		return $this->prateleira;
	}

	public function setPosicao($novoPosicao){
		$this->posicao = $novoPosicao;
	}

	public function getPosicao(){
		return $this->posicao;
	}

    public function setCodigo($novoCodigo){
        $this->$codigo = $novoCodigo;
    }
    public function getCodigo(){
        return $this->codigo;
    }

}