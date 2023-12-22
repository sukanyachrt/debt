<!DOCTYPE html>
<html lang="en">

<head>
    <title>ระบบการติดตามลูกหนี้</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="asset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="asset/plugins/toastr/toastr.min.css">
</head>

<body>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image  align-items-center text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <img src="./asset/img/logo.png" width="125" height="100" />
                            <h3 class="font-weight-bold mb-1 text-white">ระบบการติดตามลูกหนี้</h3>
                            <h3 class="font-weight-bold mb-1 text-white">ค้างชำระของกองทุนเงินให้กู้ยืม</h3>
                            <h3 class="font-weight-bold mb-1 text-white">เพื่อการศึกษา</h3>
                            <p class="font-weight-bold mb-4 text-white">กรณีศึกษาบริษัท กฎหมาย ช ชัยวิวัตร์ จากัด</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-1">ลงชื่อเข้าใช้งานระบบ</h3>
                                <p class="mb-4">โปรดกรอกรายละเอียดของท่านในช่องด้านล่าง</p>

                                <!-- Sign In Form -->
                                <form id="loginForm">
                                    <div class="form-floating mb-3 form-group">
                                        <label for="floatingInput" class="font-weight-bold">รหัสผู้ใช้งาน</label>
                                        <input type="text" autocomplete="yes" class="form-control" id="Username" name="Username" placeholder="Username">

                                    </div>
                                    <div class="form-floating mb-3 form-group">
                                        <label for="floatingPassword" class="font-weight-bold">รหัสผ่าน</label>
                                        <input type="password" autocomplete="yes" class="form-control" id="floatingPassword" id="Password" name="Password" placeholder="Password">

                                    </div>



                                    <div class="d-grid mt-4">
                                        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase fw-bold mb-2" type="submit">เข้าสู่ระบบ</button>
                                        <div class="text-left mt-4">
                                            ลืมรหัสผ่าน?<a href="#"> คลิกที่นี่</a>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="asset/plugins/jquery/jquery.min.js"></script>
<script src="asset/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="asset/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="asset/plugins/toastr/toastr.min.js"></script>
<script>
    
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
    

    $('#loginForm').validate({
        rules: {
            Username: {
                required: true,
                alphanumeric: true, // เพิ่มกฎ alphanumeric สำหรับตัวเลขและตัวอักษร
            },
            Password: {
                required: true,
                alphanumeric: true, // เพิ่มกฎ alphanumeric สำหรับตัวเลขและตัวอักษร
            },
        },
        messages: {
            Username: {
                required: "โปรดกรอกรหัสผู้ใช้งาน",
                alphanumeric: "โปรดกรอกรหัสผู้ใช้งานที่มีเฉพาะตัวเลขและตัวอักษร",
            },
            Password: {
                required: "โปรดกรอกรหัสผ่าน",
                alphanumeric: "โปรดกรอกรหัสผ่านที่มีเฉพาะตัวเลขและตัวอักษร",
            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: function(form) {
            $.ajax({
                type: 'POST',
                url: "services/auth/data.php?v=checkauth",
                data: $(form).serialize(),
                success: function(response) {
                    console.log(response)
                    if (response.status == "ok") {
                        postSession(response);

                    } else {
                        toastr.error(response.msg)
                    }
                },
                error: function(error) {
                    console.log(error)
                }
            });
        },
    });

    // เพิ่มเงื่อนไขสำหรับกฎ alphanumeric
    $.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
    }, "โปรดกรอกข้อมูลที่มีเฉพาะตัวเลขและตัวอักษร (a-z)");

    function postSession(data) {
        $.ajax({
            url: "./createsession.php",
            type: "POST",
            data: data, // ใช้ข้อมูลจากการร้องขอแรก
            success: function(Res) {
                window.location.replace(Res.page);
            },

        });
    }
</script>

</html>