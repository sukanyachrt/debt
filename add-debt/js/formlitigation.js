
$('#litigation-form').validate({
    rules: {
        txtlg_id: {
            required: true,

        },
        txtcourt: {
            required: true,

        },
        txtlawyer_office: {
            required: true,
        },
        txtphone_number: {
            required: true,
        },
        txtblack_case_number: {
            required: true,
            
        },
        txtred_case_number: {
            required: true,
        },
        txtfiling_date: {
            required: true,
        },
        txtcase_iteration: {
            required: true,
        },
        txtcase_status_date: {
            required: true,
        },
        txtcase_setup_date: {
            required: true,
        },
        txtcase_status: {
            required: true,
        },
        txtlegal_status: {
            required: true,
        }
    },
    messages: {
        txtlg_id: {
            required: "เลขคดี (LG ID) ",

        },
        txtcourt: {
            required: "ศาล ",
        },
        txtlawyer_office: {
            required: "สำนักงานทนายความ ",
        },
        txtphone_number: {
            required: "เบอร์โทรศัพท์ ",
        },
        txtblack_case_number: {
            required: "หมายเลขคดีดำ ",
        },
        txtred_case_number: {
            required: "หมายเลขคดีแดง ",
        },
        txtfiling_date: {
            required: "วันที่ฟ้องร้อง ",
        },
        txtcase_iteration: {
            required: "ครั้งที่ของการดำเนินคดี",
        },
        txtcase_status_date: {
            required: "วันที่สถานะคดี",
        },
        txtcase_setup_date: {
            required: "วันที่ตั้งงานคดี",
        },
        txtcase_status: {
            required: "สถานะคดี",
        },
        txtlegal_status: {
            required: "สถานะจาก LEGAL",
        }
    },
    errorElement: 'span',
    errorPlacement: function(error, element) {
        error.addClass('invalid-feedback text-md-center');
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