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

  /*$data_account = [
        "date_contract" => "04/09/2565",
        "total_amount" => "43,200.00",
        "status_account" => "ปกติ",
        "datestart_payment" => "05/07/2544",
        "dateend_payment" => "05/08/2565",
        "datecal_interest" => "05/07/2544",
        "payment_model" => "กำหนดเอง",
        "penalty_model" => "อัตราเบี้ยปรับจากคำพิพากษา 0%",
        "penalty_rate" => "0",
        "penalty_rate_dif" => "7.5000",
        "penalty_total" => "7.5000",
        "interest_model" => "อัตราดอกเบี้ยจากคำพิพากษา 0%",
        "interest_rate" => "0",
        "interest_rate_dif" => "1.0000",
        "interest_total" => "1.0000",
        "payment_frequency" => "รายเดือน",
        "number_of_payments" => "108 งวด",
        "remain_balance" => "30,219.67",
        "overdue_installment_amount" => "30,202.96",
        "overdue_principal_amount" => "27,689.67",
        "number_of_overdue" => "80",
        "interest_amount" => "10,462.34",
        "interest_close_amount" => "0.00",
        "penalty_amount" => "3,131.66",
        "penalty_before_amount" => "0.00"
    ];
    */






















  /*

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

  */

  $guarantor = [
    "prefix" => "นาย",
    "fname" => "จันทรา",
    "lname" => "คำวิชา",
    "relationship" => "-",
    "idcard" => "3410101173289",
    "guarantee_percentage" => 100.00,
    "guarantee_amount" => "43,813.67",
    "details_link" => "ดูรายละเอียด"
  ];
  
  
  
  
  

  $connect->sql = "INSERT INTO `guarantor`(`prefix`,
   `fname`,
    `lname`,
     `relationship`,
      `idcard`, 
      `guarantee_percentage`,
       `guarantee_amount`) VALUES
        (  '" . $guarantor['prefix'] . "',
          '" . $guarantor['fname'] . "',
          '" . $guarantor['lname'] . "',
          '" . $guarantor['relationship'] . "',
          '" . $guarantor['idcard'] . "',
          '" . $guarantor['guarantee_percentage'] . "',
          '" . $guarantor['guarantee_amount'] . "'
          
        )";
  $connect->queryData();
  $id = $connect->affected_rows();
  echo json_encode(["id" => $id, "detail" => $guarantor]);
}
