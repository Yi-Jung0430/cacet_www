<?php include("inc_head.php"); ?>
<div class="wrapper bg-gray02">
  <div class="wrapper__bg01">
    <!-- 導航欄 開始 -->
    <?php include("inc_navbar.php"); ?>
    <!-- 導航欄 結束 -->

    <!-- header 開始 -->
    <header class="container-fluid">
      <div class="row">
        <div class="col position-relative">
          <div class="header__block position-absolute"></div>
          <div class="header__line position-absolute"></div>
          <div class="row justify-content-center">
            <!-- header 標題文字區 start -->
            <div class="col-12 col-lg-5">
              <div class="d-none d-lg-block">
                <h2 class="h1 header__title">本學會以論述資訊教育應用<br>之技術與研究成果為主</p>
                <p class="header__text ">歡迎學者專家踴躍賜稿</p>
              </div>
              <div class="d-lg-none">
                <h2 class="h1 header__title">本學會以論述資訊教育應用之技術與研究成果為主</p>
                <p class="header__text ">歡迎學者專家踴躍賜稿</p>
              </div>
            </div>
            <!-- header 標題文字區 end -->
            <!-- header 書本區 start -->
            <div class="col-12 col-sm-10 col-lg-7">
              <div class="row justify-content-sm-evenly justify-content-center">
                <!-- 第一本書 start -->
                <div class="col-4 header__area me-3 me-sm-0">
                  <a href="" class="header__link position-relative ">
                    <img src="storage/images/book01.png" alt="" class="header__book">
                    <span class="header__contribute position-relative btn-primary">我要投稿</span>
                    <span class="position-absolute header__arrow">
                    </span>
                  </a>
                </div>
                <!-- 第一本書 end -->
                <!-- 第二本書 start -->
                <div class="col-4 header__area">
                  <a href="" class="header__link position-relative">
                    <img src="storage/images/book02.png" alt="" class="header__book">
                    <span class="header__contribute position-relative btn-primary">我要投稿</span>
                    <span class="position-absolute header__arrow">
                    </span>
                  </a>
                </div>
                <!-- 第二本書 end -->
                

              </div>
            </div>
            <!-- header 書本區 end -->
          </div>

        </div>
      </div>
    </header>
    <!-- Header 結束 -->
  </div>
</div>





<?php include("inc_footer.php"); ?>