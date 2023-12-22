<?php
ob_start();
session_start();
if ($_SESSION['id'] == "") {
    header("Location: ./../");
}
?>
<nav class="main-header navbar navbar-expand-md navbar-light navbar-primary">

    <a class="navbar-brand py-0" role="button">
        <img src="../asset/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light text-sm text-white d-none d-sm-inline">ระบบการติดตามลูกหนี้ที่ค้างชำระของกองทุนเงินให้กู้ยืมเพื่อการศึกษา</span>

        <span class="brand-text font-weight-light text-sm text-white d-sm-none">ระบบการติดตามลูกหนี้ที่ค้างชำระ</span>
    </a>


</nav>