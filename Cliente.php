<?php 
class Cliente extends Pessoa{
    public $tipo;
    public $endereco;
    public function __construct($nome,$email,$cpf,$telefone,$tipo,$endereco){
        parent::__construct();
        $this-> tipo = $tipo;
        $this->endereco = $endereco;
    }
    public function gettipo(){
        return $this->tipo;
    }
    public function getEndereco(){
        return $this->endereco;
    }
}