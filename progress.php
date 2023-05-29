<!-- 每頁模板 複製用 -->
<?php include("inc_head.php"); ?>
<div class="bg-gray02">
  <div class="home__bg01">
    <!-- 導航欄 開始 -->
    <?php include("inc_navbar.php"); ?>
    <!-- 導航欄 結束 -->

    <!-- 訊息外殼位置 開始 -->
    <?php include("inc_message.php"); ?>
    <!-- 訊息外殼位置 結束 -->

    <!-- 主要內容 開始 -->
    <div class="container pb-3 pb-lg-5">
      <div class="row">
        <div class="col-12">
          <!-- breadcrumb start -->
          <nav class="mt-3 mt-md-5" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home.php">首頁</a></li>
              <li class="breadcrumb-item">會員中心</li>
              <li class="breadcrumb-item active" aria-current="page">稿件進度</li>
            </ol>
          </nav>
          <!-- breadcrumb end -->
          <h2 class="my-lg-4 my-2 h3 border-start border-dark ps-2">會議投稿</h2>
        </div>
        <div class="col-12">
          <!-- 表格 開始 -->
          <div class="table-responsive">
            <table class="align-middle  table table-bordered border-third table-hover">
              <thead class="text-white bg-third">
                <tr>
                  <th class="fs-6 text-nowrap">投稿時間</th>
                  <th class="fs-6 text-nowrap">論文編號</th>
                  <th class="fs-6 text-nowrap">投稿項目</th>
                  <th class="fs-6 text-nowrap">論文標題</th>
                  <th class="fs-6 text-nowrap">稿件狀態</th>
                  <th class="fs-6 text-nowrap">功能</th>
                </tr>
              </thead>
              <tbody class="fs-6">
                <!-- 會議論文 會有的狀態列表 開始 -->
                <tr>
                  <td class="text-nowrap">2022-08-12 15:18:00</td>
                  <td class="text-nowrap">20220812409</td>
                  <td class="text-nowrap">會議論文</td>
                  <td class="text-nowrap">科技輔助英語口說學習之分析與探討</td>
                  <td class="text-nowrap">
                    已投稿
                    <span class="text-primary">[形式審查中]</span>
                  </td>
                  <td>
                  </td>
                </tr>
                <tr>
                  <td class="text-nowrap">2022-08-12 15:18:00</td>
                  <td class="text-nowrap">20220912101</td>
                  <td class="text-nowrap">會議論文</td>
                  <td class="text-nowrap">國小學童使用水資源VR遊戲之研發與推廣</td>
                  <td class="text-nowrap">
                    已投稿
                    <span class="text-primary">[審稿中]</span>
                  </td>
                  <td>
                  </td>
                </tr>
                <tr>
                  <td class="text-nowrap">2022-08-12 15:18:00</td>
                  <td class="text-nowrap">20220912101</td>
                  <td class="text-nowrap">會議論文</td>
                  <td class="text-nowrap">國小學童使用水資源VR遊戲之研發與推廣</td>
                  <td class="text-nowrap">
                    已投稿
                    <span class="text-primary">[稿件已通過]</span>
                  </td>
                  <td class="text-nowrap">
                    <a href="progress_view01.php" class="btn btn-outline-third">檢視</a>
                  </td>
                </tr>
                <tr>
                  <td class="text-nowrap">2022-08-12 15:18:00</td>
                  <td class="text-nowrap">20220912101</td>
                  <td class="text-nowrap">會議論文</td>
                  <td class="text-nowrap">國小學童使用水資源VR遊戲之研發與推廣</td>
                  <td class="text-nowrap">
                    已投稿
                    <span class="text-primary">[稿件不通過]</span>
                  </td>
                  <td class="text-nowrap">
                    <a href="progress_view02.php" class="btn btn-outline-third">檢視</a>
                  </td>
                </tr>
                <tr>
                  <td class="text-nowrap">2021-05-12 14:17:33</td>
                  <td class="text-nowrap">20210512582</td>
                  <td class="text-nowrap">會議論文</td>
                  <td class="text-nowrap">科技輔助英語口說學習之分析與探討</td>
                  <td class="text-nowrap">
                    草稿
                  </td>
                  <td class="text-nowrap">
                    <a href="javascript:void(0);" onClick="del();" class="me-2 btn btn-outline-primary">取消投稿</a>
                    <a href="progress_edit01.php" class="btn btn-outline-third">稿件修改</a>
                  </td>
                </tr>
                <tr>
                  <td class="text-nowrap">2021-05-12 14:17:33</td>
                  <td class="text-nowrap">20210512582</td>
                  <td class="text-nowrap">會議論文</td>
                  <td class="text-nowrap">科技輔助英語口說學習之分析與探討</td>
                  <td class="text-nowrap">
                    形式審查退回
                  </td>
                  <td class="text-nowrap">
                    <a href="javascript:void(0);" onClick="del();" class="me-2 btn btn-outline-primary">取消投稿</a>
                    <a href="progress_edit02.php" class="btn btn-outline-third">稿件修改</a>
                  </td>
                </tr>
                <!-- 會議論文 會有的狀態列表 結束 -->

                <!-- 期刊論文 會有的狀態列表 開始 -->
                <tr>
                  <td class="text-nowrap">2021-05-12 14:17:33</td>
                  <td class="text-nowrap">20210512582</td>
                  <td class="text-nowrap">期刊論文</td>
                  <td class="text-nowrap">國小學童使用水資源VR遊戲之研發與推廣</td>
                  <td class="text-nowrap">
                    草稿
                  </td>
                  <td class="text-nowrap">
                    <a href="javascript:void(0);" onClick="del();" class="me-2 btn btn-outline-primary">取消投稿</a>
                    <a href="progress_edit03.php" class="btn btn-outline-third">稿件修改</a>
                  </td>
                </tr>
                <tr>
                  <td class="text-nowrap">2022-09-12 15:18:00</td>
                  <td class="text-nowrap">20220912101</td>
                  <td class="text-nowrap">期刊論文</td>
                  <td class="text-nowrap">國小學童使用水資源VR遊戲之研發與推廣</td>
                  <td class="text-nowrap">
                    形式審查中
                  </td>
                  <td class="text-nowrap">
                  </td>
                </tr>

                <tr>
                  <td class="text-nowrap">2021-05-12 14:17:33</td>
                  <td class="text-nowrap">20210512582</td>
                  <td class="text-nowrap">期刊論文</td>
                  <td class="text-nowrap">國小學童使用水資源VR遊戲之研發與推廣</td>
                  <td class="text-nowrap">
                    形式審查退回
                  </td>
                  <td class="text-nowrap">
                    <a href="javascript:void(0);" onClick="del();" class="me-2 btn btn-outline-primary">取消投稿</a>
                    <a href="progress_edit04.php" class="btn btn-outline-third">稿件修改</a>
                  </td>
                </tr>
                <!-- 修改後刊登 四種狀態 開始 -->
                <tr>
                  <td class="text-nowrap">2021-05-12 14:17:33</td>
                  <td class="text-nowrap">20210512582</td>
                  <td class="text-nowrap">期刊論文</td>
                  <td class="text-nowrap">國小學童使用水資源VR遊戲之研發與推廣</td>
                  <td class="text-nowrap">
                    待修改
                    <span class="text-primary">[修改後刊登]</span>
                  </td>
                  <td class="text-nowrap">
                    <a href="progress_view03.php" class="me-2 btn btn-outline-third">審委意見</a>
                    <a href="progress_edit05.php" class="btn btn-outline-third">稿件修改</a>
                  </td>
                </tr>
                <tr>
                  <td class="text-nowrap">2021-05-12 14:17:33</td>
                  <td class="text-nowrap">20210512582</td>
                  <td class="text-nowrap">期刊論文</td>
                  <td class="text-nowrap">國小學童使用水資源VR遊戲之研發與推廣</td>
                  <td class="text-nowrap">
                    形式審查中
                    <span class="text-primary">[修改後刊登]</span>
                  </td>
                  <td class="text-nowrap">
                    <a href="progress_view03.php" class="me-2 btn btn-outline-third">審委意見</a>
                  </td>
                </tr>
                <tr>
                  <td class="text-nowrap">2021-05-12 14:17:33</td>
                  <td class="text-nowrap">20210512582</td>
                  <td class="text-nowrap">期刊論文</td>
                  <td class="text-nowrap">國小學童使用水資源VR遊戲之研發與推廣</td>
                  <td class="text-nowrap">
                    已投稿
                    <span class="text-primary">[修改後刊登]</span>
                  </td>
                  <td class="text-nowrap">
                    <a href="progress_view03.php" class="me-2 btn btn-outline-third">審委意見</a>
                  </td>
                </tr>
                <tr>
                  <td class="text-nowrap">2021-05-12 14:17:33</td>
                  <td class="text-nowrap">20210512582</td>
                  <td class="text-nowrap">期刊論文</td>
                  <td class="text-nowrap">國小學童使用水資源VR遊戲之研發與推廣</td>
                  <td class="text-nowrap">
                    形式審查退回
                    <span class="text-primary">[修改後刊登]</span>
                  </td>
                  <td class="text-nowrap">
                    <a href="progress_view03.php" class="me-2 btn btn-outline-third">審委意見</a>
                    <a href="progress_edit06.php" class="btn btn-outline-third">稿件修改</a>
                  </td>
                </tr>
                <!-- 修改後刊登 四種狀態 結束 -->
                <!-- 修改後重審 四種狀態 開始 -->
                <tr>
                  <td class="text-nowrap">2021-05-12 14:17:33</td>
                  <td class="text-nowrap">20210512582</td>
                  <td class="text-nowrap">期刊論文</td>
                  <td class="text-nowrap">國小學童使用水資源VR遊戲之研發與推廣</td>
                  <td class="text-nowrap">
                    待修改
                    <span class="text-primary">[修改後重審]</span>
                  </td>
                  <td class="text-nowrap">
                    <a href="progress_view03.php" class="me-2 btn btn-outline-third">審委意見</a>
                    <a href="progress_edit05.php" class="btn btn-outline-third">稿件修改</a>
                  </td>
                </tr>
                <tr>
                  <td class="text-nowrap">2021-05-12 14:17:33</td>
                  <td class="text-nowrap">20210512582</td>
                  <td class="text-nowrap">期刊論文</td>
                  <td class="text-nowrap">國小學童使用水資源VR遊戲之研發與推廣</td>
                  <td class="text-nowrap">
                    形式審查中
                    <span class="text-primary">[修改後重審]</span>
                  </td>
                  <td class="text-nowrap">
                    <a href="progress_view03.php" class="me-2 btn btn-outline-third">審委意見</a>
                  </td>
                </tr>
                <tr>
                  <td class="text-nowrap">2021-05-12 14:17:33</td>
                  <td class="text-nowrap">20210512582</td>
                  <td class="text-nowrap">期刊論文</td>
                  <td class="text-nowrap">國小學童使用水資源VR遊戲之研發與推廣</td>
                  <td class="text-nowrap">
                    審稿中
                    <span class="text-primary">[修改後重審]</span>
                  </td>
                  <td class="text-nowrap">
                    <a href="progress_view03.php" class="me-2 btn btn-outline-third">審委意見</a>
                  </td>
                </tr>
                <tr>
                  <td class="text-nowrap">2021-05-12 14:17:33</td>
                  <td class="text-nowrap">20210512582</td>
                  <td class="text-nowrap">期刊論文</td>
                  <td class="text-nowrap">國小學童使用水資源VR遊戲之研發與推廣</td>
                  <td class="text-nowrap">
                    形式審查退回
                    <span class="text-primary">[修改後重審]</span>
                  </td>
                  <td class="text-nowrap">
                    <a href="progress_view03.php" class="me-2 btn btn-outline-third">審委意見</a>
                    <a href="progress_edit06.php" class="btn btn-outline-third">稿件修改</a>
                  </td>
                </tr>
                <!-- 修改後重審 四種狀態 開始 -->
                <tr>
                  <td class="text-nowrap">2022-08-12 15:18:00</td>
                  <td class="text-nowrap">20220912101</td>
                  <td class="text-nowrap">期刊論文</td>
                  <td class="text-nowrap">國小學童使用水資源VR遊戲之研發與推廣</td>
                  <td class="text-nowrap">
                    已投稿
                    <span class="text-primary">[同意刊登]</span>
                  </td>
                  <td class="text-nowrap">
                    <a href="progress_view04.php" class="btn btn-outline-third">審委意見</a>
                  </td>
                </tr>
                <tr>
                  <td class="text-nowrap">2022-08-12 15:18:00</td>
                  <td class="text-nowrap">20220912101</td>
                  <td class="text-nowrap">期刊論文</td>
                  <td class="text-nowrap">國小學童使用水資源VR遊戲之研發與推廣</td>
                  <td class="text-nowrap">
                    已投稿
                    <span class="text-primary">[不同意刊登]</span>
                  </td>
                  <td class="text-nowrap">
                    <a href="progress_view05.php" class="btn btn-outline-third">審委意見</a>
                  </td>
                </tr>
                <!-- 期刊論文 會有的狀態列表 結束 -->
              </tbody>
            </table>
          </div>
          <!-- 表格 結束 -->
        </div>
      </div>
    </div>
  </div>
</div>
<?php include("inc_footer.php"); ?>
<script>
  async function del() {
    if (await art_confirm('系統訊息', '您確認要刪除此稿件嗎？')) {
      location.href = "progress.php";
    }
  }

</script>