
<?php include("inc_head.php"); ?>
<div class="bg-gray02">
    <div class="home__bg01">
        <!-- 導航欄 開始 -->
        <?php include("inc_navbar.php"); ?>
        <!-- 導航欄 結束 -->

        <!-- 麵包屑+標題 內容 開始 -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb start -->
                    <nav class="mt-1 mt-md-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">首頁</a></li>
                            <li class="breadcrumb-item" aria-current="page">期刊投稿</li>
                            <li class="breadcrumb-item active" aria-current="page">撰稿原則</li>
                        </ol>
                    </nav>
                    <!-- breadcrumb end -->
                    <h2 class="my-lg-4 my-2 h3 border-start border-dark ps-2">撰稿原則</h2>
                </div>
            </div>
        </div>
        <!-- 麵包屑+標題 內容 結束 -->

        <!-- 主要內容 開始 -->
        <div class="container-md  pb-3 pb-lg-5">
            <div class="row rule">
                <div class="rule__box box col-12">
                    <section class="card rule__nav">
                        <ul class="list-group list-group-flush sub_nav tab-title">
                            <li class="list-group-item active">
                                <a href="javascript:;" data-tablink="one">撰稿原則</a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;" data-tablink="two">正文文稿書寫格式</a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;" data-tablink="three">APA格式範例</a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;" data-tablink="four">論文內文範例</a>
                            </li>
                        </ul>
                        <button type="button" class="sub_nav_btn btn btn-primary" onClick="sub_nav_btn()">
                            <i class="bi bi-caret-right-fill"></i>
                            <i class="bi bi-caret-left-fill"></i>
                        </button>
                    </section>

                    <!-- TAB 內容 -->
                    <div class="tab-inner-wrap">
                        <div id="one" class="tab-inner">
                            <section class="pdf__box">
                                <div class="py-2 text-center">
                                    <button id="prev_01" class="prev_01 btn btn-outline-third me-2">上一頁</button>
                                    <button id="next_01" class="next_01 btn btn-outline-third me-2">下一頁</button>

                                    <span class="d-block d-sm-inline-block">Page:
                                        <span id="page_num_01" class="page_num_01"></span>
                                        /
                                        <span id="page_count_01" class="page_count_01"></span>
                                    </span>

                                    <a download href="storage/B2-撰稿原則.pdf" class="ms-2">下載</a>
                                </div>
                                <div class="rule__pdf">
                                    <canvas id="the-canvas_01"></canvas>
                                </div>
                            </section>
                        </div>
                        <div id="two" class="tab-inner">
                            <section class="pdf__box">
                                <div class="py-2 text-center">
                                    <button id="prev_02" class="btn btn-outline-third me-2">上一頁</button>
                                    <button id="next_02" class="btn btn-outline-third me-2">下一頁</button>

                                    <span>Page:
                                        <span id="page_num_02"></span>
                                        /
                                        <span id="page_count_02"></span>
                                    </span>

                                    <a download href="storage/B3-正文文稿書寫格式.pdf" class="ms-2">下載</a>
                                </div>
                                <div class="rule__pdf">
                                    <canvas id="the-canvas_02"></canvas>
                                </div>
                            </section>
                        </div>
                        <div id="three" class="tab-inner">
                            <section class="pdf__box">
                                <div class="py-2 text-center">
                                    <button id="prev_03" class="btn btn-outline-third me-2">上一頁</button>
                                    <button id="next_03" class="btn btn-outline-third me-2">下一頁</button>

                                    <span>Page:
                                        <span id="page_num_03"></span>
                                        /
                                        <span id="page_count_03"></span>
                                    </span>

                                    <a download href="storage/B4-APA格式範例.pdf" class="ms-2">下載</a>
                                </div>
                                <div class="rule__pdf">
                                    <canvas id="the-canvas_03"></canvas>
                                </div>
                            </section>
                        </div>
                        <div id="four" class="tab-inner">
                            <section class="pdf__box">
                                <div class="py-2 text-center">
                                    <button id="prev_04" class="btn btn-outline-third me-2">上一頁</button>
                                    <button id="next_04" class="btn btn-outline-third me-2">下一頁</button>

                                    <span>Page:
                                        <span id="page_num_04"></span>
                                        /
                                        <span id="page_count_04"></span>
                                    </span>

                                    <a download href="storage/英語科STEAM課程-對國小學生運算思維與英語學習之影響.pdf" class="ms-2">下載</a>
                                </div>
                                <div class="rule__pdf">
                                    <canvas id="the-canvas_04"></canvas>
                                </div>
                            </section>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12">
                <!-- go to top -->
                <a href="#top" class="text-third top-icon d-block position-relative w-100">
                    <i class="bi bi-arrow-up-circle d-block position-absolute bottom-0 end-0"></i>
                </a>
            </div>

        </div>
        <!-- 主要內容 結束 -->
    </div>
</div>
<?php include("inc_footer.php"); ?>
<script>
    // pdf.js_01 設定 開始
    // PDF檔案路徑
    var url_01 = 'storage/B2-撰稿原則.pdf';

    var pdfjsLib_01 = window['pdfjs-dist/build/pdf'];
    pdfjsLib_01.GlobalWorkerOptions.workerSrc = 'dist/pdfjs/pdf.worker.js';

    var pdfDoc_01 = null,
        pageNum_01 = 1,
        pageRendering_01 = true,
        pageNumPending_01 = null,
        scale_01 = 3,
        canvas_01 = document.getElementById('the-canvas_01'),
        ctx_01 = canvas_01.getContext('2d');

    // 
    function renderPage_01(num) {
        pageRendering_01 = true;
        pdfDoc_01.getPage(num).then(function(page) {
            var viewport_01 = page.getViewport({
                scale: scale_01
            });
            canvas_01.height = viewport_01.height;
            canvas_01.width = viewport_01.width;

            var renderContext_01 = {
                canvasContext: ctx_01,
                viewport: viewport_01
            };
            var renderTask_01 = page.render(renderContext_01);

            renderTask_01.promise.then(function() {
                pageRendering_01 = false;
                if (pageNumPending_01 !== null) {
                    renderPage_01(pageNumPending_01);
                    pageNumPending_01 = null;
                }
            });
        });
        //
        document.getElementById('page_num_01').textContent = num;
    }

    //
    function queueRenderPage_01(num) {
        if (pageRendering_01) {
            pageNumPending_01 = num;
        } else {
            renderPage_01(num);
        }
    }

    // 上方
    //上一頁按鈕
    function onPrevPage_01() {
        if (pageNum_01 <= 1) {
            return;
        }
        pageNum_01--;
        queueRenderPage_01(pageNum_01);
    }
    document.getElementById('prev_01').addEventListener('click', onPrevPage_01);

    //下一頁按鈕
    function onNextPage_01() {
        if (pageNum_01 >= pdfDoc_01.numPages) {
            return;
        }
        pageNum_01++;
        queueRenderPage_01(pageNum_01);
    }
    document.getElementById('next_01').addEventListener('click', onNextPage_01);


    //顯示頁數
    pdfjsLib_01.getDocument(url_01).promise.then(function(pdfDoc_) {
        pdfDoc_01 = pdfDoc_;
        document.getElementById('page_count_01').textContent = pdfDoc_01.numPages;
        renderPage_01(pageNum_01);
    });

    // pdf.js_01 設定 結束


    // pdf.js_02 設定 開始
    // PDF檔案路徑
    var url_02 = 'storage/B3-正文文稿書寫格式.pdf';

    var pdfjsLib_02 = window['pdfjs-dist/build/pdf'];
    pdfjsLib_02.GlobalWorkerOptions.workerSrc = 'dist/pdfjs/pdf.worker.js';

    var pdfDoc_02 = null,
        pageNum_02 = 1,
        pageRendering_02 = true,
        pageNumPending_02 = null,
        scale_02 = 3,
        canvas_02 = document.getElementById('the-canvas_02'),
        ctx_02 = canvas_02.getContext('2d');

    // 
    function renderPage_02(num) {
        pageRendering_02 = true;
        pdfDoc_02.getPage(num).then(function(page) {
            var viewport_02 = page.getViewport({
                scale: scale_02
            });
            canvas_02.height = viewport_02.height;
            canvas_02.width = viewport_02.width;

            var renderContext_02 = {
                canvasContext: ctx_02,
                viewport: viewport_02
            };
            var renderTask_02 = page.render(renderContext_02);

            renderTask_02.promise.then(function() {
                pageRendering_02 = false;
                if (pageNumPending_02 !== null) {
                    renderPage_02(pageNumPending_02);
                    pageNumPending_02 = null;
                }
            });
        });
        //
        document.getElementById('page_num_02').textContent = num;
    }

    //
    function queueRenderPage_02(num) {
        if (pageRendering_02) {
            pageNumPending_02 = num;
        } else {
            renderPage_02(num);
        }
    }

    //上一頁按鈕
    function onPrevPage_02() {
        if (pageNum_02 <= 1) {
            return;
        }
        pageNum_02--;
        queueRenderPage_02(pageNum_02);
    }
    document.getElementById('prev_02').addEventListener('click', onPrevPage_02);

    //下一頁按鈕
    function onNextPage_02() {
        if (pageNum_02 >= pdfDoc_02.numPages) {
            return;
        }
        pageNum_02++;
        queueRenderPage_02(pageNum_02);
    }
    document.getElementById('next_02').addEventListener('click', onNextPage_02);

    //顯示頁數
    pdfjsLib_02.getDocument(url_02).promise.then(function(pdfDoc_) {
        pdfDoc_02 = pdfDoc_;
        document.getElementById('page_count_02').textContent = pdfDoc_02.numPages;
        renderPage_02(pageNum_02);
    });

    // pdf.js_02 設定 結束


    // pdf.js_03 設定 開始
    // PDF檔案路徑
    var url_03 = 'storage/B4-APA格式範例.pdf';

    var pdfjsLib_03 = window['pdfjs-dist/build/pdf'];
    pdfjsLib_03.GlobalWorkerOptions.workerSrc = 'dist/pdfjs/pdf.worker.js';

    var pdfDoc_03 = null,
        pageNum_03 = 1,
        pageRendering_03 = true,
        pageNumPending_03 = null,
        scale_03 = 3,
        canvas_03 = document.getElementById('the-canvas_03'),
        ctx_03 = canvas_03.getContext('2d');

    // 
    function renderPage_03(num) {
        pageRendering_03 = true;
        pdfDoc_03.getPage(num).then(function(page) {
            var viewport_03 = page.getViewport({
                scale: scale_03
            });
            canvas_03.height = viewport_03.height;
            canvas_03.width = viewport_03.width;

            var renderContext_03 = {
                canvasContext: ctx_03,
                viewport: viewport_03
            };
            var renderTask_03 = page.render(renderContext_03);

            renderTask_03.promise.then(function() {
                pageRendering_03 = false;
                if (pageNumPending_03 !== null) {
                    renderPage_03(pageNumPending_03);
                    pageNumPending_03 = null;
                }
            });
        });
        //
        document.getElementById('page_num_03').textContent = num;
    }

    //
    function queueRenderPage_03(num) {
        if (pageRendering_03) {
            pageNumPending_03 = num;
        } else {
            renderPage_03(num);
        }
    }

    //上一頁按鈕
    function onPrevPage_03() {
        if (pageNum_03 <= 1) {
            return;
        }
        pageNum_03--;
        queueRenderPage_03(pageNum_03);
    }
    document.getElementById('prev_03').addEventListener('click', onPrevPage_03);

    //下一頁按鈕
    function onNextPage_03() {
        if (pageNum_03 >= pdfDoc_03.numPages) {
            return;
        }
        pageNum_03++;
        queueRenderPage_03(pageNum_03);
    }
    document.getElementById('next_03').addEventListener('click', onNextPage_03);

    //顯示頁數
    pdfjsLib_03.getDocument(url_03).promise.then(function(pdfDoc_) {
        pdfDoc_03 = pdfDoc_;
        document.getElementById('page_count_03').textContent = pdfDoc_03.numPages;
        renderPage_03(pageNum_03);
    });

    // pdf.js_03 設定 結束

    // pdf.js_04 設定 開始
    // PDF檔案路徑
    var url_04 = 'storage/英語科STEAM課程-對國小學生運算思維與英語學習之影響.pdf';

    var pdfjsLib_04 = window['pdfjs-dist/build/pdf'];
    pdfjsLib_04.GlobalWorkerOptions.workerSrc = 'dist/pdfjs/pdf.worker.js';

    var pdfDoc_04 = null,
        pageNum_04 = 1,
        pageRendering_04 = true,
        pageNumPending_04 = null,
        scale_04 = 3,
        canvas_04 = document.getElementById('the-canvas_04'),
        ctx_04 = canvas_04.getContext('2d');

    // 
    function renderPage_04(num) {
        pageRendering_04 = true;
        pdfDoc_04.getPage(num).then(function(page) {
            var viewport_04 = page.getViewport({
                scale: scale_04
            });
            canvas_04.height = viewport_04.height;
            canvas_04.width = viewport_04.width;

            var renderContext_04 = {
                canvasContext: ctx_04,
                viewport: viewport_04
            };
            var renderTask_04 = page.render(renderContext_04);

            renderTask_04.promise.then(function() {
                pageRendering_04 = false;
                if (pageNumPending_04 !== null) {
                    renderPage_04(pageNumPending_04);
                    pageNumPending_04 = null;
                }
            });
        });
        //
        document.getElementById('page_num_04').textContent = num;
    }

    //
    function queueRenderPage_04(num) {
        if (pageRendering_04) {
            pageNumPending_04 = num;
        } else {
            renderPage_04(num);
        }
    }

    //上一頁按鈕
    function onPrevPage_04() {
        if (pageNum_04 <= 1) {
            return;
        }
        pageNum_04--;
        queueRenderPage_04(pageNum_04);
    }
    document.getElementById('prev_04').addEventListener('click', onPrevPage_04);

    //下一頁按鈕
    function onNextPage_04() {
        if (pageNum_04 >= pdfDoc_04.numPages) {
            return;
        }
        pageNum_04++;
        queueRenderPage_04(pageNum_04);
    }
    document.getElementById('next_04').addEventListener('click', onNextPage_04);

    //顯示頁數
    pdfjsLib_04.getDocument(url_04).promise.then(function(pdfDoc_) {
        pdfDoc_04 = pdfDoc_;
        document.getElementById('page_count_04').textContent = pdfDoc_04.numPages;
        renderPage_04(pageNum_04);
    });

    // pdf.js_04 設定 結束




    // tab 開始
    $(document).ready(function() {
        tabCutover();
    });

    /*tab 收合*/
    function tabCutover() {

        $(".tab-title li.active").each(function() {
            var tablink = $(this).find("a").data("tablink");

            $('#' + tablink).show().siblings(".tab-inner").hide();
        });

        $(".tab-title li").click(function() {
            $('#' + $(this).find("a").data("tablink")).show().siblings(".tab-inner").hide();
            $(this).addClass("active").siblings(".active").removeClass("active");
        });
    }


    // tab 結束


    function sub_nav_btn() {
        $(".box").toggleClass("open");
    }
</script>