//本檔案為網頁設計師撰寫,非人請勿修改,以免未來維護困難,如果需修改可請找網頁設計師討論,感謝~
/*-----------------------------------
 開發雛形函式
-----------------------------------*/
/*
 *  建立基本月曆
 *  _cal("._cal",2018,8)
 */
function _cal(target, year, month){
	var is_in = false;
	var html_week = "";
	var html_day = "";
	var arr_week_key = [0,1,2,3,4,5,6];
	var first_day_week = new Date(__datetimeVal(year + "-" + month + "-01")).getDay();
	var day_len = __dayLength(year, month);
	var day_current = 1;
	//更改星期排序
	arr_week_key = __arrkeyFirst(arr_week_key,2);
	//建立星期
	for(var i = 0 ; i < arr_week_key.length ; i++){
		html_week += "[" + __weekText(arr_week_key[i]) + "]";
	}	
	//建立日期
	for(var i = 0 ; i < 99 ; i++){
		//
		if(arr_week_key[i] == first_day_week){
			is_in = true;
		}
		//
		if(is_in){
			html_day += "[" + __padzero(day_current,2) + "]";
			//到了第7位置就true
			if((i + 1) % 7 == 0){
				html_day += "<br>";
			}
			//
			day_current++;
		}else{
			html_day += "[空]";
		}
		//
		if(day_current > day_len){
			is_in = false;
			//到了第7位置就true
			if((i + 1) % 7 == 0){
				break;
			}
		}
	}
	//
	$(target).html(html_week + "<br>" + html_day);
}



/*
 *  跳數字
 *  查詢關鍵字js animate number count
 *  _CountUp("._count_up",123456789,12)
 */
 
function _CountUp(argTarget,argNumber,argFrequency){
	var frequency = argFrequency;
	var frequency_count = 0;
	var cut_num = argNumber/frequency;
	var run_num = 0;
	var show;
	
	var  timer = setInterval(function(){
		show = Math.floor(run_num);
		show = show.toLocaleString("en");
		$(argTarget).html(show);
		
		run_num += cut_num;
		frequency_count++;
		
		if(frequency < frequency_count){
			clearInterval(timer);
			//補修Math.floor問題
			$(argTarget).html(argNumber.toLocaleString("en"));
		}
	},50);
}

/*-----------------------------------
 共用函式
-----------------------------------*/
/*
 *  尋找接近數字
 *  __whoNumClosest([0,20,40,60,80,100],-5); => 0
 *  __whoNumClosest([0,20,40,60,80,100],28); => 20
 *  __whoNumClosest([0,20,40,60,80,100],"92"); => 100
 *  __whoNumClosest([0,20,40,60,80,100],320); => 100
 *  __whoNumClosest([0,20,40,60,80,100],"A"); => null
 */
function __whoNumClosest(argArrNum,argTarget){
	var target = argTarget;
	var arrNum = argArrNum;
	var artNum_result = null;
	var arrNum_L = null;
	var arrNum_R = null;
	var leng_L = null;
	var leng_R = null;
	
	if(arrNum.length >= 2){
		//判斷target是否超過arrNum範圍之外
		//target小於左邊
		if(target < arrNum[0]){
			artNum_result = arrNum[0];
		//target大於右邊
		}else if(arrNum[arrNum.length - 1] < target){
			artNum_result = arrNum[arrNum.length - 1];
		//target介於中間
		}else{
			for(var i = 0 ; i < arrNum.length - 1 ; i++){
				arrNum_L = arrNum[i];
				arrNum_R = arrNum[i+1];
				
				//判斷target是否在左右之間
				if(arrNum_L <= target && target < arrNum_R){
					//
					leng_L = Math.abs(arrNum_L - target);
					leng_R = Math.abs(arrNum_R - target);
					//leng_L和leng_R是那一個最近?
					if(leng_L < leng_R){
						artNum_result = arrNum_L;
					}else{
						artNum_result = arrNum_R;
					}
					break;
				}
			}
		}
	}else{
		artNum_result = arrNum[0];
	}
	//
	return artNum_result;
}



/*
 *  取得範圍日期
 *  __arrRangeDate("2018-09-05","2018-09-15")
 *  __arrRangeDate("2018-9-5","2018-09-15")
 *  __arrRangeDate("2018-9-5","2018-09-05")
 *  __arrRangeDate("2018-09-05","")
 *  __arrRangeDate("","2018-09-05")
 */
function __arrRangeDate(begin_date,end_date){
	var temp;
	var begin = "";
	var end = "";
	var arr_date = new Array();
	//
	if(begin_date != ""){
		begin = __datetimeVal(begin_date);
	}
	if(end_date != ""){
		end = __datetimeVal(end_date);
	}
	//
	if(begin != "" && end != ""){
		while(end >= begin){
			temp = new Date(begin);
			arr_date.push(temp.getFullYear() + "-" + __padzero(temp.getMonth()+1,2) + "-" + __padzero(temp.getDate(),2));
			begin += (24*(60*60))*1000;
		}
	}
	if(begin != "" && end == ""){
		temp = new Date(begin);
		arr_date.push(temp.getFullYear() + "-" + __padzero(temp.getMonth()+1,2) + "-" + __padzero(temp.getDate(),2));
	}
	if(begin == "" && end != ""){
		temp = new Date(end);
		arr_date.push(temp.getFullYear() + "-" + __padzero(temp.getMonth()+1,2) + "-" + __padzero(temp.getDate(),2));
	}
	//
	return arr_date;
}
/*
 *  從0~6取得該星期的自訂文字
 *  __weekText(0)
 *  __weekText(6,["SUN","MON","TUE","WED","THU","FRI","SAT"])
 */
function __weekText(week_key,week_text){
	var rtn;
	var arr_text = ["星期日","星期一","星期二","星期三","星期四","星期五","星期六"];
	//
	if(week_text){
		arr_text = week_text;
	}
	//
	return arr_text[week_key];
}


/*
 *  取得月份的總日數
 *  __dayLength(2016,2)
 *  __dayLength(2016,02)
 *  __dayLength("2016","2")
 */
function __dayLength(year,month){
	return new Date(year, month, 0).getDate();
}



/*
 *  取得日期時間轉成原始值
 *  __datetimeVal("2018-01-08 01:08:00")
 *  __datetimeVal("2018-01-08")
 */
function __datetimeVal(target){
	var arr = target.split(" ");
	var arrDate;
	var arrTime;
	var rtn = new Date(0);//1970-01-01 00:00:00起
	//
	if(arr.length == 1){
		arrDate = target.split("-");
		arrTime = ["00","00","00"];
	}
	if(arr.length == 2){
		arrDate = arr[0].split("-");
		arrTime = arr[1].split(":"); 
	}
	//
	rtn.setFullYear(Number(arrDate[0]));
	rtn.setMonth(Number(arrDate[1])-1);
	rtn.setDate(Number(arrDate[2]));
	rtn.setHours(Number(arrTime[0]));
	rtn.setMinutes(Number(arrTime[1]));
	rtn.setSeconds(Number(arrTime[2]));
	//
	return rtn.valueOf();
}

/*
 *  更新陣列key排序
 *  __arrkeyFirst(["0","1","2","3","4","5","6"],"3")
 */
function __arrkeyFirst(target, first){
	var temp = new Array();
	var rtn;
	//加入暫存陣列的開頭
	for(var i = 0 ; i < target.length ; i++){
		if(first != target[i]){
			temp.push(target[i]);
		}else{
			break;
		}
	}
	//刪除目標陣列的開頭
	for(var i = 0 ; i < temp.length ; i++){
		target.shift();
	}
	//合拼目標陣列+暫存陣列
	rtn = target.concat(temp);
	return rtn;
	//https://stackoverflow.com/questions/8073673/how-can-i-add-new-array-elements-at-the-beginning-of-an-array-in-javascript
}
/*
 *  取得補零
 *  __padzero(1,4)
 *  __padzero("22",4)
 *  __padzero(333,4)
 *  __padzero(666666,4)
 */
function __padzero(target, width){
	var rtn;
	target = target + '';
	//
	if(target.length >= width){
		rtn = target;
	}else{
		rtn = new Array(width - target.length + 1).join("0");
		rtn = rtn + target;
	}
	//
	return rtn;
}



/*
 *  取得網址參數
 *  範例:http://localhost/note/69.php?a=我是第一A&b=我是B&a=我是第二A
 *  __getURL(window.location.href,"a") => 我是第一A
 *  __getURL(window.location.href,"b") => 我是B
 *  __getURL(window.location.href,"c") => false
 */
function __getURL(url,param){
	var rtn = false;
	var arr = new Array();
	var arrParam = new Array();
	//
	arr = url.split("?");
	if(arr.length == 2){
		arr = arr[1].split("&");
		for(var i = 0 ; i < arr.length ; i++){
			arrParam = arr[i].split("=");
			if(param == arrParam[0]){
				rtn = decodeURIComponent(arrParam[1]);
				break;
			}
		}
	}
	return rtn;
}



/*
 *  取得CSSOM
 */ 
function __getCSSOM(){
	if (window.matchMedia("(max-width: 600px)").matches) {
		return "S";
	}else if (window.matchMedia("(max-width: 768px)").matches) {
		return "M";
	}else{
		return "L";
	}
}

 
 
/*-----------------------------------
 驗證函式
-----------------------------------*/
/*
 *  行動電話
 */
function checkPhone(arg){
	if(arg.match(/^[0-9]{10}$/)){
		return true;
	}else{
		return false;
	}
}
/*
 *  電子信箱
 */
function checkEmail(arg){
	if(arg.match(/^[a-zA-Z0-9\_\-\.]{2,}@[a-zA-Z0-9\_\-\.]{2,}$/)){
		return true;
	}else{
		return false;
	}
}
/*
 *  日期-年月日
 */
function checkDate(arg){
	var temp;
	//
	if(arg == ""){
		return false;
	}else{
		if(arg.match(/^[0-9]{4}-[0-1]{0,1}[0-9]{1}-[0-9]{1,2}$/)){
			temp = arg.split("-");
			//檢查月份
			if(Number(temp[1]) >= 1 && Number(temp[1]) <= 12){
				//
			}else{
				return false;
			}
			//檢查日數
			if(Number(temp[2]) >= 1 && Number(temp[2]) <= __dayLength(temp[0],temp[1])){
				//
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	return true;
}
/*
 *  日期-年月
 */
function checkDate_YM(arg){
	var temp;
	//
	if(arg == ""){
		return false;
	}else{
		if(arg.match(/^[0-9]{4}-[0-1]{0,1}[0-9]{1}$/)){
			temp = arg.split("-");
			//檢查月份
			if(Number(temp[1]) >= 1 && Number(temp[1]) <= 12){
				//
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	return true;
}
/*
 *  時間-時分秒
 */
function checkTime(arg){
	var temp;
	//
	if(arg == ""){
		return false;
	}else{
		if(arg.match(/^[0-2]{0,1}[0-9]{1}:[0-5]{0,1}[0-9]{1}:[0-5]{0,1}[0-9]{1}$/)){
			temp = arg.split(":");
			//檢查時
			if(Number(temp[0]) >= 0 && Number(temp[0]) <= 23){
				//
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	return true;
}
/*
 *  時間-時分
 */
function checkTime_HM(arg){
	var temp;
	//
	if(arg == ""){
		return false;
	}else{
		if(arg.match(/^[0-2]{0,1}[0-9]{1}:[0-5]{0,1}[0-9]{1}$/)){
			temp = arg.split(":");
			//檢查時
			if(Number(temp[0]) >= 0 && Number(temp[0]) <= 23){
				//
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	return true;
}

/*
 *  電話
 */
function checkTEL(arg){
	if(arg.match(/^[0-9\_\-\+\(\)\s\#]{3,}$/)){
		return true;
	}else{
		return false;
	}
}
/*
 *  電話，含分機
 */
function checkTEL_B(arg1, arg2, arg3){
	var temp_a = arg1;
	var temp_b = arg2;
	var temp_c = arg3;
	var isFormatOK_a = true;
	var isFormatOK_b = true;
	var isFormatOK_c = true;

	if(temp_a != ""){
		if(!temp_a.match(/^[0-9]{1,4}$/)){
			isFormatOK_a = false;
		}
	}
	if(temp_b != ""){
		if(!temp_b.match(/^[0-9]{1,8}$/)){
			isFormatOK_b = false;
		}
	}
	if(temp_c != ""){
		if(!temp_c.match(/^[0-9]{1,10}$/)){
			isFormatOK_c = false;
		}
	}
	
	if(isFormatOK_a && isFormatOK_b && isFormatOK_c){
		return true;
	}else{
		return false;
	}
}
/*
 *  數字
 */
function checkNumber(arg){
	var arg = arg.toString();
	if(arg.match(/^[-]{0,1}[0-9]{1,}$/)){
		return true;
	}else{
		return false;
	}
}
/*
 *  上傳檔案
 */
function checkFileFormat(argTarget, argFormat){
	var ext = argTarget.split('.').pop().toLowerCase();
	if($.inArray(ext, argFormat) != -1){
		return true;
	}else{
		return false;
	}
}
/*
 *  驗證上傳檔案大小
 */
function checkFilesize(arg1,arg2){
	var t = arg1;
	var b = (1024 * 1024) * arg2;
	
	if(t[0].files[0].size < b){
		return true;	
	}else{
		return false;
	}
}
/*==================================================*/
/*===== 表單設計 開始 =====*/
$(document).ready(function() {
	art_upload_raw_init();
	art_select_own_init();
	art_datetime_init();
});
$(document).click(function(e){
	//關閉js_html對象
	if($(".js_current").length >= 1){


		//自動選單
		if($(".js_current").closest(".art_select_own").length){
			if(e.target.closest(".art_select_own") == null){
				art_select_own_box_close($(".art_select_own .js_current").closest(".art_select_own"));
			}	
		}
		
		
		//日期及時間
		if($(".js_current").closest(".art_datetime").length){
			
			if(e.target.closest(".art_datetime") == null){
				if($(".js_current").closest(".art_datetime").data("_current_target") == "DATE"){
					art_datetime_date_close($(".art_datetime .js_current").closest(".art_datetime"));
				}
				if($(".js_current").closest(".art_datetime").data("_current_target") == "TIME"){
					art_datetime_time_close($(".art_datetime .js_current").closest(".art_datetime"));
				}
			}	
		}
		
		//建議清單
		
	}
});


/*
 *  切換明暗密碼
 */
function art_password_eye(arg){
	var p = $(arg).closest(".art_password");
	var t1 = p.find("input");
	var t2 = p.find(".r");
	//
	if(t1.attr("type") == "text"){
		t1.attr("type","password");
		t2.removeClass("icon-eye-open").addClass("icon-eye-close");
	}else{
		t1.attr("type","text");
		t2.removeClass("icon-eye-close").addClass("icon-eye-open");
	}
}


/*
 *  輸入數值
 */
/*數字*/
function art_num_number(arg1,arg2){
	var p = $(arg1).closest(".art_num");
	var t = p.find("input");
	var t_val = Number(t.val());
	var r;
	//
	if(Number.isFinite(t_val)){
		r = t_val + arg2;
	}else{
		r = 0;	
	}
	//
	t.val(r);
}
/*序號*/
function art_num_serial(arg1,arg2,arg3){
	var p = $(arg1).closest(".art_num");
	var t = p.find("input");
	var t_val = Number(t.val());
	var r;
	//
	if(Number.isInteger(t_val)){
		if(t_val < 0){
			t_val = 0;
		}
		if(t_val > Number(new Array(arg3 + 1).join("9"))){
			t_val = 0;
		}
		//
		r = t_val + arg2;
		//
		if(r < 0){
			r = 0;
		}
		if(r > Number(new Array(arg3 + 1).join("9"))){
			r = t_val;
		}
	}else{
		r = 0;
	}
	//
	t.val(__padzero(r,arg3));
	
}



/*
 *  傳統版上傳檔案
 */
/*init事件*/
function art_upload_raw_init(){
	//新增change事件
	art_upload_raw_change();
}
/*上傳檔案之值的change事件*/
function art_upload_raw_change(){
	$(".art_upload_raw").on("change", "input[type='file']",function(){
		var filePath = $(this).val();
		var arr = filePath.split('\\');
		var fileName = arr[arr.length-1];
		//
		$(this).closest(".art_upload_raw").find("input[type='text']").val(fileName);
		//控制清空按鈕顯不顯示
		$(this).closest(".art_upload_raw").find(".icon-cancel").show();
	});
}
/*刪除上傳檔案之值*/
function art_upload_raw_cancel(arg){
	var p = $(arg).closest(".art_upload_raw");
	var t1 = p.find("input[type='file']");
	var t2 = p.find("input[type='text']");
	//
	t1.val("");
	t2.val("");
	//控制清空按鈕顯不顯示
	p.find(".icon-cancel").hide();
}



/*
 *  自動選單
 */
/*初始化*/
function art_select_own_init(){
	//如果是單選,同時沒有預設時候,強制選擇第一項目,改善邏輯問題
	$(".art_select_own").each(function(index, element) {
		if($(this).find("select[multiple]").length == 0){
			if($(this).find("select option:selected").length == 0){
				$(this).find("select option:first-child").prop("selected", true);
			}
		}
	});
	//建立私用變數
	$(".art_select_own").each(function(index, element) {
		//建立具有順序的顯示文字
		var _temp_id = new Array();
		var _temp_txt = new Array();
		$(this).find("select option:selected").each(function(index, element) {
			_temp_id.push($(this).val());
			_temp_txt.push($(this).text());
		});
		$(this).data("_id",_temp_id);
		$(this).data("_txt",_temp_txt);
	});
	//建立自動選單事件
	$(".art_select_own").on("click",".art_select_own_box",function(e){
		var t = $(e.target);
		//js_html開工
		if($(this).find("select[multiple]").length){
			if(t.is(".list span")){
				return false;
			}
		}else{
			//
		}
		art_select_own_box_open($(this));

	});
	//更新顯示文字
	$(".art_select_own").each(function(index, element) {
		art_select_own_box_list_update($(this));
	});
}
/*自動選單 js_html開工*/
function art_select_own_box_open(arg){
	
	var _temp;
	var p = arg.closest(".art_select_own");
	var t_val = arg.find("select").val();
	
	//更新js_current
	js_current_update(p.find(".js_html"));
	
	//建立art_overlay
	art_overlay_create();
	
	//是否手機版
	if(__getCSSOM() == "S"){
		p.find(".js_html").css("top", "50%");
	}else{
		//js_html設定top位置
		p.find(".js_html").css("top", p.outerHeight() + "px");
	}

	//建立html
	art_select_own_box_create(p);
}


/*自動選單 js_html收工*/
function art_select_own_box_close(arg){
	var _temp;
	//清空搜尋之值
	arg.find(".js_html input[type='text']").val("");
	//
	arg.find(".js_html").empty();
	
	//移除js_current
	js_current_remove();
	
	//移除art_overlay
	art_overlay_remove();
}



/*自動選單 建立html*/
function art_select_own_box_create(arg){
	var _temp;
	var t_line = arg.data("xxx");
	var css_class;
	
	//art_list - 創建html
	var new_html_root = $('<div class="art_list"></div>');
	
	//art_list_header - 創建html
	var new_html_header = $('<div class="art_list_header"></div>');
	var new_html_header_div01 = $('<div></div>');
	var new_html_header_div01_01 = $('<input type="text" placeholder="搜尋" >');
	//art_list_header - 增加事件
	$(new_html_header_div01_01).on("keyup", function(){
		var p = $(this).closest(".art_select_own");
		var filter = $(this).val().toUpperCase();
		//
		p.find(".js_html .art_list .art_list_content a").each(function(index, element) {
			if($(this).text().toUpperCase().indexOf(filter) > -1){
				$(this).show();
			}else{
				$(this).hide();
			}
		});
	});
	//art_list_header - 插入html
	new_html_header_div01.append(new_html_header_div01_01);
	new_html_header.append(new_html_header_div01);
	//
	//art_list_content - 創建html
	var new_html_content = $('<div class="art_list_content"></div>');
	//
	arg.find("select").children().each(function(i){
		//console.log("[" + i + "]" + $(this).is("option"));
		//第一層
		if($(this).is("option")){
			//建立class
			if(arg.find("select[multiple]").length){
				//多選
				if($.inArray($(this).val(), arg.find("select").val()) > -1){
					css_class = "active";
				}else{
					css_class = "";
				}
			}else{
				//單選
				if($(this).val() == arg.find("select").val()){
					css_class = "active";
				}else{
					css_class = "";
				}
			}

			//art_list_content - 創建html
			//如果是多選又是"請選擇"的時候,就hide起來不讓使用者點選
			if(arg.find("select[multiple]").length && $(this).val() == "empty"){
				_temp = $('<a href="javascript:void(0);" data-val="' + $(this).val() + '" class="' + css_class + '" style="display:none;">' + $(this).text() + '</a>');
			}else{
				_temp = $('<a href="javascript:void(0);" data-val="' + $(this).val() + '" class="' + css_class + '">' + $(this).text() + '</a>');
			}
			
			//art_list_content - 增加事件
			$(_temp).on("click", function(){
				var p = $(this).closest(".art_select_own");
				
				//更新<select>值
				p.find("select option[value='" + $(this).data("val") + "']").prop("selected", true);
				
				//更新顯示文字
				var _temp_id = p.data("_id");
				var _temp_txt = p.data("_txt");
				if(arg.find("select[multiple]").length == 0){
					_temp_id = new Array();
					_temp_txt = new Array();
				}
				//檢查是否重覆,如果是就不可設定
				if($.inArray($(this).data("val")+"",_temp_id) >= 0){
					//
				}else{
					_temp_id.push($(this).data("val")+"");
					_temp_txt.push($(this).text());
				}
				p.data("_id",_temp_id);
				p.data("_txt",_temp_txt);
				art_select_own_box_list_update(p);
				
				//
				art_select_own_box_close(p);
			});
			//art_list_content - 插入html
			new_html_content.append(_temp);
		}
		//第二層
		if($(this).is("optgroup")){
			new_html_content.append('<div class="group">' + $(this).attr("label") + '</div>');
			$(this).children().each(function(ii){
				//建立class
				if(arg.find("select[multiple]").length){
					//多選
					if($.inArray($(this).val(), arg.find("select").val()) > -1){
						css_class = "sub active";
					}else{
						css_class = "sub";
					}
				}else{
					//單選
					if($(this).val() == arg.find("select").val()){
						css_class = "sub active";
					}else{
						css_class = "sub";
					}
				}

				//art_list_content - 創建html
				//如果是多選又是"請選擇"的時候,就hide起來不讓使用者點選
				if(arg.find("select[multiple]").length && $(this).val() == "empty"){
					_temp = $('<a href="javascript:void(0);" data-val="' + $(this).val() + '" class="' + css_class + '" style="display:none;">' + $(this).text() + '</a>');
				}else{
					_temp = $('<a href="javascript:void(0);" data-val="' + $(this).val() + '" class="' + css_class + '">' + $(this).text() + '</a>');
				}
					
				//art_list_content - 增加事件
				$(_temp).on("click", function(){
					var p = $(this).closest(".art_select_own");
					//更新<select>值
					p.find("select option[value='" + $(this).data("val") + "']").prop("selected", true);
					
					//更新顯示文字
					var _temp_id = p.data("_id");
					var _temp_txt = p.data("_txt");
					if(arg.find("select[multiple]").length == 0){
						_temp_id = new Array();
						_temp_txt = new Array();
					}
					//檢查是否重覆,如果是就不可設定
					if($.inArray($(this).data("val")+"",_temp_id) >= 0){
						//
					}else{
						_temp_id.push($(this).data("val")+"");
						_temp_txt.push($(this).text());
					}
					p.data("_id",_temp_id);
					p.data("_txt",_temp_txt);
					art_select_own_box_list_update(p);
					
					//
					art_select_own_box_close(p);
				});
				//art_list_content - 插入html
				new_html_content.append(_temp);
			});
		}
	});
	//
	//最後插入html
	new_html_root.append(new_html_header,new_html_content);
	arg.find(".js_html").empty().html(new_html_root);
	//設定樣式
	art_select_own_box_style(arg);
}

/*自動選單 設定樣式*/
function art_select_own_box_style(arg){
	var _temp;

	//設定列表寬度
	//是否手機版
	if(__getCSSOM() == "S"){
		arg.find(".js_html").width("90%");
		arg.find(".js_html .art_list").width("100%");
	}else{
		_temp = arg.find(".art_select_own_box").width();
		arg.find(".js_html").width("auto");
		arg.find(".js_html .art_list").width(_temp);
	}
}
/*自動選單 移除項目*/
function art_select_own_box_delitem(arg){
	//移除該項目selected狀態
	$(arg).closest(".art_select_own").find("select").children().each(function(i){
		//第一層
		if($(this).is("option")){
			if($(arg).prop("id") == $(this).val()){
				$(this).prop("selected", false);
			}
		}
		//第二層
		if($(this).is("optgroup")){
			$(this).children().each(function(ii){
				if($(arg).prop("id") == $(this).val()){
					$(this).prop("selected", false);
				}
			});
		}
	});


	//移除私用變數
	var _temp_id = $(arg).closest(".art_select_own").data("_id");
	var _temp_txt = $(arg).closest(".art_select_own").data("_txt");
	var _temp_id_new = new Array();
	var _temp_txt_new = new Array();
	$(_temp_id).each(function(index, element){
		if($(arg).prop("id") != _temp_id[index]){
			_temp_id_new.push(_temp_id[index]);
			_temp_txt_new.push(_temp_txt[index]);
		}
	});
	$(arg).closest(".art_select_own").data("_id",_temp_id_new);
	$(arg).closest(".art_select_own").data("_txt",_temp_txt_new);
	

	
	//移除該顯示文字
	$(arg).closest("span").remove();
}
/*自動選單 項目mouseover*/
function art_select_own_box_mouseover(arg){
	$(arg).closest("span").addClass("hover");
}
/*自動選單 項目mouseout*/
function art_select_own_box_mouseout(arg){
	$(arg).closest("span").removeClass("hover");
}
/*更新顯示文字*/
function art_select_own_box_list_update(t){
	var _temp_id = t.data("_id");
	var _temp_txt = t.data("_txt");
	//
	t.find(".list").empty();
	$(_temp_id).each(function(index2, element2){
		t.find(".list").append('<span><a id="' + _temp_id[index2] + '" href="javascript:void(0);" onclick="art_select_own_box_delitem(this);" onmouseover="art_select_own_box_mouseover(this)" onmouseout="art_select_own_box_mouseout(this)"></a>' + _temp_txt[index2] + '</span> ');
	});
	t.find(".list").append('<div class="placeholder">'+ t.find("select option:first").text() + '</div>');
}
 
/*
 *  輸入日期時間
 */
/*初始化*/
function art_datetime_init(){
	//建立私用變數
	$(".art_datetime").each(function(index, element) {
		$(this).data("_current_target");
		$(this).data("_date_main");
		$(this).data("_date_sub");
		$(this).data("_view_date");
		$(this).data("_time_main");
		$(this).data("_view_time");
	});
	//建立日期事件
	$(".art_datetime").on("focusin", ".art_datetime_date",function(){
		//js_html開工
		//art_datetime_date_open($(this));
		setTimeout(art_datetime_date_open,500,$(this));
	});
	//建立時間事件
	$(".art_datetime").on("focusin", ".art_datetime_time",function(){
		//js_html開工
		//art_datetime_time_open($(this));
		setTimeout(art_datetime_time_open,500,$(this));
	});
}
/*日期 js_html開工*/
function art_datetime_date_open(arg){
	var _temp;
	var p = arg.closest(".art_datetime");
	var t_line = p.data("line");
	var t_val = arg.find("input[type='text']").val();
	
	//更新js_current
	js_current_update(p.find(".js_html"));
	
	//建立art_overlay
	art_overlay_create();
		
	//是否手機版
	if(__getCSSOM() == "S"){
		p.find("input[type='text']").attr('readonly', true);
	}else{
		p.find("input[type='text']").attr('readonly', false);
	}
	
	//是否手機版
	if(__getCSSOM() == "S"){
		p.find(".js_html").css("top", "50%");
	}else{
		//js_html設定top位置
		p.find(".js_html").css("top", p.outerHeight() + "px");
	}


	//設定私用變數
	//設定_current_target
	p.data("_current_target","DATE");
	//設定_date_main
	if(checkDate(t_val)){
		_temp = t_val.split("-");
		_temp = new Date(__datetimeVal(_temp[0] + "-" + _temp[1] + "-" + _temp[2]));
		_temp = _temp.getFullYear() + "-" + __padzero((_temp.getMonth() + 1),2) + "-" + __padzero(_temp.getDate(),2);
	}else{
		_temp = "";
	}
	p.data("_date_main",_temp);
	//設定_date_sub
	if(t_line){
		_temp = $("." + t_line).find("input[type='text']").val();
		if(checkDate(_temp)){
			_temp = _temp.split("-");
			_temp = new Date(__datetimeVal(_temp[0] + "-" + _temp[1] + "-" + _temp[2]));
			_temp = _temp.getFullYear() + "-" + __padzero((_temp.getMonth() + 1),2) + "-" + __padzero(_temp.getDate(),2);
		}else{
			_temp = "";
		}
	}else{
		_temp = "";
	}
	p.data("_date_sub",_temp);


	//建立html
	art_datetime_date_create(p);
}


/*日期 js_html收工*/
function art_datetime_date_close(arg){
	var _temp;
	//驗證最後資料並補0
	_temp = arg.find(".art_datetime_date input[type='text']").val();
	if(checkDate(_temp)){
		_temp = _temp.split("-");
		_temp = _temp[0] + "-" + __padzero(_temp[1],2) + "-" + __padzero(_temp[2],2);
		arg.find(".art_datetime_date input[type='text']").val(_temp);
	}
	//清空_current_target
	arg.data("_current_target","");
	//
	arg.find(".js_html").empty();
	
	//移除js_current
	js_current_remove();
	
	//移除art_overlay
	art_overlay_remove();
}



/*日期 建立html*/
function art_datetime_date_create(arg){
	var _temp;
	var t_line = arg.data("line");
	//打開時要指向那一個月份
	if(arg.data("_date_main") == ""){
		if(t_line){
			if(arg.data("_date_sub") != ""){
				_temp = arg.data("_date_sub").split("-");
				_temp = new Date(__datetimeVal(_temp[0] + "-" + _temp[1] + "-" + _temp[2]));
			}else{
				_temp = new Date();
			}
		}else{
			_temp = new Date();
		}
	}else{
		_temp = arg.data("_date_main").split("-");
		_temp = new Date(__datetimeVal(_temp[0] + "-" + _temp[1] + "-" + _temp[2]));
	}
	//
	arg.data("_view_date",_temp.getFullYear() + "-" + (_temp.getMonth()+1) + "-01");
	_temp = arg.data("_view_date").split("-");
	
	//art_cal - 創建html
	var new_html_root = $('<div class="art_cal"></div>');
	
	//art_cal_header - 創建html
	var new_html_header = $('<div class="art_cal_header"></div>');
	var new_html_header_div01 = $('<div class="top"></div>');
	//var new_html_header_div01_01 = $('<div class="art_word"></div>').html('<span>' + _temp[0] + '年' + _temp[1] + '月</span>');
	var new_html_header_div01_02 = $('<a href="javascript:void(0);" class="art_word"></a>').html('<span>◀</span>');//上個月
	var new_html_header_div01_03 = $('<a href="javascript:void(0);" class="art_word"></a>').html('<span>▶</span>');//下個月
	var new_html_header_div01_04 = $('<a href="javascript:void(0);" class="art_word"></a>').html('<span>本月</span>');
	var new_html_header_div01_05 = $('<a href="javascript:void(0);" class="art_word"></a>').html('<span>◀</span>');//上一年
	var new_html_header_div01_06 = $('<a href="javascript:void(0);" class="art_word"></a>').html('<span>▶</span>');//下一年
	var new_html_header_div01_07 = $('<div class="art_word year"></div>').html('<span>' + _temp[0] + '年</span>');
	var new_html_header_div01_08 = $('<div class="art_word month"></div>').html('<span>' + _temp[1] + '月</span>');
	var new_html_header_div02 = $('<div class="bottom"></div>');
	var new_html_header_div02_span = $('<span>日</span><span>一</span><span>二</span><span>三</span><span>四</span><span>五</span><span>六</span>');
	//art_cal_header - 增加事件
	$(new_html_header_div01_02).on("click", function(){
		var p = $(this).closest(".art_datetime");
		//
		art_datetime_date_update_month_prev(p);
	});
	$(new_html_header_div01_03).on("click", function(){
		var p = $(this).closest(".art_datetime");
		//
		art_datetime_date_update_month_next(p);
	});
	$(new_html_header_div01_04).on("click", function(){
		var p = $(this).closest(".art_datetime");
		//
		art_datetime_date_update_today(p);
	});
	$(new_html_header_div01_05).on("click", function(){
		var p = $(this).closest(".art_datetime");
		//
		art_datetime_date_update_year_prev(p);
	});
	$(new_html_header_div01_06).on("click", function(){
		var p = $(this).closest(".art_datetime");
		//
		art_datetime_date_update_year_next(p);
	});
	//art_cal_header - 插入html
	//new_html_header_div01.append(new_html_header_div01_01,new_html_header_div01_02,new_html_header_div01_03,new_html_header_div01_04);
	new_html_header_div01.append(new_html_header_div01_05,new_html_header_div01_07,new_html_header_div01_06,new_html_header_div01_02,new_html_header_div01_08,new_html_header_div01_03,new_html_header_div01_04);
	new_html_header_div02.append(new_html_header_div02_span);
	new_html_header.append(new_html_header_div01,new_html_header_div02);
	//
	//art_cal_content - 創建html
	var new_html_content = $('<div class="art_cal_content"></div>');
	//art_cal_content - 插入html
	new_html_content.append(_cal(_temp[0],_temp[1]));
	//
	//art_cal_footer - 創建html
	var new_html_footer = $('<div class="art_cal_footer"></div>');
	var new_html_footer_01 = $('<a href="javascript:void(0);" class="art_word"></a>').html('<span>清空</span>');
	var new_html_footer_02 = $('<a href="javascript:void(0);" class="art_button done"></a>').html('<span>關閉</span>');
	//art_cal_footer - 增加事件
	$(new_html_footer_01).on("click", function(){
		var p = $(this).closest(".art_datetime");
		//
		art_datetime_date_empty(p);
		//
		art_datetime_date_close(p);
	});
	$(new_html_footer_02).on("click", function(){
		var p = $(this).closest(".art_datetime");
		//
		art_datetime_date_close(p);
	});
	//art_cal_footer - 插入html
	new_html_footer.append(new_html_footer_01,new_html_footer_02);
	
	//最後插入html
	new_html_root.append(new_html_header,new_html_content,new_html_footer);
	arg.find(".js_html").empty().html(new_html_root);
	//設定樣式
	art_datetime_date_style(arg);	
}


/*日期 上一年*/
function art_datetime_date_update_year_prev(arg){
	var _temp;
	_temp = arg.data("_view_date").split("-");
	//更新變數
	_temp = new Date(__datetimeVal(_temp[0] + "-" + _temp[1] + "-01"));
	_temp.setFullYear(_temp.getFullYear() - 1);
	arg.data("_view_date",_temp.getFullYear() + "-" + (_temp.getMonth()+1) + "-" + _temp.getDate());
	//取得變數
	_temp = arg.data("_view_date").split("-");
	//更新年份月份
	//arg.find(".js_html .art_cal_header div.top div span").html(_temp[0] + "年" + _temp[1] + "月");
	arg.find(".js_html .art_cal_header div.top div.year span").html(_temp[0] + "年");
	arg.find(".js_html .art_cal_header div.top div.month span").html(_temp[1] + "月");
	//更新日曆
	arg.find(".js_html .art_cal_content").html(_cal(_temp[0],_temp[1]));
	//設定樣式
	art_datetime_date_style(arg);
}


/*日期 下一年*/
function art_datetime_date_update_year_next(arg){
	var _temp;
	_temp = arg.data("_view_date").split("-");
	//更新變數
	_temp = new Date(__datetimeVal(_temp[0] + "-" + _temp[1] + "-01"));
	_temp.setFullYear(_temp.getFullYear() + 1);
	arg.data("_view_date",_temp.getFullYear() + "-" + (_temp.getMonth()+1) + "-" + _temp.getDate());
	//取得變數
	_temp = arg.data("_view_date").split("-");
	//更新年份月份
	//arg.find(".js_html .art_cal_header div.top div span").html(_temp[0] + "年" + _temp[1] + "月");
	arg.find(".js_html .art_cal_header div.top div.year span").html(_temp[0] + "年");
	arg.find(".js_html .art_cal_header div.top div.month span").html(_temp[1] + "月");
	//更新日曆
	arg.find(".js_html .art_cal_content").html(_cal(_temp[0],_temp[1]));
	//設定樣式
	art_datetime_date_style(arg);
}


/*日期 上個月*/
function art_datetime_date_update_month_prev(arg){
	var _temp;
	_temp = arg.data("_view_date").split("-");
	//更新變數
	_temp = new Date(__datetimeVal(_temp[0] + "-" + _temp[1] + "-01"));
	_temp.setMonth(_temp.getMonth() - 1);
	arg.data("_view_date",_temp.getFullYear() + "-" + (_temp.getMonth()+1) + "-" + _temp.getDate());
	//取得變數
	_temp = arg.data("_view_date").split("-");
	//更新年份月份
	//arg.find(".js_html .art_cal_header div.top div span").html(_temp[0] + "年" + _temp[1] + "月");
	arg.find(".js_html .art_cal_header div.top div.year span").html(_temp[0] + "年");
	arg.find(".js_html .art_cal_header div.top div.month span").html(_temp[1] + "月");
	//更新日曆
	arg.find(".js_html .art_cal_content").html(_cal(_temp[0],_temp[1]));
	//設定樣式
	art_datetime_date_style(arg);
}

/*日期 下個月*/
function art_datetime_date_update_month_next(arg){
	var _temp;
	_temp = arg.data("_view_date").split("-");
	//更新變數
	_temp = new Date(__datetimeVal(_temp[0] + "-" + _temp[1] + "-01"));
	_temp.setMonth(_temp.getMonth() + 1);
	arg.data("_view_date",_temp.getFullYear() + "-" + (_temp.getMonth()+1) + "-" + _temp.getDate());
	//取得變數
	_temp = arg.data("_view_date").split("-");
	//更新年份月份
	//arg.find(".js_html .art_cal_header div.top div span").html(_temp[0] + "年" + _temp[1] + "月");
	arg.find(".js_html .art_cal_header div.top div.year span").html(_temp[0] + "年");
	arg.find(".js_html .art_cal_header div.top div.month span").html(_temp[1] + "月");
	//更新日曆
	arg.find(".js_html .art_cal_content").html(_cal(_temp[0],_temp[1]));
	//設定樣式
	art_datetime_date_style(arg);
}


/*日期 今天*/
function art_datetime_date_update_today(arg){
	var _temp;
	//更新變數
	_temp = new Date();
	arg.data("_view_date",_temp.getFullYear() + "-" + (_temp.getMonth()+1) + "-01");
	//取得變數
	_temp = arg.data("_view_date").split("-");
	//更新年份月份
	//arg.find(".js_html .art_cal_header div.top div span").html(_temp[0] + "年" + _temp[1] + "月");
	arg.find(".js_html .art_cal_header div.top div.year span").html(_temp[0] + "年");
	arg.find(".js_html .art_cal_header div.top div.month span").html(_temp[1] + "月");
	//更新日曆
	arg.find(".js_html .art_cal_content").html(_cal(_temp[0],_temp[1]));
	//設定樣式
	art_datetime_date_style(arg);
}


/*日期 點擊某一日期*/
function art_datetime_date_setdate(arg){
	var _temp;
	var p1 = $(arg).closest("span");
	var p2 = $(arg).closest(".art_datetime");
	//
	p2.data("_date_main",p1.data("date"));
	//設定樣式
	art_datetime_date_style(p2);
	//輸出資料
	p2.find(".art_datetime_date input[type='text']").val(p2.data("_date_main"));
	
}
/*日期 清空*/
function art_datetime_date_empty(arg){
	var p = $(arg).closest(".art_datetime");
	//清空
	arg.data("_date_main","");
	//輸出資料
	p.find(".art_datetime_date input[type='text']").val("");
}

/*日期 設定樣式*/
function art_datetime_date_style(arg){
	var _temp = new Array();
	var t_type = arg.data("type");
	var t_line = arg.data("line");
	var t_min_date = arg.find(".art_datetime_date").data("min-date");
	var t_max_date = arg.find(".art_datetime_date").data("max-date");
	//
	if(t_line != undefined){
		if(arg.data("_date_main") <= arg.data("_date_sub")){
			_temp = __arrRangeDate(arg.data("_date_main"), arg.data("_date_sub"));
		}else{
			_temp = __arrRangeDate(arg.data("_date_sub"), arg.data("_date_main"));
		}
	}else{
		_temp = __arrRangeDate(arg.data("_date_main"),"");
	}
	
	//removeClass
	arg.find(".js_html .art_cal_content span[data-date]").removeClass("in");
	arg.find(".js_html .art_cal_content span[data-date]").removeClass("in_first");
	arg.find(".js_html .art_cal_content span[data-date]").removeClass("in_last");
	arg.find(".js_html .art_cal_content span[data-date]").removeClass("active");
	arg.find(".js_html .art_cal_content span[data-date]").removeClass("begin_date");
	arg.find(".js_html .art_cal_content span[data-date]").removeClass("end_date");
	
	//addClass 顯示日期範圍
	arg.find(".js_html .art_cal_content span[data-date]").each(function(index, element){
		if($.inArray($(this).data("date"),_temp) >= 0){
			$(this).addClass("in");
		}
		if($.inArray($(this).data("date"),_temp) == 0){
			$(this).addClass("in_first");
		}
		if($.inArray($(this).data("date"),_temp) == (_temp.length - 1)){
			$(this).addClass("in_last");
		}
	});
	
	
	
	//addClass 目前日期
	arg.find(".js_html .art_cal_content span[data-date='" + arg.data("_date_main") + "']").addClass("active");
	
	//addClass 開始日期 \ 結束日期
	if(t_line != undefined){
		//開始日期
		if(t_type == "date_begin" && arg.data("_date_main") != ""){
			arg.find(".js_html .art_cal_content span[data-date='" + arg.data("_date_main") + "']").addClass("begin_date");
		}
		if(t_type == "date_end" && arg.data("_date_sub") != ""){
			arg.find(".js_html .art_cal_content span[data-date='" + arg.data("_date_sub") + "']").addClass("begin_date");
		}
		//結束日期
		if(t_type == "date_begin" && arg.data("_date_sub") != ""){
			arg.find(".js_html .art_cal_content span[data-date='" + arg.data("_date_sub") + "']").addClass("end_date");
		}
		if(t_type == "date_end" && arg.data("_date_main") != ""){
			arg.find(".js_html .art_cal_content span[data-date='" + arg.data("_date_main") + "']").addClass("end_date");
		}
	}
	
	//addClass 顯示今天
	_temp = new Date();
	_temp = _temp.getFullYear() + "-" + __padzero(_temp.getMonth()+1,2) + "-" + __padzero(_temp.getDate(),2);
	arg.find(".js_html .art_cal_content span[data-date='" + _temp + "']").addClass("today");
	
	//addClass 禁用日期
	if(t_min_date != undefined){
		var t;
		if(checkDate(t_min_date)){
			_temp = t_min_date.split("-");
		}
		if(checkDate_YM(t_min_date)){
			_temp = t_min_date.split("-");
			_temp[2] = "01";
		}
		if(checkDate(t_min_date) || checkDate_YM(t_min_date)){
			t = __datetimeVal(_temp[0] + "-" + _temp[1] + "-" + _temp[2]);
			arg.find(".js_html .art_cal_content span[data-date]").each(function(index, element){
				_temp = $(this).data("date").split("-");
				_temp = __datetimeVal(_temp[0] + "-" + _temp[1] + "-" + _temp[2]);
				if(t > _temp){
					$(this).addClass("disabled");
				}
			});	
		}
	}
	if(t_max_date != undefined){
		var t;
		if(checkDate(t_max_date)){
			_temp = t_max_date.split("-");
		}
		if(checkDate_YM(t_max_date)){
			_temp = t_max_date.split("-");
			_temp[2] = __dayLength(_temp[0],_temp[1]);
		}
		if(checkDate(t_max_date) || checkDate_YM(t_max_date)){
			t = __datetimeVal(_temp[0] + "-" + _temp[1] + "-" + _temp[2]);
			arg.find(".js_html .art_cal_content span[data-date]").each(function(index, element){
				_temp = $(this).data("date").split("-");
				_temp = __datetimeVal(_temp[0] + "-" + _temp[1] + "-" + _temp[2]);
				if(t < _temp){
					$(this).addClass("disabled");
				}
			});	
		}
	}
	
	//判斷開始日期和結束日期是否相反,如果是,就要新增.error
	_temp = false;
	if(t_line != undefined && arg.data("_date_main") != "" && arg.data("_date_sub") != ""){
		if(t_type == "date_begin"){
			if(__datetimeVal(arg.data("_date_main")) > __datetimeVal(arg.data("_date_sub"))){
				_temp = true;
			}
		}
		if(t_type == "date_end"){
			if(__datetimeVal(arg.data("_date_main")) < __datetimeVal(arg.data("_date_sub"))){
				_temp = true;
			}
		}
	}
	if(_temp){
		arg.find(".js_html .art_cal").addClass("error");
	}else{
		arg.find(".js_html .art_cal").removeClass("error");
	}	
}


/*時間 js_html開工*/
function art_datetime_time_open(arg){
	var _temp;
	var p = arg.closest(".art_datetime");
	var t_val = arg.find("input[type='text']").val();

	//更新js_current
	js_current_update(p.find(".js_html"));
	
	//建立art_overlay
	art_overlay_create();
	
	//是否手機版
	if(__getCSSOM() == "S"){
		p.find("input[type='text']").attr('readonly', true);
	}else{
		p.find("input[type='text']").attr('readonly', false);
	}
	
	//是否手機版
	if(__getCSSOM() == "S"){
		p.find(".js_html").css("top", "50%");
	}else{
		//js_html設定top位置
		p.find(".js_html").css("top", p.outerHeight() + "px");
	}


	//設定私用變數
	//設定_current_target
	p.data("_current_target","TIME");
	//設定_time_main
	if(checkTime_HM(t_val)){
		_temp = t_val;
	}else{
		_temp = "";
	}
	p.data("_time_main",_temp);
	
	//建立html
	art_datetime_time_create(p);
}

/*時間 js_html收工*/
function art_datetime_time_close(arg){
	var _temp;
	//驗證最後資料並補0
	_temp = arg.find(".art_datetime_time input[type='text']").val();
	if(checkTime_HM(_temp)){
		_temp = _temp.split(":");
		_temp = __padzero(_temp[0],2) + ":" + __padzero(_temp[1],2);
		arg.find(".art_datetime_time input[type='text']").val(_temp);
	}
	//清空_current_target
	arg.data("_current_target","");
	//
	arg.find(".js_html").empty();
	
	//移除js_current
	js_current_remove();
	
	//移除art_overlay
	art_overlay_remove();
}


/*時間 建立html*/
function art_datetime_time_create(arg){
	
	var _temp;
	//打開時要指向那一個時間
	if(arg.data("_time_main") == ""){
		_temp = new Date();
		_temp = __padzero(_temp.getHours(),2) + ":" + __padzero(_temp.getMinutes(),2);
	}else{
		_temp = arg.data("_time_main");
	}
	arg.data("_time_main",_temp);
	//輸出資料
	//arg.find(".art_datetime_time input[type='text']").val(arg.data("_time_main"));
	
	_temp = _temp.split(":");

	
	//art_time - 創建html
	var new_html_root = $('<div class="art_time"></div>');
	
	//art_time_header - 創建html
	var new_html_header = $('<div class="art_time_header"></div>');
	var new_html_header_div = $('<div></div>');
	
	var new_html_header_div_01 = $('<div class="art_num art_time_hour"></div>');
	var new_html_header_div_01_01 = $('<a class="art_icon icon-subtract l" href="javascript:void(0);"></a>');
	var new_html_header_div_01_02 = $('<a class="art_icon icon-add r" href="javascript:void(0);"></a>');
	var new_html_header_div_01_03 = $('<input type="text" value="' + _temp[0] + '" readonly>');
	
	var new_html_header_div_02 = $('<div class="art_word"></div>').html('<span>時</span>');
	
	var new_html_header_div_03 = $('<div class="art_num art_time_min"></div>');
	var new_html_header_div_03_01 = $('<a class="art_icon icon-subtract l" href="javascript:void(0);"></a>');
	var new_html_header_div_03_02 = $('<a class="art_icon icon-add r" href="javascript:void(0);"></a>');
	var new_html_header_div_03_03 = $('<input type="text" value="' + _temp[1] + '" readonly>');

	var new_html_header_div_04 = $('<div class="art_word"></div>').html('<span>分</span>');
	var new_html_header_div_05 = $('<a href="javascript:void(0);" class="art_word"></a>').html('<span>現在</span>');
	
	//art_time_header - 增加事件
	$(new_html_header_div_01_01).on("click", function(){
		var p = $(this).closest(".art_datetime");
		//
		art_datetime_time_hour_sub(p);
	});
	$(new_html_header_div_01_02).on("click", function(){
		var p = $(this).closest(".art_datetime");
		//
		art_datetime_time_hour_add(p);
	});
	$(new_html_header_div_03_01).on("click", function(){
		var p = $(this).closest(".art_datetime");
		//
		art_datetime_time_min_sub(p);
	});
	$(new_html_header_div_03_02).on("click", function(){
		var p = $(this).closest(".art_datetime");
		//
		art_datetime_time_min_add(p);
	});
	$(new_html_header_div_05).on("click", function(){
		var p = $(this).closest(".art_datetime");
		//
		art_datetime_time_now(p);
	});
	
	//art_time_header - 插入html
	new_html_header_div_01.append(new_html_header_div_01_01,new_html_header_div_01_02,new_html_header_div_01_03);
	new_html_header_div_03.append(new_html_header_div_03_01,new_html_header_div_03_02,new_html_header_div_03_03);
	new_html_header_div.append(new_html_header_div_01,new_html_header_div_02,new_html_header_div_03,new_html_header_div_04,new_html_header_div_05);
	new_html_header.append(new_html_header_div);
	//
	//art_time_content - 創建html
	var new_html_content = $('<div class="art_time_content"></div>');
	//art_cal_content - 插入html
	new_html_content.append('<table border="0" cellpadding="0" cellspacing="0"><tr><th><div class="art_word"><span>時</span></div></th><td><div><span data-hour="00"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">00</a></span><span data-hour="01"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">01</a></span><span data-hour="02"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">02</a></span><span data-hour="03"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">03</a></span><span data-hour="04"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">04</a></span><span data-hour="05"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">05</a></span><span data-hour="06"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">06</a></span><span data-hour="07"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">07</a></span><span data-hour="08"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">08</a></span><span data-hour="09"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">09</a></span><span data-hour="10"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">10</a></span><span data-hour="11"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">11</a></span><span data-hour="12"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">12</a></span><span data-hour="13"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">13</a></span><span data-hour="14"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">14</a></span><span data-hour="15"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">15</a></span><span data-hour="16"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">16</a></span><span data-hour="17"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">17</a></span><span data-hour="18"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">18</a></span><span data-hour="19"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">19</a></span><span data-hour="20"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">20</a></span><span data-hour="21"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">21</a></span><span data-hour="22"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">22</a></span><span data-hour="23"><a href="javascript:void(0);" onclick="art_datetime_time_sethour(this);">23</a></span></div></td></tr></table><hr/><table border="0" cellpadding="0" cellspacing="0"><tr><th><div class="art_word"><span>分</span></div></th><td><div><span data-min="00"><a href="javascript:void(0);" onclick="art_datetime_time_setmin(this);">00</a></span><span data-min="05"><a href="javascript:void(0);" onclick="art_datetime_time_setmin(this);">05</a></span><span data-min="10"><a href="javascript:void(0);" onclick="art_datetime_time_setmin(this);">10</a></span><span data-min="15"><a href="javascript:void(0);" onclick="art_datetime_time_setmin(this);">15</a></span><span data-min="20"><a href="javascript:void(0);" onclick="art_datetime_time_setmin(this);">20</a></span><span data-min="25"><a href="javascript:void(0);" onclick="art_datetime_time_setmin(this);">25</a></span><span data-min="30"><a href="javascript:void(0);" onclick="art_datetime_time_setmin(this);">30</a></span><span data-min="35"><a href="javascript:void(0);" onclick="art_datetime_time_setmin(this);">35</a></span><span data-min="40"><a href="javascript:void(0);" onclick="art_datetime_time_setmin(this);">40</a></span><span data-min="45"><a href="javascript:void(0);" onclick="art_datetime_time_setmin(this);">45</a></span><span data-min="50"><a href="javascript:void(0);" onclick="art_datetime_time_setmin(this);">50</a></span><span data-min="55"><a href="javascript:void(0);" onclick="art_datetime_time_setmin(this);">55</a></span></div></td></tr></table>');
	//
	
	//art_time_footer - 創建html
	var new_html_footer = $('<div class="art_time_footer"></div>');
	var new_html_footer_01 = $('<a href="javascript:void(0);" class="art_word"></a>').html('<span>清空</span>');
	var new_html_footer_02 = $('<a href="javascript:void(0);" class="art_button done"></a>').html('<span>關閉</span>');
	//art_time_footer - 增加事件
	$(new_html_footer_01).on("click", function(){
		var p = $(this).closest(".art_datetime");
		//
		art_datetime_time_empty(p);
		//
		art_datetime_time_close(p);
	});
	$(new_html_footer_02).on("click", function(){
		var p = $(this).closest(".art_datetime");
		//
		art_datetime_time_close(p);
	});
	//art_time_footer - 插入html
	new_html_footer.append(new_html_footer_01,new_html_footer_02);
	//最後插入html
	new_html_root.append(new_html_header,new_html_content,new_html_footer);
	
	arg.find(".js_html").empty().html(new_html_root);
	
	//設定樣式
	art_datetime_time_style(arg);
}
/*時間 時 - 減*/
function art_datetime_time_hour_sub(arg){
	var _time_main_split;
	var _temp;
	_time_main_split = arg.data("_time_main").split(":");
	_temp = Number(_time_main_split[0]);
	//更新變數
	_temp = _temp - 1;
	if(_temp < 0){
		_temp = 23;
	}
	_temp = __padzero(_temp,2);
	arg.data("_time_main",_temp + ":" + _time_main_split[1]);
	//更新對話框輸入值
	arg.find(".js_html .art_time_header .art_time_hour input").val(_temp);
	//設定樣式
	art_datetime_time_style(arg);
	//輸出資料
	arg.find(".art_datetime_time input[type='text']").val(arg.data("_time_main"));
}
/*時間 時 - 加*/
function art_datetime_time_hour_add(arg){
	var _time_main_split;
	var _temp;
	_time_main_split = arg.data("_time_main").split(":");
	_temp = Number(_time_main_split[0]);
	//更新變數
	_temp = _temp + 1;
	if(_temp > 23){
		_temp = 0;
	}
	_temp = __padzero(_temp,2);
	arg.data("_time_main",_temp + ":" + _time_main_split[1]);
	//更新對話框輸入值
	arg.find(".js_html .art_time_header .art_time_hour input").val(_temp);
	//設定樣式
	art_datetime_time_style(arg);
	//輸出資料
	arg.find(".art_datetime_time input[type='text']").val(arg.data("_time_main"));
}
/*時間 分 - 減*/
function art_datetime_time_min_sub(arg){
	var _time_main_split;
	var _temp;
	_time_main_split = arg.data("_time_main").split(":");
	_temp = Number(_time_main_split[1]);
	//更新變數
	_temp = _temp - 1;
	if(_temp < 0){
		_temp = 59;
	}
	_temp = __padzero(_temp,2);
	arg.data("_time_main",_time_main_split[0] + ":" + _temp);
	//更新對話框輸入值
	arg.find(".js_html .art_time_header .art_time_min input").val(_temp);
	//設定樣式
	art_datetime_time_style(arg);
	//輸出資料
	arg.find(".art_datetime_time input[type='text']").val(arg.data("_time_main"));
}
/*時間 分 - 加*/
function art_datetime_time_min_add(arg){
	var _time_main_split;
	var _temp;
	_time_main_split = arg.data("_time_main").split(":");
	_temp = Number(_time_main_split[1]);
	//更新變數
	_temp = _temp + 1;
	if(_temp > 59){
		_temp = 0;
	}
	_temp = __padzero(_temp,2);
	arg.data("_time_main",_time_main_split[0] + ":" + _temp);
	//更新對話框輸入值
	arg.find(".js_html .art_time_header .art_time_min input").val(_temp);
	//設定樣式
	art_datetime_time_style(arg);
	//輸出資料
	arg.find(".art_datetime_time input[type='text']").val(arg.data("_time_main"));
}
function art_datetime_time_now(arg){
	var _temp;
	_temp = new Date();
	//
	arg.data("_time_main",__padzero(_temp.getHours(),2) + ":" + __padzero(_temp.getMinutes(),2));
	//更新對話框輸入值
	arg.find(".js_html .art_time_header .art_time_hour input").val(__padzero(_temp.getHours(),2));
	arg.find(".js_html .art_time_header .art_time_min input").val(__padzero(_temp.getMinutes(),2));
	//設定樣式
	art_datetime_time_style(arg);
	//輸出資料
	arg.find(".art_datetime_time input[type='text']").val(arg.data("_time_main"));
}
/*時間 點擊某一時*/
function art_datetime_time_sethour(arg){
	var _time_main_split;
	var _temp;
	var p1 = $(arg).closest("span");
	var p2 = $(arg).closest(".art_datetime");
	//
	_time_main_split = p2.data("_time_main").split(":");
	//
	p2.data("_time_main",p1.data("hour") + ":" + _time_main_split[1]);
	//更新對話框輸入值
	p2.find(".js_html .art_time_header .art_time_hour input").val(p1.data("hour"));
	//設定樣式
	art_datetime_time_style(p2);
	//輸出資料
	p2.find(".art_datetime_time input[type='text']").val(p2.data("_time_main"));
}
/*時間 點擊某一分*/
function art_datetime_time_setmin(arg){
	var _time_main_split;
	var _temp;
	var p1 = $(arg).closest("span");
	var p2 = $(arg).closest(".art_datetime");
	//
	_time_main_split = p2.data("_time_main").split(":");
	//
	p2.data("_time_main",_time_main_split[0] + ":" + p1.data("min"));
	//更新對話框輸入值
	p2.find(".js_html .art_time_header .art_time_min input").val(p1.data("min"));
	//設定樣式
	art_datetime_time_style(p2);
	//輸出資料
	p2.find(".art_datetime_time input[type='text']").val(p2.data("_time_main"));
}

/*時間 清空*/
function art_datetime_time_empty(arg){
	var p = $(arg).closest(".art_datetime");
	//清空
	arg.data("_time_main","");
	//更新對話框輸入值
	p.find(".js_html .art_time_header .art_time_hour input").val("");
	p.find(".js_html .art_time_header .art_time_min input").val("");
	//輸出資料
	p.find(".art_datetime_time input[type='text']").val("");
}

/*時間 設定樣式*/
function art_datetime_time_style(arg){
	var _time_main = arg.data("_time_main");
	var _time_main_split = _time_main.split(":");
	//removeClass
	arg.find(".js_html .art_time_content span[data-hour]").removeClass("active");
	arg.find(".js_html .art_time_content span[data-min]").removeClass("active");
	
	//addClass
	arg.find(".js_html .art_time_content span[data-hour='" + _time_main_split[0] + "']").addClass("active");
	arg.find(".js_html .art_time_content span[data-min='" + _time_main_split[1] + "']").addClass("active");
}

/*
 *  js_html
 */
/*更新js_current*/
function js_current_update(arg){
	$(".js_current").removeClass("js_current");
	arg.addClass("js_current");
}
/*移除js_current*/
function js_current_remove(){
	$(".js_current").removeClass("js_current");
}

//建立art_overlay
function art_overlay_create(){
	/*
	# art_overlay不用click事件處理把對象和overlay消失,因為有document.click事件在處理
	*/
	if($(".art_overlay").length == 0){
		$("body").append('<div class="art_overlay only_mobile"></div>');
	}
}

/*移除art_overlay*/
function art_overlay_remove(){
	$(".art_overlay").remove();
}

/*日期 產生日曆 -- 覆蓋_cal()*/
function _cal(year, month){
	var is_in = false;
	var html_week = "";
	var html_day = "";
	var arr_week_key = [0,1,2,3,4,5,6];
	var first_day_week = new Date(__datetimeVal(year + "-" + month + "-01")).getDay();
	var day_len = __dayLength(year, month);
	var day_current = 1;
	//更改星期排序
	arr_week_key = __arrkeyFirst(arr_week_key,0);
	//建立星期
	/*
	for(var i = 0 ; i < arr_week_key.length ; i++){
		html_week += "<span>" + __weekText(arr_week_key[i]) + "</span>";
	}
	*/
	//建立日期
	for(var i = 0 ; i < 99 ; i++){
		//
		if(arr_week_key[i] == first_day_week){
			is_in = true;
		}
		//
		if(is_in){
			html_day += '<span data-date="' + year + '-' + __padzero(month,2) + '-' + __padzero(day_current,2) + '"><a href="javascript:void(0);" onClick="art_datetime_date_setdate(this);">' + __padzero(day_current,2) + '</a></span>';
			//到了第7位置就true
			if((i + 1) % 7 == 0){
				html_day += '</div><div>';
			}
			//
			day_current++;
		}else{
			html_day += '<span></span>';//[空]
		}
		//
		if(day_current > day_len){
			is_in = false;
			//到了第7位置就true
			if((i + 1) % 7 == 0){
				break;
			}
		}
	}
	//
	html_day = "<div>" + html_day + "</div>";
	return html_day;
}


/*===== 表單設計 結束 =====*/

/*驗證624碼英文與數字組合的密碼*/
function checkPassword(arg){
	if(arg.match(/^[0-9a-zA-Z]{6,24}$/)){
		if(arg.match(/^[0-9]{6,24}$/) || arg.match(/^[a-zA-Z]{6,24}$/)){
			return false;
		}else{
			return true;
		}
	}else{
		return false;
	}
}
/*驗證網址格式*/
function checkURL(arg){
	if(arg.match(/^http([s]?):\/\/.*/)){
		return true;
	}else{
		return false;
	}
}

/* 驗證日期格式 */
function check_format_Date(arg1, arg2, arg3, arg4, arg5){
	/*
	arg1 => 傳回訊息，如:「msg」
	arg2 => class名稱，如:「.v_01_begin」或「.v_01_end」
	arg3 => 欄位名稱，如:「報名日期」
	arg4 => 日期名稱，如:「開始」或「結束」或「起」或「訖」
	arg5 => 是否必填，如:「Y」或「N」
	*/

	if($(arg2 + " .art_datetime_date input").val() == ""){
		if(arg5 == "Y"){
			arg1 +="<p>" + arg3 + " - " + arg4 + "，必填欄位。</p>";
		}
	}else{
		var temp = $(arg2 + " .art_datetime_date input").val();
		if(temp.match(/^[0-9]{4}-[0-1]{1}[0-9]{1}-[0-3]{1}[0-9]{1}$/)){
			//
		}else{
			arg1 +="<p>" + arg3 + "，" + arg4 + " 請輸入正確格式。</p>";
		}
	}
	return arg1;
}

/* 驗證時間格式 */
function check_format_Time(arg1, arg2, arg3, arg4, arg5){
	/*
	arg1 => 傳回訊息，如:「msg」
	arg2 => class名稱，如:「.v_01_begin」或「.v_01_end」
	arg3 => 欄位名稱，如:「上下班時間」
	arg4 => 時間名稱，如:「開始」或「結束」或「起」或「訖」
	arg5 => 是否必填，如:「Y」或「N」
	*/

	if($(arg2 + " .art_datetime_time input").val() == ""){
		if(arg5 == "Y"){
			arg1 +="<p>" + arg3 + " - " + arg4 + "，必填欄位。</p>";
		}
	}else{
		var temp = $(arg2 + " .art_datetime_time input").val();
		if(temp.match(/^[0-2]{1}[0-9]{1}:[0-5]{1}[0-9]{1}$/)){
			//
		}else{
			arg1 +="<p>" + arg3 + "，" + arg4 + " 請輸入正確格式。</p>";
		}
	}
	return arg1;
}


/* 驗證日期時間格式 */
function check_format_DateTime(arg1, arg2, arg3, arg4, arg5){
	/*
	arg1 => 傳回訊息，如:「msg」
	arg2 => class名稱，如:「.v_01_begin」或「.v_01_end」
	arg3 => 欄位名稱，如:「報名日期時間」
	arg4 => 日期時間名稱，如:「開始」或「結束」或「起」或「訖」
	arg5 => 是否必填，如:「Y」或「N」
	*/

	if($(arg2 + " .art_datetime_date input").val() == "" || $(arg2 + " .art_datetime_time input").val() == ""){
		if(arg5 == "Y"){
			arg1 +="<p>" + arg3 + " - " + arg4 + "，必填欄位。</p>";
		}
	}else{
		var temp = $(arg2 + " .art_datetime_date input").val() + " " + $(arg2 + " .art_datetime_time input").val();
		if(temp.match(/^[0-9]{4}-[0-1]{1}[0-9]{1}-[0-3]{1}[0-9]{1} [0-2]{1}[0-9]{1}:[0-5]{1}[0-9]{1}$/)){
			//
		}else{
			arg1 +="<p>" + arg3 + "，" + arg4 + " 請輸入正確格式。</p>";
		}
	}
	return arg1;
}



/* 驗證二個日期前後正確性 */
function check_forward_Date(arg1, arg2, arg3, arg4, arg5, arg6){
	/*
	arg1 => 傳回訊息，如:「msg」
	arg2 => 開始日期，如:「.v_01_begin」
	arg3 => 結束日期，如:「.v_01_end」
	arg4 => 欄位名稱，如:「報名日期」
	arg5 => 開始日期名稱，如:「開始」或「起」
	arg6 => 結束日期名稱，如:「結束」或「訖」
	*/
	if($(arg2 + " .art_datetime_date input").val() != "" && $(arg3 + " .art_datetime_date input").val() != ""){
			var begin = $(arg2 + " .art_datetime_date input").val();
			var end = $(arg3 + " .art_datetime_date input").val();
			if(begin > end){
				arg1 +="<p>" + arg4 + "，[" + arg5 + "]不可以大於[" + arg6 + "]。</p>";
			}	
	}
	return arg1;
}

/* 驗證二個時間前後正確性 */
function check_forward_Time(arg1, arg2, arg3, arg4, arg5, arg6){
	/*
	arg1 => 傳回訊息，如:「msg」
	arg2 => 開始時間，如:「.v_01_begin」
	arg3 => 結束時間，如:「.v_01_end」
	arg4 => 欄位名稱，如:「上下班時間」
	arg5 => 開始時間名稱，如:「開始」或「起」
	arg6 => 結束時間名稱，如:「結束」或「訖」
	*/
	
	if($(arg2 + " .art_datetime_time input").val() != "" && $(arg3 + " .art_datetime_time input").val() != ""){
		var begin = $(arg2 + " .art_datetime_time input").val();
		var end = $(arg3 + " .art_datetime_time input").val();
		if(begin > end){
			arg1 +="<p>" + arg4 + "，[" + arg5 + "]不可以大於[" + arg6 + "]。</p>";
		}
	}		

	return arg1;
}


/* 驗證二個日期時間前後正確性 */
function check_forward_DateTime(arg1, arg2, arg3, arg4, arg5, arg6){
	/*
	arg1 => 傳回訊息，如:「msg」
	arg2 => 開始日期時間，如:「.v_01_begin」
	arg3 => 結束日期時間，如:「.v_01_end」
	arg4 => 欄位名稱，如:「報名日期時間」
	arg5 => 開始日期時間名稱，如:「開始」或「起」
	arg6 => 結束日期時間名稱，如:「結束」或「訖」
	*/
	if($(arg2 + " .art_datetime_date input").val() != "" && $(arg3 + " .art_datetime_date input").val() != ""){
		if($(arg2 + " .art_datetime_time input").val() != "" && $(arg3 + " .art_datetime_time input").val() != ""){
			var begin = $(arg2 + " .art_datetime_date input").val() + " " + $(arg2 + " .art_datetime_time input").val();
			var end = $(arg3 + " .art_datetime_date input").val() + " " + $(arg3 + " .art_datetime_time input").val();
			if(begin > end){
				arg1 +="<p>" + arg4 + "，[" + arg5 + "]不可以大於[" + arg6 + "]。</p>";
			}
		}		
	}
	return arg1;
}


/* 訊息 開始 */
function message_show(arg,arg2){
	if(arg2 == "ok"){
		art_notistack_count = 0;
		$(".art_notistack").append('<div class="message_print_ok"><table><tr valign="top"><td class="message_text"><p>' + arg + '</p></td><td class="message_close" valign="middle"><a href="javascript:void(0);" onClick="message_print_ok_hide(this);"> </a></td></tr></table></div>');
	}else{
		$(".message .message_text").html(arg);
		$(".message").show();
		$('html, body').animate({scrollTop:0}, 'false');
	}
}
function message_hide(arg){
	if(arg){
		$(arg).closest('.message').find('.message_text').empty();
		$(arg).closest('.message').hide();
		$(arg).closest('.message').addClass("hide");
	}else{
		$(".message .message_text").empty();
		$(".message").hide();
		$(".message").addClass("hide");
	}
	//
	art_notistack_count = 0;
}
function message_print_ok_hide(arg){
	if(arg){
		$(arg).closest('.message_print_ok').find('.message_text').empty();
		$(arg).closest('.message_print_ok').hide();
		$(arg).closest('.message_print_ok').addClass("hide");
	}else{
		$(".message_print_ok .message_text").empty();
		$(".message_print_ok").hide();
		$(".message_print_ok").addClass("hide");
	}
	//
	art_notistack_count = 0;
}
function message_print_errer_hide(arg){
	if(arg){
		$(arg).closest('.message_print_errer').find('.message_text').empty();
		$(arg).closest('.message_print_errer').hide();
		$(arg).closest('.message_print_errer').addClass("hide");
	}else{
		$(".message_print_errer .message_text").empty();
		$(".message_print_errer").hide();
		$(".message_print_errer").addClass("hide");
	}
	//
	art_notistack_count = 0;
}
/* 訊息 結束 */


/* 通知橫幅 開始 */
var art_notistack_timer;
var art_notistack_count = 0;
function art_notistack_init(){
	//如果art_notistack區塊不存在就建立。
	if($(".art_notistack").length == 0){
		$("body").append('<div class="art_notistack"></div>');
	}
	
	//將所有message_print_ok區塊移到art_notistack區塊裡
	$(".message_print_ok").each(function(i, e){
		$(".art_notistack").append('<div class="message_print_ok">' + $(this).html() + '</div>');
		$(this).remove();
	});
	
	//建立自動消失時光器
	art_notistack_timer = setInterval(function(){
		art_notistack_count += 500;
		//
		if(art_notistack_count >= 4000){
			art_notistack_count = 0;
			$('.message_print_ok:not(".hide")').first().slideUp("fast",function(){
				$(this).hide();
				$(this).addClass("hide");
			});
		}
	}, 500);
}
/* 通知橫幅 結束 */


function chgShowField(arg1,arg2){
	$("." + arg1).hide();
	$("." + arg2).show();
}

/* 拖曳上傳檔案區塊 -- 開始 */
var uploadFileID = 0;
function file_box_show_filesize_text_MB(arg){
	showSize = (arg/1024);
	showSize = (showSize/1024);
	showSize = parseFloat(showSize).toFixed(2);	
	
	return showSize + " MB";
}
function file_box_show_filesize_text(arg){
	var showSize = 0;
	var showUnit = "個位元組";
	
	if(arg < 1024){
		showSize = arg;
		showUnit = "個位元組";
	}else if(arg > 1024 && arg < (1024 * 1024)){
		showSize = (arg/1024);
		showSize = parseFloat(showSize).toFixed(2);
		showUnit = "KB";
	}else{
		showSize = (arg/1024);
		showSize = (showSize/1024);
		showSize = parseFloat(showSize).toFixed(2);
		showUnit = "MB";
	}
	
	//如果要單位統一使用MB
	if(0){
		showSize = (arg/1024);
		showSize = (showSize/1024);
		showSize = parseFloat(showSize).toFixed(2);
		showUnit = "MB";
	}
	
	return showSize + " " + showUnit;
}
function file_box_init(){
	if(window.File && window.FileList && window.FileReader){
		file_box_list();
		file_box_upload();
		file_box_info();
	}else{
		$(".file_box").empty();
		$(".file_box").append("<div class='msg_error'>抱歉，本瀏覽器不支援上傳檔案功能，請嘗試使用其他瀏覽器或升級瀏覽器版本。</div>");
	}
}
function file_box_list(){
	$(".file_box").each(function(index, element) {
		$(this).find(".file_box_list .bytesize").each(function(index, element) {
			$(this).text(file_box_show_filesize_text($(this).attr("data-bytesize")));
		});
	});
}
function file_box_upload(){
	$(".file_box").each(function(index, element) {
		//每次重新整理網頁後,清空上傳之值
		$(this).find(".mod_select_file").val("");
		//建立新ID
		uploadFileID++;
		$(this).find(".mod_select_file").attr("UFID",uploadFileID);
	});
}
function file_box_info(){
	$(".file_box").each(function(index, element) {
		//取得所有檔案數量及大小
		var filenum = 0;
		var total = 0;
		$(this).find(".file_box_list .bytesize").each(function(index, element) {
			filenum++;
			total += Number($(this).attr("data-bytesize"));
		});
		
		//顯示檔案容量
		var max_bytesize = $(this).find(".file_box_max_bytesize").val();
		var text_01 = "共" + filenum + "個檔案";
		var text_02 = "檔案容量：" + file_box_show_filesize_text_MB(total) + " / " +  file_box_show_filesize_text_MB(max_bytesize);
		$(this).find(".file_box_info .filesize").html(text_01 + " ， " + text_02);
		
		//更新進度棒
		var progress_width = total * (100 / max_bytesize);
		$(this).find(".file_box_info .progress span").css("width",progress_width + "%");
		if(progress_width >= "80"){
			$(this).find(".file_box_info .progress span").addClass("progress_over");
		}else{
			$(this).find(".file_box_info .progress span").removeClass("progress_over");
		}
	});
}
function file_box_list_del(arg){
	//如果是新檔案就移除上傳input對象
	var temp_UFID = $(arg).closest(".item").find(".file_id").attr("temp_UFID");
	if(temp_UFID){
		$("[UFID='" + temp_UFID + "']").remove();
	}
	//
	$(arg).closest(".item").remove();
	//重新計算並顯示檔案容量
	file_box_info();	
}
function file_box_upload_open_browser(arg){
	$(arg).closest(".file_box_upload").find("input[type='file']").click();
}
function file_box_upload_close(arg){
	//切換至上傳或拖曳檔案區塊
	$(arg).closest(".file_box_upload").find(".mod_select").show();
	$(arg).closest(".file_box_upload").find(".mod_review").hide();
	//
	$(arg).closest(".file_box_upload").find(".message").empty().hide();
}
function file_box_header_change(e){	
	//跨瀏覽器:::好像不需要e.dataTransfer.files
	//var files = e.target.files || e.dataTransfer.files;
	var files = e.target.files;

	//檢查檔案格式
	var isFormatError = false;
	var format = $(e.target).closest(".file_box").find(".mod_select_file").attr("accept");
	format = format.split(",");
	for (var i = 0, f; f = files[i]; i++) {
		var ext = f.name.split('.').pop().toLowerCase();
		ext = "." + ext;
		if($.inArray(ext, format) != -1) {
			//
		}else{
			isFormatError = true;
			break;
		}
	}
	if(isFormatError){
		//切換至檔案清單區塊
		$(e.target).closest(".file_box").find(".mod_select").hide();
		$(e.target).closest(".file_box").find(".mod_review").show();
		//
		$(e.target).closest(".file_box").find(".message").show().html("您上傳的檔案格式錯誤，請重新上傳。");
		$(e.target).closest(".file_box").find(".mod_select_file:last-child").val("");
		return;
	}

	//檢查是否超過限制大小
	/*取得所有舊檔案大小*/
	var old_total = 0;
	$(e.target).closest(".file_box").find(".file_box_list .bytesize").each(function(index, element){
		old_total += Number($(this).attr("data-bytesize"));
	});
	/*取得所有新檔案大小*/
	var new_total = 0;
	for (var i = 0, f; f = files[i]; i++) {
		new_total += f.size;
	}
	var max_bytesize = $(e.target).closest(".file_box").find(".file_box_max_bytesize").val();
	if((old_total + new_total) > max_bytesize){
		//切換至檔案清單區塊
		$(e.target).closest(".file_box").find(".mod_select").hide();
		$(e.target).closest(".file_box").find(".mod_review").show();
		//
		if(old_total > 0){
			$(e.target).closest(".file_box").find(".message").show().html("您的檔案容量合計超過" + file_box_show_filesize_text(max_bytesize) + "，請刪除某筆檔案或者重新上傳檔案。");
		}else{
			$(e.target).closest(".file_box").find(".message").show().html("您的檔案容量合計超過" + file_box_show_filesize_text(max_bytesize) + "，請重新上傳檔案。");
		}
		$(e.target).closest(".file_box").find(".mod_select_file:last-child").val("");
		return;
	}
	
	//檢查上傳數量
	var this_num = files.length;
	var current_num = $(e.target).closest(".file_box").find(".file_text").length;
	var max_file_length = $(e.target).closest(".file_box").find(".max_file_length").text();

	if(max_file_length < (this_num + current_num)){
		//切換至檔案清單區塊
		$(e.target).closest(".file_box").find(".mod_select").hide();
		$(e.target).closest(".file_box").find(".mod_review").show();
		//
		$(e.target).closest(".file_box").find(".message").show().html("一次最多上傳" + max_file_length + "個檔案。");
		$(e.target).closest(".file_box").find(".mod_select_file:last-child").val("");
		return;
	}
	
	//檔案清單建立項目
	var html_01 = "";
	var html_02;
	var html_03;
	for (var i = 0, f; f = files[i]; i++) {
		html_01 += '<div><span class="file_text">' + f.name + '</span><span class="bytesize" data-bytesize="' + f.size + '">' + file_box_show_filesize_text(f.size) + '</span></div>';
	}
	html_02 = '<div class="item"><div class="l">' + html_01 + '</div><div class="r"><a class="link_del" href="javascript:void(0);" onClick="file_box_list_del(this);">&nbsp;</a></div>';
	html_03 = '<div class="file_id" temp_UFID="' + $(this).attr("UFID") + '"></div>';
	$(e.target).closest(".file_box").find(".file_box_list").append(html_02 + html_03);

	//上傳input對象做hide
	$(this).hide();
	
	//新增上傳input對象及其change事件
	uploadFileID++;
	var this_name = $(e.target).closest(".file_box").find(".mod_select_file").attr("name");
	var this_accept = $(e.target).closest(".file_box").find(".mod_select_file").attr("accept");
	$(e.target).closest(".file_box").find(".mod_select").append('<input type="file" UFID="' + uploadFileID + '" class="mod_select_file" name="' + this_name + '" accept="' + this_accept + '" multiple>');
	$("[UFID='" + uploadFileID + "']").on("change",file_box_header_change);

	//重新計算並顯示檔案容量
	file_box_info();
}

//設定上傳檔案事件
var mod_select_file = document.getElementsByClassName('mod_select_file');
for(var i = 0 ; i < mod_select_file.length ; i++ ){
	mod_select_file[i].addEventListener('change', file_box_header_change, false);
}

//不讓被拖曳的檔案直接打開瀏覽器
$(window).on("dragover",function(e){
	e = e || event;
	e.preventDefault();
});
$(window).on("drop",function(e){
	e = e || event;
	if(e.target.tagName != "INPUT"){
		e.preventDefault();
	}
});
/* 拖曳上傳檔案區塊 -- 結束 */


//切換Menu按鈕
function menu_switch(){
	if($(".wrapper").hasClass("open")){
		$(".wrapper").removeClass("open");
	}else{
		$(".wrapper").addClass("open");
	}
}
//
function list_group_add(arg){
	var new_html = $(arg).closest(".list_group").find(".li_copy").html();
	$(arg).closest(".list_group").find(".li_copy").before("<li>" + new_html + "</li>");
	 list_group_num();
	//為新角色添加事件
	art_upload_raw_init();
	
}
function list_group_del(arg){
	$(arg).closest("li").remove();
	 list_group_num();
}
function list_group_num(){
	$(".list_group").each(function(i, e){
		var max_num = $(this).attr("max-num");
		if(max_num){
			if(max_num > ($(this).find("li").length - 2)){//其2為<li_copy>和最下面的<li>。
				$(this).find(".list_group_add").removeClass("disabled");
			}else{
				$(this).find(".list_group_add").addClass("disabled");
			}
		}
	});
}


//二層下拉式選單
function art_two_select(arg_1, arg_2){
	var current_gorup = $(arg_1).find("option:selected").attr('data-gorup');
	$(arg_2).find("option[data-parent]").hide();
	$(arg_2).find("option[data-parent='" + current_gorup + "']").show();	
	//
	$(arg_1).on("change",function(){
		var gorup = $(this).find("option:selected").attr('data-gorup');
		$(arg_2).find("option[data-parent]").hide();
		$(arg_2).find("option[data-parent='" + gorup + "']").show();
		//
		$(arg_2).val("empty");
	});
}

/* list_select設計 開始 */
function list_select_init(arg1, arg2, arg3){
	//產生UI HTML
	var html_search = '<div class="list_select_search"><input type="text" placeholder="搜尋..."></div>';
	var html_list_btn = '<div class="list_select_C"><button type="button" class="list_select_add disabled">&nbsp;</button><button type="button" class="list_select_del disabled">&nbsp;</button></div>';

	var html_list_L_title = '<div class="title">' + arg2 + '</div>';
	var html_list_R_title = '<div class="title">' + arg3 + '</div>';
	
	var html_list_L_p = '';
	var html_list_R_p = '';
	$(arg1).find("option:not(:selected)").each(function(){
		html_list_L_p += '<p onClick="list_select_p(this)" data-value="' + $(this).val() + '">' + $(this).text() + '</p>\r\n';
	});
	$(arg1).find("option:selected").each(function(){
		html_list_R_p += '<p onClick="list_select_p(this)" data-value="' + $(this).val() + '">' + $(this).text() + '</p>\r\n';
	});
		
	var html_01 = '<div class="list_select_L">' + html_list_L_title + html_search + '<div class="list_select_list">' + html_list_L_p + '</div></div>';
	var html_02 = '<div class="list_select_C">' + html_list_btn + '</div>';
	var html_03 = '<div class="list_select_R">' + html_list_R_title + html_search + '<div class="list_select_list">' + html_list_R_p + '</div></div>';
	$(arg1).after(html_01 + html_02 + html_03);


	//左邊搜尋
	$(arg1).closest(".list_select").find(".list_select_L input").each(function(i, e) {
		$(this).on("keyup", function(e){
			$(this).closest(".list_select_L").find(".list_select_list p").show();
			if($(this).val()){
				$(this).closest(".list_select_L").find(".list_select_list p").hide();
				$(this).closest(".list_select_L").find(".list_select_list p:contains('" + $(this).val() + "')").show();
			}
		});
	});
	//右邊搜尋
	$(arg1).closest(".list_select").find(".list_select_R input").each(function(i, e) {
		$(this).on("keyup", function(){
			$(this).closest(".list_select_R").find(".list_select_list p").show();
			if($(this).val()){
				$(this).closest(".list_select_R").find(".list_select_list p").hide();
				$(this).closest(".list_select_R").find(".list_select_list p:contains('" + $(this).val() + "')").show();
			}
		});
	});
	//add按鈕
	$(arg1).closest(".list_select").find(".list_select_add").on("click", function(){
		//清除對方被選取的狀態
		$(arg1).closest(".list_select").find(".list_select_R .list_select_list p").removeClass("selected");
		//移動
		$(arg1).closest(".list_select").find(".list_select_L p.selected").each(function(i, e) {
			var new_html = '<p onClick="list_select_p(this)" data-value="' + $(this).attr("data-value") + '">' + $(this).html() + '</p>';
			$(arg1).closest(".list_select").find(".list_select_R .list_select_list").append(new_html);
			$(this).remove();
		});
		//
		list_select_update_btn(arg1);
		//
		update_form_select();
	});
	//del按鈕
	$(arg1).closest(".list_select").find(".list_select_del").on("click", function(){
		//清除對方被選取的狀態
		$(arg1).closest(".list_select").find(".list_select_L .list_select_list p").removeClass("selected");
		//移動
		$(arg1).closest(".list_select").find(".list_select_R p.selected").each(function(i, e) {
			var new_html = '<p onClick="list_select_p(this)" data-value="' + $(this).attr("data-value") + '">' + $(this).html() + '</p>';
			$(arg1).closest(".list_select").find(".list_select_L .list_select_list").append(new_html);
			$(this).remove();
		});
		//
		list_select_update_btn(arg1);
		//
		update_form_select();
	});
	
	//更新表單選單之值
	function update_form_select(){
		var arr = new Array();
		$(arg1).closest(".list_select").find(".list_select_R p").each(function(i, e) {
			arr.push($(this).attr("data-value"));
		});
		$(arg1).val(arr);
	}
}
//點擊某一筆
function list_select_p(arg){
	$(arg).toggleClass("selected");
	list_select_update_btn($(arg).closest(".list_select").find("select"));
}
//更新add / del按鈕的disabled
function list_select_update_btn(arg){
	var L_num = $(arg).closest(".list_select").find(".list_select_L p").length;
	var R_num = $(arg).closest(".list_select").find(".list_select_R p").length;
	var L_selected_num = $(arg).closest(".list_select").find(".list_select_L p.selected").length;
	var R_selected_num = $(arg).closest(".list_select").find(".list_select_R p.selected").length;
	var min_num = $(arg).closest(".list_select").attr("min-num");
	var max_num = $(arg).closest(".list_select").attr("max-num");
	
	if(L_selected_num){
		if(min_num && max_num){
			if((L_selected_num + R_num) > max_num){
				$(arg).closest(".list_select").find(".list_select_add").addClass("disabled");
			}else{
				$(arg).closest(".list_select").find(".list_select_add").removeClass("disabled");
			}
		}else{
			$(arg).closest(".list_select").find(".list_select_add").removeClass("disabled");
		}
	}else{
		$(arg).closest(".list_select").find(".list_select_add").addClass("disabled");
	}
	
	if(R_selected_num){
		if(min_num && max_num){
			if((R_num - R_selected_num) < min_num){
				$(arg).closest(".list_select").find(".list_select_del").addClass("disabled");
			}else{
				$(arg).closest(".list_select").find(".list_select_del").removeClass("disabled");
			}
		}else{
			$(arg).closest(".list_select").find(".list_select_del").removeClass("disabled");
		}
	}else{
		$(arg).closest(".list_select").find(".list_select_del").addClass("disabled");
	}
}
/* list_select設計 結束 */


/* 選擇項目設計 開始 */
var art_items_current_target;
function art_items_init(){
	//項目建立del按鈕
	$(".art_items .item").each(function(i, e){
		$(this).append('<button type="button" onClick="art_items_del(this)"></button>');
	});
	
	//搜尋輸入框事件
	$(".art_items_modal .main .top_box .art_text input").on("keyup", function(){
		//不分大小寫
		var reg = new RegExp($(this).val(), "i");
		if($(this).val()){
			$(this).closest(".art_items_modal").find(".data_box button").hide();
			//第一次跑一圈
			$(this).closest(".art_items_modal").find(".data_box button").each(function(i, e){
				if(reg.test($(this).text())){
					$(this).show();
				}
			});
			
			//關鍵字「台」取代為「臺」
			var keyword = $(this).val();
			if(keyword.search(/台/) != -1){
				keyword = keyword.replace('台', '臺');
			}
			var reg = new RegExp(keyword, "i");
			//再次跑一圈
			$(this).closest(".art_items_modal").find(".data_box button").each(function(i, e){
				if(reg.test($(this).text())){
					$(this).show();
				}
			});
			//關鍵字「臺」取代為「台」
			var keyword = $(this).val();
			if(keyword.search(/臺/) != -1){
				keyword = keyword.replace('臺', '台');
			}
			var reg = new RegExp(keyword, "i");
			//再次跑一圈
			$(this).closest(".art_items_modal").find(".data_box button").each(function(i, e){
				if(reg.test($(this).text())){
					$(this).show();
				}
			});
		}else{
			$(this).closest(".art_items_modal").find(".data_box button").show();
		}
	});
	//背景關閉事件
	$(".art_items_modal .overlay").on("click", function(){
		art_items_close(this);
	});
	//列表按鈕事件
	$(".art_items_modal .main .data_box button").on("click", function(){
		art_items_select(this);
	});
}
//項目的del按鈕
function art_items_del(arg){
	$(arg).closest(".item").remove();
}
//打開列表
function art_items_open(arg){
	art_items_current_target = $(arg).closest(".art_items");
	var ds = art_items_current_target.attr("data-source");
	var arr_selected = new Array();
	//
	$(art_items_current_target).find(".item input[type='hidden']").each(function(i, e){
		arr_selected.push($(this).val());
	});
	//
	$("." + ds).show();
	//清空輸入框
	$("." + ds).find(".top_box .art_text input").val("");
	//
	$("." + ds).find(".data_box button").show();
	//
	$("." + ds).find(".data_box button").each(function(i, e){
		if($.inArray($(this).attr("data-value"),arr_selected) == -1){
			$(this).removeClass("disabled");
		}else{
			$(this).addClass("disabled");
		}
	});
	//
	art_items_resize();
}
//關門列表
function art_items_close(arg){
	$(arg).closest(".art_items_modal").hide();
}
//列表的選擇按鈕
function art_items_select(arg){
	if($(art_items_current_target).hasClass("multiple")){
		//
	}else{
		$(art_items_current_target).find(".item").remove();
	}
	$(art_items_current_target).find(".art_items_open").before('<div class="item"><input type="hidden" value="' + $(arg).attr("data-value") + '" /><span>' + $(arg).text() + '</span><button type="button" onClick="art_items_del(this)"></button></div>');
	
	art_items_close(arg);
}
//
function art_items_resize(){
	document.documentElement.style.setProperty('--art_items_modal_top_box_height', ($(".art_items_modal .top_box").height() + 40) + "px");
}
/* 選擇項目設計 結束 */


/* 上傳檔案功能的刪除舊檔案 開始 */
async function oldfile_del(arg1, arg2, arg3){
	if(!await art_confirm(arg2, arg3)){
		return false;
	}
	var t = $(arg1).closest(".oldfile_box").find(".file_is_del");
	if(t.val() == 0){
		t.val(1);
		$(arg1).closest(".oldfile_box").addClass("none");
	}else{
		t.val(0);
		$(arg1).closest(".oldfile_box").removeClass("none");
	}
}
/* 上傳檔案功能的刪除舊檔案 結束 */


/* 自訂對話框 開始 */
function art_confirm(title, message){
	//
	var new_html = '<div class="art_confirm"><div class="overlay" onclick="$(\'.art_confirm\').remove();"></div><div class="main"><div class="top">' + title + '</div><div class="msg"></div><div class="bottom"><input type="button" class="btn_no btn btn-outline-third me-3 " value="取消" /><input type="button" class="btn_yes btn btn-third" value="確認" /></div></div></div>';
	$("body").append(new_html);
	//
	return new Promise(function(complete, failed){
		$('.art_confirm .main .msg').html(message);
		//
		$('.art_confirm .main .btn_yes').off('click');
		$('.art_confirm .main .btn_no').off('click');
		//
		$('.art_confirm .main .btn_yes').on('click', function(){
			$('.art_confirm').remove();
			complete(true);
		});
		$('.art_confirm .main .btn_no').on('click', function(){
			$('.art_confirm').remove();
			complete(false);
		});
	});
}
/* 自訂對話框 結束 */


//
Array.prototype.max = function() {
  return Math.max.apply(null, this);
};
Array.prototype.min = function() {
  return Math.min.apply(null, this);
};
//
$(document).ready(function(){
	file_box_init();
	list_group_num();
	art_items_init();
	art_notistack_init();
});
//
$(window).resize(function(){
	art_items_resize();
});

// go to  top
// Smooth scroll for in page links - http://wibblystuff.blogspot.in/2014/04/in-page-smooth-scroll-using-css3.html
// Improvements from - https://codepen.io/kayhadrin/pen/KbalA

$(function() {
	var $window = $(window), $document = $(document),
		transitionSupported = typeof document.body.style.transitionProperty === "string", // detect CSS transition support
		scrollTime = 1; // scroll time in seconds

	$(document).on("click", "a[href*=#]:not([href=#])", function(e) {
		var target, avail, scroll, deltaScroll;
    
		if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
			target = $(this.hash);
			target = target.length ? target : $("[id=" + this.hash.slice(1) + "]");

			if (target.length) {
				avail = $document.height() - $window.height();

				if (avail > 0) {
					scroll = target.offset().top;
          
					if (scroll > avail) {
						scroll = avail;
					}
				} else {
					scroll = 0;
				}

				deltaScroll = $window.scrollTop() - scroll;

				// if we don't have to scroll because we're already at the right scrolling level,
				if (!deltaScroll) {
					return; // do nothing
				}

				e.preventDefault();
				
				if (transitionSupported) {
					$("html").css({
						"margin-top": deltaScroll + "px",
						"transition": scrollTime + "s ease-in-out"
					}).data("transitioning", scroll);
				} else {
					$("html, body").stop(true, true) // stop potential other jQuery animation (assuming we're the only one doing it)
					.animate({
						scrollTop: scroll + "px"
					}, scrollTime * 1000);
					
					return;
				}
			}
		}
	});

	if (transitionSupported) {
		$("html").on("transitionend webkitTransitionEnd msTransitionEnd oTransitionEnd", function(e) {
			var $this = $(this),
				scroll = $this.data("transitioning");
			
			if (e.target === e.currentTarget && scroll) {
				$this.removeAttr("style").removeData("transitioning");
				
				$("html, body").scrollTop(scroll);
			}
		});
	}
});