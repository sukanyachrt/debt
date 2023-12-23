<?php include('../include/header.php') ?>
<style>
    #pages {
        text-align: center;
    }

    .page {
        width: 95%;
        margin: 10px;
        box-shadow: 0px 0px 5px rgba(50, 50, 50, .4);
        animation: pageIn 1s ease;
        transition: all 1s ease, width 0.2s ease;
    }

    @keyframes pageIn {
        0% {
            transform: translateX(-300px);
            opacity: 0;
        }

        100% {
            transform: translateX(0px);
            opacity: 1;
        }
    }
</style>
<div class="wrapper">
    <?php include("../include/topmenu.php") ?>
    <div class="content-wrapper">
        <?php include("../include/navmenu.php") ?>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">จดหมายทวงถาม</a></li>
                            <li class="breadcrumb-item active">จดหมายการไกล่เกลี่ย</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="p-0 mb-3">
                            <div class="row invoice-info">
                                <div class="col-12 invoice-col">
                                    <div id="pages"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php include("../include/script.php") ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.2/pdf.js"></script>
<script>
    dataFile();
    function dataFile() {
        $.ajax({
            url: "../services/letter/data.php?v=thac",
            type: "GET",
            success: function(Res) {
                $.each(Res, function(index, item) {
                   loadFilepdf(`../services/pdf/${item}`)
                });
            }
        });
    }


    pdfjsLib.GlobalWorkerOptions.workerSrc =
        'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.2/pdf.worker.js';

    function loadFilepdf(pdfUrl) {
        pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
            // you can now use *pdf* here
            console.log("the pdf has", pdf.numPages, "page(s).");
            for (var i = 0; i < pdf.numPages; i++) {
                (function(pageNum) {
                    pdf.getPage(i + 1).then(function(page) {
                        // you can now use *page* here
                        var viewport = page.getViewport(2.0);

                        var canvas = document.createElement("canvas");
                        canvas.className = "page";
                        document.querySelector("#pages").appendChild(canvas);
                        canvas.height = viewport.height;
                        canvas.width = viewport.width;


                        page.render({
                            canvasContext: canvas.getContext('2d'),
                            viewport: viewport
                        }).promise.then(function() {
                            console.log('Page rendered');
                        });
                        page.getTextContent().then(function(text) {
                            console.log(text);
                        });
                    });
                })(i + 1);
            }

        });
    }

</script>
</body>

</html>