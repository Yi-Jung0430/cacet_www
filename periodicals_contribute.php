<!-- 期刊投稿 -->
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
                            <li class="breadcrumb-item" aria-current="page">期刊投稿</li>
                            <li class="breadcrumb-item active" aria-current="page">期刊投稿</li>
                        </ol>
                    </nav>
                    <!-- breadcrumb end -->
                    <h2 class="my-lg-4 my-2 h3 border-start border-dark ps-2">期刊投稿</h2>
                </div>
                <div class="col-12">
                    <!-- 表格 開始 -->
                    <div class="table-responsive">
                        <table class="table contribute align-middle table-bordered border-third table-hover mt-1 mt-lg-3 ">
                            <thead class="text-white bg-third">
                                <tr>
                                    <th class="text-nowrap">投稿主題</th>
                                    <th class="text-nowrap">截稿時間</th>
                                    <th class="text-nowrap">投稿狀態</th>
                                    <th class="text-nowrap">功能</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-nowrap">《教育科技與學習》期刊</th>
                                    <td class="text-nowrap">2023-05-24</td>
                                    <td class="text-nowrap">開放投稿</td>
                                    <td class="text-nowrap">
                                        <a href="periodicals_method.php" class="btn btn-outline-third">線上投稿</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap">《教育科技與學習》期刊</th>
                                    <td class="text-nowrap">2023-05-24</td>
                                    <td class="text-nowrap">未開放投稿</td>
                                    <td class="text-nowrap">
                                        <a href="periodicals_method.php" class="btn btn-outline-third disabled">線上投稿</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap">《教育科技與學習》期刊</th>
                                    <td class="text-nowrap">2023-05-24</td>
                                    <td class="text-nowrap">開放投稿</td>
                                    <td>
                                        <p class="border-0 bg-transparent mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="此帳號為委員，如您需投稿，請註冊新的帳號。">
                                            您沒有權限投稿此項目
                                            <i class="bi bi-exclamation-circle text-primary fs-5"></i>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- 表格 結束 -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include("inc_footer.php"); ?>
<script>

</script>