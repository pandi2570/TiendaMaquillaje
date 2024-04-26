<?php
require_once "../model/modelVentas.php";
require_once "../src/libs/fpdf/fpdf.php";

$model = new ModelVentas();
if (isset($_GET['tk'])) {
    $car = $model->getVenta($_GET['tk']);
    $total = $model->getTVenta($_GET['tk']);
}

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('../src/icons/logo.jpg', 10, 6, 30);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Move to the right
        $this->Cell(60);
        // Title
        $this->Cell(90, 10, 'Tiket - .:Supershop Cosmetic:.', 1, 0, 'C');
        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);

$pdf->Cell(20, 10, "Cantidad", 1, 0, 'C');
$pdf->Cell(90, 10, "Producto", 1, 0, 'C');
$pdf->Cell(30, 10, "Importe", 1, 0, 'C');
$pdf->Cell(30, 10, "Foto", 1, 1, 'C');
while ($item = $car->fetch_assoc()) {
    $pdf->Cell(20, 30, $item['cant'], 1, 0, 'C');
    $pdf->Cell(90, 30, $item['nombre_prenda'], 1, 0, 'C');
    $pdf->Cell(30, 30, $item['importe'], 1, 0, 'C');
    $pdf->Cell(30, 30, $pdf->Image('../src/imgs/' . $item['fk_prenda'] . ".jpeg", $pdf->GetX() + 5, $pdf->GetY(), 20), 1, 1, 'C');
}
$pdf->Cell(110, 10, "Total: $", 1, 0, 'R');
$pdf->Cell(30, 10, $total, 1, 0, 'C');
//$pdf->Output();
$pdf->Output('D', 'Tiket_venta-supershop cosmetic.pdf');
?>
?>