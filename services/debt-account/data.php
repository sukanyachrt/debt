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
    WHERE status_debt='1' AND	(idcard = '" . $find['idcard'] . "' OR fname = '" . $find['fname'] . "' OR lname = '" . $find['lname'] . "' OR no_account = '" . $find['noaccount'] . "')";
	$connect->queryData();
	while ($rsconnect = $connect->fetch_AssocData()) {
		array_push($result, $rsconnect);
	}
	echo json_encode($result);
}
else if($data == "updateStatus_debt") {
	$connect->sql="UPDATE debtor SET status_debt=0 WHERE id='".$_GET['id']."'";
	$connect->queryData();
	echo json_encode(1);
}

else if ($data == "insertdebt") {
	

	$connect->sql = "SELECT max(id) as maxid FROM debtor";
	$connect->queryData();
	$rsconnect = $connect->fetch_AssocData();
	$id = $rsconnect['maxid'] + 1;


	$debt = $_POST;
	$connect->sql = "INSERT INTO `debtor`(id,`idcard`,`prefix`, `fname`,`lname`,`no_account`,`status_account`,          `status_personal`, 
	`type_account`,`telephone`,status_debt) VALUES
	 ( '" . $id . "',
		'" . trim($debt['txtidcard']) . "','" . trim($debt['txtprefix']) . "',
	 '" . trim($debt['txtfname']) . "','" . trim($debt['txtlname']) . "',
	 '" . trim($debt['txtno_account']) . "','" . trim($debt['txtstatus_account']) . "',
	 '" . trim($debt['txtstatus_personal']) . "','" . trim($debt['txttype_account']) . "','[" . json_encode(trim($debt['txttelephone'])) . "]','1')";
	$connect->queryData();

	echo json_encode(["id" => $id]);
} else if ($data == "insertaccount_debt") {

	$account = $_POST;

	$connect->sql = "INSERT INTO `account_debt`(debt_id,`account_manager`,
	`loan_account_number`, `loan_account_type`, `loan_group`,
	 `loan_account_status`, `status_change_date`, `request_deferral`,
	  `request_suspend`, `date_suspend`) VALUES 
	  ( '" . $_GET['id'] . "',
		'" . $account['txtaccount_manager'] . "',
	  '" . $_GET['no_account'] . "',
	  '" . $_GET['account_type'] . "',
	  '" . $account['txtloan_group'] . "',
	  '" . $account['txtloan_account_status'] . "',
	  '" . $account['txtstatus_change_date'] . "',
	  '" . $account['txtrequest_deferral'] . "',
	  '" . $account['txtrequest_suspend'] . "',
	  '" . $account['txtdate_suspend'] . "')";

	$connect->queryData();

	echo json_encode(["id" => $_GET['id']]);
} else if ($data == "insertaccount_data") {
	$data_account = $_POST;
	$connect->sql = "INSERT INTO `account_data`(debt_id,`date_contract`,
        `total_amount`, `status_account`, 
        `datestart_payment`, `dateend_payment`,
         `datecal_interest`, `payment_model`, 
         `pernalty_model`, `pernalty_rate`, 
         `pernalty_rate_dif`, `pernalty_total`,
          `interest_model`, `interest_rate`,
           `interest_total`, `interest_rate_dif`,
            `payment_frequency`, `remain_balance`,
             `overdue_installment_amount`, `overdue_principal_amount`,
              `number_overdue`, `interest_amount`,
               `interest_close_amount`, `penalty_amount`,
                `penalty_before_amount`) VALUES 
                ('" . $_GET['id'] . "',
				'" . $data_account['txtdate_contract'] . "',
               '" . $data_account['txttotal_amount'] . "',
               '" . $data_account['txtstatus_account'] . "',
               '" . $data_account['txtdatestart_payment'] . "',
               '" . $data_account['txtdateend_payment'] . "',
               '" . $data_account['txtdatecal_interest'] . "',
               '" . $data_account['txtpayment_model'] . "',
               '" . $data_account['txtpernalty_model'] . "',
               '" . $data_account['txtpernalty_rate'] . "',
               '" . $data_account['txtpernalty_rate_dif'] . "',
               '" . $data_account['txtpernalty_total'] . "',
               '" . $data_account['txtinterest_model'] . "',
               '" . $data_account['txtinterest_rate'] . "',
               '" . $data_account['txtinterest_rate_dif'] . "',
               '" . $data_account['txtinterest_total'] . "',
               '" . $data_account['txtpayment_frequency'] . "',
               '" . $data_account['txtremain_balance'] . "',
               '" . $data_account['txtoverdue_installment_amount'] . "',
               '" . $data_account['txtoverdue_principal_amount'] . "',
               '" . $data_account['txtnumber_overdue'] . "',
               '" . $data_account['txtinterest_amount'] . "',
               '" . $data_account['txtinterest_close_amount'] . "',
               '" . $data_account['txtpenalty_amount'] . "',
               '" . $data_account['txtpenalty_before_amount'] . "'
                )";

	$connect->queryData();
	echo json_encode(["id" => $_GET['id']]);
} else if ($data == "insertpayment_schedule") {
	$payment_schedule = json_decode($_POST['payment_schedule'], true);
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
} else if ($data == "insertpayment_due") {
	$payment_due = json_decode($_POST['payment_due'], true);
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
} else if ($data == "insertguarantor") {
	$dataGuarantor = json_decode($_POST['dataGuarantor'], true);

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
} else if ($data == "insertlitigation") {
	$litigation = $_POST;

	$txtfiling_date = explode('/', $litigation['txtfiling_date']);
	$filing_date = ($txtfiling_date[2] - 543) . '-' . $txtfiling_date[1] . '-' . $txtfiling_date[0];

	$txtcase_status_date = explode('/', $litigation['txtcase_status_date']);
	$case_status_date = ($txtcase_status_date[2] - 543) . '-' . $txtcase_status_date[1] . '-' . $txtcase_status_date[0];

	$txtcase_setup_date = explode('/', $litigation['txtcase_setup_date']);
	$case_setup_date = ($txtcase_setup_date[2] - 543) . '-' . $txtcase_setup_date[1] . '-' . $txtcase_setup_date[0];

	$connect->sql = "INSERT INTO `litigation`(debt_id,`lg_id`, `court`,
	`lawyer_office`, `phone_number`,
	 `black_case_number`, `red_case_number`,
	  `filing_date`, `case_iteration`,
	   `case_status_date`, `case_setup_date`,
		`case_status`, `legal_status`) VALUES
		 ( '" . $_GET['id'] . "',
		  '" . $litigation['txtlg_id'] . "',
		   '" . $litigation['txtcourt'] . "',
		   '" . $litigation['txtlawyer_office'] . "',
		   '" . $litigation['txtphone_number'] . "',
		   '" . $litigation['txtblack_case_number'] . "',
		   '" . $litigation['txtred_case_number'] . "',
		   '" . $filing_date . "',
		   '" . $litigation['txtcase_iteration'] . "',
		   '" . $case_status_date . "',
		   '" . $case_setup_date . "',
		   '" . $litigation['txtcase_status'] . "',
		   '" . $litigation['txtlegal_status'] . "'
		 )";
	$connect->queryData();
	echo json_encode(["id" => $_GET['id']]);
}


