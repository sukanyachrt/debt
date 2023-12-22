<?php

include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();

$connect->sql = "SELECT * FROM payment_due WHERE debt_id='".$_GET['id']."'";
$connect->queryData();
$i = 1;
$total_payment_due=0;
$interest_amount=0;
$principal_amount=0;
$overdue_amount=0;
while ($rsconnect = $connect->fetch_AssocData()) {
    $total_payment_due+=$rsconnect["total_payment_due"];
    $interest_amount+=$rsconnect["interest_amount"];
    $principal_amount+=$rsconnect["principal_amount"];
    $overdue_amount+=$rsconnect["overdue_amount"];
    echo "<tr>
    <td class='text-center'>" . $i++ . "</td>
    <td class='text-center'>" . date('d/m/', strtotime($rsconnect["due_date"])) . (date('Y', strtotime($rsconnect["due_date"])) + 543) . "</td>
    <td class='text-right'>" . $rsconnect["total_payment_due"] . "</td>
    <td class='text-right'>" . $rsconnect["interest_amount"] . "</td>
    <td class='text-right'>" . $rsconnect["principal_amount"] . "</td>
    <td class='text-center'>" . $rsconnect["status"] . "</td>
    <td class='text-center'>" ;

        if($rsconnect["last_payment_date"]!=""){
          echo  date('d/m/', strtotime($rsconnect["last_payment_date"])) . (date('Y', strtotime($rsconnect["last_payment_date"])) + 543);
        }
        else{
            echo "";
        }
    echo "</td>
    <td class='text-right'>" . $rsconnect["overdue_amount"] . "</td>
    </tr>";
}

echo "<tr>
<td class='text-center'></td>
<td class='text-center'>ยอดรวม</td>
<td class='text-right'>" . number_format($total_payment_due, 2, '.', ',') . "</td>
<td class='text-right'>" . number_format($interest_amount, 2, '.', ',') . "</td>
<td class='text-right'>" . number_format($principal_amount, 2, '.', ',') . "</td>
<td class='text-center'></td>
<td class='text-center'></td>
<td class='text-right'>" . number_format($overdue_amount, 2, '.', ',') . "</td>
</tr>";

    
?>