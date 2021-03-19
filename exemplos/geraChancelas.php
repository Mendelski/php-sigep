<?php

use PhpSigep\Model\AccessDataHomologacao;
use PhpSigep\Pdf\Chancela\Carta;
use PhpSigep\Pdf\Chancela\Carta2016;
use PhpSigep\Pdf\Chancela\Pac;
use PhpSigep\Pdf\Chancela\Pac2016;
use PhpSigep\Pdf\Chancela\Sedex;
use PhpSigep\Pdf\Chancela\Sedex2016;
use PhpSigep\Pdf\ImprovedFPDF;

require_once __DIR__ . '/bootstrap-exemplos.php';

$pdf = new ImprovedFPDF('P', 'mm', array(100, 140));
$pdf->SetFont('Arial', '', 10);
$pdf->AddPage();

$accessData = new AccessDataHomologacao();

$carta = new Carta2016(5, 5, 'Layout 2016', $accessData);
$carta->draw($pdf);

$carta = new Carta(50, 5, 'Layout Antigo', $accessData);
$carta->draw($pdf);

$sedex = new Sedex2016(5, 50, 'Layout 2016', 2, $accessData);
$sedex->draw($pdf);

$sedex = new Sedex(50, 50, 'Layout antigo', 2, $accessData);
$sedex->draw($pdf);

$pac = new Pac2016(5, 100, 'Layout 2016', $accessData);
$pac->draw($pdf);

$pac = new Pac(50, 100, 'Layout antigo', $accessData);
$pac->draw($pdf);

$pdf->Output();
