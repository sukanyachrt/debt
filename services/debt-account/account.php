<?php

include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$connect->sql = "SELECT * FROM account_data
WHERE	debt_id = '" . $_GET['id'] . "'";
$connect->queryData();
$row = $connect->num_rows();
$rsaccount_data = $connect->fetch_AssocData();
if ($row > 0) {
    echo '
<div class="row text-sm">
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtidcard" class="text-gray">ข้อมูล ณ วันที่</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard" class="text-gray">
                ' . date('d/m/') . "" . (date('Y') + 543) . '
            </span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtfname" class="text-gray">วันที่สิ้นสุดสัญญา</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard" class="text-gray">
                ' . $rsaccount_data['date_contract'] . '
            </span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtfname" class="text-gray">ยอดหนี้เงินกู้ทั้งสิ้น</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard" class="text-gray">';
            if (strpos($rsaccount_data["total_amount"], ',') !== false) {
                echo $rsaccount_data["total_amount"];
             }
             else{
                 echo number_format($rsaccount_data["total_amount"], 2, '.', ',');
             }
            echo '</span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtfname" class="text-gray">สถานะบัญชีเงินกู้</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard" class="text-gray">
                ' . $rsaccount_data['status_account'] . '
            </span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtfname" class="text-gray">วันครบกำหนดชำระหนี้ครั้งแรก</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard" class="text-gray">
                ' . $rsaccount_data['datestart_payment'] . '
            </span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtfname" class="text-gray">วันครบกำหนดชำระครั้งสุดท้าย</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard" class="text-gray">
                ' . $rsaccount_data['dateend_payment'] . '
            </span>
        </div>
    </div>
    <div class="col-md-3 text-right col-6">
        <div class="form-group">
            <label for="txtfname" class="text-gray">วันที่คำนวณดอกเบี้ยครั้งแรก</label>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="form-group">
            <span id="txtidcard" class="text-gray">
                ' . $rsaccount_data['datecal_interest'] . '
            </span>
        </div>
    </div>
</div>



<div class="row text-sm">
<div class="col-md-3 text-right col-6 pt-3">
    <div class="form-group">
        <label for="txtfname" class="text-gray">ประเภทการชำระ (Payment Model)</label>
    </div>
</div>
<div class="col-md-3 col-6 pt-3">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">
            ' . $rsaccount_data['payment_model'] . '
        </span>
    </div>
</div>
</div>
<div class="row text-sm">
<div class="col-md-3 text-right col-6">
    <div class="form-group">
        <label for="txtfname" class="text-gray">ประเภทการคำนวณเบี้ยปรับ (Pernalty Model)</label>
    </div>
</div>
<div class="col-md-3 col-6">
    <div class="form-group">
        <span id="txtfname" class="text-gray">
            ' . $rsaccount_data['pernalty_model'] . '
        </span>
    </div>
</div>
<div class="col-md-3 text-right col-6">
    <div class="form-group">
        <label for="txtfname" class="text-gray">อัตราเบี้ยปรับ</label>
    </div>
</div>
<div class="col-md-3 col-6">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">
            ' . $rsaccount_data['pernalty_rate'] . '
        </span>
    </div>
</div>
<div class="col-md-3 text-right col-6">
    <div class="form-group">
        <label for="txtfname" class="text-gray">ส่วนต่างระหว่างอัตราเบี้ยปรับ</label>
    </div>
</div>
<div class="col-md-3 col-6">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">
            ' . $rsaccount_data['pernalty_rate_dif'] . '
        </span>
    </div>
</div>
<div class="col-md-3 text-right col-6">
    <div class="form-group">
        <label for="txtfname" class="text-gray">ผลรวม</label>
    </div>
</div>
<div class="col-md-3 col-6">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">
            ' . $rsaccount_data['pernalty_total'] . '
        </span>
    </div>
</div>
<div class="col-md-3 text-right col-6">
    <div class="form-group">
        <label for="txtfname" class="text-gray">ประเภทการคำนวณดอกเบี้ย (Interest Model)</label>
    </div>
</div>
<div class="col-md-3 col-6">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">
            ' . $rsaccount_data['interest_model'] . '
        </span>
    </div>
</div>
<div class="col-md-3 text-right col-6">
    <div class="form-group">
        <label for="txtfname" class="text-gray">อัตราดอกเบี้ย</label>
    </div>
</div>
<div class="col-md-3 col-6">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">
            ' . $rsaccount_data['interest_rate'] . '
        </span>
    </div>
</div>
<div class="col-md-3 text-right col-6">
    <div class="form-group">
        <label for="txtfname" class="text-gray">ส่วนต่างระหว่างอัตราดอกเบี้ย</label>
    </div>
</div>
<div class="col-md-3 col-6">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">
            ' . $rsaccount_data['interest_rate_dif'] . '
        </span>
    </div>
</div>
<div class="col-md-3 text-right col-6">
    <div class="form-group">
        <label for="txtfname" class="text-gray">ผลรวม</label>
    </div>
</div>
<div class="col-md-3 col-6">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">
            ' . $rsaccount_data['interest_total'] . '
        </span>
    </div>
</div>
<div class="col-md-3 text-right col-6">
    <div class="form-group">
        <label for="txtfname" class="text-gray">ความถี่ในการชำระ</label>
    </div>
</div>
<div class="col-md-3 col-6">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">
            ' . $rsaccount_data['payment_frequency'] . '
        </span>
    </div>
</div>
<div class="col-md-3 text-right col-6">
    <div class="form-group">
        <label for="txtfname" class="text-gray">ยอดหนี้เงินกู้คงเหลือ (บาท)</label>
    </div>
</div>
<div class="col-md-3 col-6">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">';
        if (strpos($rsaccount_data["remain_balance"], ',') !== false) {
            echo $rsaccount_data["remain_balance"];
         }
         else{
             echo number_format($rsaccount_data["remain_balance"], 2, '.', ',');
         }
        echo '</span>
    </div>
</div>
<div class="col-md-3 text-right col-6 pt-3">
    <div class="form-group">
        <label for="txtfname" class="text-gray">ยอดเงินงวดค้างชำระ (บาท)</label>
    </div>
</div>
<div class="col-md-3 col-6 pt-3">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">';
        if (strpos($rsaccount_data["overdue_installment_amount"], ',') !== false) {
            echo $rsaccount_data["overdue_installment_amount"];
         }
         else{
             echo number_format($rsaccount_data["overdue_installment_amount"], 2, '.', ',');
         }
        echo '</span>
    </div>
</div>
<div class="col-md-3 text-right col-6 pt-3">
    <div class="form-group">
        <label for="txtfname" class="text-gray">ยอดเงินต้นค้างชำระ (บาท)</label>
    </div>
</div>
<div class="col-md-3 col-6 pt-3">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">';
        if (strpos($rsaccount_data["overdue_principal_amount"], ',') !== false) {
            echo $rsaccount_data["overdue_principal_amount"];
         }
         else{
             echo number_format($rsaccount_data["overdue_principal_amount"], 2, '.', ',');
         }
        echo '</span>
    </div>
</div>
<div class="col-md-3 text-right col-6">
    <div class="form-group">
        <label for="txtfname" class="text-gray">จำนวนครั้งที่ค้างชำระ</label>
    </div>
</div>
<div class="col-md-3 col-6 ">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">
            ' . $rsaccount_data['number_overdue'] . '
        </span>
    </div>
</div>
<div class="col-md-3 text-right col-6">
    <div class="form-group">
        <label for="txtfname" class="text-gray">ดอกเบี้ย (บาท) </label>
    </div>
</div>
<div class="col-md-3 col-6 ">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">';
        if (strpos($rsaccount_data["interest_amount"], ',') !== false) {
            echo $rsaccount_data["interest_amount"];
         }
         else{
             echo number_format($rsaccount_data["interest_amount"], 2, '.', ',');
         }
        echo '</span>
    </div>
</div>
<div class="col-md-3 text-right col-6">
    <div class="form-group">
        <label for="txtfname" class="text-gray">ยอดดอกเบี้ยปิดบัญชี (บาท)</label>
    </div>
</div>
<div class="col-md-3 col-6 ">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">
            ' . $rsaccount_data['interest_close_amount'] . '
        </span>
    </div>
</div>
<div class="col-md-3 text-right col-6">
    <div class="form-group">
        <label for="txtfname" class="text-gray">เบี้ยปรับ (บาท) </label>
    </div>
</div>
<div class="col-md-3 col-6 ">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">';
        if (strpos($rsaccount_data["penalty_amount"], ',') !== false) {
            echo $rsaccount_data["penalty_amount"];
         }
         else{
             echo number_format($rsaccount_data["penalty_amount"], 2, '.', ',');
         }
        echo '</span>
    </div>
</div>
<div class="col-md-3 text-right col-6">
    <div class="form-group">
        <label for="txtfname" class="text-gray">เบี้ยปรับค้างรับก่อนปรับโครงสร้างหนี้ (บาท)</label>
    </div>
</div>
<div class="col-md-3 col-6 ">
    <div class="form-group">
        <span id="txtidcard" class="text-gray">
            ' . $rsaccount_data['penalty_before_amount'] . '
        </span>
    </div>
</div>
</div>';
} else {
    echo '
    <div class="row text-sm">
        <div class="col-md-3 text-right col-6">
            <div class="form-group">
                <label for="txtidcard" class="text-gray">ข้อมูล ณ วันที่</label>
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
                <label for="txtfname" class="text-gray">วันที่สิ้นสุดสัญญา</label>
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
                <label for="txtfname" class="text-gray">ยอดหนี้เงินกู้ทั้งสิ้น</label>
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
                <label for="txtfname" class="text-gray">วันครบกำหนดชำระหนี้ครั้งแรก</label>
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
                <label for="txtfname" class="text-gray">วันครบกำหนดชำระครั้งสุดท้าย</label>
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
                <label for="txtfname" class="text-gray">วันที่คำนวณดอกเบี้ยครั้งแรก</label>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="form-group">
                <span id="txtidcard">
                   -
                </span>
            </div>
        </div>
    </div>
    <div class="row text-sm">
        <div class="col-md-3 text-right col-6 pt-3">
            <div class="form-group">
                <label for="txt1" class="text-gray">ประเภทการชำระ (Payment Model)</label>
            </div>
        </div>
        <div class="col-md-3 col-6 pt-3">
            <div class="form-group">
                <span id="txt1">
                    -
                </span>
            </div>
        </div>
    </div>
    <div class="row text-sm">
        <div class="col-md-3 text-right col-6">
            <div class="form-group">
                <label for="txtfname" class="text-gray">ประเภทการคำนวณเบี้ยปรับ (Pernalty Model)</label>
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
                <label for="txtfname" class="text-gray">อัตราเบี้ยปรับ</label>
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
                <label for="txtfname" class="text-gray">ส่วนต่างระหว่างอัตราเบี้ยปรับ</label>
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
                <label for="txtfname" class="text-gray">ผลรวม</label>
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
                <label for="txtfname" class="text-gray">ประเภทการคำนวณดอกเบี้ย (Interest Model)</label>
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
                <label for="txtfname" class="text-gray">อัตราดอกเบี้ย</label>
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
                <label for="txtfname" class="text-gray">ส่วนต่างระหว่างอัตราดอกเบี้ย</label>
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
                <label for="txtfname" class="text-gray">ผลรวม</label>
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
                <label for="txtfname" class="text-gray">ความถี่ในการชำระ</label>
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
                <label for="txtfname" class="text-gray">ยอดหนี้เงินกู้คงเหลือ (บาท)</label>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="form-group">
                <span id="txtidcard">
                -
                </span>
            </div>
        </div>
        <div class="col-md-3 text-right col-6 pt-3">
            <div class="form-group">
                <label for="txtfname" class="text-gray">ยอดเงินงวดค้างชำระ (บาท)</label>
            </div>
        </div>
        <div class="col-md-3 col-6 pt-3">
            <div class="form-group">
                <span id="txtidcard">
                -
                </span>
            </div>
        </div>
        <div class="col-md-3 text-right col-6 pt-3">
            <div class="form-group">
                <label for="txtfname" class="text-gray">ยอดเงินต้นค้างชำระ (บาท)</label>
            </div>
        </div>
        <div class="col-md-3 col-6 pt-3">
            <div class="form-group">
                <span id="txtidcard">
                    -
                </span>
            </div>
        </div>
        <div class="col-md-3 text-right col-6">
            <div class="form-group">
                <label for="txtfname" class="text-gray">จำนวนครั้งที่ค้างชำระ</label>
            </div>
        </div>
        <div class="col-md-3 col-6 ">
            <div class="form-group">
                <span id="txtidcard">
                -
                </span>
            </div>
        </div>
        <div class="col-md-3 text-right col-6">
            <div class="form-group">
                <label for="txtfname" class="text-gray">ดอกเบี้ย (บาท) </label>
            </div>
        </div>
        <div class="col-md-3 col-6 ">
            <div class="form-group">
                <span id="txtidcard" >
                -
                </span>
            </div>
        </div>
        <div class="col-md-3 text-right col-6">
            <div class="form-group">
                <label for="txtfname" class="text-gray">ยอดดอกเบี้ยปิดบัญชี (บาท)</label>
            </div>
        </div>
        <div class="col-md-3 col-6 ">
            <div class="form-group">
                <span id="txtidcard">
                -
                </span>
            </div>
        </div>
        <div class="col-md-3 text-right col-6">
            <div class="form-group">
                <label for="txtfname" class="text-gray">เบี้ยปรับ (บาท) </label>
            </div>
        </div>
        <div class="col-md-3 col-6 ">
            <div class="form-group">
                <span id="txtidcard">
                -
                </span>
            </div>
        </div>
        <div class="col-md-3 text-right col-6">
            <div class="form-group">
                <label for="txtfname" class="text-gray">เบี้ยปรับค้างรับก่อนปรับโครงสร้างหนี้ (บาท)</label>
            </div>
        </div>
        <div class="col-md-3 col-6 ">
            <div class="form-group">
                <span id="txtidcard">
                -
                </span>
            </div>
        </div>
    </div>';
}
