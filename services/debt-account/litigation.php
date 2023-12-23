<?php

include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();

$connect->sql = "SELECT * FROM litigation WHERE debt_id='" . $_GET['id'] . "'";
$connect->queryData();
while ($rsconnect = $connect->fetch_AssocData()) {
    echo '<div class="col-md-3 text-right col-6">
    <div class="form-group">
        <label for="txtidcard" class="text-gray">เลขคดี (LG ID)</label>
    </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">'.$rsconnect['lg_id'].'</span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">ศาล</label>

        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">'.$rsconnect['court'].'</span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">สำนักงานทนายความ</label>

        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">'.$rsconnect['lawyer_office'].'</span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">เบอร์โทรศัพท์</label>

        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">'.$rsconnect['phone_number'].'</span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">หมายเลขคดีดำ</label>

        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">'.$rsconnect['black_case_number'].'</span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">หมายเลขคดีแดง</label>

        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">'.$rsconnect['red_case_number'].'</span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">วันที่ฟ้องร้อง</label>

        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">'.date('d/m/', strtotime($rsconnect["filing_date"])) . (date('Y', strtotime($rsconnect["filing_date"])) + 543).'</span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">ครั้งที่ของการดำเนินคดี</label>

        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">'.$rsconnect['case_iteration'].'</span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">วันที่สถานะคดี</label>

        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">'.date('d/m/', strtotime($rsconnect["case_status_date"])) . (date('Y', strtotime($rsconnect["case_status_date"])) + 543).'</span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">วันที่ตั้งงานคดี</label>

        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">'.date('d/m/', strtotime($rsconnect["case_setup_date"])) . (date('Y', strtotime($rsconnect["case_setup_date"])) + 543).'</span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">สถานะคดี</label>

        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">'.$rsconnect['case_status'].'</span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">สถานะจาก LEGAL</label>

        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">'.$rsconnect['legal_status'].'</span>
        </div>
    </div>';
}
