<?php
include '../../model/connect.php';
include '../../model/hoadon.php';
header('Content-Type: application/json');

$sp = new Hoadon();
$ds = $sp->getNumOrderByMonth();
//print_r($ds);
$data = array();
foreach ($ds as $row) {
	$data[] = $row;
}

echo json_encode($data);
?>
