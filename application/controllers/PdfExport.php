Copy code
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/fpdf/fpdf.php'; // Chemin vers la bibliothèque FPDF

class PdfExport extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function export() {
        $pdf = new FPDF();
        $idProgramme=2;
        if($_GET['idProgramme']!=null){
            $idProgramme=$_GET['idProgramme'];
        };
        $toutProgramme= $this->programme->selectProgrammeGeneraleParIdProgramme($idProgramme);
        $AlimentPourProgramme= $toutProgramme['Aliment'];
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(200, 30, 'Votre Programme : ', 0, 1 , 'C');
        $pdf->SetFont('Arial', 'B', 12);

        for ($i = 0; $i < count($AlimentPourProgramme['Aliment']); $i++) {
                $pdf->Cell(40, 20, $AlimentPourProgramme['Aliment'][$i]['Nom']."  :", 0 , 1);
                $pdf->SetFont('Arial', 'B',  9);
                $pdf->Cell(80, 7," Montant  : ".$AlimentPourProgramme['Aliment'][$i]['Montant'] , 0 , 1 , 'C');
                $pdf->SetFont('Arial', 'B',  9);
                $pdf->Cell(80, 7,"Poids : ".$AlimentPourProgramme['Aliment'][$i]['Poids'] , 0 , 1 , 'C');
                $pdf->SetFont('Arial', 'B',  9);
                $pdf->Cell(80, 7,$AlimentPourProgramme['Duree'] , 0 , 1 , 'C');

                $pdf->SetFont('Arial', 'B', 12);
        }
        $pdf->Cell(40, 20, "Montant Moyenne : ".$AlimentPourProgramme['Montant']." ", 0 , 1);
        $pdf->Cell(40, 20, "Montant Total : ".$AlimentPourProgramme['MontantTotal']." ", 0 , 1);


        ob_clean(); 
        $pdf->Output('exemple.pdf', 'I');
        exit; // Arrête l'exécution du script après l'envoi du PDF
    }

}
