<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Elibyy\TCPDF\TCPDF;

use App\Models\Computer;


class DashboardController extends Controller
{
 	public function index(Request $request) 
  	{
        $computers = Computer::all();

		$data = compact('computers');

		return view('dashboard.index', $data);
	}

	public function exportPDF(Request $request) 
	{
		// create new PDF document
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		// set document information
		$pdf->SetCreator("PDFGen");
		$pdf->SetAuthor('Admin');
		$pdf->SetTitle('PDF Generation');
		$pdf->SetSubject('PDF Generation');
		$pdf->SetKeywords('PDF');

		// set default header data
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
		$pdf->SetHeaderData(url("/img/icon.png"), PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 011', PDF_HEADER_STRING);

		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		// set font
		$pdf->SetFont('helvetica', '', 12);

		// add a page
		$pdf->AddPage();

		// column titles
		$header = array('User Name', 'Type', 'Hard', 'Ram', 'Size');

		// data loading
		$computers = Computer::all();

        // Colors, line width and bold font
        $pdf->SetFillColor(255, 0, 0);
        $pdf->SetTextColor(255);
        $pdf->SetDrawColor(128, 0, 0);
        $pdf->SetLineWidth(0.3);
        $pdf->SetFont('', 'B');
        // Header
        $w = array(40, 40, 35, 30, 30);
        $num_headers = count($header);
        for($i = 0; $i < $num_headers; ++$i) {
            $pdf->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
        }
        $pdf->Ln();
        // Color and font restoration
        $pdf->SetFillColor(224, 235, 255);
        $pdf->SetTextColor(0);
        $pdf->SetFont('');
        // Data
        $fill = 0;
        foreach($computers as $computer) {
            $pdf->Cell($w[0], 6, $computer['owner'], 'LR', 0, 'C', $fill);
            $pdf->Cell($w[1], 6, $computer['type'], 'LR', 0, 'C', $fill);
            $pdf->Cell($w[2], 6, $computer['hard'], 'LR', 0, 'C', $fill);
            $pdf->Cell($w[3], 6, $computer['ram'], 'LR', 0, 'C', $fill);
            $pdf->Cell($w[4], 6, $computer['size'], 'LR', 0, 'C', $fill);
            $pdf->Ln();
            $fill=!$fill;
        }
		$pdf->Cell(array_sum($w), 0, '', 'T');
		
		// close and output PDF document
		$pdf->Output('sample'.time().'.pdf', 'D');
	}
}
