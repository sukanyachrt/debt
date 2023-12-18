<?php
header('Content-Type: application/json');
include('./../Connect_Data.php');
error_reporting(0);
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


    $account= [
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
      ]
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    ;

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
       $id = $connect->affected_rows();

    echo json_encode(["id"=>$id,"detail"=>$account]);
}
