<?php include("inc_head.php"); ?>
<div class="home bg-gray02">
  <div class="home__bg01">
    <!-- 導航欄 開始 -->
    <?php include("inc_navbar.php"); ?>
    <!-- 導航欄 結束 -->

    <!-- header 開始 -->
    <header class="container">
      <div class="row">
        <div class="col position-relative">
          <div class="header__block position-absolute"></div>
          <div class="header__line position-absolute"></div>
          <div class="row justify-content-center">
            <!-- header 標題文字區 start -->
            <div class="col-12 col-lg-5">
              <div class="d-none d-lg-block">
                <h2 class="h1 header__title">本學會以論述資訊教育應用之技術與研究成果為主</p>
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

    <!-- 最新消息 開始 -->
    <div class="news">
      <div class="container">
        <div class="row g-2 g-md-3 g-lg-5">
          <div class="col-12">
            <h3 class="h1 news__title">最新消息</h3>
          </div>
          <div class="col-12 col-md-6 position-relative">
            <div class="news__dot position-absolute"></div>
            <div class="owl-carousel owl-theme">
              <div class="item">
                <img class="news__paper" src="../web/storage/images/news01.jpg" alt="paper"/>
              </div>
              <div class="item">
                <img class="news__paper" src="../web/storage/images/news02.jpg" alt="paper"/>
              </div>
              <div class="item">
                <img class="news__paper" src="../web/storage/images/news03.jpg" alt="paper"/>
              </div>
            </div>
          </div>
          <ul class="col-12 col-md-6 news__list">
            <li class="news__item d-flex flex-column justify-content-start flex-sm-row  justify-content-sm-between align-items-start align-items-sm-center">
              <p class="news__date d-none d-sm-block">2022<br><span>11.09</span></p>
              <p class="news__date d-sm-none">2022.11.09</p>
              <h4 class="news__subtitle px-sm-2 px-md-4">課堂中的 stem 教育：核心素養與教學實踐。學習的科學，腦科學與 STEM 教育的連結，學習的科學，腦科學與STEM教育的連結，腦科學與STEM教育的連結，新書出版。</h4>
              <a href="#" class="news__link d-flex justify-content-start align-items-center">
                <span class="news__arrow position-relative mt-1"></span>
                more
              </a>
            </li>
            <li class="news__item d-flex flex-column justify-content-start flex-sm-row  justify-content-sm-between align-items-start align-items-sm-center">
              <p class="news__date d-none d-sm-block">2022<br><span>11.09</span></p>
              <p class="news__date d-sm-none">2022.11.09</p>
              <h4 class="news__subtitle px-sm-2 px-md-4">課堂中的 stem 教育：核心素養與教學實踐。學習的科學，腦科學與 STEM 教育的連結，學習的科學，腦科學與STEM教育的連結，腦科學與STEM教育的連結，新書出版。</h4>
              <a href="#" class="news__link d-flex justify-content-start align-items-center">
                <span class="news__arrow position-relative mt-1" ></span>
                more
              </a>
            </li>
            <li class="news__item d-flex flex-column justify-content-start flex-sm-row  justify-content-sm-between align-items-start align-items-sm-center">
              <p class="news__date d-none d-sm-block">2022<br><span>11.09</span></p>
              <p class="news__date d-sm-none">2022.11.09</p>
              <h4 class="news__subtitle px-sm-2 px-md-4">課堂中的 stem 教育：核心素養與教學實踐。</h4>
              <a href="#" class="news__link d-flex justify-content-start align-items-center">
                <span class="news__arrow position-relative mt-1"></span>
                more
              </a>
            </li>
          </ul>

        </div>
      </div>
    </div>
    <!-- 最新消息 結束 -->

  </div>
</div>
<?php include("inc_footer.php"); ?>