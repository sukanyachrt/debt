<?php include('../include/header.php') ?>
<link rel="stylesheet" href="../asset/plugins/bs-stepper/css/bs-stepper.min.css">

<div class="wrapper">
    <?php include("../include/topmenu.php") ?>
    <div class="content-wrapper">
        <?php include("../include/navmenu.php") ?>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h6>
                            <a href="javascript:history.back()" class="text-gray">
                                <i class="fas fa-arrow-left pr-1"></i>
                                กลับ
                            </a>
                        </h6>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">ตรวจสอบข้อมูลลูกหนี้</a></li>
                            <li class="breadcrumb-item active">เพิ่มข้อมูลลูกหนี้</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title text-primary text-md">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus text-primary"></i>
                                    </button>
                                    แก้ไขข้อมูลลูกหนี้
                                    <input type="hidden" id="btnIdDebt" name="btnIdDebt" value="<? echo $_GET['id'] ?>">
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="bs-stepper">
                                    <div class="bs-stepper-header table-responsive text-sm" role="tablist">
                                        <div class="step" data-target="#debt-detail">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="debt-detail" id="debt-detail-trigger">
                                                <span class="bs-stepper-circle">1</span>
                                                <span class=" text-sm">รายละเอียดลูกหนี้</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#account-detail">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="account-detail" id="account-detail-trigger">
                                                <span class="bs-stepper-circle">2</span>
                                                <span class="text-sm">รายละเอียดบัญชี</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#account-data">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="account-data" id="account-data-trigger">
                                                <span class="bs-stepper-circle">3</span>
                                                <span class="text-sm">ข้อมูลบัญชี</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#payment-schedule">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="payment-schedule" id="payment-schedule-trigger">
                                                <span class="bs-stepper-circle">4</span>
                                                <span class="text-sm">ตารางผ่อนชำระ</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#payment-due">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="payment-due" id="payment-due-trigger">
                                                <span class="bs-stepper-circle">5</span>
                                                <span class="text-sm">ข้อมูลครบกำหนดชำระ</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#guarantor">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="guarantor" id="guarantor-trigger">
                                                <span class="bs-stepper-circle">6</span>
                                                <span class="text-sm">ข้อมูลผู้ค้ำประกัน</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#litigation">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="litigation" id="litigation-trigger">
                                                <span class="bs-stepper-circle">7</span>
                                                <span class="text-sm">การดำเนินคดี</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="bs-stepper-content">
                                        <!-- รายละเอียดลูกหนี้ -->
                                        <div id="debt-detail" class="content" role="tabpanel" aria-labelledby="debt-detail-trigger">
                                            <form id="debt-detailForm">
                                                <div id="load-debt-detail"></div>
                                            </form>

                                        </div>
                                        <!-- รายละเอียดบัญชี -->
                                        <div id="account-detail" class="content" role="tabpanel" aria-labelledby="account-detail-trigger">
                                            <form id="account-detailForm">
                                                <div id="load-account-detailForm"></div>
                                            </form>
                                        </div>
                                        <!-- ข้อมูลบัญชี -->
                                        <div id="account-data" class="content" role="tabpanel" aria-labelledby="account-data-trigger">
                                            <form id="account-dataForm">
                                                <div id="load-account-data"></div>
                                            </form>
                                        </div>
                                        <!-- ตารางผ่อนชำระ -->
                                        <div id="payment-schedule" class="content" role="tabpanel" aria-labelledby="payment-schedule-trigger">
                                            <div class="row">
                                                <div class="col-12 table-responsive p-0">
                                                    <table class="table table-bordered table-hover text-xs" id="tbPayment_schedule">
                                                        <thead class="bg-primary">
                                                            <tr>
                                                                <th class="text-center">ลำดับที่</th>
                                                                <th class="text-center">กำหนดชำระ</th>
                                                                <th class="text-center">สัดสวนเงินต้น % </th>
                                                                <th class="text-center">เงินต้น</th>
                                                                <th class="text-center">ดอกเบี้ย</th>
                                                                <th class="text-center">ยอดรวมที่ต้องชำระ</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="load-payment-schedule">

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-12 text-center mt-2">
                                                    <p style="color: red;" id="error_payment_schedule"></p>
                                                    <button class="btn btn-default" type="button" onclick="stepper.previous()">
                                                        <i class="fas fa-arrow-left"></i>
                                                        ย้อนกลับ
                                                    </button>
                                                    <button class="btn btn-primary" onclick="checkPayment_schedule()">
                                                        <i class="fas fa-arrow-right"></i>
                                                        ถัดไป
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  ข้อมูลครบกำหนดชำระ -->
                                        <div id="payment-due" class="content" role="tabpanel" aria-labelledby="payment-due-trigger">
                                            <div class="row">
                                                <div class="col-12 table-responsive p-0">
                                                    <table class="table table-bordered table-hover text-xs" id="tbPayment_due">
                                                        <thead class="bg-primary">
                                                            <tr>
                                                                <th class="text-center">ลำดับ</th>
                                                                <th class="text-center">กำหนดชำระ</th>
                                                                <th class="text-center">ยอดรวมที่ต้องชำระ</th>
                                                                <th class="text-center">ดอกเบี้ย</th>
                                                                <th class="text-center">เงินต้น</th>
                                                                <th class="text-center">สถานะ</th>
                                                                <th class="text-center">วันที่ชำระครั้งล่าสุด</th>
                                                                <th class="text-center">ยอดค้างชำระ</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="load-payment-due">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center mt-2">
                                                <p style="color: red;" id="error_payment_due"></p>

                                                <button class="btn btn-default" type="button" onclick="stepper.previous()">
                                                    <i class="fas fa-arrow-left"></i>
                                                    ย้อนกลับ
                                                </button>
                                                <button class="btn btn-primary" onclick="checkPayment_due()">
                                                    <i class="fas fa-arrow-right"></i>
                                                    ถัดไป
                                                </button>
                                            </div>
                                        </div>
                                        <!-- ข้อมูลผู้ค้ำประกัน -->
                                        <div id="guarantor" class="content" role="tabpanel" aria-labelledby="guarantor-trigger">
                                            <div class="row">
                                                <div class="col-sm-8 text-right offset-md-2 pb-2">
                                                    <button type="submit" class="btn btn-primary btn-xs" data-toggle='modal' data-target='#modal-default'>
                                                        <i class="fas fa-plus"></i>
                                                        เพิ่มข้อมูล
                                                    </button>
                                                </div>
                                                <div class="col-sm-8  offset-md-2 table-responsive p-0">

                                                    <table class="table table-bordered table-hover text-xs" id="tbGuarantor">
                                                        <thead class="bg-primary">
                                                            <tr>
                                                                <th class="text-center">ชื่อผู้ค้ำประกัน</th>
                                                                <th class="text-center">ความสัมพันธ์กับผู้กู้</th>
                                                                <th class="text-center">หมายเลขบัตรประจำตัวประชาชน</th>
                                                                <th class="text-center">ภาระค้ำประกัน(%)</th>
                                                                <th class="text-center"> ภาระค้ำประกัน(จำนวนเงิน)</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id='load-guarantor'>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-12 text-center mt-2">
                                                    <button class="btn btn-default" type="button" onclick="stepper.previous()">
                                                        <i class="fas fa-arrow-left"></i>
                                                        ย้อนกลับ
                                                    </button>
                                                    <button class="btn btn-primary" type="button" onclick="checkGuarantor()">
                                                        <i class="fas fa-arrow-right"></i>
                                                        ถัดไป
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="litigation" class="content" role="tabpanel" aria-labelledby="litigation-trigger">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <form id="litigation-form">
                                                        <div id="load-litigation"></div>

                                                    </form>
                                                </div>
                                                <div class="col-12 text-center mt-2">
                                                    <button class="btn btn-default" type="button" onclick="stepper.previous()">
                                                        <i class="fas fa-arrow-left"></i>
                                                        ย้อนกลับ
                                                    </button>
                                                    <button type="button" onclick="checkIitigation()" class="btn btn-primary">บันทึกข้อมูล</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- ข้อมูลผู้ค้ำ -->
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-lg">ข้อมูลผู้ค้ำ</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <form id="guarantor-form">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">คำนำหน้าชื่อ :</label>
                                        <div class="col-sm-6">
                                            <select id="txtprefix" name="txtprefix" class="form-control">
                                                <option value="">เลือก</option>
                                                <option value="นาย">นาย</option>
                                                <option value="นาง">นาง</option>
                                                <option value="นางสาว">นางสาว</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">ชื่อ :</label>
                                        <div class="col-sm-6">
                                            <input type="text" autocomplete="yes" class="form-control" id="txtfname" name="txtfname" placeholder="ชื่อ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">นามสกุล :</label>
                                        <div class="col-sm-6">
                                            <input type="text" autocomplete="yes" class="form-control" id="txtlname" name="txtlname" placeholder="นามสกุล">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">ความสัมพันธ์กับผู้กู้ :</label>
                                        <div class="col-sm-6">
                                            <input type="text" autocomplete="yes" class="form-control" id="txtrelationship" name="txtrelationship" placeholder="ความสัมพันธ์กับผู้กู้">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">หมายเลขบัตรประจำตัวประชาชน :</label>
                                        <div class="col-sm-6">
                                            <input type="text" autocomplete="yes" data-inputmask='"mask": "9999999999999"' data-mask class="form-control" id="txtidcard" name="txtidcard" placeholder="หมายเลขบัตรประจำตัวประชาชน">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">ภาระค้ำประกัน(%) :</label>
                                        <div class="col-sm-6">
                                            <input type="text" autocomplete="yes" class="form-control" id="txtguarantee_percentage" name="txtguarantee_percentage" placeholder="ภาระค้ำประกัน(%)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">ภาระค้ำประกัน(จำนวนเงิน) :</label>
                                        <div class="col-sm-6">
                                            <input type="text" autocomplete="yes" class="form-control" id="txtguarantee_amount" name="txtguarantee_amount" placeholder="ภาระค้ำประกัน(จำนวนเงิน)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">วัน/เดือน/ปี เกิด :</label>
                                        <div class="col-sm-6">
                                            <input type="text" autocomplete="yes" class="form-control datepicker" readOnly id="txtbirthday" name="txtbirthday" placeholder="วัน/เดือน/ปี เกิด">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">เพศ :</label>
                                        <div class="col-sm-6">
                                            <select id="txtgender" name="txtgender" class="form-control">
                                                <option value="">เลือก</option>
                                                <option value="M">ชาย</option>
                                                <option value="F">หญิง</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">สถานะบุคคล :</label>
                                        <div class="col-sm-6">
                                            <input type="text" autocomplete="yes" class="form-control" id="txtstatus_person" name="txtstatus_person" placeholder="สถานะบุคคล">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 table-responsive p-0">
                                <table class="table table-bordered table-hover text-xs" id="tbGuarantor_address">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th class="text-center">ประเภทที่อยู่</th>
                                            <th class="text-center">ที่อยู่</th>
                                            <th class="text-center">รหัสไปรษณีย์</th>
                                            <th class="text-center">เบอร์โทรศัพท์</th>
                                            <th class="text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td><input type="text" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="ประเภทที่อยู่ "></td>
                                        <td><input type="text" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="ที่อยู่ "></td>
                                        <td><input type="text" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="รหัสไปรษณีย์ "></td>
                                        <td><input type="text" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="เบอร์โทรศัพท์ "></td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-primary" onclick="addRowGuarantor()"><i class="fas fa-plus"></i></a>
                                                <a href="#" class="btn btn-danger" onclick="deleteRowGuarantor(this)"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 text-center mt-2">
                                <p style="color: red;" id="error_Guarantor_address"></p>

                                <button class="btn btn-default" data-dismiss="modal">
                                    <i class="fas fa-arrow-left"></i>
                                    ปิด
                                </button>
                                <button class="btn btn-primary" type="button" onclick="addGuarantor()">
                                    <i class="fas fa-arrow-check"></i>
                                    เพิ่มข้อมูล
                                </button>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
        <!-- alert ALL -->
        <div class="modal fade" id="modal-alert">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title">แจ้งเตือน</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="showAlert"></p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger">ตกลง</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../include/script.php") ?>
<script src="../asset/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="../asset/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../asset/plugins/moment/moment.min.js"></script>
<script src="../asset/plugins/inputmask/jquery.inputmask.min.js"></script>
<link href="../asset/datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
<script src="../asset/datepicker/js/bootstrap-datepicker-custom.js"></script>
<script src="../asset/datepicker/locales/bootstrap-datepicker.th.min.js" charset="UTF-8"></script>

<script src="js/formvalid.js"></script>
<script src="js/tbpayment_schedule.js"></script>
<script src="js/tbpayment_due.js"></script>
<script src="js/tbguarantoraddress.js"></script>
<script src="js/formguarantor.js"></script>
<script src="js/formlitigation.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    });
    $('[data-mask]').inputmask();
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        todayBtn: true,
        language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
        thaiyear: true //Set เป็นปี พ.ศ.
    });
    let dataGuarantor = [];


    //loaddataEdit
    data_debtor();
    data_accountdebt();
    data_account_data();
    data_payment_schedule();
    data_payment_due();
    data_guarantor();
    data_litigation();

    function data_debtor() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("load-debt-detail").innerHTML = this.responseText;

            }
        };
        xhttp.open("GET", "../services/edit-debt/debtor.php?id=<?php echo $_GET['id'] ?>", true);
        xhttp.send();
    }

    function data_accountdebt() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("load-account-detailForm").innerHTML = this.responseText;
                $('.datepicker').datepicker({
                    format: 'dd/mm/yyyy',
                    todayBtn: true,
                    language: 'th',
                    thaiyear: true
                });
            }
        };
        xhttp.open("GET", "../services/edit-debt/account_debt.php?id=<?php echo $_GET['id'] ?>", true);
        xhttp.send();
    }

    function data_account_data() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("load-account-data").innerHTML = this.responseText;
                $('.datepicker').datepicker({
                    format: 'dd/mm/yyyy',
                    todayBtn: true,
                    language: 'th',
                    thaiyear: true
                });
            }
        };
        xhttp.open("GET", "../services/edit-debt/account_data.php?id=<?php echo $_GET['id'] ?>", true);
        xhttp.send();
    }

    function data_payment_schedule() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("load-payment-schedule").innerHTML = this.responseText;
                $('.datepicker').datepicker({
                    format: 'dd/mm/yyyy',
                    todayBtn: true,
                    language: 'th',
                    thaiyear: true
                });
            }
        };
        xhttp.open("GET", "../services/edit-debt/payment_schedule.php?id=<?php echo $_GET['id'] ?>", true);
        xhttp.send();
    }

    function data_payment_due() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("load-payment-due").innerHTML = this.responseText;
                $('.datepicker').datepicker({
                    format: 'dd/mm/yyyy',
                    todayBtn: true,
                    language: 'th',
                    thaiyear: true
                });
            }
        };
        xhttp.open("GET", "../services/edit-debt/payment_due.php?id=<?php echo $_GET['id'] ?>", true);
        xhttp.send();
    }

    function data_guarantor() {
        $.ajax({
            url: "../services/edit-debt/guarantor.php?id=<?php echo $_GET['id'] ?>",
            type: "POST",
            success: function(Res) {
                console.log(Res);
                 dataGuarantor=Res;
                $('#tbGuarantor tbody').html('')
                $.each(Res, function(index, data) {
                    $('#tbGuarantor tbody').append(` <tr data-index="${index}">
                        <td class="text-center">${data.prefix}${data.fname}${data.lname}</td>
                        <td class="text-center">${data.relationship}</td>
                        <td class="text-center">${data.idcard}</td>
                        <td class="text-center">${data.guarantee_percentage}</td>
                        <td class="text-center">${data.guarantee_amount}</td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-danger" onclick="deleteRowDataGuarantor(this)"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                </tr>`)
                });

            },

        });


    }

    function data_litigation() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("load-litigation").innerHTML = this.responseText;
                $('.datepicker').datepicker({
                    format: 'dd/mm/yyyy',
                    todayBtn: true,
                    language: 'th',
                    thaiyear: true
                });
            }
        };
        xhttp.open("GET", "../services/edit-debt/litigation.php?id=<?php echo $_GET['id'] ?>", true);
        xhttp.send();
    }


    function checkDebtdetail() {
        if ($('#debt-detailForm').valid()) {
            stepper.next()
        }
    }

    function checkAccountdetail() {
        if ($('#account-detailForm').valid()) {
            stepper.next()
        }
    }

    function checkAccountdata() {
        if ($('#account-dataForm').valid()) {
            stepper.next()
        }
    }



    function checkPayment_schedule() {
        var isValid = true;

        $('#tbPayment_schedule tbody tr').each(function() {
            var inputs = $(this).find('input');
            inputs.each(function() {
                if ($(this).val() === '') {
                    isValid = false;
                    return false;
                }
            });

            if (!isValid) {
                return false;
            }
        });

        if (isValid) {
            $('#error_payment_schedule').text('')
            stepper.next()
        } else {
            $('#error_payment_schedule').text('*** กรุณากรอกข้อมูลให้ครบทุกแถว ***')
        }
    }

    function checkPayment_due() {
        var isValid = true;

        $('#tbPayment_due tbody tr').each(function() {
            var inputs = $(this).find('input');


            inputs.each(function(index) {
                if (index === 5) {
                    return true;
                }

                if ($(this).val() === '') {
                    isValid = false;
                    return false;
                }
            });

            if (!isValid) {
                return false;
            }
        });

        if (isValid) {
            $('#error_payment_due').text('')
            stepper.next()
        } else {
            $('#error_payment_due').text('*** กรุณากรอกข้อมูลให้ครบทุกแถว ***')
        }


    }


    function checkGuarantor() {
        var rowCount = $('#tbGuarantor tbody tr').length;

        if (rowCount <= 0) {
            alert("โปรดเพิ่มข้อมูลผู้ค้ำประกันอย่างน้อย 1 คนค่ะ")
        } else {
            stepper.next();
        }
    }



    function addGuarantor() {

        if ($('#guarantor-form').valid()) {
            var isValid = true;

            $('#tbGuarantor_address tbody tr').each(function() {
                var inputs = $(this).find('input');
                inputs.each(function() {
                    if ($(this).val() === '') {
                        isValid = false;
                        return false;
                    }
                });

                if (!isValid) {
                    return false;
                }
            });

            if (isValid) {
                guarantor();

            } else {
                $('#error_Guarantor_address').text('*** กรุณากรอกข้อมูลให้ครบทุกแถว ***')
            }

        }
    }

    function checkIitigation() {
        if ($('#litigation-form').valid()) {





            $.ajax({
                async: true,
                url: "../services/edit-debt/data.php?v=editdebt&id=<?php echo $_GET['id'] ?>",
                type: "POST",
                cache: false,
                data: $('#debt-detailForm').serialize(),
                success: function(Res) {
                    // console.log(Res)
                    if (Res.id > 0) {
                        var account_type = $('#debt-detailForm [name="txttype_account"]').val()
                        var no_account = $('#debt-detailForm [name="txtno_account"]').val()
                        $.ajax({
                            async: true,
                            url: "../services/edit-debt/data.php?v=editaccount_debt&id=" + Res.id + "&account_type=" + account_type + "&no_account=" + no_account,
                            type: "POST",
                            cache: false,
                            data: $('#account-detailForm').serialize(),
                            success: function(Res) {

                                if (Res.id > 0) {
                                    $.ajax({
                                        async: true,
                                        url: "../services/edit-debt/data.php?v=editaccount_data&id=" + Res.id,
                                        type: "POST",
                                        cache: false,
                                        data: $('#account-dataForm').serialize(),
                                        success: function(Res) {
                                            //console.log(Res)
                                            if (Res.id > 0) {

                                                let tbPayment_schedule = [];
                                                $('#tbPayment_schedule tbody tr').each(function() {
                                                    var due_date = $(this).find('td:eq(1) input[type="text"]').val();
                                                    var principal_percentage = $(this).find('td:eq(2) input[type="text"]').val();
                                                    var principal_amount = $(this).find('td:eq(3) input[type="text"]').val();
                                                    var interest_amount = $(this).find('td:eq(4) input[type="text"]').val();
                                                    tbPayment_schedule.push({
                                                        'due_date': due_date,
                                                        'principal_percentage': principal_percentage,
                                                        'principal_amount': principal_amount,
                                                        'interest_amount': interest_amount,
                                                    });
                                                });


                                                $.ajax({
                                                    async: true,
                                                    url: "../services/edit-debt/data.php?v=editpayment_schedule&id=" + Res.id,
                                                    type: "POST",
                                                    cache: false,
                                                    data: {
                                                        payment_schedule: JSON.stringify(tbPayment_schedule)
                                                    },
                                                    success: function(Res) {
                                                        //console.log(Res)
                                                        if (Res.id > 0) {
                                                            //เริ่ม
                                                            let tbPayment_due = [];
                                                            $('#tbPayment_due tbody tr').each(function() {
                                                                var due_date = $(this).find('td:eq(1) input[type="text"]').val();
                                                                var total_payment_due = $(this).find('td:eq(2) input[type="text"]').val();
                                                                var interest_amount = $(this).find('td:eq(3) input[type="text"]').val();
                                                                var principal_amount = $(this).find('td:eq(4) input[type="text"]').val();
                                                                var status = $(this).find('td:eq(5) input[type="text"]').val();
                                                                var last_payment_date = $(this).find('td:eq(6) input[type="text"]').val();
                                                                var overdue_amount = $(this).find('td:eq(7) input[type="text"]').val();

                                                                tbPayment_due.push({
                                                                    'due_date': due_date,
                                                                    'total_payment_due': total_payment_due,
                                                                    'interest_amount': interest_amount,
                                                                    'principal_amount': principal_amount,
                                                                    'status': status,
                                                                    'last_payment_date': last_payment_date,
                                                                    'overdue_amount': overdue_amount
                                                                });
                                                            });
                                                            $.ajax({
                                                                async: true,
                                                                url: "../services/edit-debt/data.php?v=editpayment_due&id=" + Res.id,
                                                                type: "POST",
                                                                cache: false,
                                                                data: {
                                                                    payment_due: JSON.stringify(tbPayment_due)
                                                                },
                                                                success: function(Res) {
                                                                    if (Res.id > 0) {
                                                                       $.ajax({
                                                                            async: true,
                                                                            url: "../services/edit-debt/data.php?v=editguarantor&id=" + Res.id,
                                                                            type: "POST",
                                                                            cache: false,
                                                                            data: {
                                                                                dataGuarantor: JSON.stringify(dataGuarantor)
                                                                            },
                                                                            success: function(Res) {
                                                                                console.log(Res)
                                                                                if (Res.id > 0) {

                                                                                    $.ajax({
                                                                                        async: true,
                                                                                        url: "../services/edit-debt/data.php?v=editlitigation&id=" + Res.id,
                                                                                        type: "POST",
                                                                                        cache: false,
                                                                                        data: $('#litigation-form').serialize(),
                                                                                        success: function(Res) {
                                                                                            console.log(Res)
                                                                                            if (Res.id > 0) {
                                                                                                // $('#showAlert').text('บันทึกข้อมูลแล้วค่ะ')
                                                                                                // $('#modal-alert').modal('show');
                                                                                                // setTimeout(function() {
                                                                                                //     window.location.replace('../debt-account/');
                                                                                                // }, 5000);
                                                                                            }
                                                                                        }
                                                                                    });
                                                                                }

                                                                            }
                                                                        });

                                                                    }
                                                                }
                                                            });


                                                        }
                                                    }
                                                });
                                            }

                                        }
                                    });

                                }
                            }
                        });

                    }
                }
            });
        }



    }

    $.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^[0-9-]+$/.test(value);
    }, "โปรดกรอกข้อมูลที่มีเฉพาะตัวเลขและตัวอักษร (a-z)");
</script>
</body>

</html>