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
		Employers
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
			Employer Name
		</b>
	</td>
	<td width="20%">
		<b>
			Employer Number
		</b>
	</td>
	<td colspan="2">
		<b>
			Email Address
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
	<td colspan="2">
		<b>
			
		</b>
	</td>
</tr>';
$i=0;
$query = mysqli_query($con,"select * from tbl_employers");
while($row = mysqli_fetch_assoc($query)){

$full = $row["full_name"];
$number = $row["employer_number"];
$email = $row["email_address"];

$i++;

$html .= '<tr>
	<td width="6%">
		' . ucfirst($i) . '
	</td>
	<td colspan="3">
		' . $full . '
	</td>

	<td width="20%">
		' . $number . '
	</td>

	<td colspan="2">
		' . $email . '
	</td>

</tr>';

}

$html .= '</table>
</center>';

$pdf->writeHTML($html, true, false, true, false, '');
	


$pdf->lastPage();

$pdf->Output('Plain.pdf', 'I');

