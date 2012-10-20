<?php
require_once 'includes/Excel/reader.php';
require_once 'includes/connection.php';
$data = new Spreadsheet_Excel_Reader();
$data->setOutputEncoding('CP1251');
$data->read('raw_data/June_2012_GA.xls');

$o_name = 2;
$o_ic_passport = 10;
$o_matrix = 9;
$o_programme = 12;
$o_department = 11;
$o_nationality = 4;
$o_mobile = 19;
for ($x = 3; $x <= $data->sheets[1]['numRows']; $x++) {
	$order = $data->sheets[1]["cells"][$x][1];
	$name = $data->sheets[1]["cells"][$x][$o_name];
	$ic_passport = $data->sheets[1]["cells"][$x][$o_ic_passport];
	$matrix = $data->sheets[1]["cells"][$x][$o_matrix];
	$programme = $data->sheets[1]["cells"][$x][$o_programme];
	$department = $data->sheets[1]["cells"][$x][$o_department];
	$nationality = $data->sheets[1]["cells"][$x][$o_nationality];
	$mobile = $data->sheets[1]["cells"][$x][$o_mobile];
	$sql = "INSERT INTO ga (name, ic_passport, matrix, programme, department, nationality, mobile)
	VALUES ('$name', '$ic_passport', '$matrix', '$programme', '$department', '$nationality', '$mobile')";
	echo $sql."\n";
	if(!empty($name) && !empty($order)) mysql_query($sql);
}

?>