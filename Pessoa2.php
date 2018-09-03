<?php

class Pessoa
{
	protected $nome;
	protected $idade;
	protected $altura;

	public function __construct($nome, $idade, $altura)
	{
		$this->nome = $nome;
		$this->idade = $idade;
		$this->altura = $altura;
	}

	public function andar()
	{
		echo "Estou andando...\n";
	}

	public function identificar()
	{
		echo "
		Nome: {$this->nome}\n
		Idade: {$this->idade}\n
		Altura: {$this->altura}\n";
	}
}