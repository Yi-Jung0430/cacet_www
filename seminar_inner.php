<!-- 每頁模板 複製用 -->
<?php include("inc_head.php"); ?>
<div class="bg-gray02">
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
                            <li class="breadcrumb-item"><a href="seminar_contribute.php">會議投稿</a></li>
                            <li class="breadcrumb-item"><a href="seminar_method.php">投稿辦法</a></li>
                            <li class="breadcrumb-item active" aria-current="page">投稿</li>
                        </ol>
                    </nav>
                    <!-- breadcrumb end -->

                    <h2 class="mt-lg-4 mt-2 mb-1 h3 border-start border-dark ps-2">投稿</h2>
                    <small class="text-small fw-light"><i class="bi bi-asterisk me-1 text-primary"></i>為必填欄位</small>

                    <form method="post" enctype="multipart/form-data" action="home.php">
                        <div class="table-responsive">
                            <table class="table  table-bordered bg-white mt-1 seminarInner">
                                <thead>
                                    <tr class="bg-third text-light">
                                        <th colspan="2">論文資訊</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- 投稿項目 span -->
                                    <tr>
                                        <th scope="row" valign="middle">投稿項目
                                        </th>
                                        <td>
                                            <span>ICEET 2022 數位學習與教育科技國際研討會 (會議論文)</span>
                                        </td>
                                    </tr>
                                    <!-- 建議發表形式 v_01 -->
                                    <tr>
                                        <th valign="middle">建議發表形式
                                            <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                        </th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input v_01" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                                <label class="form-check-label seminarInner__label" for="inlineRadio1">口頭</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input v_01" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label seminarInner__label" for="inlineRadio2">海報</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input v_01" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                <label class="form-check-label seminarInner__label" for="inlineRadio3">兩者皆可 </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- 論文標題(中文) v_02 -->
                                    <tr>
                                        <th valign="middle">論文標題 ( 中文 )
                                            <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                        </th>
                                        <td>
                                            <input type="text" class="form-control v_02" placeholder="">
                                        </td>
                                    </tr>
                                    <!-- 論文標題(英文) v_03 -->
                                    <tr>
                                        <th valign="middle">論文標題 ( 英文 )
                                            <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                        </th>
                                        <td>
                                            <input type="text" class="form-control v_03" placeholder="">
                                        </td>
                                    </tr>
                                    <!-- 論文摘要(中文) v_04 -->
                                    <tr>
                                        <th valign="middle">論文摘要 ( 中文 )
                                            <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                        </th>
                                        <td>
                                            <textarea class="form-control v_04" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            <small class="form-text">請勿超過 200 個字</small>
                                        </td>
                                    </tr>
                                    <!-- 論文摘要(英文) v_05 -->
                                    <tr>
                                        <th valign="middle">論文摘要 ( 英文 )
                                            <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                        </th>
                                        <td>
                                            <textarea class="form-control v_05" id="exampleFormControlTextarea2" rows="3"></textarea>
                                            <small class="form-text">請勿超過 200 個字</small>
                                        </td>
                                    </tr>
                                    <!-- 關鍵字 ( 中文 ) v_06 -->
                                    <tr>
                                        <th valign="middle">關鍵字 ( 中文 )
                                            <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                        </th>
                                        <td>
                                            <input type="text" class="form-control v_06">
                                            <small class="form-text">請以全形分號 (<span class="text-primary">；</span>) 分隔</small>
                                        </td>
                                    </tr>
                                    <!-- 關鍵字 ( 英文 ) v_07 -->
                                    <tr>
                                        <th valign="middle">關鍵字 ( 英文 )
                                            <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                        </th>
                                        <td>
                                            <input type="text" class="form-control v_07">
                                            <small class="form-text">請以半形分號 ( <span class="text-primary">;</span> )分隔</small>
                                        </td>
                                    </tr>
                                    <!-- 全文 v_08 -->
                                    <tr>
                                        <th valign="middle">全文
                                            <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                        </th>
                                        <td>
                                            <div class="position-relative art_upload_raw">
                                                <input class="form-control v_08" type="file" id="formFile" accept=".doc,.docx,.pdf" multiple>
                                                <a class="hidden icon-cancel r position-absolute top-50 end-0 translate-middle-y me-2" href="javascript:void(0);" onclick="art_upload_raw_cancel(this);">
                                                    <i class="bi bi-x-circle"></i>
                                                </a>
                                            </div>
                                            <small class="form-text">需以 PDF、DOC、或 DOCX 形式上傳，檔案大小不可超過 20MB。</small>
                                        </td>
                                    </tr>
                                    <!-- 附件 v_09 -->
                                    <tr>
                                        <th valign="middle">附件上傳
                                            <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                        </th>
                                        <td>
                                            <div class="position-relative art_upload_raw">
                                                <input class="form-control v_09" type="file" id="formFile02" accept=".doc,.docx,.pdf" multiple>
                                                <a class="icon-cancel r position-absolute top-50 end-0 translate-middle-y me-2" href="javascript:void(0);" onclick="art_upload_raw_cancel(this);">
                                                    <i class="bi bi-x-circle"></i>
                                                </a>
                                            </div>
                                            <small class="form-text">檔案若有多個，請以壓縮檔上傳，檔案大小不可超過 20MB。</small>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-center">
                                <a class="btn btn-outline-primary btn-lg mx-auto me-2" href="javascript:history.go(-1);">返回</a>
                                <input class="btn btn-primary btn-lg mx-auto " type="submit" onClick="form_submit(this)" value="註冊">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("inc_footer.php"); ?>


<!-- js 開始 -->
<script>
    $(document).ready(function() {
        $(".art_upload_raw").find(".icon-cancel").hide();
    });

    async function form_submit(arg) {
        event.preventDefault();

        //自訂對話框
        if (!await art_confirm("系統訊息", "確認提交此申請嗎?")) {
            return false;
        }

        message_hide();
        message_print_ok_hide();
        message_print_errer_hide();

        var msg = "";


        //發表形式v_01
        if ($(".v_01:checked").length == 0) {
            msg += "<p>發表形式為必填欄位。</p>";
        }

        //論文標題(中文) v_02
        if ($(".v_02").val() == "") {
            msg += "<p>論文標題(中文)為必填欄位。</p>";
        }

        //論文標題(英文) v_03
        if ($(".v_03").val() == "") {
            msg += "<p>論文標題(英文)為必填欄位。</p>";
        }

        //論文摘要(中文) v_04
        if ($(".v_04").val() == "") {
            msg += "<p>論文摘要 ( 中文 ) 為必填欄位。</p>";
        }

        if ($(".v_04").val() != "") {
            var temp = $(".v_04").val();
            if (temp.length > 200) {
                msg += "<p>論文摘要 ( 中文 )，字數限制：200字以內。</p>";
            }
        }

        //論文摘要(英文) v_05
        if ($(".v_05").val() == "") {
            msg += "<p>論文摘要 ( 英文 ) 為必填欄位。</p>";
        }

        if ($(".v_05").val() != "") {
            var temp = $(".v_05").val();
            if (temp.length > 200) {
                msg += "<p>論文摘要 ( 英文 )，字數限制：200字以內。</p>";
            }
        }

        //論文標題(中文) v_06
        if ($(".v_06").val() == "") {
            msg += "<p>關鍵字 ( 中文 )為必填欄位。</p>";
        }

        //論文標題(英文) v_07
        if ($(".v_07").val() == "") {
            msg += "<p>關鍵字 ( 英文 )為必填欄位。</p>";
        }

        //全文 v_08
        if ($(".v_08").val() == "") {
            if ($(".v_08").closest(".art_upload_raw").next(".oldfile_box").find(".file_is_del").val() == 0) {
                /**/
            } else {
                msg += "<p>全文為必填欄位。</p>";
            }
        }
        if ($(".v_08").val() != "") {
            //checkFilesize()之說明:第1參數:對象;第2參數:最大限制MB,如:5MB,則設定為「5」
            if (!checkFilesize($(".v_08"), 20)) {
                msg += "<p>全文，檔案大小限制：20MB以內。</p>";
            }
        }
        if ($(".v_08").val() != "") {
            var format = 'PDF、DOC、DOCX';
            var arr_format = format.split("、");
            if (!checkFileFormat($(".v_08").val(), arr_format)) {
                msg += "<p>全文，檔案格式限制:" + format + "。</p>";
            }
        }

        //附件 v_09
        if ($(".v_09").val() == "") {
            if ($(".v_09").closest(".art_upload_raw").next(".oldfile_box").find(".file_is_del").val() == 0) {
                /**/
            } else {
                msg += "<p>全文為必填欄位。</p>";
            }
        }
        if ($(".v_09").val() != "") {
            //checkFilesize()之說明:第1參數:對象;第2參數:最大限制MB,如:5MB,則設定為「5」
            if (!checkFilesize($(".v_09"), 20)) {
                msg += "<p>全文，檔案大小限制：20MB以內。</p>";
            }
        }
        if ($(".v_09").val() != "") {
            var format = 'PDF、DOC、DOCX';
            var arr_format = format.split("、");
            if (!checkFileFormat($(".v_09").val(), arr_format)) {
                msg += "<p>全文，檔案格式限制:" + format + "。</p>";
            }
        }


        /*上傳檔案之值的change事件*/
        function art_upload_raw_change() {
            $(".art_upload_raw").on("change", "input[type='file']", function() {
                var filePath = $(this).val();
                var arr = filePath.split('\\');
                var fileName = arr[arr.length - 1];
                //
                $(this).closest(".art_upload_raw").find("input[type='text']").val(fileName);
                //控制清空按鈕顯不顯示
                $(this).closest(".art_upload_raw").find(".icon-cancel").show();
            });
        }

        /*刪除上傳檔案之值*/
        function art_upload_raw_cancel(arg) {
            var p = $(arg).closest(".art_upload_raw");
            var t1 = p.find("input[type='file']");
            var t2 = p.find("input[type='text']");
            //
            t1.val("");
            t2.val("");
            //控制清空按鈕顯不顯示
            p.find(".icon-cancel").hide();
        }


        if (msg != "") {
            message_show(msg);
            return false;
        }

        $(arg).closest('form').submit();
    }
</script>
<!-- js 結束 -->