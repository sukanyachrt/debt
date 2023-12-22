<?php include('../include/header.php') ?>
<div class="wrapper">
    <?php include("../include/topmenu.php") ?>
    <div class="content-wrapper">
        <?php include("../include/navmenu.php") ?>
        <div class="content text-center">
            <div class="bl_wrapper">
                <img src="../asset/img/S__3563530-removebg-preview.png" class="img-fluid" />
                <a class="btn_home text-lg">สวัสดีคุณ <?php echo $_SESSION['fname']." ".$_SESSION['lname'] ?> </a>
            </div>
        </div>
    </div>
</div>
<?php include("../include/script.php") ?>
</body>
<style>
    .bl_wrapper {
        margin: 10px auto;

    }

    .btn_home {
        display: block;
        color: #fff;
        font-weight: 700;
        text-align: center;
        margin: 0 auto;
        padding: 10px;
        border-radius: 10px;
        color: #73c2fd;
        text-transform: uppercase;
        text-decoration: none;
        transition: 0.2s all;
        z-index: 3;
    }
</style>
</html>