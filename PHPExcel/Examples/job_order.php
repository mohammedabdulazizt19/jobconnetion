<?php

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

					

          

    }

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

require_once dirname(__FILE__) . '/../Classes/PHPExcel.php';


$objPHPExcel = new PHPExcel();

$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");
$row_cc = 1;

$objPHPExcel->getActiveSheet()->setCellValue('A' .$row_cc,$jo_name);			 

$objPHPExcel->getActiveSheet(0)->setCellValue('A3', '#'); 
$objPHPExcel->getActiveSheet(0)->setCellValue('B3', 'Employer Name');
$objPHPExcel->getActiveSheet(0)->setCellValue('C3', 'Employer ID Number');
$objPHPExcel->getActiveSheet(0)->setCellValue('D3', 'Applicant Name');
$objPHPExcel->getActiveSheet(0)->setCellValue('E3', 'Passport Number');
$objPHPExcel->getActiveSheet(0)->setCellValue('F3', 'Visa Number');
$objPHPExcel->getActiveSheet(0)->setCellValue('G3', 'Date Arrival');
$objPHPExcel->getActiveSheet(0)->setCellValue('H3', 'Date Signed');
$objPHPExcel->getActiveSheet(0)->setCellValue('I3', 'OWWA');
$objPHPExcel->getActiveSheet(0)->setCellValue('J3', 'Biometric');
$objPHPExcel->getActiveSheet(0)->setCellValue('K3', 'Remarks');
$objPHPExcel->getActiveSheet(0)->setCellValue('L3', 'Agent');

foreach(range('A', 'L') as $cols){

	$objPHPExcel->getActiveSheet()
	->getColumnDimension($cols)
	->setAutoSize(true);

}

$row_count = 5;
$i=0;
$query = mysqli_query($con,"select * from tbl_applicants where employer_id = '$employer_id' and status = 2");
while($row = mysqli_fetch_assoc($query)){

	$fname = $row["first_name"];
$mname = $row["middle_name"];
$lname = $row["last_name"];
$code = $row["applicant_code"];
$emp_id = $row["employer_id"];
$arrival = $row["date_arrival"];
$signed = $row["date_signed"];
$owwa = $row["owwa_sched"];
$bio = $row["biometric_sched"];
$pass = $row["passport_number"];
$agent = $row["agent_id"];
$visa = $row["visa_number"];
$remarks = $row["remarks"];

$get_emp = "select * from tbl_employers where employer_id = '$emp_id'";

$run_employer = mysqli_query($con,$get_emp);
$row_employer = mysqli_fetch_array($run_employer);
$full_name_emp = $row_employer['full_name'];
$company_emp = $row_employer['company_name'];
$enumber = $row_employer['employer_number'];

$get_agnt = "select * from tbl_agents where agent_id = '$agent'";

$run_a = mysqli_query($con,$get_agnt);
$row_a = mysqli_fetch_array($run_a);
$fn = $row_a['first_name'];
$mn = $row_a['middle_name'];
$ln = $row_a['last_name'];

$full_ag = ucfirst($fn) . " " . ucfirst($mn) . " " . ucfirst($ln);

$fullname = ucfirst($fname) . " " . ucfirst($mname) . " " . ucfirst($lname);
$i++;

foreach(range('A', 'L') as $cols){

	$objPHPExcel->getActiveSheet()
	->getColumnDimension($cols)
	->setAutoSize(true);

} 

$objPHPExcel->getActiveSheet()->setCellValue('A' .$row_count,$i);
$objPHPExcel->getActiveSheet(0)->setCellValue('B' .$row_count,$full_name_emp);
$objPHPExcel->getActiveSheet(0)->setCellValue('C' .$row_count,$enumber);
$objPHPExcel->getActiveSheet(0)->setCellValue('D' .$row_count,$fullname);
$objPHPExcel->getActiveSheet(0)->setCellValue('E' .$row_count,$pass);
$objPHPExcel->getActiveSheet(0)->setCellValue('F' .$row_count,$visa);
$objPHPExcel->getActiveSheet(0)->setCellValue('G' .$row_count,$arrival);
$objPHPExcel->getActiveSheet(0)->setCellValue('H' .$row_count,$signed);
$objPHPExcel->getActiveSheet(0)->setCellValue('I' .$row_count,$owwa);
$objPHPExcel->getActiveSheet(0)->setCellValue('J' .$row_count,$bio);
$objPHPExcel->getActiveSheet(0)->setCellValue('K' .$row_count,$remarks);
$objPHPExcel->getActiveSheet(0)->setCellValue('L' .$row_count,$full_ag);

$row_count++;

}
							

$objPHPExcel->getActiveSheet()->setTitle('Job Orders');
$objPHPExcel->setActiveSheetIndex(0);
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="JobOrder.xls"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');

header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header ('Cache-Control: cache, must-revalidate'); 
header ('Pragma: public'); 

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;

?>