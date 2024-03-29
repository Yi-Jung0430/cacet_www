<!-- 期刊論文>修改稿件(修改後重審、修改後刊登) -->
<?php include("inc_head.php"); ?>
<div class="bg-gray02">
  <div class="home__bg01">
    <!-- 導航欄 開始 -->
    <?php include("inc_navbar.php"); ?>
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
              <li class="breadcrumb-item"><a href="progress.php">稿件進度</a></li>
              <li class="breadcrumb-item active" aria-current="page">稿件修改
                <span>(期刊論文)</span>
              </li>
            </ol>
          </nav>
          <!-- breadcrumb end -->

          <!-- 訊息外殼位置 開始 -->
          <?php include("inc_message.php"); ?>
          <!-- 訊息外殼位置 結束 -->

          <div class="mt-1 mt-lg-3">
            <small class="text-small fw-light "><i class="bi bi-asterisk me-1 text-primary"></i>為必填欄位</small>
          </div>
          <section class="detail_box">
            <form method="post" enctype="multipart/form-data" action="progress.php">
              <!-- 形式審查退回 表格 開始 -->
              <table>
                <tr>
                  <td colspan="2" class="bg-third text-light">
                    <span>
                      形式審查退回
                    </span>

                  </td>
                </tr>
                <tr>
                  <th>
                    退回紀錄
                  </th>
                  <td>
                    <pre class="art_pre">[2020-06-05 15:30:00]<br>作者資料不完整。
                    <br>[2020-06-03 15:30:00]<br>論文標題和論文摘要資料不完整。
                    </pre>
                  </td>
                </tr>
              </table>
              <!-- 形式審查退回 表格 結束 -->
              <!-- 論文資訊 表格 開始 -->
              <table class="table  table-bordered bg-white mt-2 seminarInner align-middle">
                <thead>
                  <tr>
                    <th colspan="2" class="bg-third text-light">論文資訊</th>
                  </tr>
                </thead>
                <tbody class="cu__table">
                  <!-- 投稿項目 span -->
                  <tr>
                    <th scope="row" valign="middle">投稿項目
                    </th>
                    <td>
                      <span>《教育科技與學習》期刊</span>
                    </td>
                  </tr>
                  <!-- 論文標題(中文) v_02 -->
                  <tr>
                    <th valign="middle">論文標題 (中文)
                      <sup><i class="bi bi-asterisk text-primary"></i><sup>
                    </th>
                    <td>
                      <input type="text" class="form-control v_02" placeholder="" value="國小學童使用水資源VR遊戲之研發與推廣">
                    </td>
                  </tr>
                  <!-- 論文標題(英文) v_03 -->
                  <tr>
                    <th valign="middle">論文標題 (英文)
                      <sup><i class="bi bi-asterisk text-primary"></i><sup>
                    </th>
                    <td>
                      <input type="text" class="form-control v_03" placeholder="" value="Exploring Satisfaction With Using VR Water Games Water-Saving Software for Elementary School Students">
                    </td>
                  </tr>
                  <!-- 論文摘要(中文) v_04 -->
                  <tr>
                    <th valign="middle">論文摘要 (中文)
                      <sup><i class="bi bi-asterisk text-primary"></i><sup>
                    </th>
                    <td>
                      <textarea class="form-control v_04" rows="3">本研究以 ADDIE 教學設計模式與虛擬實境結合軟體教材研發一款「愛惜水資源」VR 教材，提供國小學童使用該軟體教材，並調查學童使用該教材的滿意度與接受度。研究對象為參加國立科學工藝博物館「環境永續 ~ 水是高手」活動之 107 位國小學童，並採用 HTC VIVE 沉浸式頭盔 VR 進行學習體驗。透過滿意度問卷調查結果顯示，學童對該 VR 教材「愛惜水資源」以五點滿意度量表之總體平均值為 4.69，表示對於該軟體是喜歡的、有興趣的， 願意推薦 VR 教材給其他人使用，且軟體操作容易上手，也不需耗過多時間來學習。藉此經驗，提供博物館使用 VR 教材作為推廣科教之參考。
                      </textarea>
                      <small class="form-text">請勿超過500 個字</small>
                    </td>
                  </tr>
                  <!-- 論文摘要(英文) v_05 -->
                  <tr>
                    <th valign="middle">論文摘要 (英文)
                      <sup><i class="bi bi-asterisk text-primary"></i><sup>
                    </th>
                    <td>
                      <textarea class="form-control v_05" rows="3">This research used the ADDIE model and virtual reality (VR) to develop a water resource VR teaching material called＂Cherishing Water＂. The research sub- jects were 107 elementary school students who attended 「Sustainable Environ- ment: Save Water」in National Science and Technology Museum. </textarea>
                      <small class="form-text">請勿超過500 個字</small>
                    </td>
                  </tr>
                  <!-- 關鍵字 (中文) v_06 -->
                  <tr>
                    <th valign="middle">關鍵字 (中文)
                      <sup><i class="bi bi-asterisk text-primary"></i><sup>
                    </th>
                    <td>
                      <input type="text" class="form-control v_06" value="虛擬實境；愛惜水資源；教學設計模式">
                      <small class="form-text">請以全形分號 (<span class="text-primary">；</span>) 分隔</small>
                    </td>
                  </tr>
                  <!-- 關鍵字 (英文) v_07 -->
                  <tr>
                    <th valign="middle">關鍵字 (英文)
                      <sup><i class="bi bi-asterisk text-primary"></i><sup>
                    </th>
                    <td>
                      <input type="text" class="form-control v_07" value="Virtual Reality; Cherish water; Instructional design model">
                      <small class="form-text">請以半形分號 ( <span class="text-primary">;</span> )分隔</small>
                    </td>
                  </tr>
                  <!-- 全文 v_08 -->
                  <tr>
                    <th valign="middle">全文
                      <sup><i class="bi bi-asterisk text-primary"></i><sup>
                    </th>
                    <td>
                      <div class="position-relative art_upload_raw">
                        <input class="form-control v_08 mod_select_file" type="file" name="file_01[]" accept=".doc,.docx,.pdf" multiple>
                        <a class="hidden icon-cancel r position-absolute top-50 end-0 translate-middle-y me-2" href="javascript:void(0);" onclick="art_upload_raw_cancel(this);">
                          <i class="bi bi-x-circle"></i>
                        </a>
                      </div>

                      <div class="file_box_list mt-2 oldfile_box">
                        <div class="item ">
                          <div class="l d-inline-block me-2">
                            <div>
                              <a class="link_download text-primary" href="storage/文化部推動社區營造及村落文化補助作業要點(改2).pdf" download>文化部推動社區營造及村落文化補助作業要點(改2).pdf</a>
                            </div>
                          </div>
                          <div class="r d-inline-block">
                            <a class="link_del file_del" href="javascript:void(0);" onClick="oldfile_del(this,'系統訊息','確認刪除此檔案嗎?');">
                              <i class="bi bi-x-circle">刪除</i>
                            </a>
                          </div>
                          <input type="hidden" class="file_is_del" name="file_old[]" value="0">
                        </div>
                      </div>

                      <small class="form-text fileformat">稿件內容請勿包含作者資訊。需以 PDF、DOC、或 DOCX 形式上傳，檔案大小不可超過 20MB。</small>
                    </td>
                  </tr>
                  <!-- 附件 v_09 -->
                  <tr>
                    <th valign="middle">附件上傳
                      <!-- <sup><i class="bi bi-asterisk text-primary"></i><sup> -->
                    </th>
                    <td>
                      <div class="position-relative art_upload_raw">
                        <input class="form-control v_09" type="file" accept=".zip,.7z,.WinRAR,.jpg,.jpeg,.png" multiple>
                        <a class="icon-cancel r position-absolute top-50 end-0 translate-middle-y me-2" href="javascript:void(0);" onclick="art_upload_raw_cancel(this);">
                          <i class="bi bi-x-circle"></i>
                        </a>
                      </div>
                      <small class="form-text fileformat">
                        需以 jpg、jpeg、或 png 形式上傳。<br />
                        檔案若有多個，請以壓縮檔上傳，檔案大小不可超過 20MB。
                      </small>
                    </td>
                  </tr>
                  <!-- 作者回應 -->
                  <tr>
                    <th valign="middle">作者回應
                    </th>
                    <td>
                      <textarea class="form-control" rows="3"></textarea>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- 論文資訊 表格 結束 -->
              <div class="text-center mt-5">
                <a class="btn btn-outline-third mx-auto me-2" href="javascript:history.go(-1);" onclick="del()">返回</a>
                <input class="btn btn-third" type="submit" onClick="form_submit(this,'finish')" value="送出">
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include("inc_footer.php"); ?>


<!-- js 開始 -->
<script>
  $(document).ready(function() {
    $(".art_upload_raw").find(".icon-cancel").hide();
    author_array_reset();
  });

  /*上傳檔案之值的change事件*/
  function art_upload_raw_change() {
    $(".art_upload_raw").on("change", "input[type='file']", function() {
      var filePath = $(this).val();
      var arr = filePath.split('\\');
      var fileName = arr[arr.length - 1];
      //
      $(this).closest(".art_upload_raw").find("input[type='text']").val(fileName);
      //控制清空按鈕顯不顯示
      $(this).closest(".art_upload_raw").find(".icon-cancel").show();
    });
  }

  /*刪除上傳檔案之值*/
  function art_upload_raw_cancel(arg) {
    var p = $(arg).closest(".art_upload_raw");
    var t1 = p.find("input[type='file']");
    var t2 = p.find("input[type='text']");
    //
    t1.val("");
    t2.val("");
    //控制清空按鈕顯不顯示
    p.find(".icon-cancel").hide();
  }

  async function form_submit(arg1, arg2) {
    event.preventDefault();

    message_hide();
    message_print_ok_hide();
    message_print_errer_hide();

    var msg = "";

    //自訂對話框
    if (arg2 == "draft") {
      if (!await art_confirm("系統訊息", "確認儲存成草稿嗎？")) {
        return false;
      }
    }
    if (arg2 == "finish") {

      // 先進行欄位驗證
      // 論文資訊 欄位驗證 開始

      //論文標題(中文) v_02
      if ($(".v_02").val() == "") {
        msg += "<p>論文標題(中文)，必填欄位。</p>";
      }

      //論文標題(英文) v_03
      if ($(".v_03").val() == "") {
        msg += "<p>論文標題(英文)，必填欄位。</p>";
      }

      //論文摘要(中文) v_04
      if ($(".v_04").val() == "") {
        msg += "<p>論文摘要 (中文)，必填欄位。</p>";
      }

      if ($(".v_04").val() != "") {
        var temp = $(".v_04").val();
        if (temp.length > 500) {
          msg += "<p>論文摘要 (中文)，字數限制：500字以內。</p>";
        }
      }

      //論文摘要(英文) v_05
      if ($(".v_05").val() == "") {
        msg += "<p>論文摘要 (英文)，必填欄位。</p>";
      }

      if ($(".v_05").val() != "") {
        var temp = $(".v_05").val();
        if (temp.length > 500) {
          msg += "<p>論文摘要 (英文)，字數限制：500字以內。</p>";
        }
      }

      //論文標題(中文) v_06
      if ($(".v_06").val() == "") {
        msg += "<p>關鍵字 (中文)，必填欄位。</p>";
      }

      //論文標題(英文) v_07
      if ($(".v_07").val() == "") {
        msg += "<p>關鍵字 (英文)，必填欄位。</p>";
      }

      //全文 v_08
      if ($(".v_08").val() == "") {
        if ($(".v_08").closest(".art_upload_raw").next(".oldfile_box").find(".file_is_del").val() == 0) {
          /**/
        } else {
          msg += "<p>全文，請上傳稿件檔案。</p>";
        }
      }
      if ($(".v_08").val() != "") {
        //checkFilesize()之說明:第1參數:對象;第2參數:最大限制MB,如:5MB,則設定為「5」
        if (!checkFilesize($(".v_08"), 20)) {
          msg += "<p>全文，檔案大小限制：20MB以內。</p>";
        }
      }

      if ($(".v_09").val() != "") {
        //checkFilesize()之說明:第1參數:對象;第2參數:最大限制MB,如:5MB,則設定為「5」
        if (!checkFilesize($(".v_09"), 20)) {
          msg += "<p>附件，檔案大小限制：20MB以內。</p>";
        }
      }
      // 論文資訊 欄位驗證 結束

      if (msg != "") {
        message_show(msg);
        return false;
      }


      var txt = "";
      txt += "確認提交此稿件嗎？確認後，將送交審查。";

      if (!await art_confirm("系統訊息", txt)) {
        return false;
      }
    }


    $(arg1).closest('form').submit();
  }

  async function del() {
    event.preventDefault();
    if (await art_confirm('系統訊息', '您剛剛的異動將不會儲存，確定要返回嗎?')) {
      location.href = "progress.php";
    }
  }


  /* name屬性，陣列重設index  -- 開始 */
  function author_array_reset() {
    $(".author_list li:not('.li_copy')").each(function(i, e) {
      //作者類型
      $(this).find(".v_10").attr("name", "author[" + i + "]['type']");

      //通訊作者
      $(this).find(".v_11").attr("name", "author[" + i + "]['contact']");

      //電子信箱
      $(this).find(".v_12").attr("name", "author[" + i + "]['email']");

      //作者中文名
      $(this).find(".v_13").attr("name", "author[" + i + "]['name_tw']");

      //作者英文名
      $(this).find(".v_14").attr("name", "author[" + i + "]['name_en']");

      //服務機構
      $(this).find(".v_15").attr("name", "author[" + i + "]['service']");

      //手機
      $(this).find(".v_16").attr("name", "author[" + i + "]['phone']");

      //職稱
      $(this).find(".v_17").attr("name", "author[" + i + "]['job']");

      //服務機構電話
      $(this).find(".v_18").attr("name", "author[" + i + "]['service_tel']");

      //郵遞區號
      $(this).find(".v_19").attr("name", "author[" + i + "]['zipcode']");

      //通訊地址
      $(this).find(".v_20").attr("name", "author[" + i + "]['address']");

    });
  }
  /* name屬性，陣列重設index  -- 結束 */
</script>
<!-- js 結束 -->