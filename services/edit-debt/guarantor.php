<?php
header('Content-Type: application/json');
include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();

$connect_2 = new Connect_Data();
$connect_2->connectData();

$connect->sql = "SELECT * FROM
guarantor WHERE	debt_id = '" . $_GET['id'] . "'";
$connect->queryData();
$result=array();
while ($rsaccount_data = $connect->fetch_AssocData()) {
    $connect_2->sql = "SELECT * FROM
    guarantor_address WHERE	guarantor_id = '" . $rsaccount_data['id'] . "'";
    $connect_2->queryData();
    $dataGuarantor_address=array();
    while ($rsconnect_2 = $connect_2->fetch_AssocData()) {
        array_push($dataGuarantor_address,$rsconnect_2);
    }
    $rsaccount_data['dataGuarantor_address']=$dataGuarantor_address;
    array_push($result,$rsaccount_data);
}
echo json_encode($result);
