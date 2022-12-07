<!-- 會議投稿 -->
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
                            <li class="breadcrumb-item" aria-current="page">會議投稿</li>
                            <li class="breadcrumb-item active" aria-current="page">會議投稿</li>
                        </ol>
                    </nav>
                    <!-- breadcrumb end -->
                    <h2 class="my-lg-4 my-2 h3 border-start border-dark ps-2">會議投稿</h2>
                    <!-- 表格 開始 -->
                    <table class="contribute align-middle  table table-bordered border-third table-hover mt-3 mt-lg-5 ">
                        <thead class="text-white bg-secondary">
                            <tr>
                                <th class="h5">投稿主題</th>
                                <th class="h5">截稿時間</th>
                                <th class="h5">投稿狀態</th>
                                <th class="h5">功能</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th >ICEET 2023 數位學習與教育科技國際研討會</th>
                                <td>2023-05-24</td>
                                <td>開放投稿</td>
                                <td>
                                    <a href="seminar_method.php" class="btn btn-outline-primary" >線上投稿</a>
                                </td>
                            </tr>
                            <tr>
                                <th>ICEET 2022 數位學習與教育科技國際研討會</th>
                                <td>2022-05-24</td>
                                <td>投稿已截止</td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <th>ICEET 2021 數位學習與教育科技國際研討會</th>
                                <td>2021-05-24</td>
                                <td>投稿已截止</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- 表格 結束 -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("inc_footer.php"); ?>
<script>

</script>