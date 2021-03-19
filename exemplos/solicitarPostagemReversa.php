<?php

// Altera as configurações do PHP para mostrar todos os erros, já que este é apenas um script de exemplo.
// No seu ambiente de produção, você não vai precisar alterar estas configurações.
use PhpSigep\Bootstrap;
use PhpSigep\Config;
use PhpSigep\Model\AccessDataHomologacaoReversa;
use PhpSigep\Model\ColetasSolicitadas;
use PhpSigep\Model\Destinatario;
use PhpSigep\Model\ObjCol;
use PhpSigep\Model\Remetente;
use PhpSigep\Model\SolicitarPostagemReversa;
use PhpSigep\Services\SoapClient\Real;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', 'E_ALL|E_STRICT');
error_reporting(E_ALL);

header('Content-Type: text/html; charset=utf-8');

$autoload = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoload)) {
    require_once $autoload;
}
if (!class_exists('PhpSigepFPDF')) {
    throw new RuntimeException(
        'Não encontrei a classe PhpSigepFPDF. Execute "php composer.phar install" ou baixe o projeto ' .
        'https://github.com/stavarengo/php-sigep-fpdf manualmente e adicione a classe no seu path.'
    );
}
require_once __DIR__ . '/../src/PhpSigep/Bootstrap.php';

$accessDataParaAmbienteDeHomologacao = new AccessDataHomologacaoReversa();

$config = new Config();
$config->setAccessData($accessDataParaAmbienteDeHomologacao);
$config->setEnv(Config::ENV_DEVELOPMENT);
$config->setCacheOptions(
    array(
        'storageOptions' => array(
            'enabled' => false,
            'ttl' => 10,// "time to live" de 10 segundos
            'cacheDir' => sys_get_temp_dir(), // Opcional. Quando não inforado é usado o valor retornado de "sys_get_temp_dir()"
        ),
    )
    
);

Bootstrap::start($config);

//EXEMPLO CAPTURADO DO send4store/php-sigep

$destinatario = new Destinatario();
$destinatario->setNome('Usuário Destinatário');
$destinatario->setLogradouro('Avenida Morumbi');
$destinatario->setNumero('2500');
$destinatario->setComplemento('911');
$destinatario->setReferencia('referencia de teste');
$destinatario->setCidade('São Paulo');
$destinatario->setUf('SP');
$destinatario->setCep('05606200');
$destinatario->setBairro('Morumbi');

$destinatario->setEmail('teste@teste.com');

$remetente = new Remetente();
$remetente->setNome('Usuário Remetente');
$remetente->setLogradouro('Avenida Vicente Machado');
$remetente->setNumero('15');
$remetente->setComplemento('911');
$remetente->setReferencia('referencia de teste');
$remetente->setCidade('Curitiba');
$remetente->setBairro('Centro');
$remetente->setUf('PR');
$remetente->setCep('80420010');

$remetente->setEmail('teste@teste.com');
$remetente->setIdentificacao('09941751919');
$remetente->setSms('N');
//$produto = new \PhpSigep\Model\Produto();
//$produto->setCodigo(116600403);
//$produto->setTipo(0);
//$produto->setQtd(1);
$objCol = new ObjCol;

$objCol->setId(date('hms'));
$objCol->setNum('');
$objCol->setEntrega('');
$objCol->setItem(1);
$objCol->setDesc('');

$coletasSolicitadas = new ColetasSolicitadas();
$coletasSolicitadas->setTipo('A');
$coletasSolicitadas->setNumero('');
$coletasSolicitadas->setValor_declarado(null);
$coletasSolicitadas->setServico_adicional('');
$coletasSolicitadas->setAr(1);
$coletasSolicitadas->setAg(10);
$coletasSolicitadas->setRemetente($remetente);
$coletasSolicitadas->setObj_col($objCol);

$postagem = new SolicitarPostagemReversa();
$postagem->setAccessData($accessDataParaAmbienteDeHomologacao);
$postagem->setDestinatario($destinatario);
$postagem->setColetas_solicitadas($coletasSolicitadas);
$postagem->setContrato('9992157880');
$postagem->setCodigo_servico('04677');

$phpSigep = new Real();
$result = $phpSigep->solicitarPostagemReversa($postagem);
echo "<pre>";
print_r($result);
echo "</pre>";
