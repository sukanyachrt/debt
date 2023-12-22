<?php
header('Content-Type: application/json');
session_start(); // เริ่ม Session

if (isset($_POST['status']) && $_POST['status'] === 'ok') {
    $data = $_POST['data'];
    $_SESSION['id'] = $data['id'];
    $_SESSION['prefix'] =$data['prefix'];
    $_SESSION['fname'] =$data['fname'];
    $_SESSION['lname'] = $data['lname'];
    echo json_encode(["data"=>"ok","page"=>"home"]);
    
} else {
    echo json_encode(["data"=>"no"]);
}
