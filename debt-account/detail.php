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
                            </div>
                            <div class="card-body">
                                <?php
                                $connect->sql = "SELECT
                                     debtor.idcard,
                                     debtor.id,
                                     debtor.prefix,
                                     debtor.fname,
                                     debtor.lname,
                                     debtor.no_account,
                                     debtor.status_account,
                                     debtor.status_personal,
                                     debtor.type_account,
                                     debtor.telephone,
                                     account_debt.loan_group,
                                     account_debt.account_manager,
                                     account_debt.loan_account_number,
                                     account_debt.loan_account_type,
                                     account_debt.loan_account_status,
                                     account_debt.status_change_date,
                                     account_debt.request_deferral,
                                     account_debt.request_suspend,
                                     account_debt.date_suspend 
                                 FROM
                                     debtor
                                     INNER JOIN account_debt ON debtor.id = account_debt.debt_id 
                                     WHERE	debtor.id = '" . $id . "'";
                                $connect->queryData();
                                $rsdebtor = $connect->fetch_AssocData();

                                ?>
                                <div class="row text-sm">
                                    <div class="col-md-3 text-right col-6">
                                        <div class="form-group">
                                            <label for="txtidcard" class="text-gray">เลขประจำตัวประชาชน</label>

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <span id="txtidcard">
                                                <?php echo $rsdebtor['idcard'] ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-right col-6">
                                        <div class="form-group">
                                            <label for="txtfname" class="text-gray">ชื่อ-นามสกุล</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <span id="txtidcard">
                                                <?php echo $rsdebtor['prefix'] . $rsdebtor['fname'] . " " . $rsdebtor['lname'] ?>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3 text-right col-6">
                                        <div class="form-group">
                                            <label for="txtidcard" class="text-gray">เลขบัญชีเงินกู้</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <span id="txtidcard">
                                                <?php echo $rsdebtor['no_account'] ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-right col-6">
                                        <div class="form-group">
                                            <label for="txtfname" class="text-gray">สถานะบัญชีเงินกู้</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <span id="txtidcard">
                                                <?php echo $rsdebtor['status_account'] ?>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3 text-right col-6">
                                        <div class="form-group">
                                            <label for="txtidcard" class="text-gray">สถานะภาพบุคคล</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <span id="txtidcard">
                                                <?php echo $rsdebtor['status_personal'] ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-right col-6">
                                        <div class="form-group">
                                            <label for="txtfname" class="text-gray">ประเภทบัญชีเงินกู้</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <span id="txtidcard">
                                                <?php echo $rsdebtor['type_account'] ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-right col-6">
                                        <div class="form-group">
                                            <label for="txtfname" class="text-gray">เบอร์โทรศัพท์ลูกหนี้</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <span id="txtidcard">
                                                <?php
                                                $phone_1 = explode("[", $rsdebtor['telephone']);
                                                $phone_2 = explode("]", $phone_1[1]);
                                                $output = str_replace('"', ' ', $phone_2[0]);
                                                echo $output;
                                                ?>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- <div class="col-md-3 text-right col-6">
                                        <div class="form-group">
                                            <label for="txtidcard" class="text-gray">Flag สถานะบัญชีลุกหนี้ล่าสุด</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <span id="txtidcard">-</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-right col-6">
                                        <div class="form-group">
                                            <label for="txtfname" class="text-gray">วันเปลี่ยนแปลงสถานะทางบัญชี</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <span id="txtidcard">-</span>
                                        </div>
                                    </div>

                                    <div class="col-md-3 text-right col-6">
                                        <div class="form-group">
                                            <label for="txtidcard" class="text-gray">การติดตามหนี้</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <span id="txtidcard">-</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-right col-6">
                                        <div class="form-group">
                                            <label for="txtfname" class="text-gray">วันที่ปรับปรุง Flag สถานะ บัญชีล่าสุด</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <span id="txtidcard">18/09/2566</span>
                                        </div>
                                    </div>

                                    <div class="col-md-3  text-right col-6">
                                        <div class="form-group">
                                            <label for="txtidcard" class="text-gray">กลุ่มผู้กู้ยืม</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <span id="txtidcard">-</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-right col-6">
                                        <div class="form-group">
                                            <label for="txtfname" class="text-gray">หมายเหตุการปิดบัญชี</label>

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <span id="txtidcard">-</span>
                                        </div>
                                    </div>

                                    <div class="col-md-3 text-right col-6">
                                        <div class="form-group">
                                            <label for="txtidcard" class="text-gray">หมายเหตุ</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <span id="txtidcard">-</span>
                                        </div>
                                    </div> -->
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
                                                        <div class="row text-sm">
                                                            <div class="col-md-2 text-right col-3">
                                                                <div class="form-group">
                                                                    <label for="txtidcard" class="text-gray">หมายเลขประจำตัวประชาชน</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-3">
                                                                <div class="form-group">
                                                                    <span id="txtidcard"><?php echo $rsdebtor['idcard'] ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 text-right col-3">
                                                                <div class="form-group">
                                                                    <label for="txtfname" class="text-gray">ชื่อ-นามสกุล ของผู้กู้</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-3">
                                                                <div class="form-group">
                                                                    <span id="txtidcard">
                                                                        <?php echo $rsdebtor['prefix'] . $rsdebtor['fname'] . " " . $rsdebtor['lname'] ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 text-right col-3">
                                                                <div class="form-group">
                                                                    <label for="txtfname" class="text-gray">ดูแลบัญชีโดย</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-3">
                                                                <div class="form-group">
                                                                    <span id="txtidcard">
                                                                        <?php echo $rsdebtor['account_manager'] ?>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-2 text-right col-3">
                                                                <div class="form-group">
                                                                    <label for="txtidcard" class="text-gray">เลขที่บัญชีเงินกู้</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-3">
                                                                <div class="form-group">
                                                                    <span id="txtidcard">
                                                                        <?php echo $rsdebtor['no_account'] ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 text-right col-3">
                                                                <div class="form-group">
                                                                    <label for="txtidcard" class="text-gray">ประเภทบัญชีเงินกู้</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-3">
                                                                <div class="form-group">
                                                                    <span id="txtidcard">
                                                                        <?php echo $rsdebtor['type_account'] ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 text-right col-3">
                                                                <div class="form-group">
                                                                    <label for="txtidcard" class="text-gray">กลุ่มผู้กู้ยืม</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-3">
                                                                <div class="form-group">
                                                                    <span id="txtidcard">
                                                                        <?php echo $rsdebtor['loan_group'] ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 text-right col-3">
                                                                <div class="form-group">
                                                                    <label for="txtfname" class="text-gray">สถานะบัญชีเงินกู้</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-3">
                                                                <div class="form-group">
                                                                    <span id="txtidcard">
                                                                        <?php echo $rsdebtor['status_account'] ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 text-right col-3">
                                                                <div class="form-group">
                                                                    <label for="txtfname" class="text-gray">วันเปลี่ยนแปลงสถานะทางบัญชี</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-3">
                                                                <div class="form-group">
                                                                    <span id="txtidcard">
                                                                        <?php echo $rsdebtor['status_change_date'] ?>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 text-right col-3">
                                                                <div class="form-group">
                                                                    <label for="txtfname" class="text-gray">การขอผ่อนผัน</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-3">
                                                                <div class="form-group">
                                                                    <span id="txtidcard">
                                                                        <?php echo $rsdebtor['request_deferral'] ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 text-right col-3">
                                                                <div class="form-group">
                                                                    <label for="txtfname" class="text-gray">การขอระงับเรียกใช้ชำระหนี้</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-3">
                                                                <div class="form-group">
                                                                    <span id="txtidcard">
                                                                        <?php echo $rsdebtor['request_suspend'] ?>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 text-right col-3">
                                                                <div class="form-group">
                                                                    <label for="txtfname" class="text-gray">วันที่ขอระงับเรียกใช้ให้ชำระหนี้สิ้นสุด</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-3">
                                                                <div class="form-group">
                                                                    <span id="txtidcard">
                                                                        <?php echo $rsdebtor['date_suspend'] ?>

                                                                    </span>
                                                                </div>
                                                            </div>
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
                                                                        <?php
                                                                        $connect->sql = "SELECT * FROM account_data WHERE debt_id='" . $id . "'";
                                                                        $connect->queryData();
                                                                        $rsaccount_data = $connect->fetch_AssocData();



                                                                        ?>
                                                                        <div class="row text-sm">
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtidcard" class="text-gray">ข้อมูล ณ วันที่</label>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php echo date('d/m/') . "" . (date('Y') + 543) ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">วันที่สิ้นสุดสัญญา</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['date_contract'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">ยอดหนี้เงินกู้ทั้งสิ้น</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['total_amount'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">สถานะบัญชีเงินกู้</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['status_account'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">วันครบกำหนดชำระหนี้ครั้งแรก</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['datestart_payment'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">วันครบกำหนดชำระครั้งสุดท้าย</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['dateend_payment'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">วันที่คำนวณดอกเบี้ยครั้งแรก</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['datecal_interest'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-md-3 text-right col-6 pt-3">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">ประเภทการชำระ (Payment Model)</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6 pt-3">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">

                                                                                        <?php
                                                                                        echo $rsaccount_data['payment_model'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row text-sm">
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">ประเภทการคำนวณเบี้ยปรับ (Pernalty Model)</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['pernalty_model'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">อัตราเบี้ยปรับ</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['pernalty_rate'];
                                                                                        ?>

                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">ส่วนต่างระหว่างอัตราเบี้ยปรับ</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['pernalty_rate_dif'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">ผลรวม</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['pernalty_total'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">ประเภทการคำนวณดอกเบี้ย (Interest Model)</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['interest_model'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">อัตราดอกเบี้ย</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['interest_rate'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">ส่วนต่างระหว่างอัตราดอกเบี้ย</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['interest_rate_dif'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">ผลรวม</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['interest_total'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">ความถี่ในการชำระ</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['payment_frequency'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">ยอดหนี้เงินกู้คงเหลือ (บาท)</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['remain_balance'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6 pt-3">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">ยอดเงินงวดค้างชำระ (บาท)</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6 pt-3">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['overdue_installment_amount'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6 pt-3">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">ยอดเงินต้นค้างชำระ (บาท)</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6 pt-3">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['overdue_principal_amount'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">จำนวนครั้งที่ค้างชำระ</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6 ">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['number_overdue'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">ดอกเบี้ย (บาท) </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6 ">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">

                                                                                        <?php
                                                                                        echo $rsaccount_data['interest_amount'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">ยอดดอกเบี้ยปิดบัญชี (บาท)</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6 ">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['interest_close_amount'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">เบี้ยปรับ (บาท) </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6 ">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['penalty_amount'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtfname" class="text-gray">เบี้ยปรับค้างรับก่อนปรับโครงสร้างหนี้ (บาท)</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6 ">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">
                                                                                        <?php
                                                                                        echo $rsaccount_data['penalty_before_amount'];
                                                                                        ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="custom-tabs-three-statement" role="tabpanel" aria-labelledby="custom-tabs-three-statement-tab">
                                                        <div class="row text-sm">
                                                            <div class="col-md-3 text-right col-6">
                                                                <div class="form-group">
                                                                    <label for="txtidcard" class="text-gray">ยอดหนี้เงินกู้</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-group">
                                                                    <span id="txtSumPayment_schedule"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 text-right col-6">
                                                                <div class="form-group">
                                                                    <label for="txtidcard" class="text-gray">ใช้ในการคำนวณค่างวด</label>
                                                                    <label for="txtidcard" class="text-gray pt-0">(สามารถเปลี่ยนแปลงค่าได้)</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-6">
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
                                                                            <th class="text-center">ดอกเบีย</th>
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
                                                                <table class="table table-bordered table-hover text-xs">
                                                                    <thead class="bg-primary">
                                                                        <tr>
                                                                            <th class="text-center">ลำดับที่</th>
                                                                            <th class="text-center">กำหนดชำระ</th>
                                                                            <th class="text-center">ยอดรวมใที่ต้องชำระ</th>
                                                                            <th class="text-center">ดอกเบี้ย</th>
                                                                            <th class="text-center">เงินต้น</th>
                                                                            <th class="text-center">สถานะ</th>
                                                                            <th class="text-center">วันที่ชำระครั้งล่าสุด</th>
                                                                            <th class="text-center">ยอดค้างชำระ</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <!-- <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td class="text-center">05/09/2566</td>
                                                                            <td class="text-right">700.00</td>
                                                                            <td class="text-right">
                                                                                700.00
                                                                            </td>
                                                                            <td class="text-right">0.00</td>
                                                                            <td class="text-center">ชำระแล้ว</td>
                                                                            <td class="text-center">02/09/2566</td>
                                                                            <td class="text-right">0.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td class="text-center">07/10/2566</td>
                                                                            <td class="text-right">700.00</td>
                                                                            <td class="text-right">
                                                                                700.00
                                                                            </td>
                                                                            <td class="text-right">0.00</td>
                                                                            <td class="text-center">ชำระแล้ว</td>
                                                                            <td class="text-center">04/10/2566</td>
                                                                            <td class="text-right">0.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td class="text-center">05/11/2566</td>
                                                                            <td class="text-right">700.00</td>
                                                                            <td class="text-right">
                                                                                700.00
                                                                            </td>
                                                                            <td class="text-right">0.00</td>
                                                                            <td class="text-center">ชำระแล้ว</td>
                                                                            <td class="text-center">01/11/2566</td>
                                                                            <td class="text-right">0.00</td>
                                                                        </tr> -->
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="custom-tabs-three-guarantor" role="tabpanel" aria-labelledby="custom-tabs-three-guarantor-tab">
                                                        <div class="row">
                                                            <div class="col-12 table-responsive p-0">
                                                                <table class="table table-bordered table-hover text-xs">
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
                                                                        <tr>
                                                                            <td class="text-center">นายอุทัย พุทศรีเสน</td>
                                                                            <td class="text-center">-</td>
                                                                            <td class="text-center">3411400182876</td>
                                                                            <td class="text-center">49.23</td>
                                                                            <td class="text-center">
                                                                                28,999.77
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <i class="fas fa-eye btn btn-xs" data-toggle="modal" data-target="#modal-default"></i>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">นางติ มาสุข</td>
                                                                            <td class="text-center">-</td>
                                                                            <td class="text-center">3411400921814</td>
                                                                            <td class="text-center">50.77</td>
                                                                            <td class="text-center">
                                                                                29,906.22
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <i class="fas fa-eye btn btn-xs" data-toggle="modal" data-target="#modal-default"></i>
                                                                            </td>
                                                                        </tr>
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
                                                                        <div class="row text-sm">
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtidcard" class="text-gray">เลขคดี (LG ID)</label>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">KTB0145600468</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtidcard" class="text-gray">ศาล</label>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">ศาลจังหวัดหนองบัวลำภู</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtidcard" class="text-gray">สำนักงานทนายความ</label>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">บริษัท กฏหมาย ช ชัยวิวัตร์ จำกัด</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtidcard" class="text-gray">เบอร์โทรศัพท์</label>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">04351445</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtidcard" class="text-gray">หมายเลขคดีดำ</label>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">ผบ.1127/2556</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtidcard" class="text-gray">หมายเลขคดีแดง</label>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">ผบ.620/2556</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtidcard" class="text-gray">วันที่ฟ้องร้อง</label>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">01/07/2566</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtidcard" class="text-gray">ครั้งที่ของการดำเนินคดี</label>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">1</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtidcard" class="text-gray">วันที่สถานะคดี</label>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">18/09/2566</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtidcard" class="text-gray">วันที่ตั้งงานคดี</label>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">31/08/2555</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtidcard" class="text-gray">สถานะคดี</label>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">สืบหาทรัพย์นอกจำนองพบ/ไม่พบ</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 text-right col-6">
                                                                                <div class="form-group">
                                                                                    <label for="txtidcard" class="text-gray">สถานะจาก LEGAL</label>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-6">
                                                                                <div class="form-group">
                                                                                    <span id="txtidcard">Active</span>
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
                        <div class="row text-sm">
                            <div class="col-md-4 text-right col-6">
                                <div class="form-group">
                                    <label for="txtidcard" class="text-gray">หมายเลขบัตรประจำตัวประชาชน</label>

                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="form-group">
                                    <span id="txtidcard">3411400182876</span>
                                </div>
                            </div>
                        </div>
                        <div class="row text-sm">
                            <div class="col-md-4 text-right col-6">
                                <div class="form-group">
                                    <label for="txtidcard" class="text-gray">ชื่อ - สกุล</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-6">
                                <div class="form-group">
                                    <span id="txtidcard">นายอุทัย พุทศรีเสน</span>
                                </div>
                            </div>
                            <div class="col-md-4 text-right col-6">
                                <div class="form-group">
                                    <label for="txtidcard" class="text-gray">ความสัมพันธ์กับผู้กู้</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-6">
                                <div class="form-group">
                                    <span id="txtidcard">-</span>
                                </div>
                            </div>

                            <div class="col-md-4 text-right col-6">
                                <div class="form-group">
                                    <label for="txtidcard" class="text-gray">วัน/เดือน/ปี เกิด</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-6">
                                <div class="form-group">
                                    <span id="txtidcard">-</span>
                                </div>
                            </div>
                            <div class="col-md-4 text-right col-6">
                                <div class="form-group">
                                    <label for="txtidcard" class="text-gray">อายุ</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-6">
                                <div class="form-group">
                                    <span id="txtidcard">-</span>
                                </div>
                            </div>
                            <div class="col-md-4 text-right col-6">
                                <div class="form-group">
                                    <label for="txtidcard" class="text-gray">เพศ</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-6">
                                <div class="form-group">
                                    <span id="txtidcard">-</span>
                                </div>
                            </div>
                            <div class="col-md-4 text-right col-6">
                                <div class="form-group">
                                    <label for="txtidcard" class="text-gray">สถานะบุคคล</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-6">
                                <div class="form-group">
                                    <span id="txtidcard">ปกติ</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 table-responsive p-0">
                                <table class="table table-bordered table-hover text-xs">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th class="text-center">ประเภทที่อยู่</th>
                                            <th class="text-center">ที่อยู่</th>
                                            <th class="text-center">รหัสไปรษณีย์</th>
                                            <th class="text-center">เบอร์โทรศัพท์</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">ที่ส่งเอกสาร</td>
                                            <td class="text-center">เลขที่ 101 หมู่ 1 ต.นาเหล่า อ.นาวัง จ.หนองบัวลำภู</td>
                                            <td class="text-center">39170</td>
                                            <td class="text-center">-</td>

                                        </tr>
                                        <tr>
                                            <td class="text-center">ที่ทำงาน</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>

                                        </tr>
                                        <tr>
                                            <td class="text-center">ตามทะเบียนบ้าน</td>
                                            <td class="text-center">เลขที่ 101 หมู่ 1 ต.นาเหล่า อ.นาวัง จ.หนองบัวลำภู</td>
                                            <td class="text-center">39170</td>
                                            <td class="text-center">-</td>

                                        </tr>
                                        <tr>
                                            <td class="text-center">ปัจจุบัน</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>

                                        </tr>
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
    </div>
</div>
<?php include("../include/script.php") ?>
<script>
    refreshTable();

    function refreshTable() {
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

    function calculateSum() {
        var tbody = document.getElementById("tbPayment_schedule").getElementsByTagName("tbody")[0];
        var columnIndex = 3; 
        var data = tbody.rows.length;
        var cell = tbody.rows[data - 1].cells[columnIndex]
        document.getElementById("txtSumPayment_schedule").innerHTML = cell.innerHTML;
        document.getElementById("txtSumPayment_schedule_2").innerHTML = cell.innerHTML;
    }
</script>
</body>

</html>