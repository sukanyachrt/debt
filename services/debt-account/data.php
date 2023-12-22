<?php
header('Content-Type: application/json');
include('./../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$data = isset($_GET['v']) ? $_GET['v'] : '';
$result = array();
if ($data == "searchdata") {
    $find = $_POST['data'];

    $connect->sql = "SELECT	
    debtor.idcard,
	debtor.id,
	debtor.prefix,
	debtor.fname,
	debtor.lname,
	debtor.no_account,
	debtor.status_account,
	debtor.status_personal,
	debtor.type_account,
	debtor.telephone,
	account_debt.loan_group 
     FROM
	debtor
	INNER JOIN account_debt ON debtor.id = account_debt.debt_id
    WHERE	idcard = '" . $find['idcard'] . "' OR fname = '" . $find['fname'] . "' OR lname = '" . $find['lname'] . "' OR no_account = '" . $find['no_account'] . "'";
    $connect->queryData();
    while ($rsconnect = $connect->fetch_AssocData()) {
        array_push($result, $rsconnect);
    }
    echo json_encode($result);
}
