<?php include("inc_head.php"); ?>
<div class="register bg-gray02">
  <div class="register__bg01">
    <!-- 導航欄 開始 -->
    <?php include("inc_navbar.php"); ?>
    <!-- 導航欄 結束 -->

    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- breadcrumb start -->
          <nav class="mt-3 mt-md-5" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home.php">首頁</a></li>
              <li class="breadcrumb-item"><a href="member_view.php">個人資料</a></li>
              <li class="breadcrumb-item"><a href="member_edit.php">修改</a></li>
              <li class="breadcrumb-item active" aria-current="page">修改密碼</li>
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
          <h2 class="my-lg-3 h1">修改密碼</h2>
          <div class="alert alert-dark" role="alert">
            提醒您，修改密碼後需重新登入會員。
          </div>
          <small class="text-small fw-light"><i class="bi bi-asterisk me-1 text-primary"></i>為必填欄位</small>
          <form method="post" enctype="multipart/form-data" action="home.php">
            <table class="table  table-bordered bg-white mt-1">
              <tbody>
                <!-- 密碼v_02 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th">新密碼
                    <sup><i class="bi bi-asterisk text-primary"></i><sup>
                  </th>
                  <td class="position-relative art_password">
                    <a class="art_icon icon-eye-close r" href="javascript:void(0);" onclick="art_password_eye(this);"></a>
                    <input type="password" class="form-control  v_02" placeholder="請輸入6~12碼英文數字，英文有區分大小寫。">
                  </td>
                </tr>
                <!-- 再次輸入密碼v_01 -->
                <tr>
                  <th scope="row" valign="middle" class="register__th">再次輸入新密碼
                    <sup><i class="bi bi-asterisk text-primary"></i><sup>
                  </th>
                  <td class="position-relative art_password">
                    <a class="art_icon icon-eye-close r" href="javascript:void(0);" onclick="art_password_eye(this);"></a>
                    <input type="password" class="form-control v_01" placeholder="請再次輸入相同密碼。">
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


    if (msg != "") {
      message_show(msg);
      return false;
    }

    $(arg).closest('form').submit();
  }
</script>

<?php include("inc_footer.php"); ?>