<?php

include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();

$connect->sql = "SELECT * FROM debtor WHERE id='" . $_GET['id'] . "'";
$connect->queryData();
$row = $connect->num_rows();
$rsconnect = $connect->fetch_AssocData();
if ($row > 0) {
    echo '<div class="row text-sm">
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">เลขประจำตัวประชาชน</label>
    
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">
            ' . $rsconnect['idcard'] . '
            </span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtfname" class="text-gray">ชื่อ-นามสกุล</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">
            ' . $rsconnect['prefix'] . $rsconnect['fname'] . " " . $rsconnect['lname'] . '
                
            </span>
        </div>
    </div>
    
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">เลขบัญชีเงินกู้</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">
            ' . $rsconnect['no_account'] . '
            </span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtfname" class="text-gray">สถานะบัญชีเงินกู้</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">
            ' . $rsconnect['status_account'] . '
            </span>
        </div>
    </div>
    
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">สถานะภาพบุคคล</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">
            ' . $rsconnect['status_personal'] . '
           </span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtfname" class="text-gray">ประเภทบัญชีเงินกู้</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">
            ' . $rsconnect['type_account'] . '
            </span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtfname" class="text-gray">เบอร์โทรศัพท์ลูกหนี้</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">';


    $phone_1 = explode("[", $rsconnect['telephone']);
    $phone_2 = explode("]", $phone_1[1]);
    echo $output = str_replace('"', ' ', $phone_2[0]);

    echo '</span>
        </div>
    </div>
    
    </div>';
} else {
    //ไม่มีข้อมูล
    echo '<div class="row text-sm">
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">เลขประจำตัวประชาชน</label>
    
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">
           -
            </span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtfname" class="text-gray">ชื่อ-นามสกุล</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">
           - 
            </span>
        </div>
    </div>
    
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">เลขบัญชีเงินกู้</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">
            -
            </span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtfname" class="text-gray">สถานะบัญชีเงินกู้</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">
            -
            </span>
        </div>
    </div>
    
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">สถานะภาพบุคคล</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">
           -
           </span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtfname" class="text-gray">ประเภทบัญชีเงินกู้</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">
           -
            </span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtfname" class="text-gray">เบอร์โทรศัพท์ลูกหนี้</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard">
            -
           </span>
        </div>
    </div>
    
    </div>';
}
