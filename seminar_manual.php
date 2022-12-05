<!-- 會議投稿說明 頁面 -->
<?php include("inc_head.php"); ?>
<div class="home bg-gray02">
    <div class="page__bg01">
        <!-- 導航欄 開始 -->
        <?php include("inc_navbar.php"); ?>
        <!-- 導航欄 結束 -->

        <!-- 主要內容 開始 -->
        <div class="container pb-3 pb-lg-5">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb start -->
                    <nav class="mt-3 mt-md-5" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">首頁</a></li>
                            <li class="breadcrumb-item active" aria-current="page">投稿說明</li>
                        </ol>
                    </nav>
                    <!-- breadcrumb end -->

                    <h2 class="my-lg-4 my-2 h3 border-start border-dark ps-2">投稿說明</h2>
                    <div class="sem">
                        <div class="sem__box">
                            <div class="py-2 text-center">
                                <button id="prev" class="btn btn-outline-third me-2">上一頁</button>
                                <button id="next" class="btn btn-outline-third me-2">下一頁</button>

                                <span>Page: <span id="page_num"></span> / <span id="page_count"></span></span>

                                <a download href="storage/1-投稿說明.pdf" class="ms-2">下載</a>
                            </div>
                            <section class="sem__pdf">
                                <canvas id="the-canvas"></canvas>
                            </section>
                        </div>
                    </div>
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
    var url = 'storage/1-投稿說明.pdf';

    var pdfjsLib = window['pdfjs-dist/build/pdf'];
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'dist/pdfjs/pdf.worker.js';

    var pdfDoc = null,
        pageNum = 1,
        pageRendering = true,
        pageNumPending = null,
        scale = 3,
        canvas = document.getElementById('the-canvas'),
        ctx = canvas.getContext('2d');

    //
    function renderPage(num) {
        pageRendering = true;
        pdfDoc.getPage(num).then(function(page) {
            var viewport = page.getViewport({
                scale: scale
            });
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            var renderContext = {
                canvasContext: ctx,
                viewport: viewport
            };
            var renderTask = page.render(renderContext);

            renderTask.promise.then(function() {
                pageRendering = false;
                if (pageNumPending !== null) {
                    renderPage(pageNumPending);
                    pageNumPending = null;
                }
            });
        });
        //
        document.getElementById('page_num').textContent = num;
    }

    //
    function queueRenderPage(num) {
        if (pageRendering) {
            pageNumPending = num;
        } else {
            renderPage(num);
        }
    }

    //上一頁按鈕
    function onPrevPage() {
        if (pageNum <= 1) {
            return;
        }
        pageNum--;
        queueRenderPage(pageNum);
    }
    document.getElementById('prev').addEventListener('click', onPrevPage);

    //下一頁按鈕
    function onNextPage() {
        if (pageNum >= pdfDoc.numPages) {
            return;
        }
        pageNum++;
        queueRenderPage(pageNum);
    }
    document.getElementById('next').addEventListener('click', onNextPage);

    //顯示頁數
    pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
        pdfDoc = pdfDoc_;
        document.getElementById('page_count').textContent = pdfDoc.numPages;
        renderPage(pageNum);
    });

    // pdf.js設定 結束
</script>