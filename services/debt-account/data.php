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
    WHERE	idcard = '" . $find['idcard'] . "' OR fname = '" . $find['fname'] . "' OR lname = '" . $find['lname'] . "' OR no_account = '" . $find['noaccount'] . "'";
	$connect->queryData();
	while ($rsconnect = $connect->fetch_AssocData()) {
		array_push($result, $rsconnect);
	}
	echo json_encode($result);
} else if ($data == "insertdebt") {
	// $debtFormData = $_POST['debtFormData'];
	// $accountFormData = $_POST['accountFormData'];
	// parse_str($debtFormData, $debtData);
	// parse_str($accountFormData, $accountData);

	$connect->sql = "SELECT max(id) as maxid FROM debtor";
	$connect->queryData();
	$rsconnect = $connect->fetch_AssocData();
	$id = $rsconnect['maxid'] + 1;


	$debt = $_POST;
	$connect->sql = "INSERT INTO `debtor`(id,`idcard`,`prefix`, `fname`,`lname`,`no_account`,`status_account`,          `status_personal`, 
	`type_account`,`telephone`) VALUES
	 ( '" . $id . "',
		'" . $debt['txtidcard'] . "','" . $debt['txtprefix'] . "',
	 '" . $debt['txtfname'] . "','" . $debt['txtlname'] . "',
	 '" . $debt['txtno_account'] . "','" . $debt['txtstatus_account'] . "',
	 '" . $debt['txtstatus_personal'] . "','" . $debt['txttype_account'] . "','[" . json_encode($debt['txttelephone']) . "]')";
	//$connect->queryData();

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

	//$connect->queryData();

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

	//$connect->queryData();
	echo json_encode(["id" => $_GET['id']]);
}

else if($data=="insertpayment_schedule"){
	$payment_schedule = json_decode($_POST['payment_schedule'], true);

	foreach($payment_schedule as $item){
		$expdateS=explode('/',$item['due_date']);
        $due_date=($expdateS[2]-543).'-'.$expdateS[1].'-'.$expdateS[0];
		
		$connect->sql = "INSERT INTO `payment_schedule`(`debt_id`,
		 `due_date`, `principal_percentage`, `principal_amount`, `interest_amount`) VALUES 
		 ('" . $_GET['id'] . "',
		 '" . $due_date . "',
		  '" . $item['principal_percentage'] . "',
		  '" . $item['principal_amount'] . "',
		  '" . $item['interest_amount'] . "'
		 )";
	  // $connect->queryData();
		
	}

	
	echo json_encode(["id" => $_GET['id']]);
}

else if($data=="insertpayment_due"){
	$payment_due = json_decode($_POST['payment_due'], true);

	
	echo json_encode($payment_due);
}
