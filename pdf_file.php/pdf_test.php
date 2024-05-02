<?php 

require "fpdf186/fpdf.php";

if (isset($_POST["fname"]) and isset($_POST["lname"]) and isset($_POST["email"])) {
    if (is_string($_POST["fname"]) and is_string($_POST["lname"]) and filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $text = $_POST["fname"]." ".$_POST["lname"].chr(163);
    }
} 

if (isset($text)) {
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('courier','B',20);
    $pdf->Cell(40,10,$text);
    $pdf->Output();

} else {
    echo "PDF could not be loaded, try again";
}

?>