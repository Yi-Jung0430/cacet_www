<?php include("inc_head.php"); ?>
<div class="login bg-gray02">
  <div class="login__bg01">
    <!-- 訊息 開始 -->
    <div class="container">
      <div class="row position-relative">


        <div class="alert alert-danger d-flex align-items-center position-absolute alert-dismissible fade show" role="alert">
          <i class="bi bi-exclamation-triangle-fill"></i>
          <div>
            帳號或密碼錯誤。
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

      </div>
    </div>
    <!-- 訊息 結束 -->
    <div class="container h-100">
      <div class="row align-items-center h-100 justify-content-between">
        <div class="col-12 col-md-5">
          <h1 class="logo__text">
            <a class="navbar-brand cu__logo" href="home.php">中華資訊與科技教育學會</a>
          </h1>
        </div>


        <!-- 登入表單 開始 -->
        <div class="col-12 col-md-6 bg-white rounded-3 shadow">

          <form class="px-3 py-5 " method="post" enctype="multipart/form-data" onSubmit="return form_submit()" action="home.php">
            <h3 class="mb-3">會員登入</h3>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">請輸入您的帳號</label>
            </div>
            <div class="form-floating mb-3 position-relative art_password">
              <a class="art_icon icon-eye-close r" href="javascript:void(0);" onclick="art_password_eye(this);"></a>
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">請輸入您的密碼</label>
            </div>
            <div class="form-floating mb-3  d-flex justify-content-between align-items-center">
              <input type="number" class="form-control cu__form-control  flex-grow-1 me-3" id="floatingVerification" placeholder="請輸入驗證碼">
              <label for="floatingVerification" class="">驗證碼</label>
              <div class="">
                <img src="storage/images/checkcode.jpg" alt="checkcode" class="">
                <a href="javascript:void(0);" class=" align-middle">
                  <i class="bi bi-arrow-clockwise fs-3 text-primary"></i>
                </a>
              </div>
            </div>
            <div class="mb-3">
              <a href="forget_password.php">忘記密碼?</a>
            </div>
            <button type="submit" class="btn btn-primary btn-lg d-block w-100">登入</button>
            <a href="register.php" class="btn btn-outline-primary btn-lg d-block w-100 mt-3">註冊</a>
          </form>
          <!-- 登入表單 結束 -->

        </div>
      </div>
    </div>



  </div>
</div>