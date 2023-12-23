<?php include('../include/header.php') ?>
<div class="wrapper">
    <?php include("../include/topmenu.php") ?>
    <div class="content-wrapper">
        <?php include("../include/navmenu.php") ?>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h6>ค้นหาลูกหนี้</h6>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">ตรวจสอบข้อมูลลูกหนี้</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-primary">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus text-primary"></i>
                                    </button>
                                    ค้นหาลูกหนี้
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="txtidcard" class="text-gray">เลขประจำตัวประชาชน</label>
                                            <input type="text" class="form-control" id="txtidcard" placeholder="เลขประจำตัวประชาชน">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="txtfname" class="text-gray">ชื่อ</label>
                                            <input type="text" class="form-control" id="txtfname" placeholder="ชื่อ">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="txtlname" class="text-gray">นามสกุล</label>
                                            <input type="text" class="form-control" id="txtlname" placeholder="นามสกุล">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="txtnoaccount" class="text-gray">เลขที่บัญชีเงินกู้</label>
                                            <input type="text" class="form-control" id="txtnoaccount" placeholder="เลขที่บัญชีเงินกู้">
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mt-2">
                                        <button type="button" class="btn btn-primary" onclick="searchData();"> <i class="fas fa-search"></i> ค้นหาข้อมูล </button>
                                        &nbsp;
                                        <button type="button" class="btn btn-default" onclick="resetData();"> <i class="fas fa-times delete-row text-gray"></i> ล้าง </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-gray">
                                    ผลการค้นหา
                                </h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered table-hover text-sm" id="tbDebt">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th class="text-center">ลำดับที่</th>
                                            <th class="text-center">ประเภทบัญชีเงินกู้</th>
                                            <th class="text-center">เลขที่บัญชีเงินกู้</th>
                                            <th class="text-center">ชื่อผู้กู้</th>
                                            <th class="text-center">สถานะบัญชีผู้กู้</th>
                                            <th class="text-center">กลุ่มผู้กู้ยืม</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php include("../include/script.php") ?>
<script>
    //ค้นหาข้อมูล
    function searchData() {
        let data = {
            idcard: $('#txtidcard').val(),
            fname: $('#txtfname').val(),
            lname: $('#txtlname').val(),
            noaccount: $('#txtnoaccount').val(),

        }
        $.ajax({
            url: "../services/debt-account/data.php?v=searchdata",
            type: "POST",
            cache: false,
            data: {
                data: data
            },
            success: function(Res) {
                console.log(Res);
                var tbDebt = '';
                $.each(Res, function(index, item) {
                    tbDebt += `<tr>
                        <td class="text-center">${index+1}</td>
                        <td>${item.type_account}</td>
                        <td>${item.no_account}</td>
                        <td class="text-center">${item.prefix}${item.fname} ${item.lname}</td>
                        <td class="text-center">${item.status_personal} </td>
                        <td class="text-center">${item.loan_group} </td>
                        <td class="text-center">
                            <a href="detail.php?id=${item.id}" class="text-gray">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>`
                });

                $('#tbDebt tbody').html(tbDebt)
            }
        });
    }

    function resetData() {
            $('#txtidcard').val('')
            $('#txtfname').val('')
            $('#txtlname').val('')
            $('#txtnoaccount').val('')
            searchData()
    }
</script>
</body>

</html>