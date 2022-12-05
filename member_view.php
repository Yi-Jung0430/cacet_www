<?php include("inc_head.php"); ?>
<div class="register bg-gray02">
    <div class="page__bg02">
        <!-- 導航欄 開始 -->
        <?php include("inc_navbar.php"); ?>
        <!-- 導航欄 結束 -->

        <div class="container pb-3 pb-lg-5">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb start -->
                    <nav class="mt-3 mt-md-5" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">首頁</a></li>
                            <li class="breadcrumb-item active" aria-current="page">個人資料</li>
                        </ol>
                    </nav>
                    <!-- breadcrumb end -->

                    <!-- 訊息 開始 -->
                    <div class="message">
                        <table>
                            <tr valign="top">
                                <td class="message_text"></td>
                                <td class="message_close text-end pe-2" valign="middle">
                                    <a href="javascript:void(0);" onClick="message_hide(this);">
                                        <i class="bi bi-x-circle"></i>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>


                    <!-- 訊息 結束 -->

                    <!-- 表單內容 開始 -->
                    <h2 class="my-lg-3 h1 ">個人資料 
                        <a href="member_edit.php" class="btn btn-outline-primary btn-lg ms-2 mb-1">修改</a>
                    </h2>
                    
                    <small class="text-small fw-light"><i class="bi bi-asterisk me-1 text-primary"></i>為必填欄位</small>
                    <form method="post" enctype="multipart/form-data" action="home.php">
                        <table class="table  table-bordered bg-white mt-1">
                            <tbody>
                                <!-- 帳號v_03 -->
                                <tr>
                                    <th scope="row" valign="middle" class="register__th ">帳號 (電子信箱)
                                        <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                    </th>
                                    <td >
                                        <span >tu@sydt.com.tw</span>
                                    </td>
                                </tr>
                                <!-- 中文名v_04 -->
                                <tr>
                                    <th scope="row" valign="middle" class="register__th ">中文姓名
                                        <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                    </th>
                                    <td>
                                        <span>杜展宇</span>
                                    </td>
                                </tr>
                                <!-- 英文名v_05 -->
                                <tr>
                                    <th scope="row" valign="middle" class="register__th ">英文姓名
                                        <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                    </th>
                                    <td>
                                    <span>Tu</span>
                                    </td>
                                </tr>
                                <!-- 性別 -->
                                <tr>
                                    <th scope="row" valign="middle" class="register__th ">性別
                                        <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                    </th>
                                    <td>
                                        <span>男</span> 
                                    </td>
                                </tr>
                                <!-- 郵遞區號v_06 -->
                                <tr>
                                    <th scope="row" valign="middle" class="register__th ">通訊郵遞區號
                                        <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                    </th>
                                    <td>
                                        <span>909</span>
                                    </td>
                                </tr>
                                <!-- 通訊地址v_07 -->
                                <tr>
                                    <th scope="row" valign="middle" class="register__th ">通訊地址
                                        <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                    </th>
                                    <td>
                                        <span>日本北海道札幌市北區北八條西64號</span>
                                    </td>
                                </tr>
                                <!-- 服務機構電話 -->
                                <tr>
                                    <th scope="row" valign="middle" class="register__th ">服務機構電話
                                    </th>
                                    <td>
                                        <span></span>
                                    </td>
                                </tr>
                                <!-- 傳真電話 -->
                                <tr>
                                    <th scope="row" valign="middle" class="register__th ">傳真電話
                                    </th>
                                    <td>
                                        <span></span>
                                    </td>
                                </tr>
                                <!-- 行動電話v_08 -->
                                <tr>
                                    <th scope="row" valign="middle" class="register__th ">行動電話
                                        <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                    </th>
                                    <td>
                                        <span>0911666222</span>
                                    </td>
                                </tr>
                                <!-- 服務母機構v_09 -->
                                <tr>
                                    <th scope="row" valign="middle" class="register__th ">服務母機構名稱
                                        <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                    </th>
                                    <td>
                                        <span>日本北海道大學</span>
                                    </td>
                                </tr>
                                <!-- 服務子機構 -->
                                <tr>
                                    <th scope="row" valign="middle" class="register__th ">服務子機構名稱
                                    </th>
                                    <td>
                                        <span></span>
                                    </td>
                                </tr>
                                <!-- 職稱 -->
                                <tr>
                                    <th scope="row" valign="middle" class="register__th ">職稱
                                        <sup><i class="bi bi-asterisk text-primary"></i><sup>
                                    </th>
                                    <td>
                                        <span>資訊科學系教授</span>            
                                    </td>
                                </tr>
                                <!-- 學歷 -->
                                <tr>
                                    <th scope="row" valign="middle" class="register__th ">學歷
                                    </th>
                                    <td>
                                        <span>日本北海道大學教育學研究院 博士</span>
                                    </td>
                                </tr>
                                <!-- 經歷 -->
                                <tr>
                                    <th scope="row" valign="middle" class="register__th ">經歷
                                    </th>
                                    <td>
                                        <span>日本北海道大學 校長</span>
                                    </td>
                                </tr>
                                <!-- 學歷 -->
                                <tr>
                                    <th scope="row" valign="middle" class="register__th ">著作
                                    </th>
                                    <td>
                                       <span></span>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- js 開始 -->
<script>
    async function form_submit(arg) {
        event.preventDefault();

        message_hide();
        message_print_ok_hide();
        message_print_errer_hide();

        var msg = "";
        var alertIcon = '<i class="bi bi-exclamation-circle text-primary me-2"></i>';

        //v_03_帳號
        if ($(".v_03").val() == "") {
            msg += "<p>" + alertIcon + "帳號為必填欄位。</p>";
        } else {
            if (!checkEmail($(".v_03").val())) {
                msg += "<p>" + alertIcon + "帳號欄位不符合電子信箱格式。</p>";
            }
        }

        //v_02_密碼
        if ($(".v_02").val() == "") {
            msg += "<p>" + alertIcon + "密碼為必填欄位。</p>";
        } else {
            if (!checkPassword($(".v_02").val())) {
                msg += "<p>" + alertIcon + "未符合密碼格式：6~12碼，含英文和數字。</p>";
            }
        }

        //v_01_再次輸入密碼
        if ($(".v_02").val() == "") {
            msg += "<p>" + alertIcon + "再次輸入密碼為必填欄位。</p>";
        } else {
            if ($(".v_02").val() !== $(".v_01").val()) {
                msg += "<p>" + alertIcon + "再次輸入密碼與密碼不相符。</p>";
            }
        }

        //v_04_中文姓名
        if ($(".v_04").val() == "") {
            msg += "<p>" + alertIcon + "中文姓名為必填欄位。</p>";
        }

        //v_05_英文姓名
        if ($(".v_05").val() == "") {
            msg += "<p>" + alertIcon + "英文姓名為必填欄位。</p>";
        }

        //v_06_郵遞區號
        if ($(".v_06").val() == "") {
            msg += "<p>" + alertIcon + "郵遞區號為必填欄位。</p>";
        }

        //v_07_通訊地址
        if ($(".v_07").val() == "") {
            msg += "<p>" + alertIcon + "通訊地址為必填欄位。</p>";
        }

        //v_08_行動電話
        if ($(".v_08").val() == "") {
            msg += "<p>" + alertIcon + "行動電話為必填欄位。</p>";
        }



        if (msg != "") {
            message_show(msg);
            return false;
        }

        $(arg).closest('form').submit();
    }
</script>

<?php include("inc_footer.php"); ?>