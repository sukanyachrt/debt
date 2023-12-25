<?php

include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$connect->sql = "SELECT * FROM debtor
WHERE	id = '" . $_GET['id'] . "'";
$connect->queryData();
$row = $connect->num_rows();
$rsaccount_data = $connect->fetch_AssocData();
if ($row > 0) {
    $phone_1 = explode("[", $rsaccount_data['telephone']);
    $phone_2 = explode("]", $phone_1[1]);
    $output = str_replace('"', ' ', $phone_2[0]);

    echo '
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group row">
                <label for="inputEmail3" class="col-md-5 col-form-label text-gray text-sm text-md-right">เลขประจำตัวประชาชน :</label>
                <div class="col-sm-7">
                    <input data-inputmask=\'{"mask": "9999999999999"}\' data-mask type="text" autocomplete="yes" class="form-control" id="txtidcard" name="txtidcard" placeholder="เลขประจำตัวประชาชน" value="'.$rsaccount_data['idcard'].'">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">คำนำหน้าชื่อ :</label>
                <div class="col-sm-7">
                    <select id="txtprefix" name="txtprefix" class="form-control">
                        <option value="'.$rsaccount_data['prefix'].'">'.$rsaccount_data['prefix'].'</option>
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
                    <input type="text" autocomplete="yes" class="form-control" id="txtfname" name="txtfname" placeholder="ชื่อ" value="'.$rsaccount_data['fname'].'">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">นามสกุล :</label>
                <div class="col-sm-7">
                    <input type="text" autocomplete="yes" class="form-control" id="txtlname" name="txtlname" placeholder="นามสกุล" value="'.$rsaccount_data['lname'].'">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">เลขที่บัญชีเงินกู้ :</label>
                <div class="col-sm-7">
                    <input type="text" autocomplete="yes" class="form-control" id="txtno_account" name="txtno_account" placeholder="เลขที่บัญชีเงินกู้" value="'.$rsaccount_data['no_account'].'">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">สถานะของบัญชีเงินกู้ :</label>
                <div class="col-sm-7">
                    <input type="text" autocomplete="yes" class="form-control" id="txtstatus_account" name="txtstatus_account" placeholder="สถานะของบัญชีเงินกู้" value="'.$rsaccount_data['status_account'].'">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right">สถานภาพบุคคล :</label>
                <div class="col-sm-7">
                    <input type="text" autocomplete="yes" class="form-control" id="txtstatus_personal" name="txtstatus_personal" placeholder="สถานภาพบุคคล" value="'.$rsaccount_data['status_personal'].'">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-end">ประเภทบัญชีเงินกู้ :</label>
                <div class="col-sm-7">
                    <input type="text" autocomplete="yes" class="form-control" id="txttype_account" name="txttype_account" placeholder="ประเภทบัญชีเงินกู้" value="'.$rsaccount_data['type_account'].'">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputtext3" class="col-md-5 col-form-label text-gray text-sm text-md-right text-sm-start">เบอร์โทรศัพท์ลูกหนี้ :</label>
                <div class="col-sm-7">
                    <input type="text" autocomplete="yes" class="form-control" id="txttelephone" name="txttelephone" placeholder="เบอร์โทรศัพท์ลูกหนี้" value="'.$output.'">
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
';
}

?>
