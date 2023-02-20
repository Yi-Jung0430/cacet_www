<?php include("inc_head.php"); ?>
<div class="forget bg-gray02">
    <div class="forget__bg01">

        <!-- 訊息外殼位置 開始 -->
        <?php include("inc_message.php"); ?>
        <!-- 訊息外殼位置 結束 -->
        
        <!-- 內容 開始 -->
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="card rounded-3 shadow py-3" style="width: 24rem;">
                    <div class="card-body">
                        <h5 class="card-title">請先登入會員</h5>
                        <p class="card-text">登入後即可使用投稿功能</p>
                        <a href="home_noLogin.php" class="btn btn-outline-primary me-2">返回首頁</a>
                        <a href="login.php" class="btn btn-primary">前往登入</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 內容 結束 -->
</div>