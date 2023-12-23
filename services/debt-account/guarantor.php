<?php
include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
if ($_GET['v'] == "table") {
    $connect->sql = "SELECT * FROM guarantor WHERE debt_id='" . $_GET['id'] . "'";
    $connect->queryData();
    $i = 1;
    $principal_percentage = 0;
    $principal_amount = 0;
    $sumtotal_formatted = 0;
    while ($rsconnect = $connect->fetch_AssocData()) {
        echo "<tr>
        <td class='text-center'>" . $rsconnect["prefix"] . $rsconnect['fname'] . " " . $rsconnect['lname'] . "</td>
        <td class='text-center'>" . $rsconnect["relationship"] . "</td>
        <td class='text-center'>" . $rsconnect["idcard"] . "</td>
        <td class='text-center'>" . $rsconnect["guarantee_percentage"] . "</td>
        <td class='text-center'>";
        if (strpos($rsconnect["guarantee_amount"], ',') !== false) {
            echo $rsconnect["guarantee_amount"];
        } else {
            echo number_format($rsconnect["guarantee_amount"], 2, '.', ',');
        }
        // .number_format($rsconnect["guarantee_amount"], 2, '.', ',')   .
        echo "</td>
        <td class='text-center'>
            <i class='fas fa-eye btn btn-xs' data-toggle='modal' onclick='modalAddress(" . $rsconnect['id'] . ")' data-target='#modal-default'></i>
        </td>
        </tr>";
    }
} else if ($_GET['v'] == "div") {
    $connect->sql = "SELECT * FROM guarantor WHERE id='" . $_GET['id'] . "'";
    $connect->queryData();
    $i = 1;
    $principal_percentage = 0;
    $principal_amount = 0;
    $sumtotal_formatted = 0;
    $rsconnect = $connect->fetch_AssocData();

    echo  '<div class="row text-sm">
            <div class="col-md-4 text-right col-6">
                <div class="form-group">
                    <label for="txtidcard" class="text-gray">หมายเลขบัตรประจำตัวประชาชน</label>

                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="form-group">
                    <span id="txtidcard">' . $rsconnect['idcard'] . '</span>
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
                    <span id="txtidcard">' . $rsconnect["prefix"] . $rsconnect['fname'] . " " . $rsconnect['lname'] . '</span>
                </div>
            </div>
            <div class="col-md-4 text-right col-6">
                <div class="form-group">
                    <label for="txtidcard" class="text-gray">ความสัมพันธ์กับผู้กู้</label>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="form-group">
                    <span id="txtidcard">' . $rsconnect["relationship"] . '</span>
                </div>
            </div>
            <div class="col-md-4 text-right col-6">
                <div class="form-group">
                    <label for="txtidcard" class="text-gray">วัน/เดือน/ปี เกิด</label>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="form-group">
                    <span id="txtidcard">';
                        if ($rsconnect["birthday"] == "") {
                            echo "-";
                        } else {
                            echo $rsconnect["birthday"];
                        }
                        echo '</span>
                </div>
            </div>
            <div class="col-md-4 text-right col-6">
                <div class="form-group">
                    <label for="txtidcard" class="text-gray">อายุ</label>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="form-group">
                    <span id="txtidcard">';
                    if ($rsconnect["age"] == "0") {
                        echo "-";
                    } else {
                        echo $rsconnect["age"];
                    }
                  
                    echo '</span>
                </div>
            </div>
            <div class="col-md-4 text-right col-6">
                <div class="form-group">
                    <label for="txtidcard" class="text-gray">เพศ</label>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="form-group">
                    <span id="txtidcard">';
                    if ($rsconnect["gender"] == "F") {
                        echo "หญิง";
                    } else {
                        echo "ชาย";
                    }
                    echo '</span>
                </div>
            </div>
            <div class="col-md-4 text-right col-6">
                <div class="form-group">
                    <label for="txtidcard" class="text-gray">สถานะบุคคล</label>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="form-group">
                    <span id="txtidcard">' . $rsconnect["status_person"] . '</span>
                </div>
            </div>
        </div>';
}
