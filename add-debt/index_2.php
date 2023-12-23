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
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title text-primary text-md">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus text-primary"></i>
                                    </button>
                                    เพิ่มข้อมูลลูกหนี้
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
                                                <div class="row">

                                                    <div class="col-sm-8">

                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">เลขประจำตัวประชาชน :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtidcard" name="txtidcard" placeholder="เลขประจำตัวประชาชน">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">คำนำหน้าชื่อ :</label>
                                                            <div class="col-sm-7">
                                                                <select id="txtprefix" name="txtprefix" class="form-control">
                                                                    <option value="">เลือก</option>
                                                                    <option value="นาย">นาย</option>
                                                                    <option value="นาง">นาง</option>
                                                                    <option value="นางสาว">นางสาว</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">ชื่อ :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtfname" name="txtfname" placeholder="ชื่อ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">นามสกุล :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtlname" name="txtlname" placeholder="นามสกุล">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">เลขที่บัญชีเงินกู้ :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtno_account" name="txtno_account" placeholder="เลขที่บัญชีเงินกู้">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">สถานะของบัญชีเงินกู้ :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtstatus_account" name="txtstatus_account" placeholder="สถานะของบัญชีเงินกู้">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">สถานภาพบุคคล :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtstatus_personal" name="txtstatus_personal" placeholder="สถานภาพบุคคล">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">ประเภทบัญชีเงินกู้ :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txttype_account" name="txttype_account" placeholder="ประเภทบัญชีเงินกู้">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-start">เบอร์โทรศัพท์ลูกหนี้ :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txttelephone" name="txttelephone" placeholder="เบอร์โทรศัพท์ลูกหนี้">
                                                            </div>
                                                        </div>



                                                    </div>
                                                    <div class="col-12 text-center mt-2">
                                                        <button class="btn btn-primary" type="button" onclick="checkDebtdetail()">
                                                            <i class="fas fa-arrow-right"></i>
                                                            ถัดไป
                                                        </button>
                                                    </div>


                                                </div>
                                            </form>
                                        </div>
                                        <!-- รายละเอียดบัญชี -->
                                        <div id="account-detail" class="content" role="tabpanel" aria-labelledby="account-detail-trigger">
                                            <form id="account-detailForm">
                                                <div class="row">
                                                    <div class="col-sm-8">

                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ดูแลบัญชีโดย :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtaccount_manager" name="txtaccount_manager" placeholder="ดูแลบัญชีโดย">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">กลุ่มผู้กู้ยืม :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtloan_group" name="txtloan_group" placeholder="กลุ่มผู้กู้ยืม">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">สถานะบัญชีเงินกู้ :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtloan_account_status" name="txtloan_account_status" placeholder="สถานะบัญชีเงินกู้">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">วันที่เปลี่ยนแปลงสถานะทางบัญชี :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtstatus_change_date" name="txtstatus_change_date" placeholder="วันที่เปลี่ยนแปลงสถานะทางบัญชี">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">การขอผ่อนผัน :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtrequest_deferral" name="txtrequest_deferral" placeholder="การขอผ่อนผัน">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">การขอระงับเรียกให้ชำระหนี้ :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtrequest_suspend" name="txtrequest_suspend" placeholder="การขอระงับเรียกให้ชำระหนี้">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">วันที่ขอระงับเรียกให้ชำระหนี้สิ้นสุด :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtdate_suspend" name="txtdate_suspend" placeholder="วันที่ขอระงับเรียกให้ชำระหนี้สิ้นสุด">
                                                            </div>
                                                        </div>




                                                    </div>
                                                    <div class="col-12 text-center mt-2">
                                                        <button class="btn btn-default" onclick="stepper.previous()">
                                                            <i class="fas fa-arrow-left"></i>
                                                            ย้อนกลับ
                                                        </button>
                                                        <button class="btn btn-primary" type="button" onclick="checkAccountdetail()">
                                                            <i class="fas fa-arrow-right"></i>
                                                            ถัดไป
                                                        </button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                        <!-- ข้อมูลบัญชี -->
                                        <div id="account-data" class="content" role="tabpanel" aria-labelledby="account-data-trigger">
                                            <form id="account-dataForm">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">วันที่สิ้นสุดสัญญา :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtdate_contract" name="txtdate_contract" placeholder="วันที่สิ้นสุดสัญญา ">
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
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtdatecal_interest" name="txtdatecal_interest" placeholder="วันที่คำนวณดอกเบี้ยครั้งแรก">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ประเภทการชำระ (Payment Model) :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtpayment_model" name="txtpayment_model" placeholder="ประเภทการชำระ (Payment Model)">
                                                            </div>
                                                        </div>

                                                        <!--  -->
                                                        <div class="form-group row">
                                                            <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ประเภทการคำนวณเบี้ยปรับ (Pernalty Model) :</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtpernalty_model" name="txtpernalty_model" placeholder="ประเภทการคำนวณเบี้ยปรับ (Pernalty Model)">
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
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtinterest_rate" name="txtinterest_rate" placeholder="อัตราดอกเบี้ย">
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
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtinterest_total" name="txtinterest_total" placeholder="ผลรวม">
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
                                                                <input type="text" autocomplete="yes" class="form-control" id="txtoverdue_installment_amount" name="txtoverdue_installment_amount" placeholder="ยอดเงินงวดค้างชำระ (บาท)">
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
                                                        <button class="btn btn-primary" type="button" onclick="checkAccountdata()">
                                                            <i class="fas fa-arrow-right"></i>
                                                            ถัดไป
                                                        </button>
                                                    </div>
                                                </div>
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
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="กำหนดชำระ">
                                                                </td>
                                                                <td>
                                                                    <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="สัดสวนเงินต้น %">
                                                                </td>
                                                                <td>
                                                                    <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="เงินต้น">
                                                                </td>
                                                                <td>
                                                                    <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="ดอกเบี้ย">
                                                                </td>
                                                                <td>
                                                                    <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="ยอดรวมที่ต้องชำระ">
                                                                </td>
                                                                <td class="text-right py-0 align-middle">
                                                                    <div class="btn-group btn-group-sm">
                                                                        <a href="#" class="btn btn-primary" onclick="addRowSchedule()"><i class="fas fa-plus"></i></a>
                                                                        <a href="#" class="btn btn-danger" onclick="deleteRowSchedule(this)"><i class="fas fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-12 text-center mt-2">
                                                    <p style="color: red;" id="error_payment_schedule"></p>
                                                    <button class="btn btn-default" onclick="stepper.previous()">
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
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="กำหนดชำระ">
                                                                </td>
                                                                <td>
                                                                    <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="ยอดรวมที่ต้องชำระ">
                                                                </td>
                                                                <td>
                                                                    <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="ดอกเบี้ย">
                                                                </td>
                                                                <td>
                                                                    <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="เงินต้น">
                                                                </td>
                                                                <td>
                                                                    <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="สถานะ">
                                                                </td>
                                                                <td>
                                                                    <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="วันที่ชำระครั้งล่าสุด">
                                                                </td>
                                                                <td>
                                                                    <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="ยอดค้างชำระ">
                                                                </td>
                                                                <td class="text-right py-0 align-middle">
                                                                    <div class="btn-group btn-group-sm">
                                                                        <a href="#" class="btn btn-primary" onclick="addRowDue()"><i class="fas fa-plus"></i></a>
                                                                        <a href="#" class="btn btn-danger" onclick="deleteRowDue(this)"><i class="fas fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center mt-2">
                                            <p style="color: red;" id="error_payment_due"></p>
                                                    
                                                <button class="btn btn-default" onclick="stepper.previous()">
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
                                                                <th class="text-center">ความสัมพันธ์กับผู้กู้</th>
                                                                <th class="text-center">หมายเลขบัตรประจำตัวประชาชน</th>
                                                                <th class="text-center">ภาระค้ำประกัน(%)</th>
                                                                <th class="text-center"> ภาระค้ำประกัน(จำนวนเงิน)</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="6">ยังไม่มีข้อมูล</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
                                        <div id="litigation" class="content" role="tabpanel" aria-labelledby="litigation-trigger">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <form>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">เลขคดี (LG ID) :</label>
                                                            <div class="col-sm-7">
                                                                <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="เลขคดี (LG ID) ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ศาล :</label>
                                                            <div class="col-sm-7">
                                                                <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="ศาล ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">สำนักงานทนายความ :</label>
                                                            <div class="col-sm-7">
                                                                <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="สำนักงานทนายความ ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">เบอร์โทรศัพท์ :</label>
                                                            <div class="col-sm-7">
                                                                <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="เบอร์โทรศัพท์ ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">หมายเลขคดีดำ :</label>
                                                            <div class="col-sm-7">
                                                                <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="หมายเลขคดีดำ ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">หมายเลขคดีแดง :</label>
                                                            <div class="col-sm-7">
                                                                <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="หมายเลขคดีแดง ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">วันที่ฟ้องร้อง :</label>
                                                            <div class="col-sm-7">
                                                                <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="วันที่ฟ้องร้อง ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">ครั้งที่ของการดำเนินคดี :</label>
                                                            <div class="col-sm-7">
                                                                <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="ครั้งที่ของการดำเนินคดี ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">วันที่สถานะคดี :</label>
                                                            <div class="col-sm-7">
                                                                <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="วันที่สถานะคดี ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">วันที่ตั้งงานคดี :</label>
                                                            <div class="col-sm-7">
                                                                <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="วันที่ตั้งงานคดี ">
                                                            </div>
                                                        </div>
                                                        <!--  -->
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">สถานะคดี :</label>
                                                            <div class="col-sm-7">
                                                                <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="สถานะคดี ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">สถานะจาก LEGAL :</label>
                                                            <div class="col-sm-7">
                                                                <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="สถานะจาก LEGAL ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">วันที่ตั้งงานคดี :</label>
                                                            <div class="col-sm-7">
                                                                <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="วันที่ตั้งงานคดี ">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-12 text-center mt-2">
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
                                <form>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">คำนำหน้าชื่อ :</label>
                                        <div class="col-sm-6">
                                            <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="คำนำหน้าชื่อ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">ชื่อ :</label>
                                        <div class="col-sm-6">
                                            <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="ชื่อ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">นามสกุล :</label>
                                        <div class="col-sm-6">
                                            <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="นามสกุล">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">ความสัมพันธ์กับผู้กู้ :</label>
                                        <div class="col-sm-6">
                                            <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="ความสัมพันธ์กับผู้กู้">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">หมายเลขบัตรประจำตัวประชาชน :</label>
                                        <div class="col-sm-6">
                                            <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="หมายเลขบัตรประจำตัวประชาชน">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">ภาระค้ำประกัน(%) :</label>
                                        <div class="col-sm-6">
                                            <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="ภาระค้ำประกัน(%)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">ภาระค้ำประกัน(จำนวนเงิน) :</label>
                                        <div class="col-sm-6">
                                            <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="ภาระค้ำประกัน(จำนวนเงิน)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">วัน/เดือน/ปี เกิด :</label>
                                        <div class="col-sm-6">
                                            <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="วัน/เดือน/ปี เกิด">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">เพศ :</label>
                                        <div class="col-sm-6">
                                            <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="เพศ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-4 col-form-label text-gray text-sm text-md-right">สถานะบุคคล :</label>
                                        <div class="col-sm-6">
                                            <input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="สถานะบุคคล">
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
                                        <td><input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="ประเภทที่อยู่ "></td>
                                        <td><input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="ที่อยู่ "></td>
                                        <td><input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="รหัสไปรษณีย์ "></td>
                                        <td><input type="email" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="เบอร์โทรศัพท์ "></td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">

                        <button class="btn btn-default" data-dismiss="modal">
                            <i class="fas fa-arrow-left"></i>
                            ปิด
                        </button>
                        <button class="btn btn-primary" type="stepper.next()">
                            <i class="fas fa-arrow-check"></i>
                            บันทึกข้อมูล
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<?php include("../include/script.php") ?>
<script src="../asset/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="../asset/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="formvalid.js"></script>
<script src="tbpayment_schedule.js"></script>
<script src="tbpayment_due.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    });

    function checkDebtdetail() {
        //  if ($('#debt-detailForm').valid()) {
        stepper.next()


        // }
    }

    function checkAccountdetail() {
        //  if ($('#account-detailForm').valid()) {
        stepper.next()
        //  }
    }

    function checkAccountdata() {
        //  if ($('#account-dataForm').valid()) {
        stepper.next()
        // }
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
            $('#error_payment_due').text('')
            stepper.next()
        } else {
            $('#error_payment_due').text('*** กรุณากรอกข้อมูลให้ครบทุกแถว ***')
        }
           
    }






    $.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^[0-9]+$/.test(value);
    }, "โปรดกรอกข้อมูลที่มีเฉพาะตัวเลขและตัวอักษร (a-z)");
</script>
</body>

</html>