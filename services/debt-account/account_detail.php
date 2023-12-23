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
$rsdebtor = $connect->fetch_AssocData();
if ($row > 0) {
    echo '
    <div class="col-md-2 text-right col-3">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">หมายเลขประจำตัวประชาชน</label>
        </div>
    </div>
    <div class="col-md-2 col-3">
        <div class="form-group">
            <span id="txtidcard">' . $rsdebtor['idcard'] . '</span>
        </div>
    </div>
    <div class="col-md-2 text-right col-3">
        <div class="form-group">
            <label for="txtfname" class="text-gray">ชื่อ-นามสกุล ของผู้กู้</label>
        </div>
    </div>
    <div class="col-md-2 col-3">
    <div class="form-group">
        <span id="txtidcard">
            ' . $rsdebtor['prefix'] . $rsdebtor['fname'] . " " . $rsdebtor['lname'] . '
        </span>
    </div>
    </div>
    <div class="col-md-2 text-right col-3">
        <div class="form-group">
            <label for="txtfname" class="text-gray">ดูแลบัญชีโดย</label>
        </div>
    </div>
    <div class="col-md-2 col-3">
        <div class="form-group">
            <span id="txtidcard">
                ' . $rsdebtor['account_manager'] . '
            </span>
        </div>
    </div>
    <div class="col-md-2 text-right col-3">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">เลขที่บัญชีเงินกู้</label>
        </div>
    </div>
    <div class="col-md-2 col-3">
        <div class="form-group">
            <span id="txtidcard">
                ' . $rsdebtor['no_account'] . '
            </span>
        </div>
    </div>
    <div class="col-md-2 text-right col-3">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">ประเภทบัญชีเงินกู้</label>
        </div>
    </div>
    <div class="col-md-2 col-3">
        <div class="form-group">
            <span id="txtidcard">
                ' . $rsdebtor['type_account'] . '
            </span>
        </div>
    </div>
    <div class="col-md-2 text-right col-3">
    <div class="form-group">
        <label for="txtidcard" class="text-gray">กลุ่มผู้กู้ยืม</label>
    </div>
</div>
<div class="col-md-2 col-3">
    <div class="form-group">
        <span id="txtidcard">' . $rsdebtor['loan_group'] . '</span>
    </div>
</div>
<div class="col-md-2 text-right col-3">
    <div class="form-group">
        <label for="txtfname" class="text-gray">สถานะบัญชีเงินกู้</label>
    </div>
</div>
<div class="col-md-2 col-3">
    <div class="form-group">
        <span id="txtidcard">' . $rsdebtor['status_account'] . '</span>
    </div>
</div>

<div class="col-md-2 text-right col-3">
    <div class="form-group">
        <label for="txtfname" class="text-gray">วันเปลี่ยนแปลงสถานะทางบัญชี</label>
    </div>
</div>
<div class="col-md-2 col-3">
    <div class="form-group">
        <span id="txtidcard">' . $rsdebtor['status_change_date'] . '</span>
    </div>
</div>

<div class="col-md-2 text-right col-3">
    <div class="form-group">
        <label for="txtfname" class="text-gray">การขอผ่อนผัน</label>
    </div>
</div>
<div class="col-md-2 col-3">
    <div class="form-group">
        <span id="txtidcard">' . $rsdebtor['request_deferral'] . '</span>
    </div>
</div>

<div class="col-md-2 text-right col-3">
    <div class="form-group">
        <label for="txtfname" class="text-gray">การขอระงับเรียกใช้ชำระหนี้</label>
    </div>
</div>
<div class="col-md-2 col-3">
    <div class="form-group">
        <span id="txtidcard">' . $rsdebtor['request_suspend'] . '</span>
    </div>
</div>

<div class="col-md-2 text-right col-3">
    <div class="form-group">
        <label for="txtfname" class="text-gray">วันที่ขอระงับเรียกใช้ให้ชำระหนี้สิ้นสุด</label>
    </div>
</div>
<div class="col-md-2 col-3">
    <div class="form-group">
        <span id="txtidcard">' . $rsdebtor['date_suspend'] . '</span>
    </div>
</div>';
} else {
    echo '
    <div class="col-md-2 text-right col-3">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">หมายเลขประจำตัวประชาชน</label>
        </div>
    </div>
    <div class="col-md-2 col-3">
        <div class="form-group">
            <span id="txtidcard">-</span>
        </div>
    </div>
    <div class="col-md-2 text-right col-3">
        <div class="form-group">
            <label for="txtfname" class="text-gray">ชื่อ-นามสกุล ของผู้กู้</label>
        </div>
    </div>
    <div class="col-md-2 col-3">
    <div class="form-group">
        <span id="txtidcard">
           -
        </span>
    </div>
    </div>
    <div class="col-md-2 text-right col-3">
        <div class="form-group">
            <label for="txtfname" class="text-gray">ดูแลบัญชีโดย</label>
        </div>
    </div>
    <div class="col-md-2 col-3">
        <div class="form-group">
            <span id="txtidcard">
               -
            </span>
        </div>
    </div>
    <div class="col-md-2 text-right col-3">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">เลขที่บัญชีเงินกู้</label>
        </div>
    </div>
    <div class="col-md-2 col-3">
        <div class="form-group">
            <span id="txtidcard">
               -
            </span>
        </div>
    </div>
    <div class="col-md-2 text-right col-3">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">ประเภทบัญชีเงินกู้</label>
        </div>
    </div>
    <div class="col-md-2 col-3">
        <div class="form-group">
            <span id="txtidcard">
                -
            </span>
        </div>
    </div>
    <div class="col-md-2 text-right col-3">
    <div class="form-group">
        <label for="txtidcard" class="text-gray">กลุ่มผู้กู้ยืม</label>
    </div>
</div>
<div class="col-md-2 col-3">
    <div class="form-group">
        <span id="txtidcard">-</span>
    </div>
</div>
<div class="col-md-2 text-right col-3">
    <div class="form-group">
        <label for="txtfname" class="text-gray">สถานะบัญชีเงินกู้</label>
    </div>
</div>
<div class="col-md-2 col-3">
    <div class="form-group">
        <span id="txtidcard">-</span>
    </div>
</div>

<div class="col-md-2 text-right col-3">
    <div class="form-group">
        <label for="txtfname" class="text-gray">วันเปลี่ยนแปลงสถานะทางบัญชี</label>
    </div>
</div>
<div class="col-md-2 col-3">
    <div class="form-group">
        <span id="txtidcard">-</span>
    </div>
</div>

<div class="col-md-2 text-right col-3">
    <div class="form-group">
        <label for="txtfname" class="text-gray">การขอผ่อนผัน</label>
    </div>
</div>
<div class="col-md-2 col-3">
    <div class="form-group">
        <span id="txtidcard">-</span>
    </div>
</div>

<div class="col-md-2 text-right col-3">
    <div class="form-group">
        <label for="txtfname" class="text-gray">การขอระงับเรียกใช้ชำระหนี้</label>
    </div>
</div>
<div class="col-md-2 col-3">
    <div class="form-group">
        <span id="txtidcard">-</span>
    </div>
</div>

<div class="col-md-2 text-right col-3">
    <div class="form-group">
        <label for="txtfname" class="text-gray">วันที่ขอระงับเรียกใช้ให้ชำระหนี้สิ้นสุด</label>
    </div>
</div>
<div class="col-md-2 col-3">
    <div class="form-group">
        <span id="txtidcard">-</span>
    </div>
</div>';
}
