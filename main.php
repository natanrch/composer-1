<?php

require_once 'Pessoa.php';
require_once 'Pessoa2.php';
require_once 'vendor/autoload.php';

// use Projeto\Pessoa;

// $pessoa = new Pessoa("Natan", 28, 1.73);
// $pessoa2 = new \Pessoa("Div", 20, 1.73);
// $pessoa->andar();
// $pessoa2->andar();

use Endroid\QrCode\QrCode;

$qrCode = new QrCode('Not all who wander are lost');

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();