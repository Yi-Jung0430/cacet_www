<!-- 期刊論文>回應 -->
<?php include("inc_head.php"); ?>
<div class="bg-gray02">
  <div class="home__bg01">
    <!-- 導航欄 開始 -->
    <?php include("inc_navbar_member.php"); ?>
    <!-- 導航欄 結束 -->

    <!-- 主要內容 開始 -->
    <div class="container pb-3 pb-lg-5">
      <div class="row">
        <div class="col-12">
          <!-- breadcrumb start -->
          <nav class="mt-3 mt-md-5" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home.php">首頁</a></li>
              <li class="breadcrumb-item">會員中心</li>
              <li class="breadcrumb-item"><a href="review.php">稿件審查</a></li>
              <li class="breadcrumb-item active" aria-current="page">回應
                <span>(期刊論文)</span>
              </li>
            </ol>
          </nav>
          <!-- breadcrumb end -->

          <!-- 訊息外殼位置 開始 -->
          <?php include("inc_message.php"); ?>
          <!-- 訊息外殼位置 結束 -->

          <!-- 詳細內容 開始 -->
          <form method="post" enctype="multipart/form-data" action="review.php">
            <div class="detail_box">
              <table class="table">
                <tr>
                  <td colspan="2">
                    <p>論文資訊</p>
                  </td>
                </tr>
                <tr>
                  <th>投稿項目</th>
                  <td>
                    <div class="art_word">
                      <span>期刊論文</span>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>論文編號</th>
                  <td>
                    <div class="art_word">
                      <span>20220812404</span>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>投稿時間</th>
                  <td>
                    <div class="art_word">
                      <span>2022-09-12 15:18:00</span>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>論文標題(中)</th>
                  <td>
                    <pre class="art_pre">國小學童使用水資源VR遊戲之研發與推廣</pre>
                  </td>
                </tr>
                <tr>
                  <th>論文標題(英)</th>
                  <td>
                    <pre class="art_pre">Exploring Satisfaction With Using VR Water Games Water-Saving Software for Elementary</pre>
                  </td>
                </tr>
                <tr>
                  <th>論文摘要(中)</th>
                  <td>
                    <pre class="art_pre">本研究以 ADDIE 教學設計模式與虛擬實境結合軟體教材研發一款「愛惜水資源」VR 教材，提供國小學童使用該軟體教材，並調查學童使用該教材的滿意度與接受度。研究對象為參加國立科學工藝博物館「環境永續 ~ 水是高手」活動之 107 位國小學童，並採用 HTC VIVE 沉浸式頭盔 VR 進行學習體驗。透過滿意度問卷調查結果顯示，學童對該 VR 教材「愛惜水資源」以五點滿意度量表之總體平均值為 4.69，表示對於該軟體是喜歡的、有興趣的， 願意推薦 VR 教材給其他人使用，且軟體操作容易上手，也不需耗過多時間來學習。藉此經驗，提供博物館使用 VR 教材作為推廣科教之參考。</pre>
                  </td>
                </tr>
                <tr>
                  <th>論文摘要(英)</th>
                  <td>
                    <pre class="art_pre">This research used the ADDIE model and virtual reality (VR) to develop a water resource VR teaching material called＂Cherishing Water＂. The research sub- jects were 107 elementary school students who attended 「Sustainable Environ- ment: Save Water」in National Science and Technology Museum. </pre>
                  </td>
                </tr>
                <tr>
                  <th>關鍵字(中)</th>
                  <td>
                    <div class="art_word">
                      <span>虛擬實境；愛惜水資源；教學設計模式</span>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>關鍵字(英)</th>
                  <td>
                    <div class="art_word">
                      <span>Virtual Reality; Cherish water; Instructional design model</span>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>全文</th>
                  <td>
                    <a class="art_word" href="storage/以深度學習神經網路實現特徵點遮蔽之人臉偵測.pdf" download="以深度學習神經網路實現特徵點遮蔽之人臉偵測.pdf">
                      <span>國小學童使用水資源VR遊戲之研發與推廣.pdf</span>
                    </a>
                  </td>
                </tr>
                <tr>
                  <th>附件下載</th>
                  <td>
                    <a class="art_word" href="storage/以深度學習神經網路實現特徵點遮蔽之人臉偵測.pdf" download="以深度學習神經網路實現特徵點遮蔽之人臉偵測.pdf">
                      <span>國小學童使用水資源VR遊戲之研發與推廣.zip</span>
                    </a>
                  </td>
                </tr>
              </table>
            </div>
            <div class="detail_box">
              <table class="table">
                <tr>
                  <td colspan="2">
                    <p>徵詢結果</p>
                  </td>
                </tr>
                <tr colspan="2">
                  <th>
                    <div class="form-check">
                      <label class="form-check-label" for="flexRadioDefault1">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <span>接受此篇審稿</span>
                      </label>
                    </div>
                    <div class="form-check mt-2">
                      <label class="form-check-label" for="flexRadioDefault2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <span>不接受此篇審稿</span>
                      </label>
                    </div>
                  </th>
                </tr>
              </table>
            </div>
            <div class="text-center">
              <a class="btn btn-outline-third me-2" href="javascript:history.go(-1);">返回</a>
              <input class="btn btn-third" type="submit" onClick="form_submit(this,'finish')" value="提交回應">
            </div>
          </form>
        </div>
        <!-- 詳細內容 結束 -->
      </div>
    </div>
  </div>
</div>
</div>
<?php include("inc_footer.php"); ?>
<script>
  async function form_submit(arg1, arg2) {
    event.preventDefault();

    message_hide();
    message_print_ok_hide();
    message_print_errer_hide();

    var msg = "";

    if (msg != "") {
      message_show(msg);
      return false;
    }
    //自訂對話框
    if (arg2 == "finish") {
      if (!await art_confirm("系統訊息", "確認提交此回應嗎？")) {
        return false;
      }
    }

    $(arg1).closest('form').submit();
  }

  async function del() {
    event.preventDefault();
    if (await art_confirm('系統訊息', '您剛剛的異動將不會儲存，確定要返回嗎?')) {
      location.href = "review.php";
    }
  }
</script>