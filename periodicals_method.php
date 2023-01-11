<?php include("inc_head.php"); ?>
<div class="bg-gray02">
    <div class="home__bg01">
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
                            <li class="breadcrumb-item"><a href="seminar_contribute.php">期刊投稿</a></li>
                            <li class="breadcrumb-item active" aria-current="page">投稿辦法</li>
                        </ol>
                    </nav>
                    <!-- breadcrumb end -->
                    <!-- 子HTML 開始 -->
                    <div class="subhtml">
                        <h3 style="text-align: center;">中華資訊與科技教育學會</h3>

                        <h4 style="text-align: center;">期刊投稿辦法</h4>

                        <ul class="list_tw">
                            <li>
                                <p>來稿請用電腦橫打（檔案名稱請註明：投稿題目及作者姓名；檔案內容第一頁請註明中英文投稿題目、作者中英文姓名、中英文作者所屬單位及職稱及電子郵址），中文文長以一萬五千字為原則，至多請勿超過兩萬字。</p>
                            </li>
                            <li>
                                <p>來稿之編排順序為中文摘要、英文摘要、正文（註解請採當頁註方式）、附錄、參考文獻；文稿正文及中英文摘要之中，請勿出現任何個人資料。</p>
                            </li>
                            <li>
                                <p>中文摘要請勿超過350字，英文摘要請勿超過200字，並請列出中、英文關鍵字各三至五個。</p>
                            </li>
                            <li>
                                <p>將文稿上傳至投稿連結 <a href="https://portal.cacet.org/event/submission" target="_blank">https://portal.cacet.org/event/submission</a> 進行投稿。</p>
                            </li>
                            <li>
                                <p>稿件一但接受並且錄取，一律不可增減共同作者，請於投稿送出前做好確認。</p>
                            </li>
                            <li>
                                <p>文稿確定刊登後， 若有致謝詞，請於通知文稿接受刊登後再加上，並置於正文後，長度請勿超過六十字。</p>
                            </li>
                            <li>
                                <p>來稿正文撰寫形式、附註及參考文獻，請用APA格式；若不符合此項規定者，本刊得退回稿件或請作者修改後再行投稿。</p>
                            </li>
                        </ul>
                    </div>

                    <!-- 我同意 -->
                    <form class="text-center" method="post" enctype="multipart/form-data" action="periodicals_inner.php">
                        <div class="mb-3 form-check mt-3 mt-md-5">
                            <input type="checkbox" class="form-check-input v_10" id="exampleCheck1" value="agree" onClick="">
                            <label class="form-check-label" for="exampleCheck1">我已閱讀並同意投稿辦法</label>
                        </div>
                        <a class="btn btn-outline-third me-2" href="javascript:history.go(-1);">返回</a>
                        <button type="submit" class="btn btn-third disabled" id="toggleBtn">投稿</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("inc_footer.php"); ?>
<script>
    // toggle btn
    $('#exampleCheck1').on('click', function(e) {
        if ($(this).is(':checked')) {
            $('#toggleBtn').removeClass("disabled");
        } else {
            $('#toggleBtn').addClass("disabled");
        }
    });
</script>