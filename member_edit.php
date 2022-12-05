<?php include("inc_head.php"); ?>
<div class="register bg-gray02">
  <div class="page__bg01">
    <!-- 導航欄 開始 -->
    <?php include("inc_navbar.php"); ?>
    <!-- 導航欄 結束 -->

    <div class="container pb-3 pb-lg-5">
      <div class="row">
        <div class="col-12">
          <!-- breadcrumb start -->
          <nav class="mt-3 mt-md-5"  aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home.php">首頁</a></li>
              <li class="breadcrumb-item"><a href="member_view.php">個人資料</a></li>
              <li class="breadcrumb-item active" aria-current="page">修改</li>
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
          <h2 class="my-lg-3 h1">編輯個人資料</h2>
          <small class="text-small fw-light"><i class="bi bi-asterisk me-1 text-primary"></i>為必填欄位</small>
          <form method="post" enctype="multipart/form-data" action="home.php">
            <table class="table  table-bordered bg-white mt-1">
              <tbody>
                <!-- 帳號v_03 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th ">帳號 (電子信箱)
                    <sup><i class="bi bi-asterisk text-primary"></i><sup>
                  </th>
                  <td>
                    <span>tu@sydt.com.tw</span>
                  </td>
                </tr>
                <!-- 密碼v_02 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th">密碼
                    <sup><i class="bi bi-asterisk text-primary"></i><sup>
                  </th>
                  <td class="position-relative art_password">
                    <a href="member_password.php" class="btn btn-third">修改密碼</a>
                  </td>
                </tr>
                <!-- 中文名v_04 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th ">中文姓名
                    <sup><i class="bi bi-asterisk text-primary"></i><sup>
                  </th>
                  <td>
                    <input type="text" class="form-control v_04" placeholder="" value="杜展宇">
                  </td>
                </tr>
                <!-- 英文名v_05 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th ">英文姓名
                    <sup><i class="bi bi-asterisk text-primary"></i><sup>
                  </th>
                  <td>
                    <input type="text" class="form-control v_05" placeholder="" value="Tu">
                  </td>
                </tr>
                <!-- 性別 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th ">性別
                    <sup><i class="bi bi-asterisk text-primary"></i><sup>
                  </th>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" checked>
                      <label class="form-check-label">
                        男
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault">
                      <label class="form-check-label">
                        女
                      </label>
                    </div>
                  </td>
                </tr>
                <!-- 郵遞區號v_06 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th ">通訊郵遞區號
                    <sup><i class="bi bi-asterisk text-primary"></i><sup>
                  </th>
                  <td>
                    <div class="row">
                      <div class="col">
                        <input type="number" class="form-control v_06" placeholder="" value="909">
                      </div>
                      <div class="col">
                        <a href="#" class="align-middle">郵遞區號查詢</a>
                      </div>
                      <div class="col">
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- 通訊地址v_07 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th ">通訊地址
                    <sup><i class="bi bi-asterisk text-primary"></i><sup>
                  </th>
                  <td>
                    <input type="text" class="form-control v_07" placeholder="" value="日本北海道札幌市北區北八條西64號">
                  </td>
                </tr>
                <!-- 服務機構電話 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th ">服務機構電話
                  </th>
                  <td>
                    <div class="row g-3">
                      <div class="col-sm-12 col-lg-4">
                        <input type="tel" class="form-control" placeholder="">
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- 傳真電話 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th ">傳真電話
                  </th>
                  <td>
                    <div class="row g-3">
                      <div class="col-sm-12 col-lg-4">
                        <input type="tel" class="form-control" placeholder="">
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- 行動電話v_08 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th ">行動電話
                    <sup><i class="bi bi-asterisk text-primary"></i><sup>
                  </th>
                  <td>
                    <div class="row g-3">
                      <div class="col-sm-12 col-lg-4">
                        <input type="tel" class="form-control v_08" placeholder="" value="0911666222">
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- 服務母機構v_09 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th ">服務母機構名稱
                    <sup><i class="bi bi-asterisk text-primary"></i><sup>
                  </th>
                  <td>
                    <input type="text" class="form-control v_09" placeholder="" value="日本北海道大學">
                  </td>
                </tr>
                <!-- 服務子機構 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th ">服務子機構名稱
                  </th>
                  <td>
                    <input type="text" class="form-control " placeholder="">
                  </td>
                </tr>
                <!-- 職稱 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th ">職稱
                    <sup><i class="bi bi-asterisk text-primary"></i><sup>
                  </th>
                  <td>
                    <input type="text" class="form-control " placeholder="" value="資訊科學系教授">
                  </td>
                </tr>
                <!-- 學歷 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th ">學歷
                  </th>
                  <td>
                    <textarea class="form-control art_textarea">日本北海道大學教育學研究院 博士
                                        </textarea>
                  </td>
                </tr>
                <!-- 經歷 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th ">經歷
                  </th>
                  <td>
                    <textarea class="form-control art_textarea">日本北海道大學 校長
                                        </textarea>
                  </td>
                </tr>
                <!-- 學歷 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th ">著作
                  </th>
                  <td>
                    <textarea class="form-control art_textarea"></textarea>
                  </td>
                </tr>
                <!-- 驗證碼 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th ">驗證碼
                    <sup><i class="bi bi-asterisk text-primary"></i><sup>
                  </th>
                  <td>
                    <div class="row g-3">
                      <div class="col-sm-12 col-lg-4">
                        <input type="number" class="form-control">
                      </div>
                      <div class="col-sm-12 col-lg-8">
                        <img src="storage/images/checkcode.jpg" alt="checkcode">
                        <a href="javascript:void(0);" class=" align-middle">
                          <i class="bi bi-arrow-clockwise fs-3 text-primary"></i>
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="text-center">
              <a class="btn btn-outline-primary btn-lg mx-auto me-2" href="javascript:history.go(-1);">返回</a>
              <input class="btn btn-primary btn-lg mx-auto " type="submit" onClick="form_submit(this)" value="確認修改">
            </div>
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

    //自訂對話框
    if (!await art_confirm("系統訊息", "確認提交此申請嗎?")) {
      return false;
    }

    $(arg).closest('form').submit();
  }
</script>

<?php include("inc_footer.php"); ?>