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
$objPHPExcel->getActiveSheet(0)->setCellValue('B1', 'Employer');
$objPHPExcel->getActiveSheet(0)->setCellValue('C1', 'Company');
$objPHPExcel->getActiveSheet(0)->setCellValue('D1', 'Applicant');
$objPHPExcel->getActiveSheet(0)->setCellValue('E1', 'Date Hired');

foreach(range('A', 'A') as $cols){

	$objPHPExcel->getActiveSheet()
	->getColumnDimension($cols)
	->setAutoSize(true);

}

$row_count = 3;
$i=0;



$objPHPExcel->getActiveSheet()->setCellValue('A' .$row_count,$_POST['aydi']);
$row_count++;

							

$objPHPExcel->getActiveSheet()->setTitle('Job Order');
$objPHPExcel->setActiveSheetIndex(0);
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="JO.xls"');
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