<?php
header('Content-Type: application/json');
include('./../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$connect_2 = new Connect_Data();
$connect_2->connectData();
$data = isset($_GET['v']) ? $_GET['v'] : '';
$result = array();
 if ($data == "editdebt") {
	

	
	$debt = $_POST;
    $connect->sql="UPDATE debtor SET 
    idcard='" . $debt['txtidcard'] . "',
    prefix ='" . $debt['txtprefix'] . "',
    fname ='" . $debt['txtfname'] . "',
    lname ='" . $debt['txtlname'] . "',
    no_account = '" . $debt['txtno_account'] . "',
    status_account ='" . $debt['txtstatus_account'] . "',
    status_personal = '" . $debt['txtstatus_personal'] . "',
    type_account ='" . $debt['txttype_account'] . "',
    telephone = '[" . json_encode($debt['txttelephone']) . "]',
    status_debt = '1'
    WHERE id='".$_GET['id']."'";
	$connect->queryData();

	echo json_encode(["id" => $_GET['id']]);

} else if ($data == "editaccount_debt") {

	$account = $_POST;
    $connect->sql="UPDATE account_debt SET 
    account_manager='" . $account['txtaccount_manager'] . "',
    loan_account_number = '" . $_GET['no_account'] . "',
    loan_account_type ='" . $_GET['account_type'] . "',
    loan_group= '" . $account['txtloan_group'] . "',
    loan_account_status =   '" . $account['txtloan_account_status'] . "',
    status_change_date ='" . $account['txtstatus_change_date'] . "',
    request_deferral ='" . $account['txtrequest_deferral'] . "',
    request_suspend = '" . $account['txtrequest_suspend'] . "',
    date_suspend =  '" . $account['txtdate_suspend'] . "'
    WHERE debt_id='".$_GET['id']."'";
    $connect->queryData();

	echo json_encode(["id" => $_GET['id']]);


} else if ($data == "editaccount_data") {
	$data_account = $_POST;
    $connect->sql="UPDATE account_data SET 
    date_contract= '" . $data_account['txtdate_contract'] . "',
    total_amount = '" . $data_account['txttotal_amount'] . "',
    status_account = '" . $data_account['txtstatus_account'] . "',
    datestart_payment ='" . $data_account['txtdatestart_payment'] . "',
    dateend_payment ='" . $data_account['txtdateend_payment'] . "',
    datecal_interest ='" . $data_account['txtdatecal_interest'] . "',
    payment_model ='" . $data_account['txtpayment_model'] . "',
    pernalty_model = '" . $data_account['txtpernalty_model'] . "',
    pernalty_rate = '" . $data_account['txtpernalty_rate'] . "',
    pernalty_rate_dif ='" . $data_account['txtpernalty_rate_dif'] . "',
    pernalty_total = '" . $data_account['txtpernalty_total'] . "',
    interest_model= '" . $data_account['txtinterest_model'] . "',
    interest_rate =  '" . $data_account['txtinterest_rate'] . "',
    interest_total =   '" . $data_account['txtinterest_total'] . "',
    interest_rate_dif =  '" . $data_account['txtinterest_rate_dif'] . "',
    payment_frequency ='" . $data_account['txtpayment_frequency'] . "',
    remain_balance=  '" . $data_account['txtremain_balance'] . "',
    overdue_installment_amount =  '" . $data_account['txtoverdue_installment_amount'] . "',
    overdue_principal_amount = '" . $data_account['txtoverdue_principal_amount'] . "',
    number_overdue = '" . $data_account['txtnumber_overdue'] . "',
    interest_amount = '" . $data_account['txtinterest_amount'] . "',
    interest_close_amount = '" . $data_account['txtinterest_close_amount'] . "',
    penalty_amount = '" . $data_account['txtpenalty_amount'] . "',
    penalty_before_amount = '" . $data_account['txtpenalty_before_amount'] . "'
    WHERE debt_id='".$_GET['id']."'";

	

	$connect->queryData();
	echo json_encode(["id" => $_GET['id']]);
} else if ($data == "editpayment_schedule") {
	$payment_schedule = json_decode($_POST['payment_schedule'], true);
    $connect->sql="DELETE FROM payment_schedule WHERE debt_id='" . $_GET['id'] . "'";
    $connect->queryData();
	foreach ($payment_schedule as $item) {
		$expdateS = explode('/', $item['due_date']);
		$due_date = ($expdateS[2] - 543) . '-' . $expdateS[1] . '-' . $expdateS[0];

		$connect->sql = "INSERT INTO `payment_schedule`(`debt_id`,
		 `due_date`, `principal_percentage`, `principal_amount`, `interest_amount`) VALUES 
		 ('" . $_GET['id'] . "',
		 '" . $due_date . "',
		  '" . $item['principal_percentage'] . "',
		  '" . $item['principal_amount'] . "',
		  '" . $item['interest_amount'] . "'
		 )";
		 $connect->queryData();

	}


	echo json_encode(["id" => $_GET['id']]);
} else if ($data == "editpayment_due") {
	$payment_due = json_decode($_POST['payment_due'], true);
    $connect->sql="DELETE FROM payment_due WHERE debt_id='" . $_GET['id'] . "'";
    $connect->queryData();

	foreach ($payment_due as $item) {
		$expdateS = explode('/', $item['due_date']);
		$due_date = ($expdateS[2] - 543) . '-' . $expdateS[1] . '-' . $expdateS[0];

		$last_payment_date = "";
		if ($item['last_payment_date'] != "") {
			$last_payment_date_ = explode('/', $item['last_payment_date']);
			$last_payment_date = ($last_payment_date_[2] - 543) . '-' . $last_payment_date_[1] . '-' . $last_payment_date_[0];
		}


		$connect->sql = "INSERT INTO `payment_due`(`debt_id`,
		 `due_date`,
		  `total_payment_due`,
		   `interest_amount`, 
		   `principal_amount`,
		    `status`,
			 `last_payment_date`,
			  `overdue_amount`) VALUES (
				'" . $_GET['id'] . "',
				'" . $due_date . "',
				'" . $item['total_payment_due'] . "',
				'" . $item['interest_amount'] . "',
				'" . $item['principal_amount'] . "',
				'" . $item['status'] . "',
				'" . $last_payment_date . "',
				'" . $item['overdue_amount'] . "'
				)";
		$connect->queryData();
	}

	echo json_encode(["id" => $_GET['id']]);
} else if ($data == "editguarantor") {
	$dataGuarantor = json_decode($_POST['dataGuarantor'], true);
    $connect->sql = "SELECT id  FROM guarantor WHERE debt_id='".$_GET['id']."'";
    $connect->queryData();
    while($rsconnect = $connect->fetch_AssocData()){
        $connect_2->sql="DELETE FROM guarantor_address WHERE guarantor_id='" . $rsconnect['id'] . "'";
        $connect_2->queryData();
    }

    $connect->sql="DELETE FROM guarantor WHERE debt_id='".$_GET['id']."'";
    $connect->queryData();

	foreach ($dataGuarantor as $item) {
		if ($item['birthday'] != "") {
			$birthday_ = explode('/', $item['birthday']);
			$birthday = ($birthday_[2] - 543) . '-' . $birthday_[1] . '-' . $birthday_[0];
		}

		$connect->sql = "SELECT max(id) as maxid FROM guarantor";
		$connect->queryData();
		$rsconnect = $connect->fetch_AssocData();
		$id = $rsconnect['maxid'] + 1;


		$connect->sql = "INSERT INTO `guarantor`(id,`debt_id`, `prefix`, `fname`, `lname`, `relationship`, `idcard`, `guarantee_percentage`, `guarantee_amount`, 
		`birthday`, `age`, `gender`, `status_person`) 
		VALUES ('" . $id . "','" . $_GET['id'] . "',
		'" . $item['prefix'] . "',
		'" . $item['fname'] . "',
		'" . $item['lname'] . "',
		'" . $item['relationship'] . "',
		'" . $item['idcard'] . "',
		'" . $item['guarantee_percentage'] . "',
		'" . $item['guarantee_amount'] . "',
		'" . $birthday . "',
		'-',
		'" . $item['gender'] . "',
		'" . $item['status_person'] . "')";
		$connect->queryData();

		//insert_address
		foreach ($item['dataGuarantor_address'] as $value) {
			if ($value) {
				$connect->sql = "INSERT INTO `guarantor_address`(`guarantor_id`, `address_type`, `address`, `zipcode`, `telephone`) 
				VALUES ('" . $id . "',
				'" . $value['address_type'] . "',
				'" . $value['address'] . "',
				'" . $value['zipcode'] . "',
				'" . $value['telephone'] . "')";
				$connect->queryData();
			}
		}
	}

	echo json_encode(["id" => $_GET['id']]);
} else if ($data == "editlitigation") {
	$litigation = $_POST;

	$txtfiling_date = explode('/', $litigation['txtfiling_date']);
	$filing_date = ($txtfiling_date[2] - 543) . '-' . $txtfiling_date[1] . '-' . $txtfiling_date[0];

	$txtcase_status_date = explode('/', $litigation['txtcase_status_date']);
	$case_status_date = ($txtcase_status_date[2] - 543) . '-' . $txtcase_status_date[1] . '-' . $txtcase_status_date[0];

	$txtcase_setup_date = explode('/', $litigation['txtcase_setup_date']);
	$case_setup_date = ($txtcase_setup_date[2] - 543) . '-' . $txtcase_setup_date[1] . '-' . $txtcase_setup_date[0];
    $connect->sql="UPDATE litigation SET 
	lg_id='" . $litigation['txtlg_id'] . "',
	court='" . $litigation['txtcourt'] . "',
	lawyer_office='" . $litigation['txtlawyer_office'] . "',
	phone_number='" . $litigation['txtphone_number'] . "',
	black_case_number='" . $litigation['txtblack_case_number'] . "',
	red_case_number='" . $litigation['txtred_case_number'] . "',
	filing_date='" . $filing_date . "',
	case_iteration='" . $litigation['txtcase_iteration'] . "',
	case_status_date='" . $case_status_date . "',
	case_setup_date='" . $case_setup_date . "',
	case_status= '" . $litigation['txtcase_status'] . "',
	legal_status='" . $litigation['txtlegal_status'] . "'
	WHERE debt_id='".$_GET['id']."'";
	
	$connect->queryData();
	echo json_encode(["id" => $_GET['id']]);
}


