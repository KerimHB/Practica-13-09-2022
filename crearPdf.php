<?php
include 'headFoot.php';



$fpdf = new PDF();
$fpdf->AliasNbPages();
$fpdf->AddPage('P', 'A3');



$fpdf->SetFont('HELVETICA', 'B', 20,);
$fpdf->SetTitle(utf8_decode('2a Práctica Evaluada'));
$fpdf->MultiCell(0, 0, utf8_decode('2a Práctica Evaluada'), 0, 'C');
$fpdf->Ln(10);
$fpdf->SetFont('ARIAL', 'I', 12);
$fpdf->MultiCell(0, 5, utf8_decode('
Con diez cañones por banda,
viento en popa a toda vela,
no corta el mar, sino vuela
un velero bergantín;
bajel pirata que llaman,
por su bravura, el Temido,
en todo mar conocido
del uno al otro confín.
'), 0, 'J');



$fpdf->AddPage('L', 'LEGAL');
$fpdf->Image('Logo.png', 10,15,50,50);
$fpdf->Ln(40);
$fpdf->SetFont('TIMES', '', 12);
$fpdf->MultiCell(0,5,utf8_decode('¡Alimenten y propaguen el fuego de Cristo que tienen en ustedes! Lo
dijo el Papa Francisco esta mañana al recibir en audiencia en el Vaticano
a los jóvenes participantes en el XI Forum Internacional de Jóvenes, que
tuvo lugar en Ciampino, a pocos kilómetros de Roma en la Casa “El
Carmelo”. Tres días de encuentro organizados por el Dicasterio para los
Laicos, la Familia y la Vida con el objetivo de promover la
implementación del Sínodo 2018 centrado en el tema: Los jóvenes, la fe
y el discernimiento vocacional.'),0, 'J');

$fpdf->AddPage('L', 'LEGAL');
$fpdf->SetFont('Arial','',14);
$header = array(utf8_decode('Autor'), utf8_decode('Libro'), utf8_decode('Año'));
$data = $fpdf->LoadData('datos.txt');
$fpdf->BasicTable($header,$data);

$fpdf->Output('', 'DocPDFDWSL2022.pdf');
