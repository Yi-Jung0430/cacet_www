<?php include("inc_head.php"); ?>
<div class="login login__bg01">

  <!-- 訊息外殼位置 開始 -->
  <?php include("inc_message.php"); ?>
  <!-- 訊息外殼位置 結束 -->

  <!-- 內容 開始 -->
  <div class="container h-100">
    <div class="row flex-column align-items-center justify-content-center h-100">
      <div class="col-10 col-md-8 col-lg-5 mb-3">
        <h1 class="logo__text">
          <a class="navbar-brand cu__logo" href="home.php">中華資訊與科技教育學會</a>
        </h1>
      </div>

      <!-- 登入表單 開始 -->
      <div class="col-12 col-md-8 col-lg-5 bg-white rounded-3 shadow">
        <form class="px-3 py-5" method="post" enctype="multipart/form-data" onSubmit="return form_submit()" action="home.php">
          <h3 class="mb-3"><i class="bi bi-person-circle pe-1"></i>會員登入</h3>
          <div class="form-floating mb-3">
            <input type="email" class="form-control v_01" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">請輸入您的帳號</label>
          </div>
          <div class="form-floating mb-3 position-relative art_password">
            <a class="art_icon icon-eye-close r" href="javascript:void(0);" onclick="art_password_eye(this);"></a>
            <input type="password" class="form-control v_02" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">請輸入您的密碼</label>
          </div>
          <div class="form-floating mb-3  d-flex justify-content-between align-items-center">
            <input type="number" class="form-control cu__form-control flex-grow-1 me-3 v_03" id="floatingVerification" placeholder="請輸入驗證碼" required>
            <label for="floatingVerification" class="">驗證碼</label>
            <div class="w-auto">
              <img src="storage/images/checkcode.jpg" alt="checkcode">
              <a href="javascript:void(0);" class=" align-middle">
                <i class="bi bi-arrow-clockwise fs-3 text-primary"></i>
              </a>
            </div>
          </div>
          <div class="mb-3">
            <a href="forget_password.php">忘記密碼?</a>
          </div>
          <button type="submit" class="btn btn-third btn-lg d-block w-100">登入</button>
          <a href="register.php" class="btn btn-outline-third btn-lg d-block w-100 mt-3">註冊</a>
        </form>
        <!-- 登入表單 結束 -->

      </div>
    </div>
  </div>
  <!-- 內容 結束 -->
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

    //v_01_帳號
    if ($(".v_01").val() == "") {
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

    //v_03_驗證碼
    if ($(".v_03").val() == "") {
      msg += "<p>" + alertIcon + "驗證碼為必填欄位。</p>";
    }


    if (msg != "") {
      message_show(msg);
      return false;
    }

    $(arg).closest('form').submit();
  }
</script>