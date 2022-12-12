<!-- 每頁模板 複製用 -->
<?php include("inc_head.php"); ?>
<div class="bg-gray02">
    <div class="page__bg02">
        <!-- 導航欄 開始 -->
        <?php include("inc_navbar_member.php"); ?>
        <!-- 導航欄 結束 -->

        <!-- 成功訊息 開始 -->
        <div class="message_print_ok ">
            <table>
                <tr valign="top">
                    <td class="message_text">
                        <p>您的審查已提交成功!</p>
                    </td>
                    <td class="message_close" valign="middle">
                        <a href="javascript:void(0);" onClick="message_print_ok_hide(this);">
                            <i class="bi bi-x-circle text-success"></i>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
        <!-- 成功訊息 開始 -->

        <!-- 主要內容 開始 -->
        <div class="container pb-3 pb-lg-5">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb start -->
                    <nav class="mt-3 mt-md-5" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">首頁</a></li>
                            <li class="breadcrumb-item">會員中心</li>
                            <li class="breadcrumb-item active" aria-current="page">稿件審查</li>
                        </ol>
                    </nav>
                    <!-- breadcrumb end -->

                    <!-- <h2 class="my-lg-4 my-2 h3 border-start border-dark ps-2">稿件進度</h2> -->
                    <!-- 表格 開始 -->
                    <table class="align-middle  table table-bordered border-third table-hover mt-3 mt-lg-5 ">
                        <thead class="text-white bg-third">
                            <tr>
                                <th class="fs-6">論文編號</th>
                                <th class="fs-6">投稿項目</th>
                                <th class="fs-6">論文標題</th>
                                <th class="fs-6">第一作者</th>
                                <th class="fs-6">稿件狀態</th>
                                <th class="fs-6">功能</th>
                            </tr>
                        </thead>
                        <tbody class="fs-6">
                            <!-- 會議論文 會有的狀態列表 開始 -->
                            <tr>
                                <td>20220812409</td>
                                <td>會議論文</td>
                                <td>科技輔助英語口說學習之分析與探討</td>
                                <td>林姸安</td>
                                <td>
                                    待委員審查
                                </td>
                                <td>
                                    <a href="review_view01.php" class="btn btn-outline-third">審查</a>
                                </td>
                            </tr>
                            <tr>
                                <td>20220812409</td>
                                <td>會議論文</td>
                                <td>科技輔助英語口說學習之分析與探討</td>
                                <td>林姸安</td>
                                <td>
                                    搞件已審查
                                </td>
                                <td>
                                    <a href="review_view02.php" class="btn btn-outline-third">重新審查</a>
                                </td>
                            </tr>
                            <tr>
                                <td>20220812409</td>
                                <td>會議論文</td>
                                <td>科技輔助英語口說學習之分析與探討</td>
                                <td>林姸安</td>
                                <td>
                                    稿件已審查
                                    <span class="text-primary">[稿件已通過]</span>
                                </td>
                                <td>
                                    <a href="review_view03.php" class="btn btn-outline-third">檢視</a>
                                </td>
                            </tr>
                            
                            <!-- 會議論文 會有的狀態列表 開始 -->
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
    async function del() {
        if (await art_confirm('系統訊息', '您確認要刪除此稿件嗎？')) {
            location.href = "progress.php";
        }
    }
</script>