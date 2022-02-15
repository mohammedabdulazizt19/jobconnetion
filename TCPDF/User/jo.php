<?php
require_once('tcpdf_include.php');

include("../../include/db.php");

if(isset($_POST['submit'])){

      
        $aydi = $_POST['aydi'];
        
      
					$retriv_jo = "select * from tbl_jo where jo_no = '$aydi'";

					$run_retriv_jo = mysqli_query($con,$retriv_jo);

					$row_retriv_jo = mysqli_fetch_array($run_retriv_jo);

					$jo_name = $row_retriv_jo['jo_name'];

					 $retriv = "select * from tbl_employers where jo_no = '$aydi'";

					$run_retriv = mysqli_query($con,$retriv);

					$row_retriv = mysqli_fetch_array($run_retriv);

					$employer_id = $row_retriv['employer_id'];
					$full_name = $row_retriv['full_name'];
					$company = $row_retriv['company_name'];

					$retriv2 = "select * from tbl_applicants where employer_id = '$employer_id' and status = 2";

					$run_retriv2 = mysqli_query($con,$retriv2);

					$row_retriv2 = mysqli_fetch_array($run_retriv2);
					$first_name = $row_retriv2['first_name'];
					$middle_name = $row_retriv2['middle_name'];
					$last_name = $row_retriv2['last_name'];
				

					$full = ucfirst($first_name) . " " . ucfirst($middle_name) . " " . ucfirst($last_name);

          

    }


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
	<h2 style="color: red;">
		' . $jo_name . '
	</h2>


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
			Company
		</b>
	</td>
	<td colspan="2">
		<b>
			Applicant
		</b>
	</td>
	<td colspan="2">
		<b>
			Date Hired
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
	<td colspan="2">
		<b>
			
		</b>
	</td>
</tr>';
$i=0;
$select_app = "select * from tbl_applicants where employer_id = '$employer_id' and status = 2";

	                						$run_select = mysqli_query($con,$select_app);

	                						while($row=mysqli_fetch_array($run_select)){

							                    $applicant_id = $row['applicant_id'];
							                    $emp_id = $row['employer_id'];
							                    $fname = $row['first_name'];
							                    $mname = $row['middle_name'];
							                    $lname = $row['last_name'];
	$hired = $row['date_hired'];
							                    $emp = "select * from tbl_employers where employer_id = '$emp_id'";
					

					$run_emp = mysqli_query($con,$emp);

					$row_emp = mysqli_fetch_array($run_emp);

					$full_names = $row_retriv['full_name'];
					$companys = $row_retriv['company_name'];
							                   
							                    $app_name = ucfirst($fname) . " " . ucfirst($mname) . " " . ucfirst($lname);

							                    $i++;

$html .= '<tr>
	<td width="6%">
		' . ucfirst($i) . '
	</td>
	<td colspan="3">
		' . $full_names . '
	</td>

	<td width="20%">
		' . $companys . '
	</td>

<td colspan="2">
		' . ucfirst($fname) . " " . ucfirst($mname) . " " . ucfirst($lname) . '
	</td>
	<td colspan="2">
		' . $hired . '
	</td>
	

</tr>';

}

$html .= '</table>
</center>';



$pdf->writeHTML($html, true, false, true, false, '');
	


$pdf->lastPage();

$pdf->Output('Plain.pdf', 'I');

