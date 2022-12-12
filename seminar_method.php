<!-- 每頁模板 複製用 -->
<?php include("inc_head.php"); ?>
<div class="bg-gray02">
    <div class="page__bg02">
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
                            <li class="breadcrumb-item"><a href="seminar_contribute.php">會議投稿</a></li>
                            <li class="breadcrumb-item active" aria-current="page">投稿辦法</li>
                        </ol>
                    </nav>
                    <!-- breadcrumb end -->

                    <h3 style="text-align: center;">中華資訊與科技教育學會</h3>

                    <h4 style="text-align: center;">會議論文投稿辦法</h4>

                    <ul>
                        <li>(一)口頭發表 (8-10頁為限)</li>
                        <li>(二)海報發表 (2-4頁為限)</li>
                        <li>(三)全文截稿日：2023年04月28日(五)</li>
                        <li>(四)備註說明：
                            <ol>
                                <li>海報及口頭發表內容皆須含中英文篇名、中英文摘要、中英文關鍵字、作者中英文姓名、作者中英文單位名稱、正文、圖表、參考文獻、附錄等，中文字體為標楷體、英文字體為Times New Roman）。</li>
                                <li>檔案上傳至投稿連結，檔案名稱請寫上【論文名稱（投稿者姓名+發表方式）】例如：頭前溪數位導覽員培育(林小明海報)。投稿者發表方式，本研討會將根據來稿議題安排議程，故保留變更投稿者發表方式權利，如造成不便，還請見諒！</li>
                                <li>投稿後，稿件一但接受並且錄取，一律不可增減共同作者，請於投稿送出前做好確認。</li>
                            </ol>
                        </li>
                    </ul>

                    <!--  -->
                    <form class="text-center" method="post" enctype="multipart/form-data" action="seminar_inner.php">
                        <div class="mb-3 form-check mt-3 mt-md-5">
                            <input type="checkbox" class="form-check-input v_10" id="exampleCheck1" value="agree" onClick="">
                            <label class="form-check-label" for="exampleCheck1">我已閱讀並同意投稿辦法</label>
                        </div>
                        <a class="btn btn-outline-primary me-2" href="javascript:history.go(-1);">返回</a>
                        <button type="submit" class="btn btn-primary disabled" id="toggleBtn">投稿</button>
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
        if($(this).is(':checked')) {
            $('#toggleBtn').removeClass("disabled");
        } else {
            $('#toggleBtn').addClass("disabled");
        }
    });
</script>