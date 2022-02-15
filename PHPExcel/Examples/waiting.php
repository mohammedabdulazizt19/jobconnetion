<?php

include("../../include/db.php");

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

$objPHPExcel->getActiveSheet(0)->setCellValue('A1', '#');
$objPHPExcel->getActiveSheet(0)->setCellValue('B1', 'Applicant Name');
$objPHPExcel->getActiveSheet(0)->setCellValue('C1', 'Contact Number');
$objPHPExcel->getActiveSheet(0)->setCellValue('D1', 'Email Address');
$objPHPExcel->getActiveSheet(0)->setCellValue('E1', 'Passport Number');
$objPHPExcel->getActiveSheet(0)->setCellValue('F1', 'Status Abroad');
$objPHPExcel->getActiveSheet(0)->setCellValue('G1', 'CV Sent');
$objPHPExcel->getActiveSheet(0)->setCellValue('H1', 'Agent');

foreach(range('A', 'H') as $cols){

	$objPHPExcel->getActiveSheet()
	->getColumnDimension($cols)
	->setAutoSize(true);

}

$row_count = 3;
$i=0;
$query = mysqli_query($con,"select * from tbl_applicants where status = 1");
while($row = mysqli_fetch_assoc($query)){

	$fname = $row["first_name"];
$mname = $row["middle_name"];
$lname = $row["last_name"];
$contact = $row["contact_number"];
$email = $row["email_address"];
$passport = $row["passport_number"];
$status = $row["status_abroad"];
$contract = $row["cv_sent"];
$agent = $row["agent_id"];

$get_agnt = "select * from tbl_agents where agent_id = '$agent'";

$run_a = mysqli_query($con,$get_agnt);
$row_a = mysqli_fetch_array($run_a);
$fn = $row_a['first_name'];
$mn = $row_a['middle_name'];
$ln = $row_a['last_name'];

$full_ag = ucfirst($fn) . " " . ucfirst($mn) . " " . ucfirst($ln);

$fullname = ucfirst($fname) . " " . ucfirst($mname) . " " . ucfirst($lname);
$i++;

foreach(range('A', 'H') as $cols){

	$objPHPExcel->getActiveSheet()
	->getColumnDimension($cols)
	->setAutoSize(true);

}

$objPHPExcel->getActiveSheet()->setCellValue('A' .$row_count,$i);
$objPHPExcel->getActiveSheet(0)->setCellValue('B' .$row_count,$fullname);
$objPHPExcel->getActiveSheet(0)->setCellValue('C' .$row_count,$contact);
$objPHPExcel->getActiveSheet(0)->setCellValue('D' .$row_count,$email);
$objPHPExcel->getActiveSheet(0)->setCellValue('E' .$row_count,$passport);
$objPHPExcel->getActiveSheet(0)->setCellValue('F' .$row_count,$status);
$objPHPExcel->getActiveSheet(0)->setCellValue('G' .$row_count,$contract);
$objPHPExcel->getActiveSheet(0)->setCellValue('H' .$row_count,$full_ag);

$row_count++;

}
							

$objPHPExcel->getActiveSheet()->setTitle('Waiting Applicants');
$objPHPExcel->setActiveSheetIndex(0);
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="WaitingApplicants.xls"');
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