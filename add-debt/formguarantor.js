$('#guarantor-form').validate({
    rules: {
        txtprefix: {
            required: true,

        },
        txtfname: {
            required: true,

        },
        txtlname: {
            required: true,
        },
        txtrelationship: {
            required: true,
        },
        txtidcard: {
            required: true,
            minlength: 13
        },
        txtguarantee_percentage: {
            required: true,
        },
        // txtbirthday: {
        //     required: true,
        // },
        txtgender: {
            required: true,
        },
        txtstatus_person: {
            required: true,
        }
    },
    messages: {
        txtprefix: {
            required: "โปรดกรอกคำนำหน้าชื่อ ",

        },
        txtfname: {
            required: "ชื่อ ",
        },
        txtlname: {
            required: "นามสกุล ",
        },
        txtrelationship: {
            required: "ความสัมพันธ์กับผู้กู้ ",
        },
        txtidcard: {
            required: "หมายเลขบัตรประจำตัวประชาชน ",
        },
        txtguarantee_percentage: {
            required: "ภาระค้ำประกัน(%)  ",
        },
        txtguarantee_amount: {
            required: "ภาระค้ำประกัน(จำนวนเงิน)  ",
        },
        // txtbirthday: {
        //     required: "วัน/เดือน/ปี เกิด  ",
        // },
        txtgender: {
            required: "เพศ",
        },
        txtstatus_person: {
            required: "สถานะบุคคล",
        }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
        error.addClass('invalid-feedback text-md-center');
        element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
    },

    unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
    },

});