<?php

use PhpSigep\Model\AccessDataHomologacao;
use PhpSigep\Model\CalcPrecoPrazo;
use PhpSigep\Model\Dimensao;
use PhpSigep\Model\ServicoDePostagem;

require_once __DIR__ . '/bootstrap-exemplos.php';

$dimensao = new Dimensao();
$dimensao->setTipo(Dimensao::TIPO_PACOTE_CAIXA);
$dimensao->setAltura(15); // em centímetros
$dimensao->setComprimento(17); // em centímetros
$dimensao->setLargura(12); // em centímetros

$params = new CalcPrecoPrazo();
$params->setAccessData(new AccessDataHomologacao());
$params->setCepOrigem('30170-010');
$params->setCepDestino('04538-132');
$params->setServicosPostagem(ServicoDePostagem::getAll());
$params->setAjustarDimensaoMinima(true);
$params->setDimensao($dimensao);
$params->setPeso(0.150);// 150 gramas


$phpSigep = new PhpSigep\Services\SoapClient\Real();
$result = $phpSigep->calcPrecoPrazo($params);

var_dump((array)$result);