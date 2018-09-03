<?php

require_once 'Pessoa.php';
require_once 'Pessoa2.php';

use Projeto\Pessoa;

$pessoa = new Pessoa("Natan", 28, 1.73);
$pessoa2 = new \Pessoa("Div", 20, 1.73);
$pessoa->andar();
$pessoa2->andar();