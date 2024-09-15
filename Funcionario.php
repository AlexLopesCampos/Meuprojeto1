<?php 
class Funcionario extends Pessoa {
    public $cep;
    public $cargo;
    public $turno;
    public $registro; 
    public $datanasc;
    public $tipocontrato; 
    public $salario;

    public function __construct($nome,$email,$cpf,$telefone,$cep,$cargo,$turno,$registro,$datanasc,$tipocontrato,$salario){
        parent::__construct();
        $this->cep = $cep;
        $this->cargo = $cargo;
        $this->turno = $turno ;
        $this->registro = $registro;
        $this->datanasc = $datanasc;
        $this->tipocontrato = $tipocontrato;
        $this->salario = $salario;

    }
    public function getcep() {
        return $this->cep;
    }
    public function getcargo() {
        return $this->cargo;
    }
    public function getturno() {
        return $this->turno;
    }
    public function getregistro() {
        return $this->registro;
    }
    public function getdatanasc() {
        return $this->datanasc;
    }
    public function getTipocontrato() {
        return $this->tipocontrato;
    }  
    public function getSalario() {
        return $this->salario;
    }  
    
}   

