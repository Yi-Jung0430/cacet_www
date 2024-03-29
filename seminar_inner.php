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
              <li class="breadcrumb-item"><a href="seminar_contribute.php">會議投稿</a></li>
              <li class="breadcrumb-item"><a href="seminar_method.php">投稿辦法</a></li>
              <li class="breadcrumb-item active" aria-current="page">投稿</li>
            </ol>
          </nav>
          <!-- breadcrumb end -->

          <!-- 訊息外殼位置 開始 -->
          <?php include("inc_message.php"); ?>
          <!-- 訊息外殼位置 結束 -->

          <div class="mt-1 mt-lg-3">
            <small class="text-small fw-light "><i class="bi bi-asterisk me-1 text-primary"></i>為必填欄位</small>
          </div>

          <form method="post" enctype="multipart/form-data" action="progress.php">
            <!-- 論文資訊 表格 開始 -->
            <div class="detail_box">
              <table class="table  table-bordered bg-white mt-1 seminarInner align-middle">
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
                      <span>ICEET 2022 數位學習與教育科技國際研討會 (會議論文)</span>
                    </td>
                  </tr>
                  <!-- 建議發表形式 v_01 -->
                  <tr>
                    <th valign="middle">建議發表形式
                      <sup><i class="bi bi-asterisk text-primary"></i><sup>
                    </th>
                    <td>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input v_01" name="publishing method" id="publishing_method_01" type="radio" value="口頭" checked>
                        <label class="form-check-label seminarInner__label" for="publishing_method_01">口頭</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input v_01" name="publishing method" id="publishing_method_02" type="radio" value="海報">
                        <label class="form-check-label seminarInner__label" for="publishing_method_02">海報</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input v_01" name="publishing method" id="publishing_method_03" type="radio" value="兩者皆可">
                        <label class="form-check-label seminarInner__label" for="publishing_method_03">兩者皆可</label>
                      </div>
                    </td>
                  </tr>
                  <!-- 論文標題(中文) v_02 -->
                  <tr>
                    <th valign="middle">論文標題 (中文)
                      <sup><i class="bi bi-asterisk text-primary"></i><sup>
                    </th>
                    <td>
                      <input type="text" class="form-control v_02" placeholder="">
                    </td>
                  </tr>
                  <!-- 論文標題(英文) v_03 -->
                  <tr>
                    <th valign="middle">論文標題 (英文)
                      <sup><i class="bi bi-asterisk text-primary"></i><sup>
                    </th>
                    <td>
                      <input type="text" class="form-control v_03" placeholder="">
                    </td>
                  </tr>
                  <!-- 論文摘要(中文) v_04 -->
                  <tr>
                    <th valign="middle">論文摘要 (中文)
                      <sup><i class="bi bi-asterisk text-primary"></i><sup>
                    </th>
                    <td>
                      <textarea class="form-control v_04" rows="3"></textarea>
                      <small class="form-text">請勿超過 500 個字</small>
                    </td>
                  </tr>
                  <!-- 論文摘要(英文) v_05 -->
                  <tr>
                    <th valign="middle">論文摘要 (英文)
                      <sup><i class="bi bi-asterisk text-primary"></i><sup>
                    </th>
                    <td>
                      <textarea class="form-control v_05" rows="3"></textarea>
                      <small class="form-text">請勿超過 500 個字</small>
                    </td>
                  </tr>
                  <!-- 關鍵字 (中文) v_06 -->
                  <tr>
                    <th valign="middle">關鍵字 (中文)
                      <sup><i class="bi bi-asterisk text-primary"></i><sup>
                    </th>
                    <td>
                      <input type="text" class="form-control v_06">
                      <small class="form-text">請以全形分號 (<span class="text-primary">；</span>) 分隔</small>
                    </td>
                  </tr>
                  <!-- 關鍵字 (英文) v_07 -->
                  <tr>
                    <th valign="middle">關鍵字 (英文)
                      <sup><i class="bi bi-asterisk text-primary"></i><sup>
                    </th>
                    <td>
                      <input type="text" class="form-control v_07">
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
                        <input class="form-control v_08" type="file" class="mod_select_file" name="file_01[]" accept=".doc,.docx,.pdf" multiple>
                        <a class="hidden icon-cancel r position-absolute top-50 end-0 translate-middle-y me-2" href="javascript:void(0);" onclick="art_upload_raw_cancel(this);">
                          <i class="bi bi-x-circle">
                          </i>
                        </a>
                      </div>
                      <small class="form-text fileformat">需以 PDF、DOC、或 DOCX 形式上傳，檔案大小不可超過 20MB。</small>
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
                </tbody>
              </table>
            </div>
            <!-- 論文資訊 表格 結束 -->

            <!-- 作者資訊 表格 開始 -->
            <ul class="list_group">
              <!-- 第一位 -->
              <li>
                <section class="detail_box">
                  <table class="table table-bordered bg-white mt-2 seminarInner align-middle">
                    <thead>
                      <tr class="bg-third text-light">
                        <th colspan="4" class="bg-third text-light">
                          <div class="d-flex justify-content-between author_th"></div>
                        </th>
                      </tr>
                    </thead>
                    <tbody class="cu__table">
                      <!-- 第一列 -->
                      <tr>
                        <!-- 作者類型 v_10 v_11 -->
                        <th valign="middle">
                          作者類型
                          <sup><i class="bi bi-asterisk text-primary"></i><sup>
                        </th>
                        <td>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label seminarInner__label" for="author01">
                              <input class="form-check-input v_10" type="radio" value="boss" id="author01">
                              <span>
                                第一作者
                              </span>
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label seminarInner__label" for="author02">
                              <input class="form-check-input v_10" type="radio" value="team" id="author02" checked>
                              <span>
                                共同作者
                              </span>
                            </label>
                          </div>
                          <div class="form-check form-check-inline border-start border-third check-border">
                            <label class="form-check-label seminarInner__label ">
                              <input class="form-check-input v_11" type="checkbox" value="1">
                              <span>
                                通訊作者
                              </span>
                            </label>
                          </div>
                        </td>
                        <!-- 順序 -->
                        <th valign="middle">
                          順序
                          <sup><i class="bi bi-asterisk text-primary"></i><sup>
                        </th>
                        <td>
                          <input type="number" class="form-control v_22" value="">
                          <small class="form-text fileformat">
                            範例：請依作者排序填寫數字，如第一作者填寫 1 即可。
                          </small>
                        </td>
                        <!-- 第二列 -->
                      <tr>
                        <!-- 作者中文名 v_13 -->
                        <th valign="middle">
                          作者中文名
                        </th>
                        <td>
                          <span>林北星</span>
                        </td>
                        <!-- 作者英文名 v_14 -->
                        <th valign="middle">
                          作者英文名
                        </th>
                        <td>
                          <span>James Chih-Hsin Yang</span>
                        </td>
                      </tr>
                      <!-- 第三列 -->
                      <tr>
                        <!-- 服務機構 v_15 -->
                        <th valign="middle">
                          服務機構
                        </th>
                        <td>
                          <span>天堂花園</span>
                        </td>
                        <!-- 手機 v_16 -->
                        <th valign="middle">
                          手機
                        </th>
                        <td>
                          <span>0912345678</span>
                        </td>
                      </tr>
                      <!-- 第四列 -->
                      <tr>
                        <!-- 職稱 v_17 -->
                        <th valign="middle">
                          職稱
                        </th>
                        <td>
                          <span>公主</span>
                        </td>
                        <!-- 服務機構電話 v_18 -->
                        <th valign="middle">
                          服務機構電話
                        </th>
                        <td>
                          <span></span>
                        </td>
                      </tr>
                      <!-- 第五列 -->
                      <tr>
                        <!-- 郵遞區號 v_19 -->
                        <th valign="middle">
                          郵遞區號
                        </th>
                        <td>
                          <span>777</span>
                        </td>
                        <!-- 通訊地址 v_20 -->
                        <th valign="middle">
                          通訊地址
                        </th>
                        <td>
                          <span>花園區花見小路166號10樓</span>
                        </td>
                      </tr>
                      <tr>
                        <!-- 電子信箱 v_21 -->
                        <th valign="middle">電子信箱
                        </th>
                        <td colspan="3">
                          <span>Yang@sydt.com.tw</span>
                        </td>
                      </tr>
                      </tr>
                    </tbody>
                  </table>
                </section>
              </li>
              <!-- 新增的空白表格 -->
              <li class="li_copy author_list">
                <section class="detail_box li_copy_child">
                  <table class="table table-bordered bg-white mt-2 seminarInner align-middle">
                    <thead>
                      <tr class="bg-third text-light">
                        <th colspan="4" class="bg-third text-light">
                          <div class="d-flex justify-content-between author_th">
                            <a href="javascript:void(0);" class="list_group_del" onClick="list_group_del(this);author_array_reset();">
                              <i class="bi bi-x-circle "></i>
                              刪除
                            </a>
                          </div>
                        </th>
                      </tr>
                    </thead>
                    <tbody class="cu__table">
                      <!-- 第一列 -->
                      <tr>
                        <!-- 作者類型 v_10 v_11 -->
                        <th valign="middle">
                          作者類型
                          <sup><i class="bi bi-asterisk text-primary"></i><sup>
                        </th>
                        <td>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input v_10" type="radio" value="boss">
                            <label class="form-check-label seminarInner__label">第一作者</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input v_10" type="radio" value="team" checked>
                            <label class="form-check-label seminarInner__label">共同作者</label>
                          </div>
                          <div class="form-check form-check-inline border-start border-third check-border">
                            <input class="form-check-input v_11" type="checkbox" value="1">
                            <label class="form-check-label seminarInner__label ">通訊作者</label>
                          </div>
                        </td>
                        <!-- 順序 v_12 -->
                        <th valign="middle">
                          順序
                          <sup><i class="bi bi-asterisk text-primary"></i><sup>
                        </th>
                        <td>
                          <input type="number" class="form-control v_12" value="">
                          <small class="form-text fileformat">
                            範例：請依作者排序填寫數字，如第一作者填寫 1 即可。
                          </small>
                        </td>
                      </tr>
                      <!-- 第二列 -->
                      <tr>
                        <!-- 作者中文名 v_13 -->
                        <th valign="middle">
                          作者中文名
                          <sup><i class="bi bi-asterisk text-primary"></i><sup>
                        </th>
                        <td>
                          <input type="text" class="form-control v_13" value="">
                        </td>
                        <!-- 作者英文名 v_14 -->
                        <th valign="middle">
                          作者英文名
                          <sup><i class="bi bi-asterisk text-primary"></i><sup>
                        </th>
                        <td>
                          <input type="text" class="form-control v_14" value="">
                          <small class="form-text fileformat">
                            範例 : James Chih-Hsin Yang
                          </small>
                        </td>
                      </tr>
                      <!-- 第三列 -->
                      <tr>
                        <!-- 服務機構 v_15 -->
                        <th valign="middle">
                          服務機構
                          <sup><i class="bi bi-asterisk text-primary"></i><sup>
                        </th>
                        <td>
                          <input type="text" class="form-control v_15" value="">
                        </td>
                        <!-- 手機 v_16 -->
                        <th valign="middle">
                          手機
                          <sup><i class="bi bi-asterisk text-primary"></i><sup>
                        </th>
                        <td>
                          <input type="text" class="form-control v_16" value="">
                        </td>
                      </tr>
                      <!-- 第四列 -->
                      <tr>
                        <!-- 職稱 v_17 -->
                        <th valign="middle">
                          職稱
                          <sup><i class="bi bi-asterisk text-primary"></i><sup>
                        </th>
                        <td>
                          <input type="text" class="form-control v_17" value="">
                        </td>
                        <!-- 手機 v_18 -->
                        <th valign="middle">
                          服務機構電話
                        </th>
                        <td>
                          <input type="text" class="form-control v_18" value="">
                        </td>
                      </tr>
                      <!-- 第五列 -->
                      <tr>
                        <!-- 郵遞區號 v_19 -->
                        <th valign="middle">
                          郵遞區號
                        </th>
                        <td>
                          <input type="text" class="form-control v_19" value="">
                          <small class="form-text fileformat">
                            最多六位數字
                          </small>
                        </td>
                        <!-- 通訊地址 v_20 -->
                        <th valign="middle">
                          通訊地址
                        </th>
                        <td>
                          <input type="text" class="form-control v_20" value="">
                        </td>
                      </tr>
                      <tr>
                        <!-- 電子信箱 v_21 -->
                        <th valign="middle">電子信箱
                          <sup><i class="bi bi-asterisk text-primary"></i><sup>
                        </th>
                        <td colspan="3">
                          <input type="email" class="form-control v_21" value="">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </section>
              </li>
              <a href="javascript:void(0);" class="list_group_add btn btn-outline-third mt-2" onClick="list_group_add(this);author_array_reset();">
                新增作者
              </a>
            </ul>
            <!-- 作者資訊 表格 結束 -->
            <div class="text-center mt-5">
              <a class="btn btn-outline-third mx-auto me-2" href="javascript:history.go(-1);" onclick="del()">返回</a>
              <input class="btn btn-outline-third me-2" type="submit" onClick="form_submit(this,'draft')" value="儲存為草稿">
              <input class="btn btn-third" type="submit" onClick="form_submit(this,'finish')" value="送出">
            </div>
          </form>
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

      //發表形式v_01
      if ($(".v_01:checked").length == 0) {
        msg += "<p>發表形式，必填欄位。</p>";
      }

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


      // 作者資訊 欄位驗證 開始
      // 作者類型
      // 會員本人的排序欄位驗證(不得為空)
      if ($(".v_22").val() == "") {
        msg += "<p>表格 <span class='list_group_num'>" + "1" + "</span> 的順序，必填欄位。</p>";
      }

      $(".author_list").each(function(i, e) {
        if ($(this).hasClass("li_copy")) {
          return false;
        }
        //
        if ($(this).find(".v_10:checked").length == 0) {
          msg += "<p>表格 <span class='list_group_num'>" + (i + 2) + "</span> 的作者類型，必填欄位。</p>";
        }
      });

      //順序
      $(".author_list").each(function(i, e) {
        if ($(this).hasClass("li_copy")) {
          return false;
        }
        //
        if ($(this).find(".v_12").val() == "") {
          msg += "<p>表格 <span class='list_group_num'>" + (i + 2) + "</span> 的順序，必填欄位。</p>";
        }
      });

      //電子信箱
      $(".author_list").each(function(i, e) {
        if ($(this).hasClass("li_copy")) {
          return false;
        }
        //
        if ($(this).find(".v_21").val() == "") {
          msg += "<p>表格 <span class='list_group_num'>" + (i + 2) + "</span> 的電子信箱，必填欄位。</p>";
        } else {
          if (!checkEmail($(this).find(".v_21").val())) {
            msg += "<p>表格 <span class='list_group_num'>" + (i + 2) + "</span> 的電子信箱，資料格式限制：電子信箱格式。</p>";
          }
        }
      });

      //作者中文名
      $(".author_list").each(function(i, e) {
        if ($(this).hasClass("li_copy")) {
          return false;
        }
        //
        if ($(this).find(".v_13").val() == "") {
          msg += "<p>表格 <span class='list_group_num'>" + (i + 2) + "</span> 的作者中文名，必填欄位。</p>";
        }
      });

      //作者英文名
      $(".author_list").each(function(i, e) {
        if ($(this).hasClass("li_copy")) {
          return false;
        }
        //
        if ($(this).find(".v_14").val() == "") {
          msg += "<p>表格 <span class='list_group_num'>" + (i + 2) + "</span> 的作者英文名，必填欄位。</p>";
        }
      });

      //服務機構
      $(".author_list").each(function(i, e) {
        if ($(this).hasClass("li_copy")) {
          return false;
        }
        //
        if ($(this).find(".v_15").val() == "") {
          msg += "<p>表格 <span class='list_group_num'>" + (i + 2) + "</span> 的服務機構，必填欄位。</p>";
        }
      });

      //手機
      $(".author_list").each(function(i, e) {
        if ($(this).hasClass("li_copy")) {
          return false;
        }
        //
        if ($(this).find(".v_16").val() == "") {
          msg += "<p>表格 <span class='list_group_num'>" + (i + 2) + "</span> 的手機，必填欄位。</p>";
        }
      });

      //職稱
      $(".author_list").each(function(i, e) {
        if ($(this).hasClass("li_copy")) {
          return false;
        }
        //
        if ($(this).find(".v_17").val() == "") {
          msg += "<p>表格 <span class='list_group_num'>" + (i + 2) + "</span> 的職稱，必填欄位。</p>";
        }
      });


      //第一作者只能選擇一位
      if ($(".v_10[value='boss']:checked").length == 0) {
        msg += "<p>請選一位第一作者。</p>";
      }


      if ($(".v_10[value='boss']:checked").length >= 2) {
        msg += "<p>第一作者只能選擇一位。</p>";
      }

      //通訊作者
      if ($(".v_11:checked").length == 0) {
        msg += "<p>通訊作者，至少一位。</p>";
      }

      // 作者資訊 欄位驗證 結束


      if (msg != "") {
        message_show(msg);
        return false;
      }


      // 跳出系統訊息再次確認---開始
      //取得第一作者的姓名
      var temp_1 = "";
      $(".v_10[value='boss']:checked").each(function(i, e) {
        temp_1 += $(this).closest("li").find(".v_13").val();

        //
        if ($(".v_10[value='boss']:checked").length > (i + 1)) {
          temp_1 += "、";
        }
      });

      //取得通訊作者的姓名
      var temp_2 = "";
      $(".v_11:checked").each(function(i, e) {
        temp_2 += $(this).closest("li").find(".v_13").val();

        //
        if ($(".v_11:checked").length > (i + 1)) {
          temp_2 += "、";
        }
      });

      //
      var txt = "";
      txt += "確認第一作者是 " + temp_1 + " 嗎？<br />";
      txt += "確認通訊作者是 " + temp_2 + " 嗎？<br />";
      txt += "確認提交此稿件嗎？確認後，將送交審查。";

      if (!await art_confirm("系統訊息", txt)) {
        return false;
      }
    }


    $(arg1).closest('form').submit();
  }

  async function del() {
    event.preventDefault();
    if (await art_confirm('系統訊息', '確定要取消投稿嗎？確認後，稿件即將刪除。')) {
      location.href = "seminar_contribute.php";
    }
  }


  /* name屬性，陣列重設index  -- 開始 */
  function author_array_reset() {
    $(".author_list section:not('.li_copy')").each(function(i, e) {
      //作者類型
      $(this).find(".v_10").attr("name", "author[" + i + "]['type']");

      //通訊作者
      $(this).find(".v_11").attr("name", "author[" + i + "]['contact']");

      //順序
      $(this).find(".v_12").attr("name", "author[" + i + "]['order']");

      //電子信箱
      $(this).find(".v_21").attr("name", "author[" + i + "]['email']");

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