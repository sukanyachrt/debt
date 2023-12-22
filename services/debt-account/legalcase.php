<?php
include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();

$connect->sql = "SELECT * FROM guarantor WHERE debt_id='" . $_GET['id'] . "'";
$connect->queryData();
$i = 1;
$principal_percentage = 0;
$principal_amount = 0;
$sumtotal_formatted = 0;
$rsconnect = $connect->fetch_AssocData();



?>