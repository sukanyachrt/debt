<?php

include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();

$connect->sql = "SELECT * FROM payment_schedule WHERE debt_id='".$_GET['id']."'";
$connect->queryData();
$i = 1;
$principal_percentage=0;
$interest_amount=0;
$sumtotal_formatted=0;
while ($rsconnect = $connect->fetch_AssocData()) {
    $principal_percentage+=$rsconnect["principal_amount"];
    $interest_amount+=$rsconnect["interest_amount"];
    $total = $rsconnect["principal_amount"] + $rsconnect["interest_amount"];
    $sumtotal_formatted+=$total;
    $total_formatted = number_format($total, 2, '.', ','); // ทำให้มีทศนิยม 2 ตำแหน่งและเพิ่มเครื่องหมาย ','

    echo "<tr>
    <td class='text-center'>" . $i++ . "</td>
    <td class='text-center'>" . date('d/m/', strtotime($rsconnect["due_date"])) . (date('Y', strtotime($rsconnect["due_date"])) + 543) . "</td>
    <td class='text-right'>" . number_format($rsconnect["principal_percentage"] , 2, '.', ',') . "</td>
    <td class='text-right'>" . number_format($rsconnect["principal_amount"], 2, '.', ',')  . "</td>
    <td class='text-right'>" . number_format($rsconnect["interest_amount"], 2, '.', ',') . "</td>
    <td class='text-right'>" . $total_formatted . "</td>
    </tr>";
}

    echo "<tr>
    <td class='text-center'></td>
    <td class='text-center'></td>
    <td class='text-center'>ยอดรวม</td>
    <td class='text-right'>" . number_format($principal_percentage, 2, '.', ',') . "</td>
    <td class='text-right'>" . number_format($interest_amount, 2, '.', ',') . "</td>
    <td class='text-right'>" . number_format($sumtotal_formatted, 2, '.', ',') . "</td>
    </tr>";
?>