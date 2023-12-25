<?php include('../include/header.php') ?>
<?php
include('../services/Connect_Data.php');
$connect = new Connect_Data();
$connect->connectData();
$id = $_GET['id'];
?>
<div class="wrapper">
    <?php include("../include/topmenu.php") ?>
    <div class="content-wrapper">
        <?php include("../include/navmenu.php") ?>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h6>
                            <a href="../debt-account" class="text-gray">
                                <i class="fas fa-arrow-left pr-1"></i>
                                กลับ
                            </a>
                        </h6>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">ตรวจสอบข้อมูลลูกหนี้</a></li>

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
                                    รายละเอียดลูกหนี้
                                </h5>
                                <div class="card-tools">
                                    <a type="button" class="badge bg-warning p-2" href="../edit-debt/?id=<?php echo $_GET['id'] ?>">
                                        <i class="fas fa-edit"></i>
                                        แก้ไขข้อมูล
                                    </a>
                                    <a type="button" class="badge bg-danger p-2" onclick="confirmDel('<?php echo $_GET['id'] ?>')">
                                        <i class="fas fa-trash"></i>
                                        ลบ
                                    </a>

                                </div>
                            </div>
                            <div class="card-body">

                                <div class="row text-sm" id="dataDebt_detail">
                                    <!-- ข้อมูลรายละเอียดลุกหนี้ -->
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card card-primary card-outline card-tabs">
                                            <div class="card-header p-0 border-bottom-0">
                                                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="custom-tabs-three-account-tab" data-toggle="pill" href="#custom-tabs-three-account" role="tab" aria-controls="custom-tabs-three-account" aria-selected="true">รายละเอียดบัญชี</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="custom-tabs-three-statement-tab" data-toggle="pill" href="#custom-tabs-three-statement" role="tab" aria-controls="custom-tabs-three-statement" aria-selected="false">ตารางผ่อนชำระ</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="custom-tabs-three-paymentdue-tab" data-toggle="pill" href="#custom-tabs-three-paymentdue" role="tab" aria-controls="custom-tabs-three-paymentdue" aria-selected="false">ข้อมูลครบกำหนดชำระ</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="custom-tabs-three-guarantor-tab" data-toggle="pill" href="#custom-tabs-three-guarantor" role="tab" aria-controls="custom-tabs-three-guarantor" aria-selected="false">ข้อมูลผู้คํ้าประกัน</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="custom-tabs-three-litigate-tab" data-toggle="pill" href="#custom-tabs-three-litigate" role="tab" aria-controls="custom-tabs-three-litigate" aria-selected="false">การดำเนินคดี</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content" id="custom-tabs-three-tabContent">
                                                    <div class="tab-pane fade show active" id="custom-tabs-three-account" role="tabpanel" aria-labelledby="custom-tabs-three-account-tab">
                                                        <div class="row text-sm" id="dataAcoount_detail">

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5 class="card-title text-primary text-md">
                                                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                                <i class="fas fa-minus text-primary"></i>
                                                                            </button>
                                                                            ข้อมูลบัญชี
                                                                        </h5>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div id="dataAccount">
                                                                            <!-- ข้อมูลบัญชี -->
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="custom-tabs-three-statement" role="tabpanel" aria-labelledby="custom-tabs-three-statement-tab">
                                                        <div class="row text-sm">
                                                            <div class="col-md-3 text-right col-6 pb-0 m-0">
                                                                <div class="form-group">
                                                                    <label for="txtidcard" class="text-gray">ยอดหนี้เงินกู้</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-6 pb-0 m-0">
                                                                <div class="form-group">
                                                                    <span id="txtSumPayment_schedule"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 text-right col-6 pb-0 m-0">
                                                                <div class="form-group">
                                                                    <p for="txtidcard" class="text-gray">ใช้ในการคำนวณค่างวด</p>
                                                                    <p for="txtidcard" class="text-gray pt-0">(สามารถเปลี่ยนแปลงค่าได้)</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-6 pb-0 m-0">
                                                                <div class="form-group">
                                                                    <span id="txtSumPayment_schedule_2">55,310.91</span>
                                                                </div>
                                                            </div>


                                                        </div>
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

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div class="tab-pane fade" id="custom-tabs-three-paymentdue" role="tabpanel" aria-labelledby="custom-tabs-three-paymentdue-tab">
                                                        <div class="row">
                                                            <div class="col-12 table-responsive p-0">
                                                                <table class="table table-bordered table-hover text-xs" id="tbPayment_due">
                                                                    <thead class="bg-primary">
                                                                        <tr>
                                                                            <th class="text-center">ลำดับที่</th>
                                                                            <th class="text-center">กำหนดชำระ</th>
                                                                            <th class="text-center">ยอดรวมที่ต้องชำระ</th>
                                                                            <th class="text-center">ดอกเบี้ย</th>
                                                                            <th class="text-center">เงินต้น</th>
                                                                            <th class="text-center">สถานะ</th>
                                                                            <th class="text-center">วันที่ชำระครั้งล่าสุด</th>
                                                                            <th class="text-center">ยอดค้างชำระ</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="custom-tabs-three-guarantor" role="tabpanel" aria-labelledby="custom-tabs-three-guarantor-tab">
                                                        <div class="row">
                                                            <div class="col-12 table-responsive p-0">
                                                                <table class="table table-bordered table-hover text-xs" id="tbgGuarantor">
                                                                    <thead class="bg-primary">
                                                                        <tr>
                                                                            <th class="text-center">ชื่อผู้ค้ำประกัน</th>
                                                                            <th class="text-center">ความสัมพันธ์กับผู้กู้</th>
                                                                            <th class="text-center">หมายเลขบัตรประจำตัวประชาชน</th>
                                                                            <th class="text-center">ภาระค้ำประกัน(%)</th>
                                                                            <th class="text-center">ภาระค้ำประกัน(จำนวนเงิน)</th>
                                                                            <th class="text-center">ดูรายละเอียด</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="custom-tabs-three-litigate" role="tabpanel" aria-labelledby="custom-tabs-three-litigate-tab">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5 class="card-title text-primary text-md">
                                                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                                <i class="fas fa-minus text-primary"></i>
                                                                            </button>
                                                                            งานดำเนินคดี
                                                                        </h5>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="row text-sm" id="datalitigation">

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
                                </div>
                                <div class="col-12 text-center mt-2">
                                    <a href="../debt-account">
                                        <button type="button" class="btn btn-default text-gray"> <i class="fas fa-arrow-left pr-1"></i> กลับ </button>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
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
                        <div id="dataGuarantor">

                        </div>
                        <div class="row">
                            <div class="col-12 table-responsive p-0">
                                <table class="table table-bordered table-hover text-xs" id="tbGuarantor_address">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th class="text-center">ประเภทที่อยู่</th>
                                            <th class="text-center">ที่อยู่</th>
                                            <th class="text-center">รหัสไปรษณีย์</th>
                                            <th class="text-center">เบอร์โทรศัพท์</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-end">

                        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fas fa-arrow-left pr-1"></i>กลับ</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- ลบข้อมูล -->
        <div class="modal fade" id="modal-confirmDel">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title">ยืนยันการลบข้อมูล</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>ยืนยันการลบ?</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" id="delId" onclick="del()" class="btn btn-danger">ยืนยัน</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include("../include/script.php") ?>
<script>
    dataDebt_detail();
    dataAcoount_detail();
    dataAccount();
    dataPayment_schedule();
    dataPayment_due();
    dataGuarantor();
    dataLitigation();



    function dataDebt_detail() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("dataDebt_detail").innerHTML = this.responseText;

            }
        };
        xhttp.open("GET", "../services/debt-account/debtor_detail.php?id=<?php echo $id ?>", true);
        xhttp.send();
    }


    function dataAcoount_detail() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("dataAcoount_detail").innerHTML = this.responseText;

            }
        };
        xhttp.open("GET", "../services/debt-account/account_detail.php?id=<?php echo $id ?>", true);
        xhttp.send();
    }

    function dataAccount() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText)
                document.getElementById("dataAccount").innerHTML = this.responseText;

            }
        };

        xhttp.open("GET", "../services/debt-account/account.php?id=<?php echo $id ?>", true);
        xhttp.send();
    }


    function dataPayment_schedule() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tbPayment_schedule").getElementsByTagName("tbody")[0].innerHTML = this.responseText;
                calculateSum();
            }
        };
        xhttp.open("GET", "../services/debt-account/payment_schedule.php?id=<?php echo $id ?>", true);
        xhttp.send();
    }


    function dataPayment_due() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tbPayment_due").getElementsByTagName("tbody")[0].innerHTML = this.responseText;

            }
        };
        xhttp.open("GET", "../services/debt-account/payment_due.php?id=<?php echo $id ?>", true);
        xhttp.send();
    }

    function dataGuarantor() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tbgGuarantor").getElementsByTagName("tbody")[0].innerHTML = this.responseText;

            }
        };
        xhttp.open("GET", "../services/debt-account/guarantor.php?v=table&id=<?php echo $id ?>", true);
        xhttp.send();
    }

    function modalAddress(objId) {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText)
                document.getElementById("dataGuarantor").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "../services/debt-account/guarantor.php?v=div&id=" + objId, true);
        xhttp.send();

        var xhttp_ = new XMLHttpRequest();
        xhttp_.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText)
                document.getElementById("tbGuarantor_address").getElementsByTagName("tbody")[0].innerHTML = this.responseText;
            }
        };
        xhttp_.open("GET", "../services/debt-account/guarantor_address.php?id=" + objId, true);
        xhttp_.send();

    }

    function dataLitigation() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("datalitigation").innerHTML = this.responseText;

            }
        };
        xhttp.open("GET", "../services/debt-account/litigation.php?id=<?php echo $id ?>", true);
        xhttp.send();
    }

    function calculateSum() {
        var tbody = document.getElementById("tbPayment_schedule").getElementsByTagName("tbody")[0];
        var columnIndex = 3;
        var data = tbody.rows.length;
        var cell = tbody.rows[data - 1].cells[columnIndex]
        document.getElementById("txtSumPayment_schedule").innerHTML = cell.innerHTML;
        document.getElementById("txtSumPayment_schedule_2").innerHTML = cell.innerHTML;
    }

    function confirmDel(id) {
        $('#delId').val(id)
        $('#modal-confirmDel').modal('show');
       
    }
    function del() {
        var id = $('#delId').val();
         $.ajax({
            url: "../services/debt-account/data.php?v=updateStatus_debt&id=" + id,
            type: "GET",
            success: function(Res) {
                $('#modal-confirmDel').modal('hide');
                window.location.replace('../debt-account/');
            }
        });

       
    }
</script>
</body>

</html>