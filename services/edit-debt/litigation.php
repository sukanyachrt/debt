<?php

include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$connect->sql = "SELECT * FROM litigation
WHERE	id = '" . $_GET['id'] . "'";
$connect->queryData();
$row = $connect->num_rows();
$rsaccount_data = $connect->fetch_AssocData();
if ($row > 0) {
    $filing_date=date('d/m',strtotime($rsaccount_data['filing_date']))."/".(date('Y',strtotime($rsaccount_data['filing_date']))+543);
    $case_status_date=date('d/m',strtotime($rsaccount_data['case_status_date']))."/".(date('Y',strtotime($rsaccount_data['case_status_date']))+543);
    $case_setup_date=date('d/m',strtotime($rsaccount_data['case_setup_date']))."/".(date('Y',strtotime($rsaccount_data['case_setup_date']))+543);

    echo '<div class="form-group row">
    <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">เลขคดี (LG ID) :</label>
    <div class="col-sm-7">
        <input type="text" autocomplete="yes" class="form-control" id="txtlg_id" name="txtlg_id" placeholder="เลขคดี (LG ID) "  value="'. $rsaccount_data['lg_id'] .'">
    </div>
</div>
<div class="form-group row">
    <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ศาล :</label>
    <div class="col-sm-7">
        <input type="text" autocomplete="yes" class="form-control" id="txtcourt" name="txtcourt" placeholder="ศาล " value="'.$rsaccount_data['court'].'">
    </div>
</div>
<div class="form-group row">
    <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">สำนักงานทนายความ :</label>
    <div class="col-sm-7">
        <input type="text" autocomplete="yes" class="form-control" id="txtlawyer_office" name="txtlawyer_office" placeholder="สำนักงานทนายความ " value="'.$rsaccount_data['lawyer_office'].'">
    </div>
</div>
<div class="form-group row">
    <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">เบอร์โทรศัพท์ :</label>
    <div class="col-sm-7">
        <input type="text" autocomplete="yes" class="form-control" id="txtphone_number" name="txtphone_number" placeholder="เบอร์โทรศัพท์ " value="'.$rsaccount_data['phone_number'].'">
    </div>
</div>
<div class="form-group row">
    <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">หมายเลขคดีดำ :</label>
    <div class="col-sm-7">
        <input type="text" autocomplete="yes" class="form-control" id="txtblack_case_number" name="txtblack_case_number" placeholder="หมายเลขคดีดำ " value="'.$rsaccount_data['black_case_number'].'">
    </div>
</div>
<div class="form-group row">
    <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">หมายเลขคดีแดง :</label>
    <div class="col-sm-7">
        <input type="text" autocomplete="yes" class="form-control" id="txtred_case_number" name="txtred_case_number" placeholder="หมายเลขคดีแดง " value="'.$rsaccount_data['red_case_number'].'">
    </div>
</div>
<div class="form-group row">
    <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">วันที่ฟ้องร้อง :</label>
    <div class="col-sm-7">
        <input type="text" autocomplete="yes" readOnly class="form-control datepicker" id="txtfiling_date" name="txtfiling_date" placeholder="วันที่ฟ้องร้อง " value="'.$filing_date.'">
    </div>
</div>
<div class="form-group row">
    <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ครั้งที่ของการดำเนินคดี :</label>
    <div class="col-sm-7">
        <input type="text" autocomplete="yes" class="form-control" id="txtcase_iteration" name="txtcase_iteration" placeholder="ครั้งที่ของการดำเนินคดี " value="'.$rsaccount_data['case_iteration'].'">
    </div>
</div>
<div class="form-group row">
    <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">วันที่สถานะคดี :</label>
    <div class="col-sm-7">
        <input type="text" autocomplete="yes" readOnly class="form-control datepicker" id="txtcase_status_date" name="txtcase_status_date" placeholder="วันที่สถานะคดี " value="'.$case_status_date.'">
    </div>
</div>
<div class="form-group row">
    <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">วันที่ตั้งงานคดี :</label>
    <div class="col-sm-7">
        <input type="text" autocomplete="yes" readOnly class="form-control datepicker" id="txtcase_setup_date" name="txtcase_setup_date" placeholder="วันที่ตั้งงานคดี " value="'.$case_setup_date.'">
    </div>
</div>

<div class="form-group row">
    <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">สถานะคดี :</label>
    <div class="col-md-7">
        <input type="text" autocomplete="yes" class="form-control" id="txtcase_status" name="txtcase_status" placeholder="สถานะคดี " value="'.($rsaccount_data['case_status']).'">
    </div>
</div>
<div class="form-group row">
    <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">สถานะจาก LEGAL :</label>
    <div class="col-sm-7">
        <input type="text" autocomplete="yes" class="form-control" id="txtlegal_status" name="txtlegal_status" placeholder="สถานะจาก LEGAL " value="'.$rsaccount_data['legal_status'].'">
    </div>
</div>';
}
?>