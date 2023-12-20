<?php
header('Content-Type: application/json');
include('./../Connect_Data.php');
//error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$data = isset($_GET['v']) ? $_GET['v'] : '';
$result = array();
if ($data == "insertdebt") {



  // $debt = [
  //     "idcard" => "5411400107285",
  //     "prefix" => "นาง",
  //     "fname" => "เกศรินทร์",
  //     "lname" => "เนาว์โพธิ์ทอง",
  //     "no_account" => "1012808181",
  //     "status_account" => "00",
  //     "status_personal" => "ปกติ",
  //     "type_account" => "บัญชีเงินกู้กยศ.",
  //     "telephone" => ["0850478238"]
  //   ] ;


  // $connect->sql = "INSERT INTO `debtor`(`idcard`,`prefix`, `fname`,`lname`,`no_account`,`status_account`,          `status_personal`, 
  //      `type_account`,`telephone`) VALUES
  //       ('" . $debt['idcard'] . "','" . $debt['prefix'] . "',
  //       '" . $debt['fname'] . "','" . $debt['lname'] . "',
  //       '" . $debt['no_account'] . "','" . $debt['status_account'] . "',
  //       '" . $debt['status_personal'] . "','" . $debt['type_account'] . "','" . json_encode($debt['telephone']) . "')";
  // $connect->queryData();
  // $id = $connect->affected_rows();


  /* $account= [
        "idcard" => "3420100234527",
        "borrower_name" => "นางสาววาสนา วรพันธ์",
        "account_manager" => "KTB",
        "loan_account_number" => "1012808181",
        "loan_account_type" => "บัญชีเงินกู้กยศ.",
        "loan_group" => "กลุ่มบังคับคดี",
        "loan_account_status" => "ปกติ",
        "status_change_date" => "10/10/2552",
        "request_deferral" => "-",
        "request_suspend" => "-",
        "date_suspend" => "-"
      ] ;

    $connect->sql = "INSERT INTO `account_debt`(`account_manager`,
     `loan_account_number`, `loan_account_type`, `loan_group`,
      `loan_account_status`, `status_change_date`, `request_deferral`,
       `request_suspend`, `date_suspend`) VALUES 
       ('".$account['account_manager']."','".$account['loan_account_number']."',
       '".$account['loan_account_type']."',
       '".$account['loan_group']."',
       '".$account['loan_account_status']."',
       '".$account['status_change_date']."',
       '".$account['request_deferral']."',
       '".$account['request_suspend']."',
       '".$account['date_suspend']."')";

       $connect->queryData();
       $id = $connect->affected_rows(); */
       $data_account = [
        "date_contract" => "01/07/2566",
        "total_amount" => "69,600.00",
        "status_account" => "ปกติ",
        "datestart_payment" => "05/07/2549",
        "dateend_payment" => "02/07/2556",
        "datecal_interest" => "05/07/2549",
        "payment_model" => "กำหนดเอง",
        "penalty_model" => "อัตราเบี้ยปรับจากคำพิพากษา 0%",
        "penalty_rate" => "0",
        "penalty_rate_dif" => "6.0000",
        "penalty_total" => "6.0000",
        "interest_model" => "อัตราดอกเบี้ยจากคำพิพากษา 0%",
        "interest_rate" => "0",
        "interest_rate_dif" => "1.0000",
        "interest_total" => "1.0000",
        "payment_frequency" => "รายเดือน",
        "number_of_payments" => "1 งวด",
        "remain_balance" => "10,719.40",
        "overdue_installment_amount" => "10,719.40",
        "overdue_principal_amount" => "10,719.40",
        "number_of_overdue" => "1",
        "interest_amount" => "1,934.36",
        "interest_close_amount" => "0.00",
        "penalty_amount" => "11,606.56",
        "penalty_before_amount" => "0.00"
    ];
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


  $connect->sql = "INSERT INTO `account_data`(`date_contract`,
        `total_amount`, `status_account`, 
        `datestart_payment`, `dateend_payment`,
         `datecal_interest`, `payment_model`, 
         `pernalty_model`, `penalty_rate`, 
         `penalty_rate_dif`, `penalty_total`,
          `interest_model`, `interest_rate`,
           `interest_total`, `interest_rate_dif`,
            `payment_frequency`, `remain_balance`,
             `overdue_installment_amount`, `overdue_principal_amount`,
              `number_overdue`, `interest_amount`,
               `interest_close_amount`, `penalty_amount`,
                `penalty_before_amount`) VALUES 
                ('" . $data_account['date_contract'] . "',
               '" . $data_account['total_amount'] . "',
               '" . $data_account['status_account'] . "',
               '" . $data_account['datestart_payment'] . "',
               '" . $data_account['dateend_payment'] . "',
               '" . $data_account['datecal_interest'] . "',
               '" . $data_account['payment_model'] . "',
               '" . $data_account['penalty_model'] . "',
               '" . $data_account['penalty_rate'] . "',
               '" . $data_account['penalty_rate_dif'] . "',
               '" . $data_account['penalty_total'] . "',
               '" . $data_account['interest_model'] . "',
               '" . $data_account['interest_rate'] . "',
               '" . $data_account['interest_rate_dif'] . "',
               '" . $data_account['interest_total'] . "',
               '" . $data_account['payment_frequency'] . "',
               '" . $data_account['remain_balance'] . "',
               '" . $data_account['overdue_installment_amount'] . "',
               '" . $data_account['overdue_principal_amount'] . "',
               '" . $data_account['number_of_overdue'] . "',
               '" . $data_account['interest_amount'] . "',
               '" . $data_account['interest_close_amount'] . "',
               '" . $data_account['penalty_amount'] . "',
               '" . $data_account['penalty_before_amount'] . "'
                )";

  $connect->queryData();
  $id = $connect->affected_rows();
  echo json_encode(["id" => $id, "detail" => $data_account]);
}
