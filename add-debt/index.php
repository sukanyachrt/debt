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
                            <a href="../debt-account" class="text-gray">
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
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title text-primary">เพิ่มข้อมูลลูกหนี้</h3>
                            </div>
                            <div class="card-body p-0">
                                <div class="bs-stepper">
                                    <div class="bs-stepper-header" role="tablist">
                                        <!-- your steps here -->
                                        <div class="step" data-target="#debt-detail">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="debt-detail" id="debt-detail-trigger">
                                                <span class="bs-stepper-circle">1</span>
                                                <span class="bs-stepper-label">รายละเอียดลูกหนี้</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#account-detail">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="account-detail" id="account-detail-trigger">
                                                <span class="bs-stepper-circle">2</span>
                                                <span class="bs-stepper-label">รายละเอียดบัญชี</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#account-data">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="account-data" id="account-data-trigger">
                                                <span class="bs-stepper-circle">3</span>
                                                <span class="bs-stepper-label">ข้อมูลบัญชี</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#payment-schedule">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="payment-schedule" id="payment-schedule-trigger">
                                                <span class="bs-stepper-circle">4</span>
                                                <span class="bs-stepper-label">ตารางผ่อนชำระ</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#payment-due">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="payment-due" id="payment-due-trigger">
                                                <span class="bs-stepper-circle">5</span>
                                                <span class="bs-stepper-label">ข้อมูลครบกำหนดชำระ</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#guarantor">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="guarantor" id="guarantor-trigger">
                                                <span class="bs-stepper-circle">6</span>
                                                <span class="bs-stepper-label">ข้อมูลผู้ค้ำประกัน</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#litigation">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="litigation" id="litigation-trigger">
                                                <span class="bs-stepper-circle">7</span>
                                                <span class="bs-stepper-label">การดำเนินคดี</span>
                                            </button>
                                        </div>

                                    </div>
                                    <div class="bs-stepper-content">
                                        <!-- รายละเอียดลูกหนี้ -->
                                        <div id="debt-detail" class="content" role="tabpanel" aria-labelledby="debt-detail-trigger">
                                            <div class="row">
                                                <div class="col-sm-8 offset-md-2">
                                                    <form class="form-horizontal">
                                                        <div class="card-body">
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">เลขประจำตัวประชาชน :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtidcard" placeholder="เลขประจำตัวประชาชน">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">คำนำหน้าชื่อ :</label>
                                                                <div class="col-sm-4">
                                                                    <select class="form-control" id="txtprefix" placeholder="คำนำหน้าชื่อ">
                                                                        <option value="นาย">นาย</option>
                                                                        <option value="นาง">นาง</option>
                                                                        <option value="นางสาว">นางสาว</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ชื่อ :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtfname" placeholder="ชื่อ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">นามสกุล :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="นามสกุล">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">เลขที่บัญชีเงินกู้ :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtnoaccount" placeholder="เลขที่บัญชีเงินกู้ ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">สถานะของบัญชีเงินกู้ :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="สถานะของบัญชีเงินกู้ ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">สถานภาพบุคคล :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="สถานภาพบุคคล ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ประเภทบัญชีเงินกู้ :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ประเภทบัญชีเงินกู้ ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">เบอร์โทรศัพท์ลูกหนี้ :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="เบอร์โทรศัพท์ลูกหนี้  ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                                <div class="col-12 text-center mt-2">
                                                    <button class="btn btn-primary" onclick="stepper.next()">
                                                        <i class="fas fa-arrow-right"></i>
                                                        ถัดไป
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- รายละเอียดบัญชี -->
                                        <div id="account-detail" class="content" role="tabpanel" aria-labelledby="account-detail-trigger">
                                            <div class="row">
                                                <div class="col-sm-8 offset-md-2">
                                                    <form class="form-horizontal">
                                                        <div class="card-body">
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ดูแลบัญชีโดย :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtfname" placeholder="ดูแลบัญชีโดย">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">กลุ่มผู้กู้ยืม :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="กลุ่มผู้กู้ยืม">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">สถานะบัญชีเงินกู้ :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtnoaccount" placeholder="สถานะบัญชีเงินกู้ ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">วันที่เปลี่ยนแปลงสถานะทางบัญชี :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="วันที่เปลี่ยนแปลงสถานะทางบัญชี ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">การขอผ่อนผัน :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="การขอผ่อนผัน ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">การขอระงับเรียกให้ชำระหนี้ :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="การขอระงับเรียกให้ชำระหนี้ ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">วันที่ขอระงับเรียกให้ชำระหนี้สิ้นสุด :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="วันที่ขอระงับเรียกให้ชำระหนี้สิ้นสุด  ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-12 text-center mt-2">
                                                    <button class="btn btn-default" onclick="stepper.previous()">
                                                        <i class="fas fa-arrow-left"></i>
                                                        ย้อนกลับ
                                                    </button>
                                                    <button class="btn btn-primary" onclick="stepper.next()">
                                                        <i class="fas fa-arrow-right"></i>
                                                        ถัดไป
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- ข้อมูลบัญชี  -->
                                        <div id="account-data" class="content" role="tabpanel" aria-labelledby="account-data-trigger">
                                            <div class="row">
                                                <div class="col-sm-8 offset-md-2">
                                                    <form class="form-horizontal">
                                                        <div class="card-body">
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">วันที่สิ้นสุดสัญญา :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtfname" placeholder="วันที่สิ้นสุดสัญญา	">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ยอดหนี้เงินกู้ทั้งสิ้น :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ยอดหนี้เงินกู้ทั้งสิ้น">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">สถานะบัญชีเงินกู้ :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtnoaccount" placeholder="สถานะบัญชีเงินกู้  ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">วันครบกำหนดชำระหนี้ครั้งแรก :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="วันครบกำหนดชำระหนี้ครั้งแรก ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">วันที่ครบกำหนดชำระครั้งสุดท้าย :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="วันที่ครบกำหนดชำระครั้งสุดท้าย ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">วันที่คำนวณดอกเบี้ยครั้งแรก :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="วันที่คำนวณดอกเบี้ยครั้งแรก ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ประเภทการชำระ (Payment Model) :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ประเภทการชำระ (Payment Model)  ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ประเภทการคำนวณเบี้ยปรับ (Pernalty Model) :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ประเภทการคำนวณเบี้ยปรับ (Pernalty Model)  ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">อัตราเบี้ยปรับ :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="อัตราเบี้ยปรับ ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ส่วนต่างระหว่างอัตราเบี้ยปรับ :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ส่วนต่างระหว่างอัตราเบี้ยปรับ ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ผลรวม :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ผลรวม ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ประเภทการคำนวณดอกเบี้ย (Interest Model) :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ประเภทการคำนวณดอกเบี้ย (Interest Model) ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">อัตราดอกเบี้ย :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="อัตราดอกเบี้ย">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ส่วนต่างระหว่างอัตราดอกเบี้ย :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ส่วนต่างระหว่างอัตราดอกเบี้ย">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ผลรวม :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ผลรวม">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ความถี่ในการชำระ :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ความถี่ในการชำระ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ยอดหนี้เงินกู้คงเหลือ (บาท) :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ยอดหนี้เงินกู้คงเหลือ (บาท)">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ยอดเงินงวดค้างชำระ (บาท) :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ยอดเงินงวดค้างชำระ (บาท)">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ยอดเงินต้นค้างชำระ (บาท) :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ยอดเงินต้นค้างชำระ (บาท)">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">จำนวนครั้งที่ค้างชำระ:</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="จำนวนครั้งที่ค้างชำระ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ดอกเบี้ย (บาท) :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ดอกเบี้ย (บาท)	">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">ยอดดอกเบี้ยปิดบัญชี (บาท):</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ยอดดอกเบี้ยปิดบัญชี (บาท)	">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">เบี้ยปรับ (บาท) :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="เบี้ยปรับ (บาท)">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label text-right">เบี้ยปรับค้างรับก่อนปรับโครงสร้างหนี้ (บาท) :</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="เบี้ยปรับค้างรับก่อนปรับโครงสร้างหนี้ (บาท)">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                                <div class="col-12 text-center mt-2">
                                                    <button class="btn btn-default" onclick="stepper.previous()">
                                                        <i class="fas fa-arrow-left"></i>
                                                        ย้อนกลับ
                                                    </button>
                                                    <button class="btn btn-primary" onclick="stepper.next()">
                                                        <i class="fas fa-arrow-right"></i>
                                                        ถัดไป
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- ตารางการผ่อนชำระ -->
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
                                                                <th class="text-center">ดอกเบีย</th>
                                                                <th class="text-center">ยอดรวมที่ต้องชำระ</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="กำหนดชำระ">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="สัดสวนเงินต้น %">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="เงินต้น">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ดอกเบีย">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ยอดรวมที่ต้องชำระ">
                                                                </td>
                                                                <td class="text-right py-0 align-middle">
                                                                    <div class="btn-group btn-group-sm">
                                                                        <a href="#" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center mt-2">
                                                <button class="btn btn-default" onclick="stepper.previous()">
                                                    <i class="fas fa-arrow-left"></i>
                                                    ย้อนกลับ
                                                </button>
                                                <button class="btn btn-primary" onclick="stepper.next()">
                                                    <i class="fas fa-arrow-right"></i>
                                                    ถัดไป
                                                </button>
                                            </div>
                                        </div>
                                        <!--  ข้อมูลครบกำหนดชำระ -->
                                        <div id="payment-due" class="content" role="tabpanel" aria-labelledby="payment-due-trigger">
                                            <div class="row">
                                                <div class="col-12 table-responsive p-0">
                                                    <table class="table table-bordered table-hover text-xs" id="tbPayment_schedule">
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
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="กำหนดชำระ">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ยอดรวมที่ต้องชำระ">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ดอกเบี้ย">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="เงินต้น">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="สถานะ">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="วันที่ชำระครั้งล่าสุด">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" id="txtlname" placeholder="ยอดค้างชำระ">
                                                                </td>
                                                                <td class="text-right py-0 align-middle">
                                                                    <div class="btn-group btn-group-sm">
                                                                        <a href="#" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center mt-2">
                                                <button class="btn btn-default" onclick="stepper.previous()">
                                                    <i class="fas fa-arrow-left"></i>
                                                    ย้อนกลับ
                                                </button>
                                                <button class="btn btn-primary" onclick="stepper.next()">
                                                    <i class="fas fa-arrow-right"></i>
                                                    ถัดไป
                                                </button>
                                            </div>
                                        </div>
                                        <!-- ข้อมูลผู้ค้ำประกัน -->
                                        <div id="guarantor" class="content" role="tabpanel" aria-labelledby="guarantor-trigger">
                                            <div class="form-group">
                                                ข้อมูลผู้ค้ำประกัน
                                            </div>
                                            <button class="btn btn-default" onclick="stepper.previous()">
                                                <i class="fas fa-arrow-left"></i>
                                                ย้อนกลับ
                                            </button>
                                            <button class="btn btn-primary" onclick="stepper.next()">
                                                <i class="fas fa-arrow-right"></i>
                                                ถัดไป
                                            </button>
                                        </div>
                                        <!-- การดำเนินคดี -->
                                        <div id="litigation" class="content" role="tabpanel" aria-labelledby="litigation-trigger">
                                            <div class="form-group">
                                                การดำเนินคดี
                                            </div>
                                            <button class="btn btn-default" onclick="stepper.previous()">
                                                <i class="fas fa-arrow-left"></i>
                                                ย้อนกลับ
                                            </button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php include("../include/script.php") ?>
<script src="../asset/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })
</script>