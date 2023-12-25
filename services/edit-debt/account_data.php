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
    echo '<div class="row">
    <div class="col-sm-8">
        <div class="form-group row">
            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">วันที่สิ้นสุดสัญญา :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control datepicker" readOnly id="txtdate_contract" name="txtdate_contract" placeholder="วันที่สิ้นสุดสัญญา " value="'.$rsaccount_data['date_contract'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">ยอดหนี้เงินกู้ทั้งสิ้น :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txttotal_amount" name="txttotal_amount" placeholder="ยอดหนี้เงินกู้ทั้งสิ้น" value="'.$rsaccount_data['total_amount'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">สถานะบัญชีเงินกู้ :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtstatus_account" name="txtstatus_account" placeholder="สถานะบัญชีเงินกู้" value="'.$rsaccount_data['status_account'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">วันครบกำหนดชำระหนี้ครั้งแรก :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control datepicker" readOnly id="txtdatestart_payment" name="txtdatestart_payment" placeholder="วันครบกำหนดชำระหนี้ครั้งแรก" value="'.$rsaccount_data['datestart_payment'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">วันที่ครบกำหนดชำระครั้งสุดท้าย :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control datepicker" readOnly id="txtdateend_payment" name="txtdateend_payment" placeholder="วันที่ครบกำหนดชำระครั้งสุดท้าย" value="'.$rsaccount_data['dateend_payment'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">วันที่คำนวณดอกเบี้ยครั้งแรก :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control datepicker" readOnly id="txtdatecal_interest" name="txtdatecal_interest" placeholder="วันที่คำนวณดอกเบี้ยครั้งแรก" value="'.$rsaccount_data['datecal_interest'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ประเภทการชำระ (Payment Model) :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtpayment_model" name="txtpayment_model" placeholder="ประเภทการชำระ (Payment Model)" value="'.$rsaccount_data['payment_model'].'">
            </div>
        </div>

        <!--  -->
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ประเภทการคำนวณเบี้ยปรับ (Pernalty Model) :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtpernalty_model" name="txtpernalty_model" placeholder="ประเภทการคำนวณเบี้ยปรับ (Pernalty Model)" value="'.$rsaccount_data['pernalty_model'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">อัตราเบี้ยปรับ :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtpernalty_rate" name="txtpernalty_rate" placeholder="อัตราเบี้ยปรับ" value="'.$rsaccount_data['pernalty_rate'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ส่วนต่างระหว่างอัตราเบี้ยปรับ :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtpernalty_rate_dif" name="txtpernalty_rate_dif" placeholder="ส่วนต่างระหว่างอัตราเบี้ยปรับ" value="'.$rsaccount_data['pernalty_rate_dif'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ผลรวม :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtpernalty_total" name="txtpernalty_total" placeholder="ผลรวม" value="'.$rsaccount_data['pernalty_total'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ประเภทการคำนวณดอกเบี้ย (Interest Model):</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtinterest_model" name="txtinterest_model" placeholder="ประเภทการคำนวณดอกเบี้ย (Interest Model)" value="'.$rsaccount_data['interest_model'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">อัตราดอกเบี้ย :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtinterest_rate" name="txtinterest_rate" placeholder="อัตราดอกเบี้ย" value="'.$rsaccount_data['interest_rate'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ส่วนต่างระหว่างอัตราดอกเบี้ย :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtinterest_rate_dif" name="txtinterest_rate_dif" placeholder="ส่วนต่างระหว่างอัตราดอกเบี้ย" value="'.$rsaccount_data['interest_rate_dif'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ผลรวม:</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtinterest_total" name="txtinterest_total" placeholder="ผลรวม" value="'.$rsaccount_data['interest_total'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ความถี่ในการชำระ :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtpayment_frequency" name="txtpayment_frequency" placeholder="ความถี่ในการชำระ" value="'.$rsaccount_data['payment_frequency'].'">
            </div>
        </div>
        <!--  -->

        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ยอดหนี้เงินกู้คงเหลือ (บาท) :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtremain_balance" name="txtremain_balance" placeholder="ยอดหนี้เงินกู้คงเหลือ (บาท) " value="'.$rsaccount_data['remain_balance'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ยอดเงินงวดค้างชำระ (บาท) :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtoverdue_installment_amount" name="txtoverdue_installment_amount" placeholder="ยอดเงินงวดค้างชำระ (บาท)"  value="'.$rsaccount_data['overdue_installment_amount'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ยอดเงินต้นค้างชำระ (บาท) :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtoverdue_principal_amount" name="txtoverdue_principal_amount" placeholder="ยอดเงินต้นค้างชำระ (บาท)" value="'.$rsaccount_data['overdue_principal_amount'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">จำนวนครั้งที่ค้างชำระ :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtnumber_overdue" name="txtnumber_overdue" placeholder="จำนวนครั้งที่ค้างชำระ" value="'.$rsaccount_data['number_overdue'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ดอกเบี้ย (บาท) :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtinterest_amount" name="txtinterest_amount" placeholder="ดอกเบี้ย (บาท)" value="'.$rsaccount_data['interest_amount'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ยอดดอกเบี้ยปิดบัญชี (บาท) :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtinterest_close_amount" name="txtinterest_close_amount" placeholder="ยอดดอกเบี้ยปิดบัญชี (บาท)" value="'.$rsaccount_data['interest_close_amount'].'">
            </div>
        </div>
        <!--  -->

        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">เบี้ยปรับ (บาท) :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtpenalty_amount" name="txtpenalty_amount" placeholder="เบี้ยปรับ (บาท)" value="'.$rsaccount_data['penalty_amount'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">เบี้ยปรับค้างรับก่อนปรับโครงสร้างหนี้ (บาท) :</label>
            <div class="col-sm-7">
                <input type="text" autocomplete="yes" class="form-control" id="txtpenalty_before_amount" name="txtpenalty_before_amount" placeholder="เบี้ยปรับค้างรับก่อนปรับโครงสร้างหนี้ (บาท)" value="'.$rsaccount_data['penalty_before_amount'].'">
            </div>
        </div>

    </div>
    <div class="col-12 text-center mt-2">
        <button class="btn btn-default" type="button" onclick="stepper.previous()">
            <i class="fas fa-arrow-left"></i>
            ย้อนกลับ
        </button>
        <button class="btn btn-primary" type="button" onclick="checkAccountdata()">
            <i class="fas fa-arrow-right"></i>
            ถัดไป
        </button>
    </div>
</div>';
}
