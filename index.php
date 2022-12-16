<?php

// Carregar o Composer
require './vendor/autoload.php';

// Referenciar o namespace DomPDF
use Dompdf\Dompdf;

// Instanciar e usar a classe dompdf
$pdf = new Dompdf();

// Instanciar o metodo loadHtml e enviar o conteudo do PDF
$pdf->loadHtml('Amilton - Gerar PDF');

// Configurar o tamanho e a orientação do papel
// landscape - Imprimir no formato paisagem
// $pdf->setPaper('A4', 'landscape');

// portrait - Imprimir no formato retrato
$pdf->setPaper('A4', 'portrait');

// Renderizar o HTML como pdf
$pdf->render();

// Gerar o PDF
$pdf->stream();
