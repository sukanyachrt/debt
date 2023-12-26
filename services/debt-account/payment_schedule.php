<?php

include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();

$connect->sql = "SELECT * FROM payment_schedule WHERE debt_id='" . $_GET['id'] . "'";
$connect->queryData();
$i = 1;
$principal_percentage = 0;
$interest_amount = 0;
$sumtotal_formatted = 0;
while ($rsconnect = $connect->fetch_AssocData()) {
    $principal_percentage_comma = floatval(str_replace(',', '', $rsconnect["principal_amount"]));

    $principal_percentage += $principal_percentage_comma;

    $interest_amount_comma = floatval(str_replace(',', '', $rsconnect["interest_amount"]));
    $interest_amount += $interest_amount_comma;



    $total = $principal_percentage_comma + $interest_amount_comma;
    $sumtotal_formatted += $total;
    $total_formatted = number_format($total, 2, '.', ','); // ทำให้มีทศนิยม 2 ตำแหน่งและเพิ่มเครื่องหมาย ','

    echo "<tr>
    <td class='text-center'>" . $i++ . "</td>
    <td class='text-center'>" . date('d/m/', strtotime($rsconnect["due_date"])) . (date('Y', strtotime($rsconnect["due_date"])) + 543) . "</td>
    <td class='text-right'>";
    if (strpos($rsconnect["principal_percentage"], ',') !== false) {
        echo $rsconnect["principal_percentage"];
    } else {
        echo number_format($rsconnect["principal_percentage"], 2, '.', ',');
    }



    //. number_format($rsconnect["principal_percentage"] , 2, '.', ',') . 
    echo "</td>
    <td class='text-right'>";
    if (strpos($rsconnect["principal_amount"], ',') !== false) {
        echo $rsconnect["principal_amount"];
    } else {
        echo number_format($rsconnect["principal_amount"], 2, '.', ',');
    }

    // . number_format($rsconnect["principal_amount"], 2, '.', ',')  .
    echo "</td>
    <td class='text-right'>";
    if (strpos($rsconnect["interest_amount"], ',') !== false) {
        echo $rsconnect["interest_amount"];
    } else {
        echo number_format($rsconnect["interest_amount"], 2, '.', ',');
    }

    // . number_format($rsconnect["interest_amount"], 2, '.', ',') . 
    echo "</td>
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