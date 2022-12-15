<!-- 每頁模板 複製用 -->
<?php include("inc_head.php"); ?>
<div class="bg-gray02">
    <div class="page__bg02">
        <!-- 導航欄 開始 -->
        <?php include("inc_navbar.php"); ?>
        <!-- 導航欄 結束 -->

        <!-- 成功訊息 開始 -->
        <div class="message_print_ok">
            <table>
                <tr valign="top">
                    <td class="message_text">
                        <p>您的投稿已成功！ 您可以在此查詢所有稿件進度。</p>
                    </td>
                    <td class="message_close" valign="middle">
                        <a href="javascript:void(0);" onClick="message_print_ok_hide(this);">
                            <i class="bi bi-x-circle text-success"></i>
                        </a>
                    </td>
                </tr>

                <tr valign="top">
                    <td class="message_text">
                        <p>您的草稿已儲存成功！ 您可以在此查詢所有稿件進度。</p>
                    </td>
                    <td class="message_close" valign="middle">
                        <a href="javascript:void(0);" onClick="message_print_ok_hide(this);">
                            <i class="bi bi-x-circle text-success"></i>
                        </a>
                    </td>
                </tr>

                <tr valign="top">
                    <td class="message_text">
                        <p>稿件刪除成功，您已取消投稿！ </p>
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
                            <li class="breadcrumb-item active" aria-current="page">稿件進度</li>
                        </ol>
                    </nav>
                    <!-- breadcrumb end -->

                    <!-- <h2 class="my-lg-4 my-2 h3 border-start border-dark ps-2">稿件進度</h2> -->
                    <!-- 表格 開始 -->
                    <table class="align-middle  table table-bordered border-third table-hover mt-3 mt-lg-5 ">
                        <thead class="text-white bg-third">
                            <tr>
                                <th class="fs-6">投稿時間</th>
                                <th class="fs-6">論文編號</th>
                                <th class="fs-6">投稿項目</th>
                                <th class="fs-6">論文標題</th>
                                <th class="fs-6">稿件狀態</th>
                                <th class="fs-6">功能</th>
                            </tr>
                        </thead>
                        <tbody class="fs-6">
                            <!-- 會議論文 會有的狀態列表 開始 -->
                            <tr>
                                <td>2022-08-12 15:18:00</td>
                                <td>20220812409</td>
                                <td>會議論文</td>
                                <td>科技輔助英語口說學習之分析與探討</td>
                                <td>
                                    已投稿
                                    <span class="text-primary">[形式審查中]</span>
                                </td>
                                <td>
                                    <!-- <a href="seminar_method.php" class="btn btn-outline-primary">線上投稿</a> -->
                                </td>
                            </tr>
                            <tr>
                                <td>2022-08-12 15:18:00</td>
                                <td>20220912101</td>
                                <td>會議論文</td>
                                <td>國小學童使用水資源VR遊戲之研發與推廣</td>
                                <td>
                                    已投稿
                                    <span class="text-primary">[審稿中]</span>
                                    
                                </td>
                                <td>
                                    <!-- <a href="seminar_method.php" class="btn btn-outline-primary">線上投稿</a> -->
                                </td>
                            </tr>
                            <tr>
                                <td>2022-08-12 15:18:00</td>
                                <td>20220912101</td>
                                <td>會議論文</td>
                                <td>國小學童使用水資源VR遊戲之研發與推廣</td>
                                <td>
                                    已投稿
                                    <span class="text-primary">[稿件已通過]</span>
                                </td>
                                <td>
                                    <a href="progress_view01.php" class="btn btn-outline-third">檢視</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2022-08-12 15:18:00</td>
                                <td>20220912101</td>
                                <td>會議論文</td>
                                <td>國小學童使用水資源VR遊戲之研發與推廣</td>
                                <td>
                                    已投稿
                                    <span class="text-primary">[稿件不通過]</span>
                                </td>
                                <td>
                                    <a href="progress_view02.php" class="btn btn-outline-third">檢視</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2021-05-12 14:17:33</td>
                                <td>20210512582</td>
                                <td>會議論文</td>
                                <td>科技輔助英語口說學習之分析與探討</td>
                                <td>
                                    草稿
                                </td>
                                <td>
                                    <a href="javascript:void(0);" onClick="del();" class="me-2 btn btn-outline-primary">取消投稿</a>
                                    <a href="progress_edit01.php" class="btn btn-outline-third">稿件修改</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2021-05-12 14:17:33</td>
                                <td>20210512582</td>
                                <td>會議論文</td>
                                <td>科技輔助英語口說學習之分析與探討</td>
                                <td>
                                    形式審查退回
                                </td>
                                <td>
                                    <a href="javascript:void(0);" onClick="del();" class="me-2 btn btn-outline-primary">取消投稿</a>
                                    <a href="progress_edit02.php" class="btn btn-outline-third">稿件修改</a>
                                </td>
                            </tr>
                            <!-- 會議論文 會有的狀態列表 結束 -->

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