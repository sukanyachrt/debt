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
    $total_payment_due_comma = floatval(str_replace(',', '', $rsconnect["total_payment_due"]));
    $total_payment_due+=$total_payment_due_comma;




    $interest_amount_comma = floatval(str_replace(',', '', $rsconnect["interest_amount"]));
    $interest_amount+=$interest_amount_comma;



    $principal_amount_comma = floatval(str_replace(',', '', $rsconnect["principal_amount"]));
    
    $principal_amount+=$principal_amount_comma;



    $overdue_amount_comma = floatval(str_replace(',', '', $rsconnect["overdue_amount"]));
    
    $overdue_amount+=$overdue_amount_comma;



    echo "<tr>
    <td class='text-center'>" . $i++ . "</td>
    <td class='text-center'>" . date('d/m/', strtotime($rsconnect["due_date"])) . (date('Y', strtotime($rsconnect["due_date"])) + 543) . "</td>
    <td class='text-right'>";
    if (strpos($rsconnect["total_payment_due"], ',') !== false) {
        echo $rsconnect["total_payment_due"];
    } else {
        echo number_format($rsconnect["total_payment_due"], 2, '.', ',');
    }
    
   // . number_format($rsconnect["total_payment_due"], 2, '.', ',')  . 
    echo "</td>
    <td class='text-right'>" ;
    if (strpos($rsconnect["interest_amount"], ',') !== false) {
        echo $rsconnect["interest_amount"];
    } else {
        echo number_format($rsconnect["interest_amount"], 2, '.', ',');
    }
    
   // .number_format($rsconnect["interest_amount"], 2, '.', ',')   . 
    echo "</td>
    <td class='text-right'>" ;
    if (strpos($rsconnect["principal_amount"], ',') !== false) {
        echo $rsconnect["principal_amount"];
    } else {
        echo number_format($rsconnect["principal_amount"], 2, '.', ',');
    }
   // .number_format($rsconnect["principal_amount"], 2, '.', ',')   . 
    echo "</td>
    <td class='text-center'>" . $rsconnect["status"] . "</td>
    <td class='text-center'>" ;

        if($rsconnect["last_payment_date"]!=""){
          echo  date('d/m/', strtotime($rsconnect["last_payment_date"])) . (date('Y', strtotime($rsconnect["last_payment_date"])) + 543);
        }
        else{
            echo "";
        }
    echo "</td>
    <td class='text-right'>" ;
    if (strpos($rsconnect["overdue_amount"], ',') !== false) {
        echo $rsconnect["overdue_amount"];
    } else {
        echo number_format($rsconnect["overdue_amount"], 2, '.', ',');
    }
    //.number_format($rsconnect["overdue_amount"], 2, '.', ',')   . 
    echo "</td>
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