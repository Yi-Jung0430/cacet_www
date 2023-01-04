<!-- 期刊投稿說明 頁面 -->
<?php include("inc_head.php"); ?>
<div class="home bg-gray02">
    <div class="home__bg01">
        <!-- 導航欄 開始 -->
        <?php include("inc_navbar.php"); ?>
        <!-- 導航欄 結束 -->

        <!-- 主要內容 開始 -->
        <div class="container pb-3 pb-lg-5">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb start -->
                    <nav class="my-3 my-md-4" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">首頁</a></li>
                            <li class="breadcrumb-item" aria-current="page">期刊投稿</li>
                            <li class="breadcrumb-item active" aria-current="page">徵稿辦法</li>
                        </ol>
                    </nav>
                    <!-- breadcrumb end -->

                    
                    <!-- 子HTML 開始 -->
                    <div class="subhtml">
                        <p>等待後臺 ckeditor 內容</p>

                    </div>
                    <!-- 子HTML 結束 -->
                </div>
            </div>
        </div>
    </div>
    <!-- 主要內容 結束 -->
</div>
</div>
<?php include("inc_footer.php"); ?>
<script>
    // pdf.js設定 開始
    //PDF檔案路徑
    // var url = 'storage/1-投稿說明.pdf';

    // var pdfjsLib = window['pdfjs-dist/build/pdf'];
    // pdfjsLib.GlobalWorkerOptions.workerSrc = 'dist/pdfjs/pdf.worker.js';

    // var pdfDoc = null,
    //     pageNum = 1,
    //     pageRendering = true,
    //     pageNumPending = null,
    //     scale = 3,
    //     canvas = document.getElementById('the-canvas'),
    //     ctx = canvas.getContext('2d');

    // //
    // function renderPage(num) {
    //     pageRendering = true;
    //     pdfDoc.getPage(num).then(function(page) {
    //         var viewport = page.getViewport({
    //             scale: scale
    //         });
    //         canvas.height = viewport.height;
    //         canvas.width = viewport.width;

    //         var renderContext = {
    //             canvasContext: ctx,
    //             viewport: viewport
    //         };
    //         var renderTask = page.render(renderContext);

    //         renderTask.promise.then(function() {
    //             pageRendering = false;
    //             if (pageNumPending !== null) {
    //                 renderPage(pageNumPending);
    //                 pageNumPending = null;
    //             }
    //         });
    //     });
    //     //
    //     document.getElementById('page_num').textContent = num;
    // }

    // //
    // function queueRenderPage(num) {
    //     if (pageRendering) {
    //         pageNumPending = num;
    //     } else {
    //         renderPage(num);
    //     }
    // }

    // //上一頁按鈕
    // function onPrevPage() {
    //     if (pageNum <= 1) {
    //         return;
    //     }
    //     pageNum--;
    //     queueRenderPage(pageNum);
    // }
    // document.getElementById('prev').addEventListener('click', onPrevPage);

    // //下一頁按鈕
    // function onNextPage() {
    //     if (pageNum >= pdfDoc.numPages) {
    //         return;
    //     }
    //     pageNum++;
    //     queueRenderPage(pageNum);
    // }
    // document.getElementById('next').addEventListener('click', onNextPage);

    // //顯示頁數
    // pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
    //     pdfDoc = pdfDoc_;
    //     document.getElementById('page_count').textContent = pdfDoc.numPages;
    //     renderPage(pageNum);
    // });

    // pdf.js設定 結束
</script>