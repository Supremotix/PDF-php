<?php



require './vendor/autoload.php';

use  Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
$html2pdf ->writeHTML('<h1>Hola mundo mi primer PDF </H1>');
$html2pdf->output();

?>
