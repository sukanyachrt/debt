<form id="account-dataForm">
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group row">
                    <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">วันที่สิ้นสุดสัญญา :</label>
                    <div class="col-sm-7">
                        <input type="email" autocomplete="yes" class="form-control" id="txtdate_contract" name="txtdate_contract" placeholder="วันที่สิ้นสุดสัญญา ">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">ยอดหนี้เงินกู้ทั้งสิ้น :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txttotal_amount" name="txttotal_amount" placeholder="ยอดหนี้เงินกู้ทั้งสิ้น">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">สถานะบัญชีเงินกู้ :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtstatus_account" name="txtstatus_account" placeholder="สถานะบัญชีเงินกู้">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">วันครบกำหนดชำระหนี้ครั้งแรก :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtdatestart_payment" name="txtdatestart_payment" placeholder="วันครบกำหนดชำระหนี้ครั้งแรก">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">วันที่ครบกำหนดชำระครั้งสุดท้าย :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtdateend_payment" name="txtdateend_payment" placeholder="วันที่ครบกำหนดชำระครั้งสุดท้าย">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">วันที่คำนวณดอกเบี้ยครั้งแรก :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtdatecal_interest" name="txtdatecal_interest"  placeholder="วันที่คำนวณดอกเบี้ยครั้งแรก">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ประเภทการชำระ (Payment Model) :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtpayment_model" name="txtpayment_model"  placeholder="ประเภทการชำระ (Payment Model)">
                    </div>
                </div>

                <!--  -->
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ประเภทการคำนวณเบี้ยปรับ (Pernalty Model) :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtpernalty_model" name="txtpernalty_model"  placeholder="ประเภทการคำนวณเบี้ยปรับ (Pernalty Model)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">อัตราเบี้ยปรับ :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtpernalty_rate" name="txtpernalty_rate" placeholder="อัตราเบี้ยปรับ">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ส่วนต่างระหว่างอัตราเบี้ยปรับ :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtpernalty_rate_dif" name="txtpernalty_rate_dif" placeholder="ส่วนต่างระหว่างอัตราเบี้ยปรับ">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ผลรวม :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtpernalty_total" name="txtpernalty_total" placeholder="ผลรวม">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ประเภทการคำนวณดอกเบี้ย (Interest Model):</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtinterest_model" name="txtinterest_model" placeholder="ประเภทการคำนวณดอกเบี้ย (Interest Model)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">อัตราดอกเบี้ย :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control"  id="txtinterest_rate" name="txtinterest_rate" placeholder="อัตราดอกเบี้ย">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ส่วนต่างระหว่างอัตราดอกเบี้ย :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtinterest_rate_dif" name="txtinterest_rate_dif" placeholder="ส่วนต่างระหว่างอัตราดอกเบี้ย">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ผลรวม:</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtinterest_total" name="txtinterest_total"  placeholder="ผลรวม">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ความถี่ในการชำระ :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtpayment_frequency" name="txtpayment_frequency" placeholder="ความถี่ในการชำระ">
                    </div>
                </div>
                <!--  -->

                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ยอดหนี้เงินกู้คงเหลือ (บาท) :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtremain_balance" name="txtremain_balance" placeholder="ยอดหนี้เงินกู้คงเหลือ (บาท) ">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ยอดเงินงวดค้างชำระ (บาท) :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtoverdue_installment_amount" name="txtoverdue_installment_amount"  placeholder="ยอดเงินงวดค้างชำระ (บาท)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ยอดเงินต้นค้างชำระ (บาท) :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtoverdue_principal_amount" name="txtoverdue_principal_amount" placeholder="ยอดเงินต้นค้างชำระ (บาท)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">จำนวนครั้งที่ค้างชำระ :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtnumber_overdue" name="txtnumber_overdue" placeholder="จำนวนครั้งที่ค้างชำระ">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ดอกเบี้ย (บาท) :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtinterest_amount" name="txtinterest_amount" placeholder="ดอกเบี้ย (บาท)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ยอดดอกเบี้ยปิดบัญชี (บาท) :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtinterest_close_amount" name="txtinterest_close_amount" placeholder="ยอดดอกเบี้ยปิดบัญชี (บาท)">
                    </div>
                </div>
                <!--  -->

                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">เบี้ยปรับ (บาท) :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtpenalty_amount" name="txtpenalty_amount" placeholder="เบี้ยปรับ (บาท)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">เบี้ยปรับค้างรับก่อนปรับโครงสร้างหนี้ (บาท) :</label>
                    <div class="col-sm-7">
                        <input type="text" autocomplete="yes" class="form-control" id="txtpenalty_before_amount" name="txtpenalty_before_amount" placeholder="เบี้ยปรับค้างรับก่อนปรับโครงสร้างหนี้ (บาท)">
                    </div>
                </div>
            
        </div>
        <div class="col-12 text-center mt-2">
            <button class="btn btn-default" onclick="stepper.previous()">
                <i class="fas fa-arrow-left"></i>
                ย้อนกลับ
            </button>
            <button class="btn btn-primary" onclick="checkAccountdata()">
                <i class="fas fa-arrow-right"></i>
                ถัดไป
            </button>
        </div>
    </div>
</form>

<script>
    $('#account-dataForm').validate({
        rules: {
            txtdate_contract: {
                required: true,

            },
            txttotal_amount: {
                required: true,

            },
            txtstatus_account: {
                required: true,
            },
            txtdatestart_payment: {
                required: true,
            },
            txtdateend_payment: {
                required: true,
                alphanumeric: true,
            },
            txtdatecal_interest: {
                required: true,
            },
            txtpayment_model: {
                required: true,
            },
            txtpernalty_model: {
                required: true,
            },
            txtpernalty_rate: {
                required: true,
            },
            txtpernalty_rate_dif: {
                required: true,
            },
            txtpernalty_total: {
                required: true,
            },
            txtinterest_model: {
                required: true,
            },
            txtinterest_rate: {
                required: true,
            },
            txtinterest_rate_dif: {
                required: true,
            },
            txtpayment_frequency: {
                required: true,
            },
            txtremain_balance: {
                required: true,
            },
            txtoverdue_installment_amount: {
                required: true,
            },
            txtoverdue_principal_amount: {
                required: true,
            },
            txtnumber_overdue: {
                required: true,
            },
            txtinterest_amount: {
                required: true,
            },
            txtinterest_close_amount: {
                required: true,
            },
            txtpenalty_amount: {
                required: true,
            },
            txtpenalty_before_amount: {
                required: true,
            },


        },
        messages: {
            txtdate_contract: {
                required: "วันที่สิ้นสุดสัญญา  ",

            },
            txttotal_amount: {
                required: "ยอดหนี้เงินกู้ทั้งสิ้น ",
            },
            txtstatus_account: {
                required: "สถานะบัญชีเงินกู้ ",
            },
            txtdatestart_payment: {
                required: "วันครบกำหนดชำระหนี้ครั้งแรก ",
            },
            txtdateend_payment: {
                required: "วันที่ครบกำหนดชำระครั้งสุดท้าย ",

            },
            txtdatecal_interest: {
                required: "วันที่คำนวณดอกเบี้ยครั้งแรก   ",
            },
            txtpayment_model: {
                required: "ประเภทการชำระ (Payment Model)  ",
            },


            txtpernalty_model: {
                required: "ประเภทการคำนวณเบี้ยปรับ (Pernalty Model)  ",
            },
            txtpernalty_rate: {
                required: "อัตราเบี้ยปรับ ",
            },
            txtpernalty_rate_dif: {
                required: "ส่วนต่างระหว่างอัตราเบี้ยปรับ ",
            },
            txtpernalty_total: {
                required: "ผลรวม ",
            },
            txtinterest_model: {
                required: "ประเภทการคำนวณดอกเบี้ย (Interest Model) ",
            },
            txtinterest_rate: {
                required: "อัตราดอกเบี้ย ",
            },
            txtinterest_rate_dif: {
                required: "ส่วนต่างระหว่างอัตราดอกเบี้ย ",
            },
            txtinterest_total: {
                required: "ผลรวม ",
            },
            txtpayment_frequency: {
                required: "ความถี่ในการชำระ ",
            },
            txtremain_balance: {
                required: "ยอดหนี้เงินกู้คงเหลือ (บาท) ",
            },
            txtoverdue_installment_amount: {
                required: "ยอดเงินงวดค้างชำระ (บาท) ",
            },
            txtoverdue_principal_amount: {
                required: "ยอดเงินต้นค้างชำระ (บาท) ",
            },


            txtnumber_overdue: {
                required: "จำนวนครั้งที่ค้างชำระ ",
            },
            txtinterest_amount: {
                required: "ดอกเบี้ย (บาท)  ",
            },
            txtinterest_close_amount: {
                required: "ยอดดอกเบี้ยปิดบัญชี (บาท) ",
            },
            txtpenalty_amount: {
                required: "เบี้ยปรับ (บาท) ",
            },
            txtpenalty_before_amount: {
                required: "เบี้ยปรับค้างรับก่อนปรับโครงสร้างหนี้ (บาท)  ",
            },
            


        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback text-md-right');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },

        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        
    });
</script>