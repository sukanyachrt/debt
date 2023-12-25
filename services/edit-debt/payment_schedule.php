<?php

include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$connect->sql = "SELECT * FROM payment_schedule
WHERE	debt_id = '" . $_GET['id'] . "'";
$connect->queryData();
$row = $connect->num_rows();
$i=1;
while ($rsaccount_data = $connect->fetch_AssocData()) {
    $total=$rsaccount_data['principal_amount']+$rsaccount_data['interest_amount'];
    $total_formatted = number_format($total, 2, '.', ',');
    $due_date=date('d/m',strtotime($rsaccount_data['due_date']))."/".(date('Y',strtotime($rsaccount_data['due_date']))+543);
    echo '<tr id='.$rsaccount_data['id'].'>
    <td>'.$i++.'</td>
    <td>
        <input type="text" autocomplete="yes" class="form-control datepicker" readOnly id="txtlname" placeholder="กำหนดชำระ" value='.$due_date.'>
    </td>
    <td>
        <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="สัดสวนเงินต้น %" value='.$rsaccount_data['principal_percentage'].'>
    </td>
    <td>
        <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="เงินต้น" value='.$rsaccount_data['principal_amount'].'>
    </td>
    <td>
        <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="ดอกเบี้ย" value='.$rsaccount_data['interest_amount'].'>
    </td>
    <td>
        <input type="text" autocomplete="yes" class="form-control" id="txtlname" placeholder="ยอดรวมที่ต้องชำระ" value='.$total_formatted.'>
    </td>
    <td class="text-right py-0 align-middle">
        <div class="btn-group btn-group-sm">
            <button class="btn btn-primary" onclick="addRowSchedule()"><i class="fas fa-plus"></i></button>
            <button class="btn btn-danger" onclick="deleteRow(this)"><i class="fas fa-trash"></i></button>
        </div>
    </td>
</tr>';
}

   

