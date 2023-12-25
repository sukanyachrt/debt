$('#debt-detailForm').validate({
    rules: {
        txtidcard: {
            required: true,
            alphanumeric: true,
            minlength: 13
        },
        txtprefix: {
            required: true,

        },
        txtfname: {
            required: true,
        },
        txtlname: {
            required: true,
        },
        txtno_account: {
            required: true,
            
        },
        txtstatus_account: {
            required: true,
        },
        txtstatus_personal: {
            required: true,
        },
        txttype_account: {
            required: true,
        },
        txttelephone: {
            required: true,
        }
    },
    messages: {
        txtidcard: {
            required: "โปรดกรอกเลขประจำตัวประชาชน ",
            alphanumeric: "กรุณากรอกเฉพาะตัวเลข",
        },
        txtprefix: {
            required: "โปรดเลือกคำนำหน้าชื่อ ",
        },
        txtfname: {
            required: "โปรดกรอกชื่อ ",
        },
        txtlname: {
            required: "โปรดกรอกนามสกุล ",
        },
        txtno_account: {
            required: "โปรดกรอกเลขที่บัญชีเงินกู้ ",
            alphanumeric: "กรุณากรอกเฉพาะตัวเลข",
        },
        txtstatus_account: {
            required: "โปรดกรอกสถานะของบัญชีเงินกู้  ",
        },
        txtstatus_personal: {
            required: "โปรดกรอกสถานภาพบุคคล ",
        },
        txttype_account: {
            required: "โปรดกรอกประเภทบัญชีเงินกู้  ",
        },
        txttelephone: {
            required: "โปรดกรอกเบอร์โทรศัพท์ลูกหนี้",
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
$('#account-detailForm').validate({
    rules: {
        txtaccount_manager: {
            required: true,

        },
        txtloan_group: {
            required: true,

        },
        txtloan_account_status: {
            required: true,
        },
        txtstatus_change_date: {
            required: true,
        },
        txtrequest_deferral: {
            required: true,
            alphanumeric: true,
        },
        txtrequest_suspend: {
            required: true,
        },
        // txtdate_suspend: {
        //     required: true,
        // },

    },
    messages: {
        txtaccount_manager: {
            required: "ดูแลบัญชีโดย  ",

        },
        txtloan_group: {
            required: "กลุ่มผู้กู้ยืม ",
        },
        txtloan_account_status: {
            required: "สถานะบัญชีเงินกู้ ",
        },
        txtstatus_change_date: {
            required: "วันที่เปลี่ยนแปลงสถานะทางบัญชี ",
        },
        txtrequest_deferral: {
            required: "การขอผ่อนผัน ",

        },
        txtrequest_suspend: {
            required: "การขอระงับเรียกให้ชำระหนี้  ",
        },
        // txtdate_suspend: {
        //     required: "วันที่ขอระงับเรียกให้ชำระหนี้สิ้นสุด ",
        // },

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
        txtinterest_total:{
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
            required: "ผลรวม. ",
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