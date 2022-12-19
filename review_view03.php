<!-- 會議論文>檢視(通過) -->

<!-- 每頁模板 複製用 -->
<?php include("inc_head.php"); ?>
<div class="bg-gray02">
    <div class="home__bg01">
        <!-- 導航欄 開始 -->
        <?php include("inc_navbar_member.php"); ?>
        <!-- 導航欄 結束 -->

        <!-- 主要內容 開始 -->
        <div class="container pb-3 pb-lg-5">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb start -->
                    <nav class="mt-3 mt-md-5" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">首頁</a></li>
                            <li class="breadcrumb-item">會員中心</li>
                            <li class="breadcrumb-item"><a href="review.php">稿件審查</a></li>
                            <li class="breadcrumb-item active" aria-current="page">檢視
                                <span>(會議論文)</span>
                            </li>
                        </ol>
                    </nav>
                    <!-- breadcrumb end -->

                    <!-- 訊息 開始 -->
                    <div class="message">
                        <table>
                            <tr valign="top">
                                <td class="message_text"></td>
                                <td class="message_close text-end" valign="middle"><a href="javascript:void(0);" onClick="message_hide(this);"> </a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- 訊息 結束 -->
                <div class="col-12">
                    <!-- 詳細內容 開始 -->
                    <div class="detail_box">
                        <table class="table">
                            <tr>
                                <td colspan="2">
                                    <p>論文資訊</p>
                                </td>
                            </tr>
                            <tr>
                                <th>投稿項目</th>
                                <td>
                                    <div class="art_word">
                                        <span>會議論文</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>論文編號</th>
                                <td>
                                    <div class="art_word">
                                        <span>20220812404</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>投稿時間</th>
                                <td>
                                    <div class="art_word">
                                        <span>2020-06-01 15:30:00</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>發表形式</th>
                                <td>
                                    <div class="art_word">
                                        <span>口頭</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>論文標題(中)</th>
                                <td>
                                    <pre class="art_pre">皮克斯動畫對海豹肢症學生學習生涯規劃影響之敘事研究</pre>
                                </td>
                            </tr>
                            <tr>
                                <th>論文標題(英)</th>
                                <td>
                                    <pre class="art_pre">A narrative study of Pixar animation on the study planning of a Phocomelia student</pre>
                                </td>
                            </tr>
                            <tr>
                                <th>論文摘要(中)</th>
                                <td>
                                    <pre class="art_pre">本研究旨在探討一位罕見疾病中的海豹肢症大學生。透過皮克斯動畫對其大學學習電腦動畫影響之相關因素。研究方法為敘事研究,研究結果發現家庭的生活與興趣的培養,能奠定其獨立自主的性格,從小的繪圖興趣,以及高中的電腦設計課程初階學習,有助於開啟電腦動畫之興趣,為促進其學習發展的重要因素。</pre>
                                </td>
                            </tr>
                            <tr>
                                <th>論文摘要(英)</th>
                                <td>
                                    <pre class="art_pre">This study aims to explore the related factors of a Phocomelia students’ study planning on computer animation. The narrative study was adopted. The results showed that parents’ independent discipline and training facilitated the student’s drawing interest. The high school courses provided the computer design and basic animation facilitate her motivation in leaning computer animation. Moreover, the Pixar animation exhibition is the most important factor for enhancing her study planning in computer animation in university.</pre>
                                </td>
                            </tr>
                            <tr>
                                <th>關鍵字(中)</th>
                                <td>
                                    <div class="art_word">
                                        <span>海豹肢症、肢體障礙學生、電腦動畫、敘事研究</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>關鍵字(英)</th>
                                <td>
                                    <div class="art_word">
                                        <span>Phocomelia, Moving functional limitation student, computer animation, narrative study.</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>全文</th>
                                <td>
                                    <a class="art_word" href="#">
                                        <span>皮克斯動畫對海豹肢症學生學習生涯規劃影響之敘事研究.pdf</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>附件下載</th>
                                <td>
                                    <a class="art_word" href="#">
                                        <span>皮克斯動畫對海豹肢症學生學習生涯規劃影響之敘事研究.zip</span>
                                    </a>
                                </td>
                            </tr>
                        </table>
                        <div class="mt-1 mt-lg-3">
                            <small class="text-small fw-light "><i class="bi bi-asterisk me-1 text-primary"></i>為必填欄位</small>
                        </div>
                        <form method="post" enctype="multipart/form-data" action="review.php">
                            <!-- 論文資訊 表格 開始 -->
                            <div class="">
                                <table class="table">
                                    <tr>
                                        <td colspan="2">
                                            <p>主編決議</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>審查委員1</th>
                                        <td>
                                            <div class="art_word">
                                                <span>陳可欣</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>委員建議
                                            <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                        </th>
                                        <td>
                                            <div class="art_word">
                                                <span>做得好</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- 建議發表形式 v_01 -->
                                    <tr>
                                        <th valign="middle">建議發表形式
                                            <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                        </th>
                                        <td>
                                            <div class="art_word">
                                                <span>海報</span>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th valign="middle">結果
                                            <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                        </th>
                                        <td>
                                            <div class="art_word">
                                                <span>通過</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th valign="middle" class="register__th">評分分數
                                            <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                        </th>
                                        <td>
                                            <div class="art_word">
                                                <span>95</span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <div class="text-center">
                                    <a class="btn btn-outline-third me-2" href="javascript:history.go(-1);">返回</a>
                                </div>
                            </div>
                            <!-- 詳細內容 結束 -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("inc_footer.php"); ?>
    <script>
        async function form_submit(arg1, arg2) {
            event.preventDefault();

            message_hide();
            message_print_ok_hide();
            message_print_errer_hide();

            var msg = "";

            //自訂對話框
            if (arg2 == "finish") {
                if (!await art_confirm("系統訊息", "確認提交此審核結果嗎？")) {
                    return false;
                }
            }

            $(arg1).closest('form').submit();
        }

    </script>