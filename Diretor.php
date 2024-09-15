<?php 
class Diretor extends Funcionario{

    public function __construct($nome,$email,$cpf,$telefone,$cep,$cargo,$turno,$registro,$datanasc,$tipocontrato,$salario,$setor) {
        parent::__construct();
    }
}