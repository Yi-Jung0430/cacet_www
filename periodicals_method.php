
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

                        <h4 style="text-align: center;">期刊論文投稿辦法</h4>

                        <p>~等待後臺的 Ck editor 內容~</p>

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