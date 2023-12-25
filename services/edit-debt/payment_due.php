<?php

include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$connect->sql = "SELECT * FROM payment_due
WHERE	debt_id = '" . $_GET['id'] . "'";
$connect->queryData();
$row = $connect->num_rows();
$i = 1;
while ($rsaccount_data = $connect->fetch_AssocData()) {
    $due_date=date('d/m',strtotime($rsaccount_data['due_date']))."/".(date('Y',strtotime($rsaccount_data['due_date']))+543);
    $last_payment_date="";
    if($rsaccount_data['last_payment_date']!=""){
        $last_payment_date=date('d/m',strtotime($rsaccount_data['last_payment_date']))."/".(date('Y',strtotime($rsaccount_data['last_payment_date']))+543);
      
    }
    echo '<tr id='.$rsaccount_data['id'].'>
    <td>'.$i++.'</td>
    <td>
        <input type="text" autocomplete="yes" readOnly class="form-control datepicker" id="txtlname" placeholder="กำหนดชำระ" value='.$due_date.'>
    </td>
    <td>
        <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="ยอดรวมที่ต้องชำระ" value='.$rsaccount_data['total_payment_due'].'>
    </td>
    <td>
        <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="ดอกเบี้ย" value='.$rsaccount_data['interest_amount'].'>
    </td>
    <td>
        <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="เงินต้น" value='.$rsaccount_data['principal_amount'].'>
    </td>
    <td>
        <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="สถานะ" value='.$rsaccount_data['status'].'>
    </td>
    <td>
        <input type="text" autocomplete="yes" readOnly class="form-control datepicker" id="txtlname" placeholder="วันที่ชำระครั้งล่าสุด" value='.$last_payment_date.'>
    </td>
    <td>
        <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="ยอดค้างชำระ" value='.$rsaccount_data['overdue_amount'].'>
    </td>
    <td class="text-right py-0 align-middle">
        <div class="btn-group btn-group-sm">
            <button href="#" class="btn btn-primary" onclick="addRowDue()"><i class="fas fa-plus"></i></button>
            <button href="#" class="btn btn-danger" onclick="deleteRowDue(this)"><i class="fas fa-trash"></i></button>
        </div>
    </td>
</tr>';
}
