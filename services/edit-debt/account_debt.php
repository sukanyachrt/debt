<?php

include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
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
account_debt.loan_group,
account_debt.account_manager,
account_debt.loan_account_number,
account_debt.loan_account_type,
account_debt.loan_account_status,
account_debt.status_change_date,
account_debt.request_deferral,
account_debt.request_suspend,
account_debt.date_suspend 
FROM
debtor
INNER JOIN account_debt ON debtor.id = account_debt.debt_id 
WHERE	debtor.id = '" . $_GET['id'] . "'";
$connect->queryData();
$row = $connect->num_rows();
$rsaccount_data = $connect->fetch_AssocData();
if ($row > 0) {
    echo '<div class="row">
    <div class="col-sm-8">

        <div class="form-group row">
            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ดูแลบัญชีโดย :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtaccount_manager" name="txtaccount_manager" placeholder="ดูแลบัญชีโดย" value="' . $rsaccount_data['account_manager'] . '">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">กลุ่มผู้กู้ยืม :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtloan_group" name="txtloan_group" placeholder="กลุ่มผู้กู้ยืม" value="' . $rsaccount_data['loan_group'] . '">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">สถานะบัญชีเงินกู้ :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtloan_account_status" name="txtloan_account_status" placeholder="สถานะบัญชีเงินกู้" value="' . $rsaccount_data['loan_account_status'] . '">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">วันที่เปลี่ยนแปลงสถานะทางบัญชี :</label>
            <div class="col-sm-7">

                <input type="text" autocomplete="yes" readOnly class="form-control datepicker" id="txtstatus_change_date" name="txtstatus_change_date" placeholder="วันที่เปลี่ยนแปลงสถานะทางบัญชี" value="' . $rsaccount_data['status_change_date'] . '">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">การขอผ่อนผัน :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtrequest_deferral" name="txtrequest_deferral" placeholder="การขอผ่อนผัน" value="' . $rsaccount_data['request_deferral'] . '">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">การขอระงับเรียกให้ชำระหนี้ :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtrequest_suspend" name="txtrequest_suspend" placeholder="การขอระงับเรียกให้ชำระหนี้" value="' . $rsaccount_data['request_suspend'] . '">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">วันที่ขอระงับเรียกให้ชำระหนี้สิ้นสุด :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control datepicker" readOnly id="txtdate_suspend" name="txtdate_suspend" placeholder="วันที่ขอระงับเรียกให้ชำระหนี้สิ้นสุด" value="' . $rsaccount_data['date_suspend'] . '">
            </div>
        </div>
    </div>
    <div class="col-12 text-center mt-2">
        <button class="btn btn-default" type="button" onclick="stepper.previous()">
            <i class="fas fa-arrow-left"></i>
            ย้อนกลับ
        </button>
        <button class="btn btn-primary" type="button" onclick="checkAccountdetail()">
            <i class="fas fa-arrow-right"></i>
            ถัดไป
        </button>
    </div>
</div>';

}
?>

