<?php 
class Gerente extends Funcionario{
public $setor;
public function __construct($nome,$email,$cpf,$telefone,$cep,$cargo,$turno,$registro,$datanasc,$tipocontrato,$salario,$setor) {
    parent::__construct();
    $this->setor = $setor;
}
}
