<?php
header('Content-Type: application/json');
include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$result=array();
if($_GET['v']=="subrogation"){
    
    $connect->sql = "SELECT * FROM letter WHERE type_letter='จดหมายสวมสิทธิ์'";
    $connect->queryData();
    while ($rsconnect = $connect->fetch_AssocData()) {
       array_push($result,$rsconnect['file_pdf']);
    }
    echo json_encode($result);
}

else if($_GET['v']=="thac") {
    $connect->sql = "SELECT * FROM letter WHERE type_letter='จดหมายการไกล่เกลี่ย'";
    $connect->queryData();
    while ($rsconnect = $connect->fetch_AssocData()) {
       array_push($result,$rsconnect['file_pdf']);
    }
    echo json_encode($result);
}
