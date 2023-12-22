<?php
include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();

$connect->sql = "SELECT * FROM guarantor_address WHERE guarantor_id='" . $_GET['id'] . "'";
$connect->queryData();
$i = 1;
$principal_percentage = 0;
$principal_amount = 0;
$sumtotal_formatted = 0;
while ($rsconnect = $connect->fetch_AssocData()) {
    echo "<tr>
        <td class='text-center'>" . $rsconnect["address_type"] . "</td>
        <td class='text-center'>" . $rsconnect["address"] . "</td>
        <td class='text-center'>" . $rsconnect["zipcode"] . "</td>
        <td class='text-center'>" . $rsconnect["telephone"] . "</td>
        </tr>";
}
