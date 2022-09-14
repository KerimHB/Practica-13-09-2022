<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('ARIAL', 'B', 20);
        $this->Cell(0, 10, utf8_decode('Kerim Michael Henández Borja'), 0, 'C', false);
        $this->Ln(5);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('ARIAL', 'I', 10);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    function LoadData($file)
    {
        // Read file lines
        $lines = file($file);
        $data = array();
        foreach ($lines as $line)
            $data[] = explode(';', trim($line));
        return $data;
    }

    function BasicTable($header, $data)
    {
        // Header
        foreach ($header as $col)
            $this->Cell(70, 7, $col, 1);
        $this->Ln();
        // Data
        foreach ($data as $row) {
            foreach ($row as $col)
                $this->Cell(70, 7, $col, 1);
            $this->Ln();
        }
    }
}
