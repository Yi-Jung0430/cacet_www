<nav class="navbar navbar-expand-lg navbar-light sticky-top navbar-fixed-top cu__navbar">
    <div class="container d-lg-flex justify-content-between ">
        <a class="navbar-brand" href="home.php">
            <img src="storage/images/logo.svg" alt="logo" class="cu__logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 cu__nav">
                <li class="nav-item">
                    <a class="nav-link active cu__navHover" aria-current="page" href="home.php">首頁</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cu__navHover" href="https://www.cacet.org/web/2022ICEET/">研討會官網</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  cu__navHover" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        會議投稿
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="seminar_manual.php">投稿說明</a></li>
                        <li><a class="dropdown-item" href="seminar_rule.php">撰稿原則</a></li>
                        <li><a class="dropdown-item" href="seminar_contribute.php">會議投稿</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link cu__navHover" href="https://portal.cacet.org/">期刊官網</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  cu__navHover" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        期刊投稿
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="periodicals_manual.php">徵稿辦法</a></li>
                        <li><a class="dropdown-item" href="periodicals_rule.php">撰稿原則</a></li>
                        <li><a class="dropdown-item" href="periodicals_reviewer.php">審稿辦法</a></li>
                        <li><a class="dropdown-item" href="periodicals_contribute.php">期刊投稿</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link cu__navHover" href="contact.php">聯絡我們</a>
                </li>
            </ul>

            <!-- 登入前/後 兩種按鈕 -->
            <!-- 狀態1: 登入會員後 開始 -->
            <ul class="navbar-nav mb-2 mb-lg-0 cu__navBottom">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn btn-primary text-white" href="#" id="navbarScrollingDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        會員中心
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown2">
                        <li><a class="dropdown-item" href="member.php">個人資料</a></li>
                        <li><a class="dropdown-item" href="progress.php">稿件進度</a></li>
                        <li>
                            <hr class="dropdown-divider">
                            </hr>
                        <li><a class="dropdown-item" href="javascript:void(0);" onClick="logout();">登出</a></li>
                    </ul>
                </li>
            </ul>
            <!-- 狀態1: 登入會員後 結束 -->
            <!-- 狀態2: 未登入會員 開始 -->
            <!-- <ul class="navbar-nav mb-2 mb-lg-0 cu__navBottom">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn btn-primary text-white" href="#" id="navbarScrollingDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        登入/註冊
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown2">
                        <li><a class="dropdown-item" href="login.php">登入會員</a></li>
                        <li><a class="dropdown-item" href="register.php">註冊會員</a></li>
                    </ul>
                </li>
            </ul> -->
            <!-- 狀態: 未登入會員 結束 -->
        </div>
    </div>
</nav>