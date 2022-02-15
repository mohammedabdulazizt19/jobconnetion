<?php
require_once('tcpdf_include.php');

include("../../include/db.php");


$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Yaramay');
$pdf->SetTitle('PDF');
$pdf->SetSubject('PDF');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}


$pdf->SetFont('dejavusans', '', 10);


$pdf->AddPage('P');

$html = '
 


<center>
	<h1>
		Job Order
	</h1>


<table border="" width="100%">';

$html .= '<tr>
	<td width="6%">
		<b>
			#
		</b>
	</td>
	<td colspan="3">
		<b>
			Employer
		</b>
	</td>
	<td width="20%">
		<b>
			Applicant
		</b>
	</td>
	<td>
		<b>
			Arrival Date
		</b>
	</td>
	<td>
		<b>
			Date Signed
		</b>
	</td>
</tr>';

$html .= '<tr>
	<td width="6%">
		<b>
			
		</b>
	</td>
	<td colspan="3">
		<b>
			
		</b>
	</td>
	<td width="20%">
		<b>
			
		</b>
	</td>
	<td>
		<b>
			
		</b>
	</td>
	<td>
		<b>
			
		</b>
	</td>
</tr>';
$i=0;

				$select_applicant = "select * from tbl_applicants where status = '2'";

	            $run_select = mysqli_query($con,$select_applicant);

	            while($row_applicant=mysqli_fetch_array($run_select)){

					$applicant_id = $row_applicant['applicant_id'];
					$applicant_code = $row_applicant['applicant_code'];
					$first_name = $row_applicant['first_name'];
					$middle_name = $row_applicant['middle_name'];
					$last_name = $row_applicant['last_name'];
					$arrival = $row_applicant['date_arrival'];
					$signed = $row_applicant['date_signed'];
					$employer_id = $row_applicant['employer_id'];
					$creator = $row_applicant['created_by'];
					$date_created = $row_applicant['date_created'];
					$name = $first_name . " " . $middle_name . " " . $last_name;
					$get_employer = "select * from tbl_employers where employer_id = '$employer_id'";
					$run_employer = mysqli_query($con,$get_employer);
					$row_employer = mysqli_fetch_array($run_employer);
					$full_name = $row_employer['full_name'];
$i++;

$html .= '<tr>
	<td width="6%">
		' . ucfirst($i) . '
	</td>
	<td colspan="3">
		' . $full_name . '
	</td>

	<td width="20%">
		' . $name . '
	</td>

	<td>
		' . $arrival . '
	</td>
	<td>
		' . $signed . '
	</td>

</tr>';

}

$html .= '</table>
</center>';

$pdf->writeHTML($html, true, false, true, false, '');
	


$pdf->lastPage();

$pdf->Output('Plain.pdf', 'I');

